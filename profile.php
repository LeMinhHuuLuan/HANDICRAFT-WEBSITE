<?php
require_once("auth/admin/controller/UserController.php");
$userController = new UserController();
$user_id = $_COOKIE['user_id'] ?? null;
$user = $userController->getById($user_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ người dùng - Handicraft</title>
    <style>
        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .profile-info {
            margin-bottom: 20px;
        }
        .profile-info label {
            font-weight: bold;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php include("header.php"); ?>

    <div class="container profile-container">
        <div class="profile-header">
            <h2>Hồ sơ người dùng</h2>
            <p>Xem và chỉnh sửa thông tin cá nhân của bạn</p>
        </div>

        <div class="profile-info">
            <p><label>Họ tên:</label> <?php echo htmlspecialchars($user['full_name']); ?></p>
            <p><label>Email:</label> <?php echo htmlspecialchars($user['email']); ?></p>
            <p><label>Số điện thoại:</label> <?php echo htmlspecialchars($user['phone_number'] ?? '-'); ?></p>
            <p><label>Địa chỉ:</label> <?php echo htmlspecialchars($user['address'] ?? '-'); ?></p>
            <p><label>Vai trò:</label> <?php echo $user['role_id'] == 1 ? 'Admin' : 'User'; ?></p>
        </div>

        <button class="btn btn-primary" onclick="editUser(<?php echo $user['id']; ?>)">
            <i class="fa-solid fa-pencil"></i> Chỉnh sửa hồ sơ
        </button>

        <a href="./index.php" class="btn btn-secondary">
            <i class="fa-solid fa-door-open"></i> Trở về trang chủ
        </a>

        <a href="./auth/backend/logoutCookie.php" class="btn btn-danger">
            <i class="fa-solid fa-right-to-bracket"></i> Đăng xuất
        </a>
    </div>

    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Chỉnh sửa hồ sơ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="editUser(<?php echo $user['id']; ?>)"></button>
                </div>
                <div class="modal-body">
                    <form id="editProfileForm" method="POST">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                        <input type="hidden" name="role_id" value="<?php echo $user['role_id']; ?>">
                        <div class="mb-3">
                            <label for="editFullname" class="form-label">Họ tên</label>
                            <input type="text" class="form-control" id="editFullname" name="full_name" value="<?php echo htmlspecialchars($user['full_name']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="editPhone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="editPhone" name="phone_number" value="<?php echo htmlspecialchars($user['phone_number'] ?? ''); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="editAddress" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="editAddress" name="address" value="<?php echo htmlspecialchars($user['address'] ?? ''); ?>">
                        </div>
                        <input type="hidden" name="action" value="edit_user">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" form="editProfileForm" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/profile.js"></script>
    <?php include("footer.php"); ?>
</body>
</html>