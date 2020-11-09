<div class="container-fluid mt-2">
	<div class="page-wrapper">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title"><?php echo $title; ?></h4>
				<p class="text-muted mb-0">แก้ไขข้อมูลส่วนตัว</p>
			</div>
			<div class="card-body bootstrap-select-1">
				<form class="auth-form my-4" action="<?php echo $action;?>" method="POST" id="form_auth">
					<div id="group1">
						<div class="form-group row">
							<label for="" class="col-md-3 col-form-label">อีเมล เข้าสู่ระบบ <span class="text-danger">*</span></label>
							<div class="col-md-8">
								<input type="text" class="form-control" id="" name="email" placeholder="Email" value="" required autocomplete="off">
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
					<hr>
						<div class="form-group row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<p id="message" class="mb-0 text-center"></p>
								<button type="submit" class="btn btn-block btn-primary" id="submitregis">แก้ไข</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>