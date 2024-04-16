<?php

if(isset($_GET['id'])){
    $getChiTietTourById=getChiTietTourById($_GET['id'],$hour);
    $getChoTrong=getChoTrong($_GET['id']);
    $getAllCho=getAllCho();
}
include_once("views/user/detail.views.php");
