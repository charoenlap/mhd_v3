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
                                    <div class="col-sm-12 mb-2">
                                        <label for="">ชื่อกลุ่ม Program</label>
                                        <input type="text" name="name" class="form-control form-control-user" id="" placeholder="ชื่อกลุ่ม Program" value="<?php echo !empty($permission_detail->name)?$permission_detail->name:""; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">เลือก Program</label>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Program permission</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php foreach ($program_list as $key => $value) { ?>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="program_permission[]" value="<?php echo $value->id; ?>" <?php foreach($lists_program as $vals){if($vals == $value->id){echo "checked";}} ?> class="form-control">
                                                    </td>
                                                    <td><?php echo $value->name; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tr>
                                            </tbody>
                                        </table>
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