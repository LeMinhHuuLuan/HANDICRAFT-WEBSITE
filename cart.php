<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="fonts_icon/fontawesome-free-6.7.1-web/fontawesome-free-6.7.1-web/css/all.css">
    <title>Giỏ Hàng</title>
</head>
<body>
<div class="cart-container">
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Giỏ Hàng</b></h4></div>
                        <div class="col align-self-center text-right text-muted">3 sản phẩm</div>
                    </div>
                </div>    
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="./img/mugs/Americano_Mug.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Cốc</div>
                            <div class="row">Đéo biết tên</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">€ 44.00 <span class="close">✕</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="./img/decor/w-hp-decor-8-1.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Trang Trí</div>
                            <div class="row">Đéo biết tên</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">€ 44.00 <span class="close">✕</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="./img/plates/w-hp-mug-10-2.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Dĩa</div>
                            <div class="row">Dĩa đéo gì cũng không biết tên</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">€ 44.00 <span class="close">✕</span></div>
                    </div>
                </div>
                <div class="back-to-shop"><a href="shop.php">←<span class="text-muted">Tiếp tục mua sắm</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Tóm Tắt Đơn Hàng</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">SỐ LƯỢNG: 3</div>
                    <div class="col text-right">€ 132.00</div>
                </div>
                <form  method="POST">
                    <p>PHÍ VẬN CHUYỂN</p>
                    <select name="shipping">
                        <option value="5.00">Giao hàng tiêu chuẩn - €5.00</option>
                        <option value="8.00">Giao hàng nhanh - €8.00</option>
                        <option value="14.99">Hỏa tốc - €14.99</option>
                        <option value="0.00">Giao hàng miễn phí - €0.00 (1 tháng sau có hàng)</option>
                    </select>
                    <p>CODE</p>
                    <input id="code" name="code" placeholder="Nhập mã giảm giá">
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TỔNG CỘNG</div>
                        <div class="col text-right">€ 137.00</div>
                    </div>
                    <button type="submit" class="btn">CHECKOUT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>