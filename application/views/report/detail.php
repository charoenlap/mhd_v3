<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?php echo $heading_title;?></h1>

    <div class="card shadow mb-4">
        <div class="card-body">
                <div class="row">
                    <div class="container-fluid">
                        <div class="text-right">
                            <a href="<?php echo $action; ?>" class="btn btn-primary">ดูกราฟ</a>
                        </div>
                        <table class="table table-hover">
                           <thead>
                               <tr>
                                    <th style="border: 0px;"><?php echo $heading_title;?></th>
                               </tr>
                           </thead>
                           <tbody>
                                <?php if (count($trial)>0) : ?>
                                <?php foreach ($trial as $value) : ?>
                                    <tr>
                                        <td><?php echo $value->name; ?></td>
                                        <td class="text-right">
                                        
                                        <?php if ($value->can_send) : ?>
                                            <!-- <?php echo base_url('/report/program_report_').$name; ?> -->
                                            
                                            เหลือเวลาอีก <?php echo $value->send_remaining; ?> จะหมดเวลารายงานผล <a href="<?php echo base_url('report/trial/').$value->program_slug.'/'.$value->slug;?>" class="btn btn-primary">รายงานผล</a>
                                        <?php else: ?>
                                            โปรแกรม <?php echo $value->name;?> หมดเวลาการบันทึกข้อมูลแล้ว
                                        <?php endif; ?>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <?php endif;?>
                             
                           </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>