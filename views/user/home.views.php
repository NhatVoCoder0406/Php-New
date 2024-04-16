<link rel="stylesheet" href="uploads/css/listproduct.css">
<section class="section-products" id="result">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Tìm Kiếm Hành Trình </h3>
										<h2>Bạn muốn đi đâu</h2>
								</div>
						</div>
				</div>
				<form action="index.php?type=cate" method="post">
					<div class="row d-flex justify-content-center">
					<div class="form-outline mb-4 col-6">
						<select name="diemDi" class="form-control" id="mySelect" required>
							<?php
							foreach ($getDiemDiAvailable as $key ) {
								echo'
							  <option value="'.$key['id_thanhpho'].'">'.$key['tenThanhPho'].'</option>
							  ';
							  }
							?>
							
						</select>
						<label class="form-label" for="">Xuất phát</label>
					</div>	
					<div class="form-outline mb-4 col-6">
					<select name="diemDen" class="form-control" id="diemDen" required>
							<?php
							foreach ($getDiemDenAvailable as $key ) {
								echo'
							  <option value="'.$key['id_thanhpho'].'">'.$key['tenThanhPho'].'</option>
							  ';
							  }
							?>
							
						</select>
						<label class="form-label" for="">Đích đến</label>
					</div>
					</div>
					<div class="row d-flex justify-content-center">
					<div class="form-outline mb-4  col-6">
						<input type="date" id="start_date" name="start_date" min="" onchange="validateDate()" class="form-control" required/>
						<label class="form-label" for="">Ngày</label>
					</div>
					</div>
					<div class="row d-flex justify-content-center">
  						<button type="submit" name="btn-search" class="btn btn-primary btn-block mb-4 col-5">Tìm</button>
					</div>
				</form>					
				</div>
</section>
<script>
$(document).ready(function(){
    $('#mySelect').change(function(){
        var selectedOption = $(this).val();
        // Gửi yêu cầu AJAX
        $.ajax({
            type: 'POST',
            url: 'index.php?type=home',
            data: {option: selectedOption},
            success: function(response){
				var tempElement = $('<div>').html(response);
                var newSelect = tempElement.find('select[name="diemDen"]');
                $('#diemDen').html(newSelect.html());
            }
        });
		
    });
});

var today = new Date();
    var formattedToday = today.toISOString().split('T')[0];

    document.getElementById("start_date").min = formattedToday;

    function validateDate() {
        var selectedDate = document.getElementById("start_date").value;
        if (selectedDate < formattedToday) {
            alert("Vui lòng chọn ngày lớn hơn hoặc bằng ngày hôm nay!");
            document.getElementById("start_date").value = formattedToday; 
        }
    }
</script>