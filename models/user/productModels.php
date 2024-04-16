<?php

function getAllCate(){
    $sql="SELECT * FROM tour WHERE xoa_tour = 0 AND hype=1 ";
    return pdo_query($sql);
}

function getDiemDiAvailable(){
    $sql="SELECT distinct diemDi,thanhpho.id_thanhpho,thanhpho.tenThanhPho  FROM tour INNER JOIN thanhpho ON tour.diemDi=thanhpho.id_thanhpho  WHERE xoa_tour = 0";
    return pdo_query($sql);
}
function getDiemDenAvailable($id){
    $sql="SELECT diemDen,thanhpho.id_thanhpho,thanhpho.tenThanhPho  FROM tour INNER JOIN thanhpho ON tour.diemDen=thanhpho.id_thanhpho WHERE xoa_tour = 0 AND diemDi=$id ";
    return pdo_query($sql);
}
function getNgayAvailable($id){
    $sql="SELECT diemDen,thanhpho.id_thanhpho,thanhpho.tenThanhPho  FROM tour INNER JOIN thanhpho ON tour.diemDen=thanhpho.id_thanhpho WHERE xoa_tour = 0 AND diemDi=$id ";
    return pdo_query($sql);
}
function getCa(){
    $sql="SELECT * FROM cakhoihanh WHERE xoa_cakhoihanh = 0";
    return pdo_query($sql);
}

function getChiTietTourByIdTour($id,$ca){
    $sql="SELECT * FROM chitiettour INNER JOIN xe ON chitiettour.maXe=xe.id_xe INNER JOIN tour ON chitiettour.id_tour1=tour.id_tour  INNER JOIN cakhoihanh ON chitiettour.caKhoiHanh=cakhoihanh.id_cakhoihanh WHERE (id_tour1 = $id AND ngayKhoiHanh = CURDATE() AND cakhoihanh.gioBatDauCa >= $ca AND xoa_chitiettour=0) OR (id_tour1 = $id AND ngayKhoiHanh > CURDATE() AND xoa_chitiettour=0)";
    return pdo_query($sql);
}
function getChiTietTourById($id,$ca){
    $sql="SELECT * FROM chitiettour INNER JOIN xe ON chitiettour.maXe=xe.id_xe INNER JOIN tour ON chitiettour.id_tour1=tour.id_tour  INNER JOIN cakhoihanh ON chitiettour.caKhoiHanh=cakhoihanh.id_cakhoihanh WHERE (ngayKhoiHanh = CURDATE() AND cakhoihanh.gioBatDauCa >= $ca AND id_chitiettour=$id AND xoa_chitiettour=0) OR (ngayKhoiHanh > CURDATE() AND id_chitiettour=$id AND xoa_chitiettour=0) ";
    return pdo_query_one($sql);
}
function getChiTietTourByFilter($date,$diemDi,$diemDen,$ca){
    $ngay_moi = date("Y-m-d", strtotime($date));
    $ngay_hom_nay = date("Y-m-d");
    if($ngay_moi===$ngay_hom_nay){
        $sql="SELECT * FROM chitiettour INNER JOIN xe ON chitiettour.maXe=xe.id_xe INNER JOIN tour ON chitiettour.id_tour1=tour.id_tour  INNER JOIN cakhoihanh ON chitiettour.caKhoiHanh=cakhoihanh.id_cakhoihanh WHERE ngayKhoiHanh = '$ngay_moi' AND cakhoihanh.gioBatDauCa >= $ca  AND xoa_chitiettour=0 AND diemDi=$diemDi AND diemDen=$diemDen ";
    }else if($ngay_moi>$ngay_hom_nay){
        $sql="SELECT * FROM chitiettour INNER JOIN xe ON chitiettour.maXe=xe.id_xe INNER JOIN tour ON chitiettour.id_tour1=tour.id_tour  INNER JOIN cakhoihanh ON chitiettour.caKhoiHanh=cakhoihanh.id_cakhoihanh WHERE ngayKhoiHanh = '$ngay_moi' AND xoa_chitiettour=0 AND diemDi=$diemDi AND diemDen=$diemDen ";
    }
    return pdo_query($sql);
}

function getChoTrong($id){
    $sql="SELECT id_chongoi1 FROM datcho WHERE id_chitiettour1 = $id";
    return pdo_query($sql);
}
function getAllCho(){
    $sql="SELECT * FROM chongoi WHERE xoa_chongoi = 0";
    return pdo_query($sql);
}