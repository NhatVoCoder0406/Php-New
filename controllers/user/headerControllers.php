<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentTime = date('H:i:s');
$hour = date('H');
if(isset($_POST['btn-login'])){
    $_SESSION['user']=dangNhap($_POST['matKhau'],$_POST['email']);
    if(is_array($_SESSION['user'])){
            header("Location: index.php?type=home");
    }else{
        echo"<script>alert('Sai thong tin')</script>";
    }
}
if(isset($_GET['logout'])){
    echo'<script>
    if (confirm("Bạn có chắc chắn muốn đăng xuất không?")) {
        window.location.href = "index.php?type=home&logout=2"; 
    } 
    </script>';
    if($_GET['logout']==2){
            session_destroy();
            header("Location: index.php?type=home");
    }
    
}

if(isset($_POST['detail-btn'])){
    $check=upChoNgoi($_POST['id_chitiettour'], $_SESSION['user']['id_nguoidung'], $_POST['seat'], $_POST['sdt'], $_POST['diemDon']);
    if($check){
        echo'<script>
        if(alert("Đặt thành công")){
            window.location.href = "index.php?type=home"
        }</script>';
    }
}



$getAllCate=getAllCate();
include_once("views/user/header.views.php");