<style>
    a.payment-view {
        position: relative;
        background-size: contain;
        text-decoration: none;
    }

    .payment-counts {
        position: absolute !important;
        right: -8px;
        top: -6px !important;
        color: #fff;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?php echo $heading_title; ?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <?php if ($breadcrumbs) : ?>
                        <ol class="breadcrumb float-sm-right">
                            <?php foreach ($breadcrumbs as $title => $link) { ?>
                                <li class="breadcrumb-item"><a href="<?php echo $link; ?>">
                                        <?php echo $title; ?>
                                    </a></li>
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
                        <div class="alert alert-success alert-dismissible">
                            <?php echo $success; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo $action_1; ?>" method="GET">
                                <!-- <div class="form-group">
                                    <input type="text" name="filter_date" class="form-control pickerdate" placeholder="Range Date" value="<?php echo $filter_date; ?>" autocomplete="off">
                                </div> -->
                                <div class="row">
                                <div class="col-3">
                                        <label>เลขสมาชิก</label>
                                        <div class="form-group">
                                            <input type="text" name="filter_member" class="form-control" placeholder="ค้นหาเลขสมาชิก * ระบุเลข 4 ตัวหลัง" value="<?php echo $filter_member; ?>">
                                        </div>
                                    </div>
                                    <!-- <div class="col-3">
                                        <label>อีเมล</label>
                                        <div class="form-group">
                                            <input type="text" name="filter_email" class="form-control" placeholder="ค้นหา อีเมล" value="<?php echo $filter_email; ?>">
                                        </div>
                                    </div> -->
                                    <div class="col-3">
                                        <label>ชื่อโรงพยาบาล</label>
                                        <div class="form-group">
                                            <input type="text" name="filter_company" class="form-control" placeholder="ค้นหา โรงพยาบาล" value="<?php echo $filter_company; ?>">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label>ชื่อ</label>
                                        <div class="form-group">
                                            <input type="text" name="filter_name" class="form-control" placeholder="ค้นหา ชื่อ" value="<?php echo $filter_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label>ปี</label>
                                        <div class="form-group">
                                            <select name="filter_year" id="filter_year" class="form-control">
                                                <option value="">Year</option>
                                                <?php foreach ($year_info as $key => $value_year) { ?>
                                                    <option value="<?php echo $value_year->id ?>" <?php if ($filter_year == $value_year->id) {
                                                                                                        echo "selected";
                                                                                                    } ?>><?php echo $value_year->year; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>



                                    <!-- <div class="form-group">
                                    <select name="filter_print" id="" class="form-control">
                                        <option value="null" hidden>พิมพ์ใบเสร็จ</option>
                                        <option value="1" <?php if ($filter_print == '1') {
                                                                echo 'selected';
                                                            } else {
                                                                echo '';
                                                            } ?>>พิมพ์ใบเสร็จแล้ว</option>
                                        <option value="0" <?php if ($filter_print == '0') {
                                                                echo 'selected';
                                                            } else {
                                                                echo '';
                                                            } ?>>ยังไม่ได้พิมพ์ใบเสร็จ</option>
                                    </select>
                                </div> -->

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Filter" />
                                            <a href="<?php echo $action_1; ?>" class="btn btn-default ml-2">Clear</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <?php
                            // $payment_check = array_column($lists,'payment_check');
                            // $array_filter = array_multisort($payment_check, SORT_DESC, $lists);
                            ?>
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>เลขสมาชิก</th>
                                        <th>ชื่อสมาชิก</th>
                                        <th>ปีที่สมัคร</th>
                                        <th>วันที่สมัครสมาชิก</th>
                                        <!-- <th>Email</th> -->
                                        <th width="20%">โรงพยาบาล</th>
                                        <th width="10%">อนุมัติโปรแกรมที่สมัคร</th>
                                        <th width="10%">รายละเอียดการชำระเงิน</th>

                                        <!-- <th>เลขสมาชิก</th>
										<th>วันเวลาชำระเงิน</th>
										<th>ประเภทการชำระ</th>
										<th>รายชื่อโปรแกรมที่ชำระ</th>
										<th>ยอดแจ้งชำระ</th>
										<th>รูปภาพ <small>(คลิกเพื่อยืนยัน)</small></th>
										<th>พิมพ์ใบเสร็จ</th> -->
                                        <!-- <th width="15%" class="text-center">การจัดการ</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php if (count($lists) > 0) : ?>
                                        <?php foreach ($lists as $key => $value) : ?>
                                            <tr class="text-center">
                                                <td><?php echo $value->member_no; ?> </td>
                                                <td><?php echo $value->member_name; ?> </td>
                                                <td><?php
                                                    if ($value->year_id > 0) {
                                                        foreach ($year_info as $vals) {
                                                            if ($vals->id == $value->year_id) {
                                                                echo $vals->year;
                                                            }
                                                        }
                                                    }
                                                    ?></td>
                                                <td><?php echo $value->date_added; ?></td>
                                                <!-- <td><?php echo $value->email; ?></td> -->
                                                <td><?php echo $value->hospital; ?></td>
                                                <td class="text-center">
                                                    <a data-toggle="modal" data-target=".exsample_img_<?php echo $key . $value->id; ?>" style="cursor:pointer">
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="fas fa-align-justify"></i>
                                                        </button>
                                                    </a>
                                                    <form action="<?php echo $action; ?>" method="POST">
                                                        <div class="modal fade exsample_img_<?php echo $key . $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">สมาชิก
                                                                            <?php echo $value->member_no; ?>
                                                                        </h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body" id="modal_print">
                                                                        <div class="row">
                                                                            <div class="<?php echo ($value->payment_method == 'bank_transfer') ? 'col-sm-6' : 'col-sm-12'; ?>">
                                                                                <p class="text-danger mb-0">* โปรดเลือกโปรแกรมที่ต้องการอนุญาติในการใช้งาน</p>
                                                                                <table class="table">
                                                                                    <thead class="thead-dark">
                                                                                        <tr>
                                                                                            <th>สถานะ</th>
                                                                                            <th>ปี</th>
                                                                                            <th>โปรแกรม</th>
                                                                                            <th>สถานะการชำระเงิน</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <?php if(count($value->program_register) > 0 ): ?>
                                                                                        <?php foreach ($value->program_register as $key => $program) : ?>
                                                                                            <tr>
                                                                                                <td class="text-center">
                                                                                                    <select name="admin_approve[]" class="form-control form-control-sm" id="">
                                                                                                        <option value="0">ไม่อนุมัติใช้งาน</option>
                                                                                                        <option value="1" <?php if ($program->admin_approve == 1) {
                                                                                                                                echo "selected";
                                                                                                                            } ?>>อนุมัติใช้งาน</option>
                                                                                                    </select>
                                                                                                    <input type="hidden" name="register_program_id[]" value="<?php echo $program->id; ?>">
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo $program->year; ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php echo $program->program_name; ?>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <?php if ($program->send_slip == 1) { ?>
                                                                                                        <i class="far fa-check-circle fa-lg text-success"></i>
                                                                                                    <?php } else { ?>
                                                                                                        <i class="far fa-circle fa-lg text-danger"></i>
                                                                                                    <?php } ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        <?php endforeach; ?>
                                                                                        <?php else : ?>
                                                                                            <tr>
                                                                                            <td colspan="4">ไม่พบรายการสมัคร</td>
                                                                                            </tr>
                                                                                        <?php endif; ?>
                                                                                    </tbody>
                                                                                    <!-- <tfoot>
                                                                                        <?php if ($discount > 0) { ?>
                                                                                            <tr>
                                                                                            <td colspan="3" class="text-right">ส่วนลด</td>
                                                                                            <td class="text-right"><?php echo number_format($discount, 2); ?></td>
                                                                                            </tr>
                                                                                        <?php } ?>
                                                                                        <tr>
                                                                                            <td colspan="3" class="text-right">ราคารวม</td>
                                                                                            <td class="text-right">
                                                                                                <?php echo number_format($program_price, 2); ?>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tfoot> -->
                                                                                </table>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                                                                        <button type="submit" class="btn btn-success btn-sm">ยืนยัน</button>
                                                                        <!-- <a href="<?php echo $value->status == 1 ? base_url('admin/payment/unconfirm/' . $value->id) : base_url('admin/payment/confirm/' . $value->id); ?>" type="button" class="btn btn-<?php echo $value->status == 1 ? 'danger' : 'success'; ?> btn-sm">
                                                                            <?php echo $value->status == 1 ? 'ยกเลิก' : 'ยืนยัน'; ?>
                                                                        </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url('admin/payment/lists_payment/' . $value->member_id . '/' . $value->id); ?>" class="btn btn-primary payment-view <?php echo isset($value->payment_check) && $value->payment_check == 0 ? 'disabled' : ''; ?>">
                                                        <i class="fas fa-eye"></i>
                                                        <?php if ($value->payment_check > 0 && $value->payment_count != 0) { ?>
                                                            <span class="badge badge-danger payment-counts right mb-4"><?php echo $value->payment_count; ?></span>
                                                        <?php } ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="7" class="text-center">ไม่พบรายการ</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <?php echo $pagination;
                            ?>
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
<script type="text/javascript">
    $(document).ready(function() {
        // console.log(moment().format('DD-MM-YYYY'));
        console.log(moment().format('YYYY-MM-DD'));
        $('.pickerdate').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10),
            // maxDate: moment().format('DD/MM/YYYY'), 
            maxDate: moment().format('YYYY-MM-DD'),
            locale: {
                // format: 'DD/MM/YYYY'
                format: 'YYYY-MM-DD'
            }
        }, function(start, end, label) {
            // var years = moment().diff(start, 'years');
            // alert("You are " + years + " years old!");
        });
        $('.pickerdate').on('apply.daterangepicker', function(ev, picker) {
            console.log(picker);
            // $(this).val(picker.startDate.format('DD/MM/YYYY'));
            $(this).val(picker.startDate.format('YYYY-MM-DD'));
        });
    });
</script>