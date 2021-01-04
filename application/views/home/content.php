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
                <?php echo $result->name; ?><br>
                <?php if($result->detail != ""){echo $result->detail."<br>";} ?>
                <?php if($result->picture1 != ""):?>
                    ดาวน์โหลดไฟล์ : <a href="<?php echo base_url().'upload/content/'.$result->picture1;?>" target="new" class="text-decoration-none">คลิ๊ก</a>
                <?php endif; ?>
            <!-- view/home/content.php Content here -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
            </svg> หนังสือประชาสัมพันธ์ การรับสมัครสมาชิก ปี 2562</a><br>
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
            </svg> คู่มือการสมัครสมาชิก โครงการฯ ปี 2562</a><br>
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
            </svg> เอกสารแนะนำ การรับสมัครสมาชิก ปี 2562</a><br>
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
            </svg> ใบสมัครสมาชิก โครงการฯ ปี 2562</a><br>
        <!-- Right Side change with page -->
    </div>
</div>