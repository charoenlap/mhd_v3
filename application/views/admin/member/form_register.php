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
                    <form class="user" action="<?php echo $action; ?>" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <b>
                                            <p>ข้อมูลสมาชิก</p>
                                        </b>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label class="col-md-3">เลขที่สมาชิก : </label>
                                    <div class="col-md-9">
                                        <?php echo $member->member_no; ?>
                                    </div>
                                    <label class="col-md-3">ชื่อ : </label>
                                    <div class="col-md-9">
                                        <?php echo $member->firstname; ?>
                                    </div>
                                    <label class="col-md-3">นามสกุล : </label>
                                    <div class="col-md-9">
                                        <?php echo $member->lastname; ?>
                                    </div>
                                    <label class="col-md-3">เบอร์โทรศัพท์ : </label>
                                    <div class="col-md-9">
                                        <?php echo $member->telephone; ?>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <b>
                                            <p>โปรแกรมที่ต้องการสมัคร</p>
                                        </b>
                                    </div>
                                </div>
                                <table class="table table-bordered table-hover" id="test-id-table">
                                    <thead>
                                        <tr>
                                            <th width="150">Program</th>
                                            <th>เลขสมาชิกใหม่</th>
                                            <th>ผู้ชำระเงิน (ชื่อบริษัท หรือ ชื่อโรงพยาบาล)</th>
                                            <th>ออกใบเสร็จในนาม</th>
                                            <th>ผู้ประสานงานจากบริษัท/โทรศัพท์/email</th>
                                            <th>ที่อยู่จัดส่งใบเสร็จ</th>
                                            <th>ราคา</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-table">
                                        <?php foreach ($test_register as $key_reg => $val_reg) : ?>
                                            <tr>
                                                <td>
                                                    <select name="program_register[]" class="form-control">
                                                        <?php foreach ($programs as $program) : ?>
                                                            <option value="<?php echo $program->id ?>" <?php if ($val_reg->program_id == $program->id) {
                                                                                                            echo 'selected';
                                                                                                        } ?>><?php echo $program->name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    foreach ($programs as $program) {
                                                        if ($val_reg->program_id == $program->id) {
                                                            echo $program->code . '_' . $program->name . '_TrialName_' . $member->member_no . (isset($member->oldref) ? '_' . $member->oldref : '');
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td class="text-center">
                                                    <textarea name="bill_company[]" id="bill_company_<?php echo $val_reg->id; ?>" class="form-control" cols="30" rows="2"><?php echo $val_reg->bill_company; ?></textarea>
                                                    <!-- <input type="text" name="bill_company[]" class="form-control" value="<?php echo $val_reg->bill_company; ?>"> -->
                                                </td>
                                                <td>
                                                    <textarea name="bill_name[]" id="bill_name_<?php echo $val_reg->id; ?>" class="form-control" cols="30" rows="2"><?php echo $val_reg->bill_name; ?></textarea>
                                                    <!-- <input type="text" name="bill_name[]" class="form-control" value="<?php echo $val_reg->bill_name; ?>"> -->
                                                </td>
                                                <td>
                                                    <textarea name="bill_contact[]" id="bill_contact_<?php echo $val_reg->id; ?>" class="form-control" cols="30" rows="2"><?php echo $val_reg->bill_contact; ?></textarea>
                                                    <!-- <input type="text" name="bill_contact[]" class="form-control" value="<?php echo $val_reg->bill_contact; ?>"> -->
                                                </td>
                                                <td>
                                                    <textarea name="bill_address[]" id="bill_address_<?php echo $val_reg->id; ?>" class="form-control" cols="30" rows="2"><?php echo $val_reg->bill_address; ?></textarea>
                                                    <!-- <input type="text" name="bill_address[]" class="form-control" value="<?php echo $val_reg->bill_address; ?>"> -->
                                                </td>
                                                <td><?php echo $val_reg->price; ?></td>

                                                <td>
                                                    <button type="button" class="btn btn-danger rounded-circle btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $val_reg->program_id; ?>">
                                                        <i class="fas fa-minus text-white fa-md"></i>
                                                    </button>
                                                    <!-- <a href="<?php echo base_url('admin/member/del_register/' . $val_reg->id); ?>" class="btn btn-danger rounded-circle btn-sm"><i class="fas fa-minus text-white fa-md"></i></a> -->
                                                </td>
                                                <input type="hidden" name="register_program_id[]" value="<?php echo $val_reg->id; ?>">
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal<?php echo $val_reg->program_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content border-0">
                                                            <div class="modal-header bg-danger">
                                                                <h5 class="modal-title" id="exampleModalLabel">โปรแกรมที่ต้องการลบ</h5>
                                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                กรุณายืนยันที่จะลบ โปรแกรม <?php foreach ($programs as $program_val) {
                                                                                                if ($val_reg->program_id == $program_val->id) {
                                                                                                    echo $program_val->name;
                                                                                                }
                                                                                            } ?>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="<?php echo base_url('admin/member/del_register/' . $val_reg->id); ?>" class="btn btn-danger"> ยืนยัน </a>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tr>
                                        <td colspan="2" class="text-center">เพิ่มโปรแกรม <button id="addRow" type="button" class="btn btn-success btn-sm"><i class="fas fa-plus fa-md"></i></button>
                                        </td>
                                        <td colspan="4" class="text-center">
                                            <h4>ยอดรวม</h4>
                                        </td>
                                        <td><?php echo number_format($total_price, 2); ?><input type="hidden" name="total_price" value="<?php echo $total_price; ?>"></td>
                                        <td></td>
                                    </tr>
                                </table>

                                <hr>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="ยืนยัน">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <!-- <label for="table-register">สมัครและออกค่าใช้จ่าย ดังนี้</label>
                            <table class="table table-bordered mb-4" name="table-register">
                                <thead>
                                    <tr>
                                        <th>โครงการ</th>
                                        <th>ผู้ชำระเงิน (ชื่อบริษัท หรือ ชื่อโรงพยาบาล)</th>
                                        <th>ออกใบเสร็จในนาม</th>
                                        <th>ผู้ประสานงานจากบริษัท/โทรศัพท์/email</th>
                                        <th>ที่อยู่จัดส่งใบเสร็จ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($test_register as $key_reg => $val_reg) : ?>
                                        <tr>
                                            <td>
                                                <?php
                                                foreach ($programs as $program) {
                                                    if ($val_reg->program_id == $program->id) {
                                                        echo $program->name;
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <input type="text" name="bill_company[]" class="form-control" value="<?php echo $val_reg->bill_company; ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="bill_name[]" class="form-control" value="<?php echo $val_reg->bill_name; ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="bill_contact[]" class="form-control" value="<?php echo $val_reg->bill_contact; ?>">
                                            </td>
                                            <td>
                                                <input type="text" name="bill_address[]" class="form-control" value="<?php echo $val_reg->bill_address; ?>">
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table> -->

                                <label for="">ชื่อที่หน่วยงานประสงค์ให้ปรากฏบนใบประกาศนียบัตร</label>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>โครงการ</th>
                                            <th>ชื่อห้องปฏิบัติการ (ภาษาอังกฤษเท่านั้น)</th>
                                            <th>ชื่อหน่วยงาน/โรงพยาบาล (ภาษาอังกฤษเท่านั้น)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($test_register as $key_reg => $val_reg) : ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    foreach ($programs as $program) {
                                                        if ($val_reg->program_id == $program->id) {
                                                            echo $program->name;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td><textarea type="text" name="bill_title_th[]" class="form-control"><?php echo $val_reg->bill_title_th; ?></textarea></td>
                                                <td><textarea type="text" name="bill_title_en[]" class="form-control"><?php echo $val_reg->bill_title_en; ?></textarea></td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                                <hr>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="บันทึก">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<table id="tikkub">
    <tr id="firstTr" style="display: none;">
        <td>
            <select class="form-control" name="new_test_id[]">
                <?php foreach ($program_value as $value_program) : ?>
                    <option value="<?php echo $value_program->id; ?>"><?php echo $value_program->name; ?></option>
                <?php endforeach; ?>
            </select>
        </td>
        <td colspan="6"></td>
        <td><button type="button" class="btn btn-danger rounded-circle btn-sm removeRow"><i class="fas fa-minus text-white fa-md"></i></button></td>
        <!-- <td><a href="" class="btn btn-danger rounded-circle btn-sm" id="removeRow"><i class="fas fa-minus text-white fa-md"></i></a></td> -->
    </tr>
</table>

<script>
    $(function() {
        $("#addRow").click(function() {
            $("#body-table").append('<tr class="test">' + $("#firstTr").html() + '</tr>');
            // $("#table-admin-cal tr:last").append($("#firstTr").clone());
        });
    });
    $(function(){
        $("#test-id-table").on('click','.removeRow', function(event) {
            $(this).parents('tr.test').remove();
        });
    });
</script>