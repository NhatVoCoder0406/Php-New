<?php
function upChoNgoi($id_chitiettour1, $id_nguoidung1, $id_chongoi1, $sdt, $diemDon){
    $sql="INSERT INTO datcho(id_chitiettour1, id_nguoidung1, id_chongoi1, sdt, diemDon) VALUES ($id_chitiettour1, $id_nguoidung1, $id_chongoi1, '$sdt', '$diemDon')";
    return pdo_execute($sql);
}