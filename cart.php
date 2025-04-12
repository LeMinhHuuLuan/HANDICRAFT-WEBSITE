<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <!-- Chỉ load Bootstrap một lần để tránh trùng lặp -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Shopping Cart</title>
</head>
<body>
<div class="cart-container">
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Giỏ hàng</b></h4></div>
                        <div class="col align-self-center text-right text-muted">3 items</div>
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
                        <div class="col-2"><img class="img-fluid" src="./img//plates/w-hp-mug-10-2.jpg"></div>
                        <div class="col">
                            <div class="row text-muted">Dĩa</div>
                            <div class="row">DĨa đéo gì cũng không biết tên</div>
                        </div>
                        <div class="col">
                            <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                        </div>
                        <div class="col">€ 44.00 <span class="close">✕</span></div>
                    </div>
                </div>
                <div class="back-to-shop"><a href="#">←<span class="text-muted">Tiếp tục mua sắm</span></a></div>
            </div>
            <div class="col-md-4 summary">
                <div><h5><b>Summary</b></h5></div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">ITEM : 3</div>
                    <div class="col text-right">€ 132.00</div>
                </div>
                <form>
                    <p>SHIPPING</p>
                    <select>
                         <option class="text-muted">Giao hàng tiêu chuẩn - €5.00</option>
                         <option class="text-muted">Giao hàng nhanh - €8.00 </option>
                         <option class="text-muted">Hỏa tốc - €14.99 </option>
                         <option class="text-muted">Giao hàng miễn phí - €0.00 (1 tháng sau có hàng)</option>
                    </select>
                    <p>CODE</p>
                    <input id="code" placeholder="Enter your code">
                </form>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right">€ 137.00</div>
                </div>
                <button class="btn">CHECKOUT</button>
            </div>
        </div> 
    </div>
</div>
<?php include("footer.php"); ?>
</body>
</html>