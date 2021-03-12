<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود مدیر</title>
    <link rel="stylesheet" href="/web/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="/web/css/bootstrap-grid.rtl.css">
    <link rel="stylesheet" href="/web/css/bootstrap-utilities.rtl.css">
    <link rel="stylesheet" href="/web/css/bootstrap-reboot.rtl.css">
</head>
<body dir="rtl">
    <?php
      include_once("./includes/header.php");
    ?>
<div class="container  mt-4 mb-4">
<div class="fs-1 text-center">ورود به پنل مدیریت</div>
<form action="actions/auth/login.php" method="post">
  <div class="form-group">
    <label for="username">نام کاربری:</label>
    <input type="username" class="form-control" placeholder="نام کاربری را وارد کنید" name="username">
  </div>
  <div class="form-group">
    <label for="password">رمز عبور:</label>
    <input type="password" class="form-control" placeholder="رمز عبور را وارد کنید" name="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> مرا به خاطر بسپار
    </label>
  </div>
  <button type="submit" class="btn btn-primary">ورود</button>
</form>
</div>
<?php
      include_once("./includes/footer.php");
    ?>
    <script src="/web/js/jquery.js"></script>
    <script src="/web/js/bootstrap.js"></script>
</body>
</html>
