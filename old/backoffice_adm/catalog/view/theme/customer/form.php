<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <?php if (isset($breadcrumb)) { ?>
                    <ol class="breadcrumb float-sm-right">
                        <?php $i = 0;foreach ($breadcrumb as $key => $value): ?>
                        <?php $i++; ?>
                        <?php if ($i == count($breadcrumb)): ?>
                        <li class="breadcrumb-item active"><?php echo $key; ?></li>
                        <?php else: ?>
                        <li class="breadcrumb-item"><a href=""><?php echo $key; ?></a></li>
                        <?php endif; ?>
                        <?php endforeach ?>


                    </ol>
                    <?php } ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ตารางแสดง<?php echo $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php echo isset($success) ? '<div class="alert alert-success" role="alert">' . $success . '</div>' : ''; ?>
                            <?php echo isset($error) ? '<div class="alert alert-danger" role="alert">' . $error . '</div>' : ''; ?>
                            <form class="auth-form my-4" action="<?php echo $action; ?>" method="POST" id="form_auth">
                                <div id="group1">
									<?php if ($hide_member_no): ?>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">รหัสสมาชิก</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext" id="" value="<?php echo is($member_info, 'member_no'); ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">อีเมล เข้าสู่ระบบ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext" id="" name="email" placeholder="Email" value="<?php echo is($member_info, 'email'); ?>" readonly>
											<!-- <small class="text-danger" id="emailfail">อีเมลนี้มีอยู่ในระบบแล้ว</small> -->
                                        </div>
                                    </div>
									<?php else: ?>
									<div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">อีเมล เข้าสู่ระบบ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="" name="email" placeholder="Email" value="<?php echo is($member_info, 'email'); ?>" required>
											<small class="text-danger" id="emailfail">อีเมลนี้มีอยู่ในระบบแล้ว</small>
                                        </div>
                                    </div>
									<?php endif; ?>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">ชื่อจริง-นามสกุลจริง <span class="text-danger">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="firstname" placeholder="Firstname" value="<?php echo is($member_info, 'firstname'); ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="lastname" placeholder="Lastname" value="<?php echo is($member_info, 'lastname'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="" name="telephone" placeholder="Telephone Number" value="<?php echo is($member_info, 'telephone'); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div id="group2">
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">ชื่อห้องปฏิบัติการและโรงพยาบาล <span class="text-danger">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="laboratory" placeholder="Laboratory" value="<?php echo is($member_info, 'laboratory'); ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="hospital" placeholder="Hospital" value="<?php echo is($member_info, 'hospital'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">ประเภท</label>
                                        <div class="col-md-4">
                                            <select name="type_hospital" id="" class="form-control">
                                                <option <?php echo $member_info['type_hospital'] == 'โรงพยาบาลศูนย์' ? 'selected' : ''; ?> value="โรงพยาบาลศูนย์">โรงพยาบาลศูนย์ - Hospital Center </option>
                                                <option <?php echo $member_info['type_hospital'] == 'โรงพยาบาลทั่วไป' ? 'selected' : ''; ?> value="โรงพยาบาลทั่วไป">โรงพยาบาลทั่วไป - General hospital </option>
                                                <option <?php echo $member_info['type_hospital'] == 'โรงพยาบาลชุมชน' ? 'selected' : ''; ?> value="โรงพยาบาลชุมชน">โรงพยาบาลชุมชน - Community Hospital </option>
                                                <option <?php echo $member_info['type_hospital'] == 'โรงพยาบาลมหาวิทยาลัย' ? 'selected' : ''; ?> value="โรงพยาบาลมหาวิทยาลัย">โรงพยาบาลมหาวิทยาลัย - University Hospital </option>
                                                <option <?php echo $member_info['type_hospital'] == 'โรงพยาบาลเอกชน' ? 'selected' : ''; ?> value="โรงพยาบาลเอกชน">โรงพยาบาลเอกชน - Private hospitals </option>
                                                <option <?php echo $member_info['type_hospital'] == 'ห้องปฏิบัติการเอกชน' ? 'selected' : ''; ?> value="ห้องปฏิบัติการเอกชน">ห้องปฏิบัติการเอกชน - Private Laboratory </option>
                                                <option <?php echo $member_info['type_hospital'] == 'อื่นๆ' ? 'selected' : ''; ?> value="อื่นๆ">อื่นๆ - Other </option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <?php if ($member_info['type_hospital'] == 'อื่นๆ') { ?>
                                            <input type="text" class="form-control" id="type_other" name="type_other" placeholder="Other Type" value="<?php echo is($member_info, 'type_other'); ?>">
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">ตึก - ชั้น</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="building" placeholder="Building" value="<?php echo is($member_info, 'building'); ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="floor" placeholder="Floor" value="<?php echo is($member_info, 'floor'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">ที่อยู่ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="" name="address_1" placeholder="Address information" value="<?php echo is($member_info, 'address_1'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">ที่อยู่ (เพิ่มเติม)</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="" name="address_2" placeholder="Address information" value="<?php echo is($member_info, 'address_2'); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">แขวง - เขต <span class="text-danger">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="district" name="district" placeholder="District" value="<?php echo is($member_info, 'district'); ?>" required autocomplete="off">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo is($member_info, 'city'); ?>" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">จังหวัด <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="province" name="province" placeholder="Province" value="<?php echo is($member_info, 'province'); ?>" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">รหัสไปษณีย์ <span class="text-danger">*</span></label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Zipcode" value="<?php echo is($member_info, 'zipcode'); ?>" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 col-form-label">เบอร์ติดต่อ <span class="text-danger">*</span></label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="office_telephone" placeholder="Office Telephone *" value="<?php echo is($member_info, 'office_telephone'); ?>" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="" name="fax" placeholder="Fax" value="<?php echo is($member_info, 'fax'); ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <p id="message" class="mb-0 text-center"></p>
                                            <button type="submit" class="btn btn-block btn-primary" id="submitregis">แก้ไขข้อมูล</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<link rel="stylesheet" href="<?php echo MURL; ?>assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.css">
<script type="text/javascript" src="<?php echo MURL; ?>assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script type="text/javascript" src="<?php echo MURL; ?>assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
<script type="text/javascript" src="<?php echo MURL; ?>assets/js/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	// check email
	$('#emailfail').hide();
	<?php if ($hide_member_no==false): ?>
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
	<?php endif;?>

    $.Thailand({
        $district: $('#district'), // input ของตำบล
        $amphoe: $('#city'), // input ของอำเภอ
        $province: $('#province'), // input ของจังหวัด
        $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
    });

});
</script>