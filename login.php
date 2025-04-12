<?php
  require_once("./auth/backend/auth.php");
  // Ensure this code does not interfere with the rest of the page
  if (!isset($_SESSION['user_logged_in'])) {
    require_once("auth/backend/filterWithCookie.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Sign In</title>
  </head>
  <body>
    <div class="container">
      <h2>Đăng Nhập</h2>
      <form method="POST">
        <label>Tên Đăng Nhập</label>
        <input type="text" placeholder="Username" name="user_name" require />
        <label>Mật Khẩu</label>
        <input type="password" placeholder="Password" name="password" require />
        <input type="submit" class="login_button" value="Đăng Nhập" name="submit" />
        <div class="register">
          <a href="./index.php">Trở Về Trang Chủ</a>
          <p>Chưa Có Tài Khoản?</p>
          <a href="./register.php">Đăng Ký Ngay</a>
        </div>
      </form>
    </div>
  </body>
</html>

<?php 
  if(isset($_POST['submit'])){
    $run = Auth::login($_POST['user_name'],$_POST['password']);
    if($run){
      if (headers_sent($file, $line)) {
        die("Lỗi: Header đã gửi ở file $file, dòng $line");
      }
      header("Location: ./index.php");
    }else
      echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác');
      window.location.href='./login.php';</script>";
  }
?>
