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
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>เลขสมาชิก</th>
                                        <th>วันเวลาชำระเงิน</th>
                                        <th>ประเภทการชำระ</th>
                                        <th>รายชื่อโปรแกรมที่ชำระ</th>
                                        <!-- <th>ยอดแจ้งชำระ</th> -->
                                        <th>รูปภาพ <small>(คลิกเพื่อยืนยัน)</small></th>
                                        <!-- <th width="15%" class="text-center">การจัดการ</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists) > 0) : ?>
                                        <?php foreach ($lists as $key => $value) : ?>
                                            <?php foreach ($value->payments as $val_payment) : ?>
                                                <?php $val_program = json_decode($val_payment->program_payment); ?>
                                                <tr>
                                                    <td class="<?php echo $val_payment->status == 1?'text-success':'text-danger';?>"><?php echo $value->member_no; ?></td>
                                                    <td class="<?php echo $val_payment->status == 1?'text-success':'text-danger';?>"><?php echo $val_payment->date_added; ?></td>
                                                    <td class="<?php echo $val_payment->status == 1?'text-success':'text-danger';?>"><?php echo 'โอนเงินเข้าบัญชี 016-452491-2'; ?></td>
                                                    <td class="<?php echo $val_payment->status == 1?'text-success':'text-danger';?>">
                                                        <ul class="list-group">
                                                            <?php
                                                            foreach ($programs as $program) {
                                                                foreach ($val_program as $val_programs) {
                                                                    if ($val_programs == $program->id) { ?>
                                                                        <li class="list-group-item"><?php echo $program->name; ?></li>
                                                            <?php }
                                                                }
                                                            }
                                                            ?>
                                                        </ul>
                                                    </td>

                                                    <td class="text-center">
                                                        <a data-toggle="modal" data-target=".exsample_img_<?php echo $key . $val_payment->id; ?>" style="cursor:pointer">
                                                            <?php if ($value->payment_method == 'bank_transfer') : ?>
                                                                <!-- <img src="<?php echo base_url() . 'upload/' . $value->image; ?>" class="img-thumbnail" style="max-height:100px;" /> -->
                                                                <img src="<?php echo base_url() . 'upload/' . $val_payment->image; ?>" class="img-thumbnail" style="max-height:100px;" />
                                                            <?php else : ?>
                                                                View
                                                            <?php endif; ?>
                                                        </a>
                                                        <div class="modal fade exsample_img_<?php echo $key . $val_payment->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content-wrapper">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">สลิปของสมาชิก
                                                                                <?php echo $value->member_no; ?>
                                                                            </h5>
                                                                            &nbsp;&nbsp;
                                                                            <h5><?php echo $value->hospital; ?></h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        </div>
                                                                        <div class="modal-body" id="modal_print">
                                                                            <div class="row">
                                                                                <div class="<?php echo ($value->payment_method == 'bank_transfer') ? 'col-sm-6' : 'col-sm-12'; ?>">
                                                                                    <?php
                                                                                    $total = 0;
                                                                                    $discount = 0;
                                                                                    $case_one = "false";
                                                                                    $case_two = "false";
                                                                                    $case_tree = "false";
                                                                                    $program_price = 0;
                                                                                    ?>
                                                                                    <?php //foreach ($value->programs as $program) : 
                                                                                    ?>
                                                                                    <?php foreach ($val_program as $program) : ?>
                                                                                        <?php
                                                                                        foreach ($programs as $program_val) {
                                                                                            if ($program == $program_val->id) {
                                                                                                $total += (float)$program_val->price;
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                        <?php //$total += (float) $program->price; 
                                                                                        ?>
                                                                                        <?php
                                                                                        if ($program == 10) {
                                                                                            $case_one = "true";
                                                                                        } else if ($program == 12) {
                                                                                            $case_two = "true";
                                                                                        } else if ($program == 13) {
                                                                                            $case_tree = "true";
                                                                                        }
                                                                                        if ($case_one == "true" && $case_two == "true" && $case_tree == "true") {
                                                                                            $discount = 500;
                                                                                        } else if ($case_one == "true" && $case_two == "true") {
                                                                                            $discount = 200;
                                                                                        }
                                                                                        if ($discount > 0) {
                                                                                            $program_price = $total - $discount;
                                                                                        } else {
                                                                                            $program_price = $total;
                                                                                        }
                                                                                        ?>

                                                                                    <?php endforeach; ?>
                                                                                    <table class="table">
                                                                                        <tr>
                                                                                            <th>ยอดแจ้งชำระ</th>
                                                                                            <td>
                                                                                                <h4 class="mb-0">
                                                                                                    <?php //echo number_format($value->total, 2); 
                                                                                                    ?>
                                                                                                    <?php echo number_format($program_price, 2); ?>
                                                                                                </h4>
                                                                                                <!-- <?php if ($program_price != $value->total) : ?>
                                                                                                <p class="text-danger">เตือน : ยอดแจ้งชำระไม่ตรงกับยอดสมัครโปรแกรม</p>
                                                                                            <?php endif; ?> -->
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>ประเภทการชำระ</th>
                                                                                            <td>
                                                                                                <?php
                                                                                                switch ($value->payment_method) {
                                                                                                    case 'bank_transfer':
                                                                                                        echo 'โอนเงินเข้าบัญชี ธนาคารไทยพาณิชย์ จำกัด (มหาชน) สาขาศิริราช เลขที่บัญชี 016-452491-2 ชื่อบัญชี "โครงการ การประเมินคุณภาพทางห้องปฏิบัติการ โดดยองค์กรภายนอก คณะเทคนิคการแพทย์" พร้อมหลักฐานแนบ';
                                                                                                        break;
                                                                                                    case 'cheque':
                                                                                                        echo 'เช็คธนาคารในนาม "โครงการ การประเมินคุณภาพทางห้องปฏิบัติการ โดดยองค์กรภายนอก คณะเทคนิคการแพทย์"';
                                                                                                        break;
                                                                                                    case 'cash':
                                                                                                        echo 'ชำระเงินสด ที่ ศูนย์พัฒนามาตรฐานการประเมินผลิตภัณฑ์ คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล (โรงพยาบาลศิริราช)';
                                                                                                        break;
                                                                                                }
                                                                                                ?>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th>วันเวลาชำระเงิน</th>
                                                                                            <td>
                                                                                                <?php echo $date_pay = date('d/m/Y H:i:s', strtotime($value->slip_date . ' ' . $value->slip_time)); ?>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                    <table class="table">
                                                                                        <thead class="thead-dark">
                                                                                            <tr>
                                                                                               
                                                                                                <th>โปรแกรม</th>
                                                                                                <th>ราคา</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <?php foreach ($val_program as $key => $val_programs) : ?>
                                                                                                <tr>
                                                                                        
                                                                                                    <td class="text-left">
                                                                                                        <?php foreach ($programs as $program) {
                                                                                                            if ($val_programs == $program->id) { ?>
                                                                                                                <?php echo $program->name; ?>
                                                                                                        <?php }
                                                                                                        } ?>
                                                                                                    </td>
                                                                                                    <td class="text-right">
                                                                                                        <?php foreach ($programs as $program) {
                                                                                                            if ($val_programs == $program->id) { ?>
                                                                                                                <?php echo number_format($program->price, 2); ?>
                                                                                                        <?php }
                                                                                                        } ?>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            <?php endforeach; ?>
                                                                                        </tbody>
                                                                                        <tfoot>
                                                                                            <?php if ($discount > 0) { ?>
                                                                                                <tr>
                                                                                                    <td class="text-left">ส่วนลด</td>
                                                                                                    <td class="text-right"><?php echo number_format($discount, 2); ?></td>
                                                                                                </tr>
                                                                                            <?php } ?>
                                                                                            <tr>
                                                                                                <td class="text-left">ราคารวม</td>
                                                                                                <td class="text-right">
                                                                                                    <?php echo number_format($program_price, 2); ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tfoot>
                                                                                    </table>

                                                                                </div>
                                                                                <div class="col-sm-6 text-center">
                                                                                    <?php if ($value->payment_method == 'bank_transfer') : ?>
                                                                                        <img src="<?php echo base_url() . 'upload/' . $val_payment->image; ?>" class="img-fluid" />
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary btn-sm" onclick="window.print()" id="print-payment">พิมพ์</button>
                                                                            <a href="<?php echo $val_payment->status == 1 ? base_url('admin/payment/unconfirm/' . $val_payment->id .'/'. $value->member_id . '/' . $value->register_id) : base_url('admin/payment/confirm/' . $val_payment->id .'/'. $value->member_id . '/' . $value->register_id); ?>" type="button" class="btn btn-<?php echo $val_payment->status == 1 ? 'danger' : 'success'; ?> btn-sm">
                                                                                <?php echo $val_payment->status == 1 ? 'ยกเลิก' : 'ยืนยัน'; ?>
                                                                            </a>
                                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="text-center">ไม่มีรายการชำระ</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <?php //echo $pagination; 
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
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        .modal-content * {
            visibility: visible;
            overflow: visible;
        }

        .main-page * {
            display: none;
        }

        .modal {
            position: absolute;
            left: 0;
            top: 0;
            margin: 0;
            padding: 0;
            min-height: 550px;
            visibility: visible;
            overflow: visible !important;
            /* Remove scrollbar for printing. */
        }

        .modal-dialog {
            max-width: 100%;
            width: 100%;
            visibility: visible !important;
            overflow: visible !important;
            /* Remove scrollbar for printing. */
        }

        .btn,
        .close>span {
            visibility: hidden;
        }
    }
</style>
<script type="text/javascript">
    $(document).ready(function() {
        console.log(moment().format('DD-MM-YYYY'));
        $('.pickerdate').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            showDropdowns: true,
            minYear: 1901,
            maxYear: parseInt(moment().format('YYYY'), 10),
            maxDate: moment().format('DD/MM/YYYY'),
            locale: {
                format: 'DD/MM/YYYY'
            }
        }, function(start, end, label) {
            // var years = moment().diff(start, 'years');
            // alert("You are " + years + " years old!");
        });
        $('.pickerdate').on('apply.daterangepicker', function(ev, picker) {
            console.log(picker);
            $(this).val(picker.startDate.format('DD/MM/YYYY'));
        });
    });
</script>