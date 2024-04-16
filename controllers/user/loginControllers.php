<?php
if (isset($_GET['type2'])) {
    if (isset($_POST['forgot'])) {
        $checkMail = checkMail($_POST['email']);
        if (is_array($checkMail)) {
            include_once("views/user/changepass.views.php");
        } else {
            echo "<script>alert('Không tồn tại email')</script>";
            include_once("views/user/forgotpass.views.php");
        }
    }elseif (isset($_POST['btn-save-pass'])) {
        if ($_POST['matKhau'] == $_POST['matKhau1']) {
            updatePass($_POST['matKhau'], $_POST['email']);
            echo '<script>alert("Đổi mật khẩu thành công!");</script>';
            include_once("views/user/login.views.php");
        }else{
            echo '<script>alert("Đổi mật khẩu thất bại!");</script>';
            include_once("views/user/changepass.views.php");
        }
    } else {
        include_once("views/user/forgotpass.views.php");
    }
}else {
    include_once("views/user/login.views.php");
}
