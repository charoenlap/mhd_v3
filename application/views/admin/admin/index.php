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
                <div class="col-12">
                    <!-- <a href="<?php echo base_url('admin/program/add'); ?>" class="btn btn-primary btn-sm mt-2"><i class="fas fa-plus"></i> เพิ่มโปรแกรม</a>-->
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
                            <a href="<?php echo $add_link; ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Admin</a>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="5%">ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>สถานะ</th>
                                        <th width="15%" class="text-center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists) > 0) : ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($lists as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $value->username; ?></td>
                                                <td><?php echo !empty($value->date_login) ? "เข้าสู่ระบบเมื่อ : " . date('d/m/Y H:i', strtotime($value->date_login)) : ''; ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            จัดการ
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/admin/edit/' . $value->id); ?>">แก้ไข Admin</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="<?php echo base_url('admin/admin/del/' . $value->id); ?>" onclick="return confirm('ยืนยันการลบ');">ลบข้อมูล Admin</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>


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