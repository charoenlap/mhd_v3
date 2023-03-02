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
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url('admin/admin/programs'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-5">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <?php foreach ($lists as $key => $value) { ?>
                                            <tr>
                                                <td><?php echo $value->name; ?></td>
                                                <td width="30%">
                                                    <select name="programs_status[<?php echo $value->id; ?>]" id="" class="form-control">
                                                        <option value="0" <?php if($value->programs_status == '0'){ echo "selected"; } ?>>เปิด</option>
                                                        <option value="1" <?php if($value->programs_status == '1'){ echo "selected"; } ?>>ปิด</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">บันทึก</button>
                                </div>
                            </div>
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