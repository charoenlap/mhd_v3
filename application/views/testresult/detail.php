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
                               <?php $num = 280; ?>
                               <?php while($num<=285){ ?>
                               <tr>
                                   <td><?php echo $num; ?></td>
                                   <td class="text-right">โปรแกรม <?php echo $num; ?> หมดเวลาการบันทึกข้อมูลแล้ว</td>
                               </tr>
                               <?php $num++; ?>
                               <?php } ?>
                               <tr>
                                   <td> 286 </td>
                                   <td class="text-right"> เหลือเวลาอีก 11 วัน 8 ชั่วโมง 36 นาที <a href="<?php echo base_url('/testresult/program_report_').$name; ?>" class="btn btn-primary">รายงานผล</a></td>
                               </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>