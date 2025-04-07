<?php
    include("header.php")
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <title>Home</title>

    </head>
    <body>
        <div class="app">
            <div class="container">
                <div class="grid">
                    <div class="app__content ">       
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                            <div class="home-menu__bar">
                                <div class="home-product__title">
                                    <h1 class="home-Product__title_text">Trang Trí</h1>
                                    <p class="home-Product__title_text">Trang Chủ / Trang Trí</p>
                                </div>
                                <div class="home-filter">
                                    <a href="shop.php" class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Mug.jpg" alt="">
                                        Cốc
                                    </a>
                                    <a href="product_pots.php" class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Pots.jpg" alt="">
                                        Chậu
                                    </a>
                                    <a href="product_plates.php" class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Plates.jpg" alt="">
                                        Đĩa
                                    </a>
                                    <a href="product_decor.php" class="home-filter__btn  Select-fil">
                                        <img class="menu-img" src="./img/menu__Decor.jpg" alt="">
                                        Trang Trí
                                    </a>
                                    <a href="product_bowl.php" class="home-filter__btn">
                                        <img class="menu-img" src="./img/menu__Bowl.jpg" alt="">
                                        Bát
                                    </a>
                                </div>
                            </div>
                            <div class="home-product">
                                <div class="home-product_sorting">
                                    <div class="selection">
                                        <div class="selection">
                                            <div class="selection__price">
                                                <label for="price">Lọc </label>
                                                <i class="fa-solid fa-chevron-down selection__price-icon"></i>
                                                <div class="selection__price-content">
                                                    <div class="selection__slider-container">
                                                        <input type="number" id="min-price" class="selection__slider-input" value="14" min="14" max="320"> -
                                                        <input type="number" id="max-price" class="selection__slider-input" value="320" min="14" max="320">
                                                    </div>
                                                    <button class="selection__btn" onclick="applyFilter()">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="selection__color">
                                            <label for="color">Màu Sắc</label>
                                            <i class="fa-solid fa-chevron-down selection__price-icon"></i>
                                            <div class="selection__color-content">
                                                <div class="selection__color-options">
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #b2b2b2;"></span> Ash Gray</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #000;"></span> Black</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #4169e1;"></span> Blue</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #e3dac9;"></span> Bone</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #8b4513;"></span> Brown</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #808080;"></span> Gray</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #228b22;"></span> Green</div>
                                                    <div class="selection__color-option"><span class="selection__color-circle" style="background: #e5e4e2;"></span> Platinum</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-sorting">
                                        <span class="show-label">Xem:</span>
                                        <a href="#" class="show-option">9</a> /
                                        <a href="#" class="show-option">12</a> /
                                        <a href="#" class="show-option">18</a> /
                                        <a href="#" class="show-option">24</a>
                                        <select class="sorting-dropdown">
                                            <option>Sắp xếp mặc định</option>
                                            <option>Sắp xếp theo mức độ phổ biến</option>
                                            <option>Sắp xếp theo đánh giá trung bình</option>
                                            <option>Sắp xếp theo mới nhất</option>
                                            <option>Sắp xếp theo giá: thấp đến cao</option>
                                            <option>Sắp xếp theo giá: cao đến thấp</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class=" row container-fluid">
                                    <!-- Product item -->
                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item" 
                                            data-id="product-1" 
                                            data-large="./img/decor/w-hp-decor-6-1.jpg"
                                            data-medium="./img/decor/Aw-hp-decor-6-2.jpg"
                                            data-small="./img/decor/w-hp-plate-4-2.jpg"
                                            data-name="Chén Nước Chấm"
                                            data-price="150.000đ"
                                            data-discount="120.000đ"
                                            data-sold="210K+ đã bán">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-6-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Chén Nước Chấm</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">120.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Miêu Tả</h2>
                                                    <p class="product__description">
                                                        Cốc gốm màu nâu đỏ với phần đáy không tráng men, mang phong cách tối giản và hiện đại.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-large="./img/decor/w-hp-decor-12-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-12-2.jpg"
                                            data-small="./img/decor/w-hp-decor-9-2.jpg"
                                            data-name="Hộp Đựng Nhan Gốm"
                                            data-price="200.000đ"
                                            data-discount="160.000đ"
                                            data-sold="90K+ đã bán">

                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-12-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Hộp Đựng Nhan Gốm</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">160.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Mô Tả</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="100K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-4-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-4-2.jpg"
                                            data-small="./img/decor/w-hp-decor-4-1.jpg"
                                            data-name="Mặt Đèn Gốm"
                                            data-price="220.000đ"
                                            data-discount="200.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-4-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Mặt Đèn Gốm</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">200.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="210K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-3-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-3-2.jpg"
                                            data-small="./img/decor/w-hp-decor-3-1.jpg"
                                            data-name="Giá Đất Sét Đựng Khăn"
                                            data-price="210.000đ"
                                            data-discount="190.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-3-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Giá Đất Sét Đựng Khăn</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">190.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="200K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-11-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-11-2.jpg"
                                            data-small="./img/decor/ww-hp-decor-11-1.jpg"
                                            data-name="Đồ Đựng Trứng"
                                            data-price="100.000đ"
                                            data-discount="90.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-11-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Đồ Đựng Trứng</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">90.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="20K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-8-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-8-2.jpg"
                                            data-small="./img/decor/w-hp-decor-8-1.jpg"
                                            data-name="Khay Đựng Hương"
                                            data-price="300.000"
                                            data-discount="280.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-8-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Khay Đựng Hương</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">280.000</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="210K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-10-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-10-2.jpg"
                                            data-small="./img/decor/w-hp-decor-10-1.jpg"
                                            data-name="Đầu Đốt Dầu"
                                            data-price="230.000đ"
                                            data-discount="150.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-10-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Đầu Đốt Dầu</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">150.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="210K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-5-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-5-2.jpg"
                                            data-small="./img/decor/w-hp-decor-5-1.jpg"
                                            data-name="Điêu Khắc 006"
                                            data-price="100.000đ"
                                            data-discount="90.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-5-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Điêu Khắc 006</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">90.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="210K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-1-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-1-2.jpg"
                                            data-small="./img/decor/w-hp-decor-1-1.jpg"
                                            data-name="Bộ 3 Gạch Ốp Tường"
                                            data-price="250.000đ"
                                            data-discount="150.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-1-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Bộ 3 Gạch Ốp Tường</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">150.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="210K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-2-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-2-2.jpg"
                                            data-small="./img/decor/w-hp-decor-2-1.jpg"
                                            data-name="Đĩa Đựng Xà Phòng – Gỗ Sồi"
                                            data-price="150.000đ"
                                            data-discount="120.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-2-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Đĩa Đựng Xà Phòng – Gỗ Sồi</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">120.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="10000K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-9-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-9-2.jpg"
                                            data-small="./img/decor/w-hp-decor-9-1.jpg"
                                            data-name="Ly Đất Nung"
                                            data-price="220.000đ"
                                            data-discount="190.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-9-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Ly Đất Nung</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">190.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                        <div class="home-product-item"
                                            data-id="product-1" 
                                            data-sold="210K+ đã bán"
                                            data-large="./img/decor/w-hp-decor-7-1.jpg"
                                            data-medium="./img/decor/w-hp-decor-7-2.jpg"
                                            data-small="./img/decor/w-hp-decor-7-1.jpg"
                                            data-name="Giá Đỡ Nến"
                                            data-price="250.000đ"
                                            data-discount="230.000đ">
                                            
                                            <a class="home-product__img">
                                                <div class="home-product-item__img" style="background-image: url(./img/decor/w-hp-decor-7-1.jpg);"></div>
                                            </a>
                                            
                                            <div class="home-product__name">
                                                <div class="home-product-item__name">Giá Đỡ Nến</div>
                                                <div class="home-product-item__rating">
                                                    <a href="#" class="product-carts">Trang Trí</a>
                                                </div>
                                            </div>
                                            
                                            <div class="home-product-item__sale-off">
                                                <span class="home-product-item__sale-off-percent">hot</span>
                                            </div>
                                            
                                            <div class="header__cart-item-price-wrap">
                                                <span class="home-product-item__price">230.000đ</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Overlay div -->
                                        <div id="overlay" class="overlay"></div>
                                        
                                        <!-- Popup div -->
                                        <div id="popup" class="popup">
                                            <div id="popup__close">
                                                <i class="popup__icon fa-solid fa-xmark"></i>
                                            </div>
                                            
                                            <div class="product">
                                                <div class="product__gallery">
                                                    <div class="gallery__item gallery__item--large">
                                                        <img src="" alt="Large Mug" class="w-100 h-auto">
                                                    </div>
                                                    <div class="gallery__row">
                                                        <div class="gallery__item gallery__item--medium">
                                                            <img src="" alt="Stacked decor" class="w-100 h-auto">
                                                        </div>
                                                        <div class="gallery__item gallery__item--small">
                                                            <img src="" alt="Small Mug" class="w-100 h-auto">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="product__info">
                                                    <h1 class="product__title">Tên sản phẩm</h1>
                                                    <p class="product__price"><del>Giá cũ</del> <strong class="product__discount">Giá giảm</strong></p>
                                                    <div class="home-product-item__acction" data-id="product-1">
                                                        <span class="home-product-item__like home-product-item__like--like">
                                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                                        </span>
                                                        <div class="home-product-item__rating">
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="1"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="2"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="3"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="4"></i>
                                                            <i class="home-product-item__star fa-solid fa-star" data-index="5"></i>
                                                        </div>
                                                        <span class="home-product-item__sold">Đã bán</span>
                                                    </div>
                                                    
                                                    <div class="product__cart">
                                                        <button class="product__cart-reduce" onclick="decrease()">-</button>
                                                        <div class="product__cart-input" id="quantity">0</div>
                                                        <button class="product__cart-increase" onclick="increase()">+</button>
                                                        <button class="product__cart-button">Thêm giỏ hàng</button>
                                                    </div>
                                                    
                                                    <div class="product__cart-trans">
                                                        <i class="product__cart-trans-icon fa-solid fa-truck-fast"></i>
                                                        <p class="product__cart-trans-desc">Giao hàng toàn quốc đơn hàng từ 99k</p>
                                                    </div>
                                                    <a href="#" class="product__cart-return">
                                                        <img class="product__cart-return-img" src="/img/doi-removebg-preview.png" alt="">
                                                        <p class="product__cart-return-desc">Đổi trả trong 24h</p>
                                                    </a>
                                            
                                                    <h2 class="product__description-title">Description</h2>
                                                    <p class="product__description">
                                                        You begin with a text, you sculpt information, you chisel away what’s not needed...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/menu.js"></script>
    </body>
</html>

<?php
     include_once 'footer.php';
?>