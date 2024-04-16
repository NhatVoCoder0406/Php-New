<link rel="stylesheet" href="uploads/css/login.css">
<div id="container4" style="margin-top:200px">
  <div id="title-container4">
    <h1>ĐỔI MẬT KHẨU</h1>
  </div>
<form action="" method="post">
  <div class="form-outline mb-4">
    <input type="password" id="" name="matKhau" class="form-control" />
    <label class="form-label" for="">Mật khẩu mới</label>
  </div>

  <div class="form-outline mb-4">
    <input type="password" id="" name="matKhau1" class="form-control" />
    <label class="form-label" for="">Nhập lại mật khẩu mới</label>
  </div>

  <input type="email" id="" name="email" class="form-control" value="<?php echo $_POST['email'];?>" hidden />

  <button type="submit" name="btn-save-pass" class="btn btn-primary btn-block mb-4">Lưu</button>

  
</form>
</div>
