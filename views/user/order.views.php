<div class="d-flex justify-content-center" style="margin-top:100px;"><h1 >QUẢN LÝ VÉ CỦA BẠN</h1></div>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">MÃ VÉ</th>
      <th scope="col">CHẶNG</th>
      <th scope="col">NGÀY ĐI</th>
      <th scope="col">CA</th>
      <th scope="col">CHỖ NGỒI</th>
      <th scope="col">SỐ ĐIỆN THOẠI</th>
      <th scope="col">ĐỊA CHỈ ĐÓN</th>
      <th scope="col">GIÁ</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        foreach ($getVeUser as $key) {
            echo'
            <tr>
      <th scope="row">'.$i++.'</th>
      <td>'.$key['id_datcho'].'</td>
      <td>'.$key['tenTour'].'</td>
      <td>'.$key['ngayKhoiHanh'].'</td>
      <td>'.$key['gioBatDauCa'].'h-'.$key['gioKetThucCa'].'h</td>
      <td>'.$key['ten_chongoi'].'</td>
      <td>'.$key['sdt'].'</td>
      <td>'.$key['diemDon'].'</td>
      <td>'.number_format($key['gia'], 0, ',', '.') . ' đ'.'</td>
    </tr>
            ';
        }
    ?>
    
  </tbody>
</table>
<br>

