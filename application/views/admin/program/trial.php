<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $heading_title;?></h1>
                </div>
                <div class="col-sm-6">
                    <?php if ($breadcrumbs) : ?>
                    <ol class="breadcrumb float-sm-right">
                        <?php foreach ($breadcrumbs as $title => $link) { ?>
                        <li class="breadcrumb-item"><a href="<?php echo $link;?>"><?php echo $title; ?></a></li>
                        <?php } ?>
                    </ol>
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <!-- <a href="<?php echo base_url('admin/program/add');?>" class="btn btn-primary btn-sm mt-2"><i class="fas fa-plus"></i> เพิ่มโปรแกรม</a>-->
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
                    <div class="alert alert-success alert-dismissible"><?php echo $success;?></div>
                    <?php endif;?>
                    <?php if (!empty($error)) : ?>
                    <div class="alert alert-danger alert-dismissible"><?php echo $error;?></div>
                    <?php endif;?>
                    <div class="card">
                        <div class="card-body">
                            <form class="form-inline">
                                <div class="form-group mb-2 mr-2">
                                    <label>Search year </label>
                                </div>
                                <div class="form-group mb-2 mr-2">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select year</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="submit" class="btn btn-primary" value="Filter" />
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">


                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Trial</th>
                                        <th>Year</th>
                                        <th>Dispatched Date</th>
                                        <th>Deadline</th>
                                        <th>Limit</th>
                                        <th>Note</th>
                                        <th width="15%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($lists)>0) : ?>
                                    <?php foreach ($lists as $key => $value) : ?>
                                    <tr>
                                        <td><?php echo $value->name;?></td>
                                        <td>0</td>
                                        <td><?php echo $value->dispatched;?></td>
                                        <td><?php echo $value->date_send;?></td>
                                        <td><?php echo $value->row_limit;?></td>
                                        <td><?php echo $value->note;?></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    จัดการ
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <a class="dropdown-item" href="<?php echo base_url('admin/program/specimen/'.$value->id);?>">Specimen</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </tbody>
                            </table>

                            <?php echo $pagination; ?>

                            <!-- <small class="float-right mt-4">ไม่สามารถเพิ่มโปรแกรมเองได้เนื่องจากรูปแบบของแต่ละโปรแกรมไม่เหมือนกัน</small> -->

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