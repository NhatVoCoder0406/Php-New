<div class="d-grid mt-5" id="cate" >
<?php
	$i=1;
    foreach ($getChiTietTourByIdTour as $key) {
        $check=false;
						if($i==1){
							echo'<div class="row d-flex" style="justify-content:space-around">';
						}
						if($i%3==1 && $i>3){
							echo'<div class="row d-flex" style="justify-content:space-around">';
						}
       echo'
       <div class="card col-4" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">'.$key['tenTour'].'</h5>
    <h6 class="card-subtitle mb-2 text-danger">'.number_format($key['gia'], 0, ',', '.') . ' đ'.'</h6>
    <h6 class="card-subtitle mb-2 text-muted">Ngày khởi hành: '.$key['ngayKhoiHanh'].'</h6>
    <h6 class="card-subtitle mb-2 text-muted">Ca: '.$key['gioBatDauCa'].'h-'.$key['gioKetThucCa'].'h</h6>
    <h6 class="card-subtitle mb-2 text-muted">Mã số xe: '.$key['id_xe'].'</h6>
    <a href="index.php?type=detail&id='.$key['id_chitiettour'].'" class="card-link">Mua vé</a>
  </div>
</div>';
if($i%3==0){
    echo'</div>';
    $check=true;
}
$i++;
}
if(isset($check)){
    if(!$check){
        echo'</div>';
    }
}else{
    echo'
    <div class="d-flex justify-content-center">
    <h3 class="text-danger">Chưa có chuyến đi nào!</h3>
    </div>';
}
?>
</div>
<br>
<br>
