<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php echo base_url();?>assets/img/headerblack.png" class="img-fluid my-4 px-4" />
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-9 col-lg-9">
        <div class="card mx-3">
            <div class="card-body">
                <?php echo $result_cat->name;?><br>
                <?php $set_result = array_column($result_content, $result_content->id); ?>
                <?php echo $set_result; ?>
                <!-- <a href="<?php echo base_url('home/content/'.$result_content->id);?>"><?php echo $result_content->name;?></a> -->
                <!-- <pre><?php print_r($result_cat);?></pre>
                <pre><?php print_r($result_content);?></pre> -->
            <!-- view/home/cat.php Content here -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <a href="" class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg> หนังสือประชาสัมพันธ์ การรับสมัครสมาชิก ปี 2562</a><br>
        <a href="" class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg> คู่มือการสมัครสมาชิก โครงการฯ ปี 2562</a><br>
        <a href="" class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg> เอกสารแนะนำ การรับสมัครสมาชิก ปี 2562</a><br>
        <a href="" class="text-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg> ใบสมัครสมาชิก โครงการฯ ปี 2562</a><br>
        <!-- Right Side change with page -->
    </div>
</div>
<style>

</style>