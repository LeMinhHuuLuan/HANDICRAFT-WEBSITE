// Handle navigation
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.content-section');

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const sectionId = this.getAttribute('data-section');

            // Ẩn tất cả các section
            sections.forEach(section => {
                section.classList.remove('active');
            });

            // Xóa class active khỏi tất cả nav-link
            navLinks.forEach(nav => {
                nav.classList.remove('active');
            });

            // Hiển thị section được chọn và thêm class active cho nav-link
            document.getElementById(sectionId).classList.add('active');
            this.classList.add('active');
        });
    });
});

// Function to update logo
function updateLogo(logoPath) {
    const logoElement = document.getElementById("adminLogo");
    if (logoElement) {
        logoElement.src = logoPath;
    }
}