<?php
    require_once(__DIR__."/../../../database/connect.php");
    class ProductController {
        // Thêm sản phẩm mới
        public function insert($category_id, $name, $price, $sale_price, $product_image, $description) {
            global $conn;

            if (empty($category_id) || empty($name) || empty($price) || empty($product_image)) {
                return false; // Thiếu thông tin bắt buộc
            }

            $created_at = date('Y-m-d H:i:s');
            $updated_at = date('Y-m-d H:i:s');
            
            // Escape các tham số để tránh SQL injection
            $name = mysqli_real_escape_string($conn, $name);
            $description = mysqli_real_escape_string($conn, $description);
            $product_image = mysqli_real_escape_string($conn, $product_image);
            
            $sql = "INSERT INTO Product(category_id, name, price, sale_price, product_image, description, created_at, updated_at) 
                    VALUES($category_id, '$name', $price, $sale_price, '$product_image', '$description', '$created_at', '$updated_at')"; 
            
            if (!mysqli_query($conn, $sql)) {
                error_log("SQL Error: " . mysqli_error($conn));
                return false;
            }

            return mysqli_insert_id($conn);
        }
    
        // Lấy tất cả sản phẩm
        public function getAll($limit = null) {
            global $conn;
            $sql = "SELECT p.*, c.name as category_name 
                    FROM Product p 
                    JOIN Category c ON c.id = p.category_id 
                    ORDER BY p.created_at DESC"; 
            
            if($limit != null) {
                $sql .= " LIMIT 0," . $limit;
            }
            return mysqli_query($conn, $sql);     
        }
    
        // Lấy sản phẩm theo ID
        public function getById($id) {
            global $conn;
        
            $id = (int)$id; // Đảm bảo id là số nguyên
            $sql = "SELECT p.*, c.name as category_name 
                    FROM Product p 
                    JOIN Category c ON c.id = p.category_id 
                    WHERE p.id = $id"; 
        
            // Xóa dòng debug
            // echo "SQL Query: " . $sql;
        
            $result = mysqli_query($conn, $sql);
            
            // Kiểm tra lỗi truy vấn
            if (!$result) {
                error_log("SQL Error: " . mysqli_error($conn));
                return false;
            }
        
            return $result;  // Trả về kết quả, kể cả khi không có dòng nào
        }
    
        // Xóa sản phẩm
        public function deleteById($id) {
            global $conn;

            // Lấy thông tin sản phẩm để xóa file ảnh
            $result = $this->getById($id);
            if ($result && mysqli_num_rows($result) > 0) {
                $product = mysqli_fetch_assoc($result);
                $image_path = __DIR__ . "/../../../" . $product['product_image'];
                
                // Kiểm tra và xóa file ảnh nếu tồn tại
                if (file_exists($image_path)) {
                    @unlink($image_path); // Thêm @ để tránh lỗi nếu không thể xóa file
                }
            }

            // Xóa sản phẩm khỏi database
            $id = (int)$id; // Đảm bảo id là số nguyên
            $sql = "DELETE FROM Product WHERE id = $id";
            return mysqli_query($conn, $sql);
        }
    
        // Cập nhật sản phẩm
        public function update($id, $category_id, $name, $price, $sale_price, $product_image, $description) {
            global $conn;
            $updated_at = date('Y-m-d H:i:s');
            
            // Escape các tham số
            $name = mysqli_real_escape_string($conn, $name);
            $description = mysqli_real_escape_string($conn, $description);
            
            $image_update = "";
            if($product_image != "") {
                $product_image = mysqli_real_escape_string($conn, $product_image);
                $image_update = ", product_image = '$product_image'";
            }
    
            $sql = "UPDATE Product 
                    SET category_id = $category_id,
                        name = '$name',
                        price = $price,
                        sale_price = $sale_price,
                        description = '$description',
                        updated_at = '$updated_at'
                        $image_update
                    WHERE id = $id"; 
            return mysqli_query($conn, $sql); // Trả về kết quả query
        }
    
        // Đếm số sản phẩm theo danh mục
        public function countProductByCategory($category_id = null) {
            global $conn;
            $sql = "SELECT COUNT(*) as total FROM Product";
            if($category_id != null) {
                $sql .= " WHERE category_id = $category_id"; 
            }
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row['total'];
        }
    
        // Lấy sản phẩm theo danh mục
        public function getByCategory($category_id, $limit = null) {
            global $conn;
            $sql = "SELECT p.*, c.name as category_name 
                    FROM Product p 
                    JOIN Category c ON c.id = p.category_id 
                    WHERE p.category_id = $category_id 
                    ORDER BY p.created_at DESC";
            
            if($limit != null) {
                $sql .= " LIMIT 0," . $limit;
            }
            return mysqli_query($conn, $sql);
        }
    
        // Upload ảnh sản phẩm
        public function uploadImage($file) {
            $target_dir = __DIR__ . "/../../../uploads/products/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
    
            $file_extension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
            $file_name = time() . '_' . uniqid() . '.' . $file_extension;
            $target_file = $target_dir . $file_name;
            
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                return "uploads/products/" . $file_name;
            }
            return false;
        }
    }
?>