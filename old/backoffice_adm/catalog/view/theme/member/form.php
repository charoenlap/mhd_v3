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
                        <li class="breadcrumb-item"><a href="<?php echo $value;?>"><?php echo $key; ?></a></li>
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
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">สิทธิ์ในการใช้งาน <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <?php if ($user_info['admin_type_id']==1) : ?>
                                        <input type="text" class="form-control-plaintext" readonly id="" value="Super" required>
                                        <?php else: ?>
                                        <select name="admin_type_id" id="" class="form-control">
                                        <?php foreach ($admin_type as $value): ?>
                                            <?php if ($value['id']!=1) : ?>
                                            <option value="<?php echo $value['id'];?>" <?php echo $user_info['admin_type_id']==$value['id'] ? 'selected' : '';?>><?php echo $value['type'];?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">ชื่อเข้าใช้งาน <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control-plaintext" readonly id="" name="username" placeholder="Username" value="<?php echo is($user_info, 'username'); ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">รหัสผ่าน <span class="text-danger">*</span></label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="" name="password" placeholder="รหัสผ่านใหม่" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="" name="confirm" placeholder="ยืนยันรหัสผ่าน" value="">
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