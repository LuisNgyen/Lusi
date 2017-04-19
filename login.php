<?php
session_start();
include('modules/config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="admincp/css/css.css" />
    <title>Trang quản trị nội dung</title>
</head>

<body>
<div id="wrapper">
    <div class="header">
        <img src="imgs/banner_tintuc.jpg" width="960" height="120" />
    </div>
    <form method="post" id="form-dang-nhap">
        <div class="item">
            <label for="tendangnhap" class="control-label">Tên đăng nhập: </label>
            <input type="text" id="tendangnhap" name="user">
        </div>
        <div class="item">
            <label for="matkhau" class="control-label">Mật khẩu: </label>
            <input type="password" name="passwd">
        </div>
        <div style="display: inline-block; padding-left: 200px" class="item">
            <input type="submit" value="Đăng nhập" name="login" style="width: 100px; height: 25px">
            <input type="reset" value="Nhập lại" style="width: 100px; height: 25px">
        </div>
    </form>
    <?php
    if (isset($_POST['login'])){
        $user = addslashes($_POST['user']);
        $pass = addslashes($_POST['passwd']);
        $sql ="select * from dangnhap WHERE tentc = '$user' AND matkhau = '$pass'";
        $result = mysql_query($sql) ;
        if ($result!= null){
            $_SESSION['loginadmin']=$user;
            header('location:admincp/index.php');
        }else{
            echo "<br>Đăng nhập thất bại!!!";
        }
    }
    include('modules/footer.php');
    ?>
</div>
</body>
</html>