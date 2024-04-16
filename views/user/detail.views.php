<link rel="stylesheet" href="uploads/css/size.css">
<div id="container3" style="margin-top:100px">
    <div id="detail-container3" class="d-flex justify-content-center">
        <h1>CHI TIẾT CHUYẾN ĐI</h1>
    </div>
    <form action="" method="post">
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class=" rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
              <img style="max-width: 100%; max-height: 100vh;" class="rounded-4 fit" src="https://static.vinwonders.com/production/xe-di-phan-thiet-1.jpg" />
            </a>
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
                Chuyến:
            <?php echo $getChiTietTourById['tenTour'];?>
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
            </div>
  
            <div class="mb-3">
              <span class="h5 text-danger"><?php echo number_format($getChiTietTourById['gia'], 0, ',', '.') . ' đ';?></span>
              <span class="text-muted">/chuyến</span>
            </div>
            <div class="row">
              <dt class="col-3">Ngày khởi hành:</dt>
              <dd class="col-9"><h6><?php echo $getChiTietTourById['ngayKhoiHanh'];?></h6></dd>
            </div>
            <div class="row">
              <dt class="col-3">Ca:</dt>
              <dd class="col-9"><h6><?php echo $getChiTietTourById['gioBatDauCa'].'h-'.$getChiTietTourById['gioKetThucCa'].'h'?></h6></dd>
            </div>
            <div class="row">
              <dt class="col-3">Thời gian đi:</dt>
              <dd class="col-9"><h6><?php echo $getChiTietTourById['thoiGian']/60?> giờ</h6></dd>
            </div>
            <div class="row">
              <dt class="col-3">Khoảng cách:</dt>
              <dd class="col-9"><h6><?php echo $getChiTietTourById['khoangCach']?> km</h6></dd>
            </div>
    <?php
    if(isset($_SESSION['user']['id_nguoidung'])){
        echo'<div class="row">
        <dt class="col-6"><input type="text" value="'. $_SESSION['user']['soDT'].'" id="" name="sdt" class="form-control" required /><label class="form-label" for="">SĐT</label></dt>
        <dt class="col-6"><input type="text" value="'. $_SESSION['user']['diaChi'].'" id="" name="diemDon" class="form-control" required /><label class="form-label" for="">ĐIỂM ĐÓN</label></dt>
      </div>';
    }
    ?>
            
            <hr />
            <div class="row">
                <div class="col-4"><h5>Ghế đã đặt:</h5> <i style="font-size:30px" class="fas fa-couch text-danger"></i></div>
                <div class="col-4"><h5>Ghế trống :</h5><i style="font-size:30px" class="fas fa-couch text-primary"></i></div>
            </div>
                <?php
                    if(count($getChoTrong)>0){
                        $array=[];
                        foreach ($getChoTrong as $key ) {
                            array_push($array, $key['id_chongoi1']);
                        }
                        $i=1;
                        foreach ($getAllCho as $key ) {
                            $check=false;
                            if($i==19){
                                echo'<h6>Hàng trên</h6>';
                            }
                            if($i==1){
                                echo'<h6>Hàng dưới</h6>';
                                echo'<div class="row">';
                            }
                            if($i%3==1 && $i>3){
                                echo'<div class="row">';
                            }
                            if(in_array($key['id_chongoi'], $array)){
                                echo'<div class="col-4"><input type="radio" name="seat" value="'. $key['id_chongoi'].'" class="" disabled required/> <i style="" class="fas fa-couch text-danger"></i> '. $key['ten_chongoi'].'</div>';
                            }else{
                                echo'<div class="col-4"><input type="radio" name="seat" value="'. $key['id_chongoi'].'" class="" required/> <i style="" class="fas fa-couch text-primary"></i> '. $key['ten_chongoi'].'</div>';
                            }
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
                    }
                    }else{
                        $i=1;
                        foreach ($getAllCho as $key ) {
                            $check=false;
                            if($i==19){
                                echo'<h6>Hàng trên</h6>';
                            }
                            if($i==1){
                                echo'<h6>Hàng dưới</h6>';
                                echo'<div class="row">';
                            }
                            if($i%3==1 && $i>3){
                                echo'<div class="row">';
                            }
                            echo'<div class="col-4"><input type="radio" name="seat" value="'. $key['id_chongoi'].'" class="" required/> <i style="" class="fas fa-couch text-primary"></i> '. $key['ten_chongoi'].'</div>';
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
                    }
                        }
                        

                ?>
            </div>
            <input type="number" value="<?php echo $getChiTietTourById['id_chitiettour'];?>" id="" name="id_chitiettour" hidden />
            <?php
            if(isset($_SESSION['user']['id_nguoidung'])){
                echo'<button type="submit" name="detail-btn" class="btn btn-danger">Đặt vé</button>';
            }else{
                echo'<button type="submit" name="detail-btn" class="btn btn-danger" disabled>Đặt vé</button>';
            }
            ?>
            
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
  </form>
</div>
<br>
  <!-- content -->
  
  
  
  