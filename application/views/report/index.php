<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $heading_title;?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?php echo $heading_title;?></h6>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="container-fluid">
                        <table class="table table-hover">
                            <thead>
                                <th style="border: 0;"><b>โครงการ</b></th>
                                <th class="text-right" style="border: 0;"><b>Trial</b></th>
                            </thead>
                            <tbody>
                                <?php foreach ($programs as $program) :?>
                                <tr>
                                    <td><?php echo $program->name; ?></td>  
                                    <td class="text-right"><a href="<?php echo base_url('report/program/').$program->slug; ?>" class="btn btn-primary">Trial</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
