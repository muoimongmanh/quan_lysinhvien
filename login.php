<?php
require_once ('dbhelp.php');

session_start();
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$login_error = '';
if(isset($_POST['login-sbm'])) {
    $sql = "select * from user where username = '{$username}' and password = '{$password}' limit 1";
    $login_flg = executeResult($sql);

    if ($login_flg) {
        $_SESSION['user'] = $username;
        header("location:index.php");
    }
    else {
        $login_error = "Tên đăng nhập hoặc mật khẩu không đúng";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login | Student Management</title>
    <?php require_once 'layouts/head.php'; ?>
</head>
<body>
<h1 class="text-center text-primary">Đăng nhập</h1>
<form style="width: 400px; margin: auto" method="post">
    <div class="form-group">
        <label>Tên đăng nhập</label>
        <input type="text" name="username" class="form-control">
    </div>
    <div class="form-group">
        <label>Mật khẩu</label>
        <input type="password" name="password" class="form-control">
    </div>
    <?php if($login_error) { ?>
        <div class="form-group text-danger">
            <?php echo $login_error; ?>
        </div>
    <?php } ?>
    <div class="text-center">
        <button type="submit" value="login" name="login-sbm" class="btn btn-primary">Đăng nhập</button>
    </div>
</form>
</body>
</html>