<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("header.php"); 
require_once("./auth/backend/auth.php");
require_once("./repository/CartRepository.php");
require_once("./repository/OrderRepository.php");

$CartRepository = new CartRepository();
$OrderRepository = new OrderRepository();
$user_id = isset($_COOKIE['user_id']) ? $_COOKIE['user_id'] : null;

if (!$user_id) {
    header("Location: login.php?error=Vui lòng đăng nhập để thanh toán");
    exit;
}

// Lấy danh sách sản phẩm trong giỏ hàng
$CartItem = $CartRepository->findByUserId($user_id);

// Khởi tạo phí vận chuyển
$shipping_fee = isset($_POST['shipping']) ? (int)$_POST['shipping'] : 25000;

// Lấy thông tin người dùng
$infoUser = Auth::loginWithCookie();

// Hiển thị lỗi nếu có
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';

// Xử lý khi nhấn xác nhận đơn hàng
if (isset($_POST['confirm_checkout'])) {
    global $conn;
    if (!$conn) {
        die("Lỗi kết nối cơ sở dữ liệu: " . mysqli_connect_error());
    }

    // Kiểm tra giỏ hàng
    if (mysqli_num_rows($CartItem) == 0) {
        echo "<script>alert('Giỏ hàng của bạn đang trống. Vui lòng thêm sản phẩm trước khi thanh toán');
            window.location.href = 'cart.php';
        </script>";
        exit;
    }

    // Lấy thông tin giao hàng
    $full_name = mysqli_real_escape_string($conn, $infoUser['full_name']);
    $email = mysqli_real_escape_string($conn, $infoUser['email']);
    $phone_number = mysqli_real_escape_string($conn, $infoUser['phone_number']);
    $address = mysqli_real_escape_string($conn, $infoUser['address']);

    // Bắt đầu giao dịch
    mysqli_begin_transaction($conn);

    try {
        // Tạo đơn hàng mới
        $order_id = $OrderRepository->createOrder($user_id, $full_name, $email, $phone_number, $address);
        if (!$order_id) {
            throw new Exception("Không thể tạo đơn hàng. Vui lòng thử lại.");
        }

        // Thêm chi tiết đơn hàng
        $CartItem = $CartRepository->findByUserId($user_id);
        while ($item = mysqli_fetch_assoc($CartItem)) {
            $product_id = $item['product_id'];
            $quantity = $item['quantity'];
            $total_money = $item['price'] * $item['quantity'];

            $result = $OrderRepository->addOrderDetail($order_id, $product_id, $quantity, $total_money);
            if (!$result) {
                throw new Exception("Không thể thêm chi tiết đơn hàng. Vui lòng thử lại.");
            }
        }

        // Xóa giỏ hàng
        $result = $OrderRepository->clearCart($user_id);
        if (!$result) {
            throw new Exception("Không thể xóa giỏ hàng. Vui lòng thử lại.");
        }

        // Commit giao dịch
        mysqli_commit($conn);

        // Chuyển hướng
        header("Location: order_confirmation.php?order_id=$order_id");
        exit;
    } catch (Exception $e) {
        mysqli_rollback($conn);
        error_log("Lỗi checkout: " . $e->getMessage());
        header("Location: checkout.php?error=" . urlencode($e->getMessage()));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="fonts_icon/fontawesome-free-6.7.1-web/fontawesome-free-6.7.1-web/css/all.css">
    <title>Thanh Toán</title>
</head>
<body>
<div class="cart-container">
    <?php if ($error): ?>
        <p style="color: red; text-align: center;"><?php echo $error; ?></p>
    <?php endif; ?>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Thanh Toán</b></h4></div>
                    </div>
                </div>
                <div class="row main">
                    <h5>Thông Tin Giao Hàng</h5>
                    <form method="POST" id="checkoutForm">
                        <div class="row">
                            <div class="col">
                                <input style="font-size: medium;" type="text" name="full_name" readonly value="<?php echo htmlspecialchars($infoUser['full_name']); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input style="font-size: medium;" type="email" name="email" readonly value="<?php echo htmlspecialchars($infoUser['email']); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input style="font-size: medium;" type="tel" name="phone" readonly value="<?php echo htmlspecialchars($infoUser['phone_number']); ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input style="font-size: medium;" type="text" name="address" readonly value="<?php echo htmlspecialchars($infoUser['address']); ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row border-top">
                    <h5>Sản Phẩm</h5>
                    <?php 
                        $total = 0;
                        if (mysqli_num_rows($CartItem) > 0) {
                            while ($item = mysqli_fetch_assoc($CartItem)) {
                                $subtotal = $item['price'] * $item['quantity'];
                                $total += $subtotal;    
                    ?>
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?php echo htmlspecialchars($item['product_image']); ?>"></div>
                            <div class="col">
                                <div class="row text-muted"><?php echo htmlspecialchars($item['category_name']); ?></div>
                                <div class="row"><?php echo htmlspecialchars($item['name']); ?></div>
                            </div>
                            <div class="col"><?php echo $item['quantity']; ?></div>
                            <div class="col"><?php echo number_format($subtotal); ?> VNĐ</div>
                        </div>
                    <?php
                        }
                    } else {
                        echo '<p>Giỏ hàng của bạn đang trống.</p>';
                    }
                    ?>
                </div>
                <div class="back-to-shop"><a href="cart.php">←<span class="text-muted">Quay lại giỏ hàng</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Tóm Tắt Đơn Hàng</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">SỐ LƯỢNG: <?php echo mysqli_num_rows($CartItem); ?></div>
                    <div class="col text-right"><?php echo number_format($total); ?> VNĐ</div>
                </div>
                <form method="POST" action="checkout.php" id="summaryForm">
                    <p>PHÍ VẬN CHUYỂN</p>
                    <select name="shipping">
                        <option value="25000" <?php echo $shipping_fee == 25000 ? 'selected' : ''; ?>>Giao hàng tiêu chuẩn - 25.000 VNĐ</option>
                        <option value="35000" <?php echo $shipping_fee == 35000 ? 'selected' : ''; ?>>Giao hàng nhanh - 35.000 VNĐ</option>
                        <option value="65000" <?php echo $shipping_fee == 65000 ? 'selected' : ''; ?>>Giao hàng hỏa tốc - 65.000 VNĐ (Nội thành)</option>
                        <option value="0" <?php echo $shipping_fee == 0 ? 'selected' : ''; ?>>Miễn phí vận chuyển</option>
                    </select>
                    <p>MÃ GIẢM GIÁ</p>
                    <input id="code" name="code" placeholder="Nhập mã giảm giá">
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TỔNG CỘNG</div>
                        <div class="col text-right"><?php echo number_format($total + $shipping_fee); ?> VNĐ</div>
                    </div>
                    <button type="submit" name="confirm_checkout" class="btn" style="font-size: medium;">Xác nhận đơn hàng</button>
                </form>
                <div class="policy-links">
                    <p><a href="shipping-return.php" target="_blank">Chính sách giao hàng - hoàn trả</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php include("footer.php"); ?>