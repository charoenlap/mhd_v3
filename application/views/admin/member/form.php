<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $heading_title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <?php if ($breadcrumbs) : ?>
                        <ol class="breadcrumb float-sm-right">
                            <?php foreach ($breadcrumbs as $title => $link) { ?>
                                <li class="breadcrumb-item"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
                            <?php } ?>
                        </ol>
                    <?php endif; ?>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <?php if (!empty($success)) : ?>
                        <div class="alert alert-success alert-dismissible"><?php echo $success; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger alert-dismissible"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-body">

                            <form class="user" action="<?php echo $action; ?>" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <b>
                                            <p>ข้อมูลเข้าระบบ</p>
                                        </b>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control form-control-user" id="" placeholder="อีเมล" value="<?php echo $member->email; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password" class="form-control form-control-user" id="" placeholder="เปลี่ยนรหัสผ่านกรอกที่นี่">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <b>
                                            <p>ข้อมูลส่วนตัว</p>
                                        </b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" class="form-control form-control-user" id="" placeholder="ชื่อ" value="<?php echo $member->firstname; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control form-control-user" id="" placeholder="นามสกุล" value="<?php echo $member->lastname; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="telephone" class="form-control form-control-user" id="" placeholder="เบอร์โทรศัพท์" value="<?php echo $member->telephone; ?>" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <b>
                                            <p>ข้อมูลสถานที่</p>
                                        </b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="hospital" class="form-control form-control-user" id="" placeholder="ชื่อโรงพยาบาล" value="<?php echo $company->name; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="room" class="form-control form-control-user" id="" placeholder="ชื่อห้องปฏิบัติการ" value="<?php echo $company->room; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="type_hospital" id="" class="form-control hospital">
                                            <option value="โรงพยาบาลศูนย์" <?php if($company->type_hospital == "โรงพยาบาลศูนย์"){ echo "selected"; } ?>>โรงพยาบาลศูนย์</option>
                                            <option value="โรงพยาบาลทั่วไป" <?php if($company->type_hospital == "โรงพยาบาลทั่วไป"){ echo "selected"; } ?>>โรงพยาบาลทั่วไป</option>
                                            <option value="โรงพยาบาลชุมชน" <?php if($company->type_hospital == "โรงพยาบาลชุมชน"){ echo "selected"; } ?>>โรงพยาบาลชุมชน</option>
                                            <option value="โรงพยาบาลมหาวิทยาลัย" <?php if($company->type_hospital == "โรงพยาบาลมหาวิทยาลัย"){ echo "selected"; } ?>>โรงพยาบาลมหาวิทยาลัย</option>
                                            <option value="โรงพยาบาลเอกชน" <?php if($company->type_hospital == "โรงพยาบาลเอกชน"){ echo "selected"; } ?>>โรงพยาบาลเอกชน</option>
                                            <option value="ห้องปฏิบัติการเอกชน" <?php if($company->type_hospital == "ห้องปฏิบัติการเอกชน"){ echo "selected"; } ?>>ห้องปฏิบัติการเอกชน</option>
                                            <option value="อื่นๆ" <?php if($company->type_hospital == "อื่นๆ"){ echo "selected"; } ?>>อื่นๆ</option>
                                        </select>
                                        <input type="text" name="type_hospital_other" class="form-control d-none mt-1" placeholder="กรอกประเภทโรงพยาบาล" value="<?php echo $company->type_hospital_other; ?>"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="total_bed" id="" class="form-control">
                                            <option value="1" <?php if($company->total_bed == "1"){ echo "selected"; } ?>>น้อยกว่า 100 เตียง</option>
                                            <option value="2" <?php if($company->total_bed == "2"){ echo "selected"; } ?>>101 - 300 เตียง</option>
                                            <option value="3" <?php if($company->total_bed == "3"){ echo "selected"; } ?>>301 - 500 เตียง</option>
                                            <option value="4" <?php if($company->total_bed == "4"){ echo "selected"; } ?>>มากกว่า 500 เตียง</option>
                                            <option value="5" <?php if($company->total_bed == "5"){ echo "selected"; } ?>>ไม่ระบุ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="address_1" class="form-control form-control-user" id="" placeholder="เลขที่บ้าน" value="<?php echo $company->address_1; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="address_2" class="form-control form-control-user" id="" placeholder="ตึก ชั้น ซอย ถนน" value="<?php echo $company->address_2; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="district" class="form-control form-control-user" id="district" placeholder="แขวง/ตำบล" value="<?php echo $company->district; ?>" required>

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="country" class="form-control form-control-user" id="country" placeholder="เขต/อำเภอ" value="<?php echo $company->country; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="province" class="form-control form-control-user" id="province" placeholder="จังหวัด" value="<?php echo $company->province; ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="postcode" class="form-control form-control-user" id="postcode" placeholder="รหัสไปษณีย์" value="<?php echo $company->postcode; ?>" required>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="">ยืนยันอีเมล</label>
                                        <select name="confirm" id="" class="form-control">
                                            <option value="1" <?php echo $member->confirm == 1 ? 'selected' : ''; ?>>ยืนยันอีเมลแล้ว</option>
                                            <option value="0" <?php echo $member->confirm == 0 ? 'selected' : ''; ?>>ยังไม่ได้ยืนยันอีเมล</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="สมัครสมาชิก">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/JQL.min.js"></script>
<script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.css">
<script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.Thailand({
            $district: $('#district'), // input ของตำบล
            $amphoe: $('#country'), // input ของอำเภอ
            $province: $('#province'), // input ของจังหวัด
            $zipcode: $('#postcode'), // input ของรหัสไปรษณีย์
        });
    });
</script>

<script>
    $('.hospital').change(function(e){
        let other = "อื่นๆ";
        if($(this).val() === other){
            $('[name="type_hospital_other"]').removeClass('d-none');
        }else{
            $('[name="type_hospital_other"]').addClass('d-none');
        }
    });
    if($('.hospital').val() === "อื่นๆ"){
        $('[name="type_hospital_other"]').removeClass('d-none');
    }
</script>