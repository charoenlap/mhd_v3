<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" id="title" name="title"><?php echo $heading_title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <div class="text-center p-3 mb-2 bg-primary text-white" id="title2" name="title2">
                    <form class="user" action="<?php echo $action; ?>" method="POST">
                    <input type="text" name="title_1" value="EQAC" class="d-none">
                        <h2><?php echo $heading_title; ?></h2>
                    </div>
                        <div class="container-left">
                            <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : <?php echo $program_name;?></h5>
                        </div>
                        <div class="container-left">
                            <h5 class="text-left">
                                <p class="font-weight-bold"><?php echo $address->name;?></p>
                            </h5>
                            <p class="font-weight-bold">บันทึกการรับตัวอย่าง</p>
                            <div class="col">
                                <h6><label class="font-weight-bold">Trial : </label> <?php echo $trial_name;?></h6>
                            </div>
                        </div>
                        <div class="font-weight-bold container-left">
                            <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                            <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick" value="<?php echo date('Y-m-d'); ?>" ></input>
                        </div>
                        <div class="container-left">
                            <p class="font-weight-bold" style="padding-top: 30px;">ความสมบูรณ์ของตัวอย่างทดสอบ * </p>
                        </div>
                        <input type="radio" name="received_status" id="test1" class="received_check theone" value="1">
                        <label class="choose_edit" for="test1">อยู่ในสภาพสมบูรณ์</label>
                        <div class="container-left">
                            <input type="radio" name="received_status" id="test2" class="received_check theone" value="2">
                            <label class="choose_edit" for="test2">อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้</label>
                        </div>
                        <div class="container-left">
                            <label for="received_status_other" class="font-weight-bold">เนื่องจาก</label>
                            <textarea class="form-control" id="received_status_other" name="received_status_other"></textarea>
                        </div>


                        <div id="showdetail_program">
                          <div class="container-left" style="padding-top: 30px;">
                              <p class="font-weight-bold">ผลการตรวจ</p>
                          </div>