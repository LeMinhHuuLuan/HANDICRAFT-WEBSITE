<?php
require_once(__DIR__ . "../../database/connect.php");

class OrderRepository {
    public function createOrder($user_id, $full_name, $email, $phone_number, $address) {
        global $conn;
        $sql = "INSERT INTO Order_Management (user_id, full_name, email, phone_number, address, ordered_date, status) 
                VALUES (?, ?, ?, ?, ?, NOW(), 'Pending')";
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            error_log("Lỗi chuẩn bị truy vấn createOrder: " . mysqli_error($conn));
            return false;
        }
        mysqli_stmt_bind_param($stmt, "issss", $user_id, $full_name, $email, $phone_number, $address);
        $result = mysqli_stmt_execute($stmt);
        if (!$result) {
            error_log("Lỗi thực thi createOrder: " . mysqli_error($conn));
            mysqli_stmt_close($stmt);
            return false;
        }
        $order_id = mysqli_insert_id($conn);
        mysqli_stmt_close($stmt);
        return $order_id;
    }

    public function addOrderDetail($order_id, $product_id, $quantity, $total_money) {
        global $conn;
        $sql = "INSERT INTO Detail_Order (order_id, product_id, quantity, total_money) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            error_log("Lỗi chuẩn bị truy vấn addOrderDetail: " . mysqli_error($conn));
            return false;
        }
        mysqli_stmt_bind_param($stmt, "iiid", $order_id, $product_id, $quantity, $total_money);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }

    public function clearCart($user_id) {
        global $conn;
        $sql = "DELETE FROM Cart WHERE user_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if (!$stmt) {
            error_log("Lỗi chuẩn bị truy vấn clearCart: " . mysqli_error($conn));
            return false;
        }
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
}
?>