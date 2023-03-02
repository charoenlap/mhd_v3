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
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>สมาชิก</th>
                                        <th>โปรแกรม</th>
                                        <th>วันที่สมัคร</th>
                                        <th class="text-center">สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($lists as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?php echo $value->member_id; ?></td>
                                        <td><?php echo $value->program_name; ?></td>
                                        <td><?php echo $value->dateAdd; ?></td>
                                        <td class="text-center">
                                            <?php if ($value->admin_approve == '0') { ?>
                                                <a href="<?php echo base_url('admin/register/updateApprove/'.$value->id); ?>" class="btn btn-danger btn-sm">ไม่อนุมัติ</a>
                                            <?php }elseif ($value->admin_approve == '1') { ?>
                                                <a href="<?php echo base_url('admin/register/updateDisapproved/'.$value->id); ?>" class="btn btn-success btn-sm">อนุมัติ</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
