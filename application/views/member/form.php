<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
    select {
        width: auto;
        border: none !important;
        pointer-events: none;
        background: none !important;
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
    }
</style>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ข้อมูลสมาชิก</h1>
    <label class="text-danger">*หากต้องการแก้ไขข้อมูลสมาชิก กรุณายื่นคำขอให้ดำเนินการ “เปลื่ยนแปลงข้อมูลสมาชิก” หรือติดต่อศูนย์ ฯ ที่หมายเลขโทรศัพท์  063 895 1287</label>

    <!-- DataTales Example -->
    <?php if (!empty($success)) { ?>
        <div class="card shadow mb-4">
            <div class="card-body border-left-success text-success"><i class="fas fa-check-circle text-success"></i> <?php echo $success; ?></div>
        </div>
    <?php } ?>
    <?php if (!empty($error)) { ?>
        <div class="card shadow mb-4">
            <div class="card-body border-left-danger text-danger"><i class="fas fa-times-circle text-danger"></i> <?php echo $error; ?></div>
        </div>
    <?php } ?>
    <!-- <form class="user" method="POST" action="<?php echo $action; ?>"> -->
    <form>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ข้อมูลส่วนตัว</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-0">
                            <div class="col-md-4">
                                <label class="font-weight-bold">ชื่อ</label>
                                <p class="form-control border-0"><?php echo $member_info->firstname; ?></p>
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">นามสกุล</label>
                                <p class="form-control border-0"><?php echo $member_info->lastname; ?></p>
                            </div>
                            <div class="col-md-4">
                                <label class="font-weight-bold">อีเมล</label>
                                <p class="form-control border-0"><?php echo $member_info->email; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="บันทึก" />
                    </div> -->
                </div>
            </div>
        </div>
    </form>

    <!-- <form method="POST" action="<?php echo $action; ?>"> -->
    <form>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ที่อยู่สำหรับจัดส่งเอกสาร / ตัวอย่างทดสอบ</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">คลินิก / หน่วยงาน</label>
                                <p class="form-control border-0"><?php echo $hospital; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">ชื่อห้องปฏิบัติการ</label>
                                <p class="form-control border-0"><?php echo $room; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">ประเภทโรงพยาบาล</label>
                                <p class="form-control border-0"><?php echo $type_hospital; ?></p>
                                <input type="text" name="type_hospital_other" class="form-control border-0 <?php if ($type_hospital == "อื่นๆ") {
                                                                                                        echo "";
                                                                                                    } else {
                                                                                                        echo "d-none";
                                                                                                    } ?> mt-1" placeholder="กรอกประเภทโรงพยาบาล" disabled="disabled" />
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">จำนวนเตียง</label>
                                <select name="total_bed" id="" class="form-control border-0" disabled="disabled">
                                    <option <?php echo isset($total_bed) && $total_bed == "1" ? 'selected' : ''; ?> value="1">น้อยกว่า 100 เตียง</option>
                                    <option <?php echo isset($total_bed) && $total_bed == "2" ? 'selected' : ''; ?> value="2">101 - 300 เตียง</option>
                                    <option <?php echo isset($total_bed) && $total_bed == "3" ? 'selected' : ''; ?> value="3">301 - 500 เตียง</option>
                                    <option <?php echo isset($total_bed) && $total_bed == "4" ? 'selected' : ''; ?> value="4">มากกว่า 500 เตียง</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">ที่อยู่เลขที่</label>
                                <p class="form-control border-0"><?php echo $address_1; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">ตึก ชั้น ซอย ถนน</label>
                                <p class="form-control border-0"><?php echo $address_2; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">แขวง/ตำบล</label>
                                <p class="form-control border-0"><?php echo $district; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">เขต/อำเภอ</label>
                                <p class="form-control border-0"><?php echo $country; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">จังหวัด</label>
                                <p class="form-control border-0"><?php echo $province; ?></p>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="font-weight-bold">รหัสไปรษณีย์</label>
                                <p class="form-control border-0"><?php echo $postcode; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="บันทึก" />
                    </div> -->
                </div>
            </div>
        </div>
    </form>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">ข้อมูลประกาศนียบัตร</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <div class="mb-2 ml-2 mr-3">
                            <label class="form-control border-0">ปี</label>
                        </div>
                        <div class="mb-2">
                            <p class="form-control border-0"><?php echo $year; ?></p>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>โครงการ</th>
                                    <th>ชื่อห้องปฏิบัติการ(ภาษาอังกฤษ)</th>
                                    <th>ชื่อหน่วยงาน(ภาษาอังกฤษ)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($register_program as $values) { ?>
                                    <tr>
                                        <td><?php echo $values->program_name; ?></td>
                                        <td><?php echo $values->bill_title_th; ?></td>
                                        <td><?php echo $values->bill_title_en; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" value="บันทึก" />
                    </div> -->
            </div>
        </div>
    </div>

    <form action="<?php echo $action; ?>" method="POST" id="confirm-password">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">เปลี่ยนรหัส</h6>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-3 col-sm-12">
                        <label>รหัสผ่านเดิม</label>
                        <input type="password" class="form-control" name="old_password" id="Oldpassword" value="" placeholder="รหัสผ่านเดิม">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3 col-sm-12">
                        <label>รหัสผ่านใหม่</label>
                        <input type="password" class="form-control" name="new_password" id="InputPassword" value="" placeholder="รหัสผ่านใหม่">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label>ยืนยันรหัสผ่านใหม่</label>
                        <input type="password" class="form-control" name="new_password_confirm" id="RepeatPassword" value="" placeholder="ยืนยันรหัสผ่านใหม่">
                    </div>
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-primary" id="submit-password" value="เปลี่ยนรหัสผ่าน" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    // $.validator.setDefaults({
    //     submitHandler: function() {
    //         alert("submitted!");
    //     }
    // });

    $(document).ready(function() {
        $('[name="type_hospital"]').change(function(e) {
            let other = 'อื่นๆ';
            if ($(this).val() === other) {
                $('[name="type_hospital_other"]').removeClass('d-none');
            } else {
                $('[name="type_hospital_other"]').addClass('d-none');
            }
        });
        $("#confirm-password").validate({
            rules: {
                old_password: {
                    required: true
                },
                new_password: {
                    required: true,
                    minlength: 5
                },
                new_password_confirm: {
                    required: true,
                    minlength: 5,
                    equalTo: "#InputPassword"
                }
            },
            messages: {
                old_password: {
                    required: "<p class='text-danger'><small> กรุณาระบุ password เก่า </small></p>"
                },
                new_password: {
                    required: "<p class='text-danger'><small> กรุณาระบุ password </small></p>",
                    minlength: "<p class='text-danger'><small> กรุณาระบุ password มากกว่า 5 ตัว </small></p>"
                },
                new_password_confirm: {
                    required: "<p class='text-danger'><small> กรุณาระบุ password </small></p>",
                    minlength: "<p class='text-danger'><small> กรุณาระบุ password มากกว่า 5 ตัว </small></p>",
                    equalTo: "<p class='text-danger'><small> กรุณาระบุ password ให้ตรงกัน </small></p>"
                },
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).parents(".col-md-3").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents(".col-md-3").addClass("has-success").removeClass("has-error");
            }
        });
    });
</script>