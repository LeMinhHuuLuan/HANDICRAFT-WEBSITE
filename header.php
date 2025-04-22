<?php
    require_once(__DIR__."/auth/backend/auth.php");
    require_once("./database/connect.php");

    //Lấy số lượng sản phẩm trong giỏ hàng để hiện thi ra icon giỏ hàng
    if (isset($_COOKIE['user_id'])) {
        global $conn;
        $user_id = $_COOKIE['user_id'];
        // Truy vấn tổng số lượng sản phẩm trong giỏ hàng
        $sql = "SELECT SUM(quantity) AS total_items FROM cart WHERE user_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    
        $total_items = $row['total_items'] ?? 0;
    } else {
        $total_items = 0; // Nếu chưa đăng nhập
    }
?>

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/header.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <link rel="stylesheet" href="css/banner_slide.css"/>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/shop.css">
        <link rel="stylesheet" href="./css/shipping&return.css">
        <link rel="stylesheet" href="./css/cart.css">
        <link rel="stylesheet" href="fonts_icon/fontawesome-free-6.7.1-web/fontawesome-free-6.7.1-web/css/all.css  ">

</head>

<body>
    <header class="header">
        <div class="menu">
            <div class="menu-left">
                <div class="left-text">
                    <a href="index.php">Trang chủ</a>
                    <a href="shop.php">Cửa Hàng</a>
                    <a href="aboutus.php">Giới thiệu</a>
                </div>
            </div>
            <div class="logo">
                <a href="index.php"><img src="./img/w-hmp-logo-full-dark.svg" alt="Logo"/></a>
            </div>
            <div class="menu-right">
                <div class="right-text">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i> Tìm Kiếm</a>
                    <a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i> Giỏ Hàng <span class="total_cart_num"><?= $total_items ?></span></a>
                    <?php require_once("auth/backend/filterWithCookie.php"); ?>
                </div>
            </div>
        </div>
    </header>
        
    
    <script src="./js/shop.js"></script>
    <script src="./js/menu.js"></script>
    <script src="./js/JQuery.js"></script>
    <script src="./js/JsDelivr.js"></script>

</body>