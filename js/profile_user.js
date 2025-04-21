//Ăn theo js trong admin nhưng vì khẩu xử lý trong admin có chỗ quyền hạn admin nên phải viết lại chút cho phù hợp với quyền hạn của người dùng bình thường
function editUser(id) {
    // Kiểm tra và hiển thị modal
    const modalElement = document.getElementById('editProfileModal');
    if (!modalElement) {
        alert('Không tìm thấy modal chỉnh sửa hồ sơ!');
        return;
    }
    const modal = new bootstrap.Modal(modalElement);
    modal.show();

    // Kiểm tra và xử lý form submit
    const form = document.getElementById('editProfileForm');
    if (!form) {
        alert('Không tìm thấy form chỉnh sửa hồ sơ!');
        return;
    }

    form.onsubmit = function(event) {
        event.preventDefault(); // Ngăn submit mặc định

        const formData = new FormData(form);
        const data = new URLSearchParams(formData);

        const url = './auth/admin/controller/handle_user.php';
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: data.toString()
        })
        .then(response => {
            const status = response.status;
            return response.text().then(text => {
                let jsonData;
                try {
                    jsonData = JSON.parse(text);
                    return { data: jsonData, status };
                } catch (e) {
                    // Nếu status là 404 nhưng dữ liệu đã được cập nhật
                    if (status === 404) {
                        console.warn('Phản hồi 404 nhưng dữ liệu có thể đã được cập nhật:', text.slice(0, 200));
                        return { data: { success: true }, status }; // Giả định thành công
                    }
                    throw new Error(`Phản hồi không phải JSON hợp lệ (Status: ${status}): ${text.slice(0, 100)}...`);
                }
            });
        })
        .then(({ data, status }) => {
            if (data.success) {
                alert('Cập nhật hồ sơ thành công!');
                window.location.reload(); // Làm mới trang
            } else {
                alert('Lỗi khi cập nhật hồ sơ: ' + (data.message || 'Không rõ nguyên nhân') + ` (Status: ${status})`);
            }
        })
        .catch(error => {
            console.error('Lỗi:', error);
            alert('Có lỗi khi cập nhật hồ sơ: ' + error.message);
        });
    };
}