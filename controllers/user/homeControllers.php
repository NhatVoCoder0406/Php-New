<?php
$getDiemDiAvailable=getDiemDiAvailable();
$getDiemDenAvailable=[];
if(isset($_POST['option'])){
    $selectedOption = $_POST['option'];
    $getDiemDenAvailable=getDiemDenAvailable($selectedOption);
}
if(isset($_POST['option1'])){
    $selectedOption1 = $_POST['option1'];
    $selectedOption = $_POST['option'];
    $getDiemDenAvailable=getDiemDenAvailable($selectedOption);
}

include_once("views/user/home.views.php"); 