document.addEventListener("DOMContentLoaded", function () {
    // Lấy các phần tử chính
    const popup = document.getElementById("popup");
    const overlay = document.getElementById("overlay");
    const closeButton = document.querySelector("#popup__close i");

    // Kiểm tra xem các phần tử có tồn tại không
    if (!popup || !overlay || !closeButton) {
        console.error("Lỗi: Một hoặc nhiều phần tử không tìm thấy!");
        return;
    }

    // Hàm hiển thị popup
    function showPopup(event) {
        const product = event.target.closest(".home-product-item"); // Kiểm tra nếu click đúng vào sản phẩm
        if (!product) return; // Nếu không phải, thoát luôn
    
        // Lấy thông tin từ data-attribute
        const name = product.getAttribute("data-name") || "No Name";
        const price = product.getAttribute("data-price") || "0đ";
        const discount = product.getAttribute("data-discount") || price;
        const imageLarge = product.getAttribute("data-large") || "";
        const imageMedium = product.getAttribute("data-medium") || "";
        const imageSmall = product.getAttribute("data-small") || "";
        const sold = product.getAttribute("data-sold") || "0 đã bán";
    
        // Cập nhật nội dung popup
        document.querySelector(".product__title").textContent = name;
    
        // Cập nhật giá gốc và giảm giá
        const priceElement = document.querySelector(".product__price");
        let delTag = priceElement.querySelector("del");
        if (!delTag) {
            delTag = document.createElement("del");
            priceElement.prepend(delTag); // Thêm vào đầu
        }
        delTag.textContent = price;
        document.querySelector(".product__discount").textContent = discount;
    
        // Cập nhật hình ảnh
        document.querySelector(".gallery__item--large img").src = imageLarge;
        document.querySelector(".gallery__item--medium img").src = imageMedium;
        document.querySelector(".gallery__item--small img").src = imageSmall;
    
        // Cập nhật số lượng đã bán
        document.querySelector(".home-product-item__sold").textContent = sold;
    
        // Hiển thị popup
        document.getElementById("popup").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }
    
    // Lắng nghe sự kiện click trên toàn bộ trang (event delegation)
    document.addEventListener("click", function (event) {
        if (event.target.closest(".home-product-item")) {
            showPopup(event);
        }
    });

    // Hàm đóng popup
    function closePopup() {
        popup.style.display = "none";
        overlay.style.display = "none";
    }

    // Gán sự kiện đóng popup
    overlay.addEventListener("click", closePopup);
    closeButton.addEventListener("click", closePopup);

    // Lấy tất cả sản phẩm
    const products = document.querySelectorAll(".home-product-item__acction");

    // Kiểm tra nếu không có sản phẩm nào thì thoát để tránh lỗi
    if (products.length === 0) {
        console.error("Không tìm thấy sản phẩm nào!");
        return;
    }

    products.forEach(product => {
        // Kiểm tra nếu phần tử không tồn tại
        if (!product) {
            console.error("Không tìm thấy phần tử sản phẩm!");
            return;
        }

        // Lấy ID sản phẩm
        const productId = product.getAttribute("data-id");
        
        // Kiểm tra nếu không có data-id
        if (!productId) {
            console.warn("Sản phẩm thiếu thuộc tính data-id!", product);
            return;
        }

        // Xử lý LIKE (TIM)
        const likeButton = product.querySelector(".home-product-item__like");
        if (likeButton) {
            const emptyHeart = likeButton.querySelector(".home-product-item__like-icon-empty");
            const filledHeart = likeButton.querySelector(".home-product-item__like-icon-fill");

            let isLiked = localStorage.getItem(`liked-${productId}`) === "true";

            function updateHeartDisplay() {
                if (isLiked) {
                    filledHeart.style.display = "inline";
                    emptyHeart.style.display = "none";
                } else {
                    filledHeart.style.display = "none";
                    emptyHeart.style.display = "inline";
                }
            }

            updateHeartDisplay();

            likeButton.addEventListener("click", function () {
                isLiked = !isLiked;
                localStorage.setItem(`liked-${productId}`, isLiked);
                updateHeartDisplay();
            });
        } else {
            console.warn(`Sản phẩm ${productId} không có nút like.`);
        }

        // Xử lý ĐÁNH GIÁ SAO
        const stars = product.querySelectorAll(".home-product-item__star");

        if (stars.length > 0) {
            let savedRating = parseInt(localStorage.getItem(`rating-${productId}`)) || 0;

            function updateStars(rating) {
                stars.forEach((star, index) => {
                    if (index < rating) {
                        star.classList.add("gold");
                    } else {
                        star.classList.remove("gold");
                    }
                });
            }

            updateStars(savedRating);

            stars.forEach(star => {
                star.addEventListener("click", function () {
                    let rating = parseInt(this.getAttribute("data-index"));
                    localStorage.setItem(`rating-${productId}`, rating);
                    updateStars(rating);
                });
            });
        } else {
            console.warn(`Sản phẩm ${productId} không có sao đánh giá.`);
        }
    });
});

function increase() {
    let quantityDiv = document.getElementById("quantity");
    quantityDiv.textContent = parseInt(quantityDiv.textContent) + 1;
}

function decrease() {
    let quantityDiv = document.getElementById("quantity");
    if (parseInt(quantityDiv.textContent) > 1) { // Đảm bảo không giảm xuống âm
        quantityDiv.textContent = parseInt(quantityDiv.textContent) - 1;
    }
}

