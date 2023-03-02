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

                    <?php if (!empty($uploadFailed)) : ?>
                        <div class="alert alert-success alert-dismissible"><?php echo $uploadFailed; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($uploadSuccess)) : ?>
                        <div class="alert alert-danger alert-dismissible"><?php echo $uploadSuccess; ?></div>
                    <?php endif; ?>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="w-50">รายการ</th>
                                        <th class="text-center w-50">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists) > 0) : ?>
                                        <?php foreach ($lists as $key => $value) : ?>
                                            <tr>
                                                <td>
                                                    <!-- <a href="<?php echo base_url() . 'upload/content/' . $value->picture1; ?>" class="btn btn-primary" target="new">View</a> -->
                                                <img src="<?php echo base_url() . 'upload/content/' . $value->picture1; ?>" alt="" class="img-thumbnail">
                                                </td>
                                                <td>
                                                    <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" name="time_update" value="<?php echo time(); ?>">
                                                        <label for="file_1">อัพไฟล์รูปที่ต้องการเปลี่ยน : </label>
                                                        <input type="file" id="file_1" name="file_1" required>
                                                        <br>
                                                        <img src="#" alt="" id="image_preview" class="w-100 mb-1">
                                                        <button type="submit" class="btn btn-primary">แก้ไข</button>
                                                    </form>
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
<script>
file_1.onchange = evt => {
  const [file] = file_1.files
  if (file) {
    image_preview.src = URL.createObjectURL(file)
  }
}
</script>