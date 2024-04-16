<?php
function dangKy($tenND,$matKhau,$email,$hoVT,$ngaySinh,$diaChi,$soDT){
    $sql="SELECT * FROM nguoidung WHERE email like '$email'";
    $result=pdo_query($sql);
    $ngay_moi = date("Y-m-d", strtotime($ngaySinh));
    if(count($result)==0){
        $sql="INSERT INTO nguoidung(tenND,matKhau,email,hoVT,ngaySinh,diaChi,soDT) VALUES('$tenND','$matKhau','$email','$hoVT','$ngay_moi','$diaChi','$soDT')";
        return pdo_execute($sql);
    }
}
function dangNhap($matKhau,$email){
    $sql="SELECT * FROM nguoidung WHERE email like '$email' AND matKhau like '$matKhau' AND xoa_nguoidung = 0 ";
    return pdo_query_one($sql);
}

function checkMail($email){
    $sql="SELECT * FROM nguoidung WHERE xoa_nguoidung=0 AND email like '$email'";
    return pdo_query_one($sql);
}
function updatePass($matKhau,$email){
    $sql="UPDATE nguoidung SET  matKhau='$matKhau' WHERE email='$email'";
    return pdo_execute($sql);
}

function getVeUser($id){
    $sql="SELECT * FROM datcho INNER JOIN nguoidung ON datcho.id_nguoidung1=nguoidung.id_nguoidung INNER JOIN chongoi ON datcho.id_chongoi1=chongoi.id_chongoi INNER JOIN chitiettour ON datcho.id_chitiettour1=chitiettour.id_chitiettour INNER JOIN tour ON chitiettour.id_tour1=tour.id_tour INNER JOIN cakhoihanh ON cakhoihanh.id_cakhoihanh=chitiettour.caKhoiHanh  WHERE id_nguoidung1 = $id;";
    return pdo_query($sql);    
}