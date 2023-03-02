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
                        <div class="card-header bg-secondary">
                            <?php echo 'แก้ไข (' . $heading_title . ')'; ?>
                        </div>
                        <form action="<?php echo $action ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <label class="mt-2">Category title TH</label>
                                <input type="text" name="detail_name" class="form-control" value="<?php echo $lists->name; ?>">
                                <label class="mt-2">Category Details TH</label>
                                <textarea name="detail" id="editor1" cols="30" class="form-control ckeditor" rows="5"><?php echo $lists->detail; ?></textarea>
                                <label class="mt-2">Article</label>
                                <input type="text" class="form-control" name="article" value="<?php echo $lists->article; ?>">
                                <label class="mt-2">File</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="file_1">Choose file</label>
                                        <input type="file" class="custom-file-input" name="file_1" id="file_1" aria-describedby="inputGroupFileAddon01">
                                    </div>
                                </div>
                                <?php if (!empty($lists->picture1)) { ?>
                                    <label class="mt-2">Recenly File</label>
                                    <br>
                                    <a href="<?php echo base_url('upload/content/' . $lists->picture1); ?>" target="new" class="btn btn-primary">VIEW</a>
                                    <a href="<?php echo base_url('admin/content/delContent_Picture/'.$lists->id); ?>" class="btn btn-danger btn-del">DEL</a>
                                <?php } ?>
                                <div class="card-footer text-right bg-white pr-0">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                            <input type="hidden" name="time_update" value="<?php echo time(); ?>">
                        </form>
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
    $('#file_1').on("change", function() {
        var i = $(this).prev('label').clone();
        var file = $('#file_1')[0].files[0].name;
        $(this).prev('label').text(file);
    });
    // CKEDITOR.replace('detail');

    $('.btn-del').click(function(e){
      if(confirm('Do you want to delete')==true){
        window.location = $(this).attr('href');
      }else{
        e.preventDefault();
      }
    });
</script>