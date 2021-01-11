<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<div class="row content">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php echo base_url(); ?>assets/img/headerblack.png" class="img-fluid my-4 px-4" />
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="card mx-3">
            <div class="card-body">
                <?php echo $result->name; ?><br>
                <?php if ($result->detail != "") {
                    echo $result->detail . "<br>";
                } ?>
                <?php if ($result->picture1 != "") : ?>
                    ดาวน์โหลดไฟล์ : <a href="<?php echo base_url() . 'upload/content/' . $result->picture1; ?>" target="new" class="text-decoration-none">คลิ๊ก</a>
                <?php endif; ?>
                <!-- view/home/content.php Content here -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 extra-menu">
        <hr style="margin-top:0;">
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
            </svg> หนังสือประชาสัมพันธ์ การรับสมัครสมาชิก ปี 2562</a><br>
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
            </svg> คู่มือการสมัครสมาชิก โครงการฯ ปี 2562</a><br>
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
            </svg> เอกสารแนะนำ การรับสมัครสมาชิก ปี 2562</a><br>
        <a href="" class="text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
            </svg> ใบสมัครสมาชิก โครงการฯ ปี 2562</a><br>
        <!-- Right Side change with page -->
        <hr style="margin-bottom: 0;">
    </div>
</div>