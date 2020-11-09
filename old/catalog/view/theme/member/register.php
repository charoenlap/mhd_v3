<?php 
if (isset($style)) { 
	foreach ($style as $value) {
		echo '<link rel="stylesheet" href="'.$value.'">';
	}
}
?>

<div class="container-fluid" style="background:url('<?php echo MURL;?>assets/images/bg.png') no-repeat center center / cover;">
	<div class="container">
		<div class="row vh-100 d-flex justify-content-center">
			<div class="col-12 ">
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<img src="<?php echo MURL;?>assets/images/header.png" alt="" class="img-fluid">
						<div class="card">
							<div class="card-body p-0 auth-header-box">
								<div class="text-center pt-4">
									<h3 class="mt-1 mb-1 font-weight-semibold">สมัครสมาชิก</h3>
								</div>
							</div>
							<div class="card-body pt-1">
								<?php echo isset($success) ? '<div class="alert alert-success" role="alert">'.$success.'</div>' : ''; ?>
								<?php echo isset($error) ? '<div class="alert alert-danger" role="alert">'.$error.'</div>' : ''; ?>
								<form class="auth-form my-4" action="<?php echo $action;?>" method="POST" id="form_auth">
									<div id="group1">
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">อีเมล เข้าสู่ระบบ <span class="text-danger">*</span></label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="" name="email" placeholder="Email" value="" required autocomplete="off">
												<small class="text-danger" id="emailfail">อีเมลนี้มีอยู่ในระบบแล้ว</small>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">ชื่อจริง-นามสกุลจริง <span class="text-danger">*</span></label>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="firstname" placeholder="Firstname" value="" required>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="lastname" placeholder="Lastname" value="" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="" name="telephone" placeholder="Telephone Number" value="" required>
											</div>
										</div>
									</div>
									<hr>
									<div id="group2">
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">ชื่อห้องปฏิบัติการและโรงพยาบาล <span class="text-danger">*</span></label>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="laboratory" placeholder="Laboratory" value="" required>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="hospital" placeholder="Hospital" value="" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">ประเภท</label>
											<div class="col-md-4">
												<select name="type_hospital" id="" class="form-control">
													<option value="โรงพยาบาลศูนย์">โรงพยาบาลศูนย์ - Hospital Center </option>
													<option value="โรงพยาบาลทั่วไป">โรงพยาบาลทั่วไป - General hospital </option>
													<option value="โรงพยาบาลชุมชน">โรงพยาบาลชุมชน - Community Hospital </option>
													<option value="โรงพยาบาลมหาวิทยาลัย">โรงพยาบาลมหาวิทยาลัย - University Hospital </option>
													<option value="โรงพยาบาลเอกชน">โรงพยาบาลเอกชน - Private hospitals </option>
													<option value="ห้องปฏิบัติการเอกชน">ห้องปฏิบัติการเอกชน - Private Laboratory </option>
													<option value="อื่นๆ">อื่นๆ - Other </option>
												</select>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="type_other" name="type_other" placeholder="Other Type" value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">ตึก - ชั้น</label>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="building" placeholder="Building" value="">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="floor" placeholder="Floor" value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">ที่อยู่ <span class="text-danger">*</span></label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="" name="address_1" placeholder="Address information" value="" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">ที่อยู่ (เพิ่มเติม)</label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="" name="address_2" placeholder="Address information" value="">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">แขวง - เขต <span class="text-danger">*</span></label>
											<div class="col-md-4">
												<input type="text" class="form-control" id="district" name="district" placeholder="District" value="" required autocomplete="off">
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="city" name="city" placeholder="City" value="" required autocomplete="off">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">จังหวัด <span class="text-danger">*</span></label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="province" name="province" placeholder="Province" value="" required autocomplete="off">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">รหัสไปษณีย์ <span class="text-danger">*</span></label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" value="" required autocomplete="off">
											</div>
										</div>
										<div class="form-group row">
											<label for="" class="col-md-3 col-form-label">เบอร์ติดต่อ <span class="text-danger">*</span></label>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="office_telephone" placeholder="Office Telephone *" value="" required>
											</div>
											<div class="col-md-4">
												<input type="text" class="form-control" id="" name="fax" placeholder="Fax" value="">
											</div>
										</div>
									<hr>
										<div class="form-group row">
											<div class="col-md-1"></div>
											<div class="col-md-10">
												<p id="message" class="mb-0 text-center"></p>
												<button type="submit" class="btn btn-block btn-primary" id="submitregis">สมัครสมาชิก</button>
												<a href="<?php echo $link_login; ?>" class="btn btn-block btn-outline-light" id="linklogin">เข้าสู่ระบบ</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--end card-body-->
						<div class="card-body text-center">
							<span class="text-muted d-none d-sm-inline-block">Power by <a href="http://www.friendlysoftpro.com/">Friendlysoftpro</a> © <?php echo date('Y');?></span>
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end col-->
	</div>
	<!--end row-->
</div>

<?php 
if (isset($script)) { 
	foreach ($script as $value) {
		echo '<script type="text/javascript" src="'.$value.'"></script>';
	}
}
?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	// Fix BG
	$('.container-fluid').css('height', $(document).height()+'px');


	// check email
	$('#emailfail').hide();
	$('[name="email"]').keyup(function(event) {
		var value = $(this).val();
		$.ajax({
			url: '<?php echo $ajax;?>',
			type: 'POST',
			dataType: 'json',
			data: {email: value},
			success: function(data) {
				$('#message').html('<i class="fas fa-spinner fa-pulse"></i> กำลังตรวจสอบอีเมล...');
				$('#submitregis').attr('disabled','disabled');
				if (data.result==true) {
					$('#emailfail').show();
					$('#message').html('<span class="text-danger"><i class="fas fa-times"></i> ไม่สามารถใช้งานอีเมลนี้ได้</span>');
				} else {
					$('#emailfail').hide();
					$('#submitregis').removeAttr('disabled');
					$('#message').html('');
				}
			}
		})
		.fail(function() {
			console.log("error");
		});
	});

	// $("#submitregis").click(function(event) {
	// 	event.preventDefault();
	// 	$('#message').html('<i class="fas fa-spinner fa-pulse"></i> กำลังดำเนินการ...');
	// });
	$('#form_auth').submit(function(event) {
		$('#message').html('<i class="fas fa-spinner fa-pulse"></i> กำลังดำเนินการโปรดรอ...');
		$('#submitregis,#linklogin').hide();
	});



	$.Thailand({
		$district: $('#district'), // input ของตำบล
		$amphoe: $('#city'), // input ของอำเภอ
		$province: $('#province'), // input ของจังหวัด
		$zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
	});


	var other = $('#typeother');
	other.hide();
	$('[name="type_hospital"]').change(function(event) {
		other.val('');
		if ($(this).val()=='อื่นๆ') {
			other.fadeIn('fast');
		} else {
			other.hide();
		}
	});
});
</script>