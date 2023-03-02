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
                            <form action="<?php echo $action; ?>" method="get">
                                <div class="row">
                                    <div class="col-3 mb-3">
                                        <label>เลขสมาชิก</label>
                                        <input type="text" name="filter_memberno" value="<?php echo $filter_memberno; ?>" class="form-control" placeholder="ค้นหา เลขสมาชิก เก่า/ใหม่" />
                                    </div>

                                    <div class="col-3 mb-3">
                                        <label>อีเมล</label>
                                        <input type="text" name="filter_email" value="<?php echo $filter_email; ?>" class="form-control" placeholder="ค้นหา อีเมล" />
                                    </div>

                                    <div class="col-3 mb-3">
                                        <label>ชื่อ</label>
                                        <input type="text" name="filter_name" value="<?php echo $filter_name; ?>" class="form-control" placeholder="ค้นหา ชื่อ" />
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label>ปี</label>
                                        <select name="filter_year" id="" class="form-control">
                                            <option value="">Year</option>
                                            <?php foreach ($year_info as $key => $value_year) { ?>
                                                <option value="<?php echo $value_year->year ?>" <?php if ($filter_year == $value_year->year) {
                                                                                                    echo "selected";
                                                                                                } ?>><?php echo $value_year->year; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" class="btn btn-primary" value="ค้นหา" />
                                        <a href="<?php echo $action; ?>" class="btn btn-default">ล้าง</a>
                                        <!-- <a href="<?php echo site_url("admin/member/show"); ?>" class="btn btn-success">Export Excel</a> -->

                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                                            Export Excel
                                        </button>
                                    </div>

                                    <!-- <div class="col-12">
                                           <a href='<?php echo site_url("admin/member/show"); ?>'> <p>Excel</p></a>
                                        </div> -->
                                </div>

                            </form>



                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <label>ปี Export</label>
                                    <select name="export_year" id="" class="form-control">
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success">Export Excel</button>
                                </div>
                            </div> -->

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <form action="<?php echo $action_export; ?>" method="POST">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> <label>ปีที่ต้องการ Export Excel</label></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <select name="export_year" id="" class="form-control">
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Export Excel</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>เลขสมาชิก</th>
                                        <th>ชื่อ</th>
                                        <th>อีเมล</th>
                                        <th>โรงพยาบาล</th>
                                        <th width="15%">สถานะ</th>
                                        <th width="15%" class="text-center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists) > 0) : ?>
                                        <?php foreach ($lists as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $value->member_no; ?></td>
                                                <td><?php echo $value->firstname . ' ' . $value->lastname . ($value->transfer_oldweb == 1 ? ' <span class="badge badge-secondary">เว็บเก่า</span>' : ''); ?></td>
                                                <td><?php echo $value->email; ?></td>
                                                <td><?php echo $value->hospital; ?></td>

                                                <td>
                                                    <?php if (empty($value->member_no)) : ?>
                                                        <span class="text-danger"><i class="fas fa-times-circle"></i> ยังไม่ได้สมัคร</span><br />
                                                    <?php elseif ($value->is_waiting == 1) : ?>
                                                        <span class="text-info"><i class="fas fa-tasks"></i> เชิญแล้ว รอสมัคร</span><br />
                                                    <?php elseif (!empty($value->member_no) && !empty($value->date_login)) : ?>
                                                        <span class="text-success">
                                                            <i class="fas fa-check-circle"></i> เข้าระบบล่าสุด<br>
                                                            <?php echo date('d/m/Y H:i', strtotime($value->date_login)); ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            จัดการ
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/member/edit/' . $value->id); ?>">แก้ไข ข้อมูลผู้สมัคร</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/member/edit_register/' . $value->id . '/' . $value->year); ?>">แก้ไข โปรแกรมที่สมัคร</a>
                                                            <!-- <a class="dropdown-item" href="#">ตรวจสอบ การชำระเงิน</a> -->
                                                            <!-- <a class="dropdown-item" href="#">Export Excel</a> -->
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/member/sendEmailConfirm/' . $value->id); ?>" onclick="return confirm('การส่งเมลไม่ควรกดส่งถี่ๆ จะทำให้อีเมลระบบโดนแจ้งเป็นสแปมเมลได้ ยืนยันการส่งเมล?');">ส่งอีเมลยืนยันการสมัคร</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/member/sendEmailForgot/' . $value->id); ?>" onclick="return confirm('การส่งเมลไม่ควรกดส่งถี่ๆ จะทำให้อีเมลระบบโดนแจ้งเป็นสแปมเมลได้ ยืนยันการส่งเมล?');">ส่งอีเมลรีเซทรหัสผ่าน</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="<?php echo base_url('admin/member/del/' . $value->id); ?>" onclick="return confirm('ยืนยันการลบ');">ลบ ข้อมูลผู้สมัคร</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <?php echo $pagination; ?>
                        </div>
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