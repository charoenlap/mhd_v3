<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="row home-page">
    <div class="col-sm-12">
        <div class="row ml-1">
            <div class="col-md-8">
                <img src="<?php echo base_url();?>assets/img/header.png" class="img-fluid my-4 mx-0 px-0" />
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-9 col-lg-9">
        <div class="px-3 img-index">
            <img src="<?php echo base_url().'upload/content/'.$banner;?>" style="width:80%"/>
            <!-- view/home/index.php Content here -->
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 menu-index mt-1">
        <!-- Right Side change with page -->
        <a href="<?php echo base_url('home/contentcat/59');?>" class="btn btn-primary border boder-light font-weight-bold mb-1 w-75">ข่าวประชาสัมพันธ์</a><br>
        <a href="<?php echo base_url('home/contentcat/71');?>" class="btn btn-primary border boder-light font-weight-bold mb-1 w-75">ดาวน์โหลดเอกสารและคู่มือ</a><br>
        <a href="<?php echo base_url('home/contentcat/71');?>" class="btn btn-primary border boder-light font-weight-bold mb-1 w-75">การประเมินความพึงพอใจ</a><br>
        <a href="<?php echo base_url('home/contentcat/81');?>" class="btn btn-primary border boder-light font-weight-bold mb-1 w-75">ใบสมัครสมาชิก</a><br>
        <a href="<?php echo base_url();?>" class="btn btn-primary border boder-light font-weight-bold mb-1 w-75">ตรวจสอบสถานะ</a><br>
    </div>
</div>