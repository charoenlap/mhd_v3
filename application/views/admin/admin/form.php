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
                    <div class="card">
                        <div class="card-body">

                            <form action="<?php echo $action; ?>" method="POST">
                                <div class="row">
                                    <div class="col-12">
                                        <b>
                                            <p>ข้อมูลเข้าระบบ</p>
                                        </b>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="">ชื่อผู้ใช้</label>
                                        <input type="text" name="username" class="form-control form-control-user" id="" placeholder="ชื่อผู้ใช้" value="<?php echo !empty($admin_detail->username)?$admin_detail->username:''; ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="">รหัสผ่าน</label>
                                        <input type="password" name="password" class="form-control form-control-user" id="" placeholder="รหัสผ่าน" <?php echo !empty($admin_detail->id)?"disabled":""; ?> >
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="author">กำหนดสถานะ</label>
                                        <select name="authority" id="author" class="form-control">
                                            <?php foreach($admin_author as $value){ ?>
                                                <option value="<?php echo $value->id; ?>" <?php echo !empty($admin_detail->authority_id)&&$admin_detail->authority_id == $value->id?"selected":""; ?>><?php echo $value->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">กำหนดกลุ่ม Program</label>
                                        <select name="permission_id" id="permission" class="form-control">
                                            <?php foreach($permission_list as $vals){ ?>
                                                <option value="<?php echo $vals->id; ?>" <?php echo !empty($admin_detail->permission_id)&&$admin_detail->permission_id == $vals->id?"selected":""; ?>><?php echo $vals->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="บันทึกข้อมูล">
                            </form>

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