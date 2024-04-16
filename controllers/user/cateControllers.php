<?php
if(isset($_GET['id'])){
    
    $getChiTietTourByIdTour=getChiTietTourByIdTour($_GET['id'],$hour);
}
if(isset($_POST['btn-search'])){
    $getChiTietTourByIdTour=getChiTietTourByFilter($_POST['start_date'],$_POST['diemDi'],$_POST['diemDen'],$hour);
}
include_once("views/user/cate.views.php");
