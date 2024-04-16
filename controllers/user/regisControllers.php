<?php
if(isset($_POST['btn-regis'])){
    dangKy($_POST['tenND'],$_POST['matKhau'],$_POST['email'],$_POST['hoVT'],$_POST['ngaySinh'],$_POST['diaChi'],$_POST['soDT']);
}
include_once("views/user/regis.views.php");
