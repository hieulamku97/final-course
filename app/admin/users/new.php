<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <head>
    <title>Tạo mới users</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
    <?php include "../../menucon.php"  ?>
  <br>
  <br>
  <br>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h2>Tạo mới người dùng</h2>
      </div>
      <div class="row">
        <label>Tên người dùng</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Email</label>
        <input class="form-control"  type="email" name="email">
      </div>
      <div class="row">
        <label>Mật khẩu</label>
        <input class="form-control"  type="password" name="password">
      </div>
      <div class="row">
        <label>Nhập lại mặt khẩu</label>
        <input class="form-control"  type="password" name="repassword">
      </div>
      <div class="row">
        <label>Cấp quyền</label>
        <select class="form-control" name="role">
          <option value="2">User</option>
          <option value="1">Editor</option>
          <option value="0">Admin</option>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
      <script src="../../../public/js/jquery.min.js"></script>
      <script src="../../../public/js/bootstrap.min.js"></script>
      <script src="../../../public/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
