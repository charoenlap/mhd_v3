<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $heading_title;?></h1>
                </div>
                <div class="col-sm-6">
                    <?php if ($breadcrumbs) : ?>
                    <ol class="breadcrumb float-sm-right">
                        <?php foreach ($breadcrumbs as $title => $link) { ?>
                        <li class="breadcrumb-item"><a href="<?php echo $link;?>"><?php echo $title; ?></a></li>
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
                    <div class="alert alert-success alert-dismissible"><?php echo $success;?></div>
                    <?php endif;?>
                    <?php if (!empty($error)) : ?>
                    <div class="alert alert-danger alert-dismissible"><?php echo $error;?></div>
                    <?php endif;?>
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>เลขสมาชิก</th>
                                        <th>วันเวลาชำระเงิน</th>
                                        <th>ธนาคาร</th>
                                        <th>ยอดแจ้งชำระ</th>
                                        <th>รูปภาพ <small>(คลิกเพื่อยืนยัน)</small></th>
                                        <!-- <th width="15%" class="text-center">การจัดการ</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists)>0) : ?>
                                    <?php foreach ($lists as $key => $value) : ?>
                                    <tr>
                                        <td class="<?php echo $value->status==1?'text-success':'';?>"><?php echo $value->member_no;?></td>
                                        <td class="<?php echo $value->status==1?'text-success':'';?>"><?php echo $date_pay = date('d/m/Y H:i:s', strtotime($value->slip_date.' '.$value->slip_time)); ?></td>
                                        <td class="<?php echo $value->status==1?'text-success':'';?>"><?php echo $value->bank_name;?></td>
                                        <td class="<?php echo $value->status==1?'text-success':'';?>"><?php echo number_format($value->total, 2);?></td>
                                        <td>
                                            <a data-toggle="modal" data-target=".exsample_img_<?php echo $value->id;?>" style="cursor:pointer">
                                                <img src="<?php echo base_url().'upload/'.$value->image;?>" class="img-thumbnail" style="max-height:100px;" />
                                            </a>
                                            <div class="modal fade exsample_img_<?php echo $value->id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">สลิปของสมาชิก <?php echo $value->member_no;?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body ">
                                                        <div class="row">
                                                        <div class="col-sm-6">
                                                            <?php $total = 0; ?>
                                                            <?php foreach ($value->programs as $program) : ?>
                                                            <?php $total+=(double)$program->price;?>
                                                            <?php endforeach; ?>
                                                            <table class="table">
                                                                <tr>
                                                                    <th>ยอดแจ้งชำระ</th>
                                                                    <td>
                                                                        <h4 class="mb-0"><?php echo number_format($value->total,2);?></h4>
                                                                        <?php if ($total!=$value->total) : ?>
                                                                        <p class="text-danger">เตือน : ยอดแจ้งชำระไม่ตรงกับยอดสมัครโปรแกรม</p>
                                                                        <?php endif;?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>ธนาคาร</th>
                                                                    <td><?php echo $value->bank_name;?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>วันเวลาชำระเงิน</th>
                                                                    <td><?php echo $date_pay;?></td>
                                                                </tr>
                                                            </table>
                                                            <table class="table">
                                                                <thead class="thead-dark">
                                                                    <tr>
                                                                        <th>ปี</th>
                                                                        <th>โปรแกรม</th>
                                                                        <th>ราคา</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach ($value->programs as $program) : ?>
                                                                <tr>
                                                                    <td><?php echo $program->year;?></td>
                                                                    <td><?php echo $program->name;?></td>
                                                                    <td><?php echo number_format($program->price,2);?></td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td colspan="2" class="text-right">ราคารวม</td>
                                                                        <td><?php echo number_format($total,2);?></td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            
                                                        </div>
                                                        <div class="col-sm-6 text-center">
                                                            <img src="<?php echo base_url().'upload/'.$value->image;?>" class="img-fluid" />
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">ยกเลิก</button>
                                                        <a href="<?php echo $value->status==1?base_url('admin/payment/unconfirm/'.$value->id):base_url('admin/payment/confirm/'.$value->id);?>" type="button" class="btn btn-<?php echo $value->status==1?'danger':'success';?> btn-sm"><?php echo $value->status==1?'ยกเลิก':'ยืนยัน';?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </td>
                                       
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </tbody>
                            </table>

                            <?php echo $pagination; ?>

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