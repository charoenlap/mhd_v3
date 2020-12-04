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
                                        <th>เวลา</th>
                                        <th>รูปภาพ</th>
                                        <th width="15%" class="text-center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists)>0) : ?>
                                    <?php foreach ($lists as $key => $value) : ?>
                                    <tr>
                                        <td><?php echo $value->member_no;?></td>
                                        <td><?php echo date('d/m/Y H:i:s', strtotime($value->slip_date.' '.$value->slip_time)); ?></td>
                                        <td><img src="<?php echo base_url().$value->image;?>" /></td>
                                        <td>
                                            <span class="text-danger"><i class="fas fa-times-circle"></i> ยังไม่ได้ชำระ</span>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    จัดการ
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <a class="dropdown-item" href="<?php echo base_url('admin/member/edit/'.$value->id);?>">แก้ไข ข้อมูลผู้สมัคร</a>
                                                    <a class="dropdown-item" href="#">แก้ไข โปรแกรมที่สมัคร</a>
                                                    <a class="dropdown-item" href="#">ตรวจสอบ การชำระเงิน</a>
                                                    <a class="dropdown-item" href="#">Export Excel</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo base_url('admin/member/sendEmailConfirm/'.$value->id);?>" onclick="return confirm('การส่งเมลไม่ควรกดส่งถี่ๆ จะทำให้อีเมลระบบโดนแจ้งเป็นสแปมเมลได้ ยืนยันการส่งเมล?');">ส่งอีเมลยืนยันการสมัคร</a>
                                                    <a class="dropdown-item" href="<?php echo base_url('admin/member/sendEmailForgot/'.$value->id);?>" onclick="return confirm('การส่งเมลไม่ควรกดส่งถี่ๆ จะทำให้อีเมลระบบโดนแจ้งเป็นสแปมเมลได้ ยืนยันการส่งเมล?');">ส่งอีเมลรีเซทรหัสผ่าน</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="<?php echo base_url('admin/member/del/'.$value->id);?>" onclick="return confirm('ยืนยันการลบ');">ลบ ข้อมูลผู้สมัคร</a>
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