<?php
     require_once(__DIR__."../../database/connect.php");
     class CartRepository{
          //Thêm sản phẩm vào giỏ hàng
          public function insert($user_id, $product_id, $quantity, $price){
               global $conn;
               $sql = "INSERT INTO cart (user_id, product_id, quantity, price) VALUES ($user_id, $product_id, $quantity, $price)";
               return mysqli_query($conn, $sql);
          }

          //Tìm sản phẩm trong giỏ hàng theo user_id và product_id
          public function findByUserIdAndProductId($user_id, $product_id){
               global $conn;
               $sql = "SELECT * FROM cart WHERE user_id = $user_id AND product_id = $product_id";
               return mysqli_query($conn, $sql);
          }

          // Lấy tất cả sản phẩm trong giỏ hàng của người dùng
          public function findByUserId($user_id) {
               global $conn;
               $sql = "SELECT c.*, p.name, p.product_image, p.category_id, cat.name AS category_name 
                    FROM cart c 
                    JOIN Product p ON c.product_id = p.id 
                    JOIN Category cat ON p.category_id = cat.id 
                    WHERE c.user_id = $user_id";
               return mysqli_query($conn, $sql);
          }

          // Cập nhật số lượng sản phẩm
          public function updateQuantity($user_id, $product_id, $quantity) {
               global $conn;
               $sql = "UPDATE cart SET quantity = $quantity WHERE user_id = $user_id AND product_id = $product_id";
               return mysqli_query($conn, $sql);
          }

          // Xóa sản phẩm khỏi giỏ hàng
          public function delete($user_id, $product_id) {
               global $conn;
               $sql = "DELETE FROM cart WHERE user_id = $user_id AND product_id = $product_id";
               return mysqli_query($conn, $sql);
          }
     }
?>