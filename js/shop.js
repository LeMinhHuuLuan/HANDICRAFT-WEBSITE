document.addEventListener("DOMContentLoaded", function () {
     const popup = document.getElementById("popup");
     const overlay = document.getElementById("overlay");
     const closeButton = document.querySelector("#popup__close i");
     const quantityDiv = document.getElementById("quantity");
     let currentQuantity = 0;
 
     // Kiểm tra xem trang có các phần tử popup không
     if (!popup || !overlay || !closeButton || !quantityDiv) {
         console.warn("Trang không chứa popup sản phẩm. Bỏ qua chức năng popup.");
         // Tiếp tục xử lý các chức năng khác (nếu có)
     } else {
         // Logic xử lý popup
         function updatePopupContent({ name, price, salePrice, description, image, image2, image3 }) {
             document.getElementById('popupTitle').textContent = name || "No Name";
             document.getElementById('popupOriginalPrice').textContent = price || "0đ";
             document.getElementById('popupSalePrice').textContent = salePrice || price || "0đ";
             document.getElementById('popupDescription').textContent = description || "";
             document.getElementById('popupMainImage').src = image || "";
 
             const image2Container = document.getElementById('popupImage2Container');
             const image3Container = document.getElementById('popupImage3Container');
 
             if (image2 && image2 !== 'null') {
                 image2Container.style.display = 'block';
                 document.getElementById('popupImage2').src = image2;
             } else {
                 image2Container.style.display = 'none';
             }
 
             if (image3 && image3 !== 'null') {
                 image3Container.style.display = 'block';
                 document.getElementById('popupImage3').src = image3;
             } else {
                 image3Container.style.display = 'none';
             }
         }
 
         function showPopup(event) {
             const product = event.target.closest(".home-product-item");
             if (!product) return;
             $('#search-modal').modal('hide');
             updatePopupContent({
                 name: product.getAttribute("data-name"),
                 price: product.getAttribute("data-price"),
                 salePrice: product.getAttribute("data-sale-price"),
                 description: product.getAttribute("data-description"),
                 image: product.getAttribute("data-image"),
                 image2: product.getAttribute("data-image2"),
                 image3: product.getAttribute("data-image3"),
             });
 
             currentQuantity = 0;
             quantityDiv.textContent = currentQuantity;
 
             popup.style.display = "block";
             overlay.style.display = "block";
         }
 
         function closePopup() {
             popup.style.display = "none";
             overlay.style.display = "none";
         }
 
         document.addEventListener("click", function (event) {
             if (event.target.closest(".home-product-item")) {
                 showPopup(event);
             }
         });
 
         overlay.addEventListener("click", closePopup);
         closeButton.addEventListener("click", closePopup);
 
         window.showProductPopup = showPopup;
         window.closeProductPopup = closePopup;
 
         // Xử lý tăng/giảm số lượng
         window.increase = function () {
             currentQuantity++;
             quantityDiv.textContent = currentQuantity;
         };
 
         window.decrease = function () {
             if (currentQuantity > 0) {
                 currentQuantity--;
                 quantityDiv.textContent = currentQuantity;
             }
         };
     }

     // Xử lý tăng/giảm số lượng
    window.increase = function () {
        currentQuantity++;
        quantityDiv.textContent = currentQuantity;
    };

    window.decrease = function () {
        if (currentQuantity > 0) {
            currentQuantity--;
            quantityDiv.textContent = currentQuantity;
        }
    };
    window.showProductPopup = showPopup;
    window.closeProductPopup = closePopup;

 });
