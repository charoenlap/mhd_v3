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
                            <form action="<?php echo $action; ?>" method="GET">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>เลขสมาชิก</label>
                                        <input type="text" name="filter_memberno" value="<?php echo $filter_memberno; ?>" class="form-control" placeholder="ค้นหา เลขสมาชิก เก่า/ใหม่" />
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>อีเมล</label>
                                        <input type="text" name="filter_email" value="<?php echo $filter_email; ?>" class="form-control" placeholder="ค้นหา อีเมล" />
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>ชื่อ</label>
                                        <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" class="form-control" placeholder="ค้นหา ชื่อ" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="submit" class="btn btn-primary" value="ค้นหา" />
                                        <a href="<?php echo $action; ?>" class="btn btn-default">ล้าง</a>
                                        <a href="<?php echo $export_link; ?>" class="btn btn-success">Export</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!-- <a href="<?php echo $export_link; ?>" class="btn btn-success">Export</a> -->
                            <table class="table table-bordered table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">ที่</th>
                                        <th>รหัส</th>
                                        <th>ชื่อ</th>
                                        <th>อีเมล</th>
                                        <th>โรงพยาบาล</th>
                                        <th width="15%" class="text-center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists) > 0) : ?>
                                        <?php 
                                            $i = 1;
                                            foreach ($lists as $key => $value) : 
                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $i++; ?></td>
                                                <?php if ($filter_memberno !== '') : ?>
                                                    <td><?php echo $year . sprintf('%04d', $value->member_id); ?></td>
                                                <?php else : ?>
                                                    <td><?php echo $year . sprintf('%04d', $value->id); ?></td>
                                                <?php endif; ?>
                                                <td><?php echo $value->firstname . ' ' . $value->lastname; ?></td>
                                                <td><?php echo $value->email; ?></td>
                                                <td><?php echo $value->hospital; ?></td>
                                                <td class="text-center">
                                                    <?php if ($value->is_report == 1) : ?>
                                                        <a class="btn <?php echo $value->admin_id == 1?"btn-success":"btn-primary"; ?>" href="<?php echo base_url('admin/report/detail/' . $year . '/' . $program_slug . '/' . $trial_slug . '/' . $value->id); ?>"> View Report</a>
                                                        <!-- <a class="btn <?php echo $value->admin_id == 1?"btn-success":"btn-primary"; ?>" href="<?php echo base_url('admin/report/detail/' . $year . '/' . $fileNameOpen . '/' . $trial_slug . '/' . $value->id); ?>"> View Report</a> -->
                                                    <?php else : ?>
                                                        <a class="btn btn-info" href="<?php echo base_url('admin/report/add_report/'.$year.'/'.$program_slug.'/'.$trial_slug.'/'.$value->id); ?>"><i class="fas fa-plus"></i> Add Report</a>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                        <td colspan="5" class="text-center">ไม่พบรายการสมาชิก</td>
                                        </tr>
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