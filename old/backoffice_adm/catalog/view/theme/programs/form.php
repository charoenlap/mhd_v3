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
                                    <label for="" class="col-md-3 col-form-label">ปี ของ Trial<span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <select name="year_id" class="form-control" required>
                                        <?php foreach ($years as $year) : ?>
                                            <option value="<?php echo $year['id'];?>" <?php echo is($trial_info,'year_id')==$year['id']?'selected':'';?>><?php echo $year['name'];?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">ชื่อ Trial <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Trial Name" value="<?php echo is($trial_info,'name');?>" />
                                        <small id="alert-name"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label">วัน<span class="text-danger">ปิด</span>รับลงผล (ค.ศ.) <span class="text-danger">*</span></label>
                                    <div class="col-md-8">
                                    
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                            
                                            <input type="text" name="date_expire" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo !empty(is($trial_info,'date_expire')) ? date('d/m/Y', strtotime(is($trial_info,'date_expire'))) : '';?>"/>
                                            
                                        </div>
                                        <small>คลิกที่ไอคอน เพื่อเลือกวันที่ </small>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-block btn-primary" id="submitregis">แก้ไขข้อมูล</button>
                                        <a href="<?php echo route('programs','program='.get('program'));?>" class="btn btn-default btn-block">กลับ</a>
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

<!-- date-range-picker -->
<link rel="stylesheet" href="<?php echo MURL; ?>assets/plugins/daterangepicker/daterangepicker.css">
<script src="<?php echo MURL; ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo MURL; ?>assets/plugins/moment/moment.min.js"></script>
<link rel="stylesheet" href="<?php echo MURL; ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<script src="<?php echo MURL; ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('[name="name"]').keyup(function (e) { 
        var thisyear = $('[name="year_id"]').val();
        var thisvalue = $(this).val();
        var thisid = <?php echo get('id')>0 ? get('id') : 0;?>;
        $('#alert-name').html('');
        $('#submitregis').html('กำลังตรวจสอบชื่อ Trial ...').attr('disabled','disabled');
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "<?php echo $ajax;?>",
            data: {program: '<?php echo get('program');?>', year_id: thisyear, name: thisvalue, id: thisid},
            success: function (response) {
                console.log(response);
                if (response==true) {
                    $('#alert-name').html('<span class="text-danger">ชื่อ Trial ถูกใช้ไปแล้วใน โปรแกรมนี้ของปี '+$('[name="year_id"]>option[value="'+thisyear+'"]').html()+' กรุณาเปลี่ยนชื่อใหม่</span>');
                    $('#submitregis').html('ชื่อ Trial ซ้ำ').attr('disabled','disabled');
                } else {
                    $('#alert-name').html('<span class="text-success">สามารถใช้ชื่อนี้ได้</span>');
                    $('#submitregis').removeAttr('disabled').html('แก้ไขข้อมูล');
                }
            }
        });    
    });
    
});
</script>