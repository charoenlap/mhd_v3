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

                    <?php if (!empty($uploadFailed)) : ?>
                        <div class="alert alert-danger alert-dismissible"><?php echo $uploadFailed; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($uploadSuccess)) : ?>
                        <div class="alert alert-success alert-dismissible"><?php echo $uploadSuccess; ?></div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12 text-right mb-2">
                                <a href="<?php echo $link_add . '/' . $cat_id; ?>" class="btn btn-success">add content</a>
                            </div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>รายการ</th>
                                        <th width="15%" class="text-center">SORT</th>
                                        <th width="15%" class="text-center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists) > 0) : ?>
                                        <?php foreach ($lists as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $value->name; ?>
                                                    <?php if ($value->hide == 1) { ?>
                                                        <span class="badge badge-danger">HIDE</span>
                                                    <?php } ?>
                                                </td>
                                                <form name="form_<?php echo $value->id; ?>" id="form_<?php echo $value->id; ?>" action="<?php echo base_url('admin/content/editSeqContent/' . $value->id); ?>">
                                                    <td><input type="text" name="sort" id="sort_<?= $value->id; ?>" value="<?= $value->seq; ?>" class="form-control text-center" onblur="form_<?= $value->id; ?>.submit();"></td>
                                                </form>
                                                <td class="text-center">
                                                    <?php if ($value->hide == 1) { ?>
                                                        <a class="btn btn-sm btn-success btn-show" href="<?= base_url('admin/content/ShowContent/' . $value->id) ?>">Show</a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-sm btn-warning btn-hide" href="<?= base_url('admin/content/HideContent/' . $value->id); ?>">Hide</a>
                                                    <?php } ?>
                                                    <a class="btn btn-sm btn-secondary" href="<?= base_url('admin/content/edit_detail/' . $value->id); ?>">Edit</a>

                                                    <a class="btn btn-sm btn-danger btn-del" href="<?= base_url('admin/content/delContent_detail/' . $value->id); ?>"><i class="far fa-trash-alt"></i></a>

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
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $('.btn-hide').click(function(e) {
        if (confirm('Do you want to Hide') == true) {
            window.location = $(this).attr('href');
        } else {
            e.preventDefault();
        }
    });

    $('.btn-show').click(function(e) {
        if (confirm('Do you want to Show') == true) {
            window.location = $(this).attr('href');
        } else {
            e.preventDefault();
        }
    });

    $('.btn-del').click(function(e) {
        if (confirm('Do you want to delete') == true) {
            window.location = $(this).attr('href');
        } else {
            e.preventDefault();
        }
    });
</script>