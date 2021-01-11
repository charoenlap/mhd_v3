<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<div class="row cat">
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
                <strong><?php echo $result_cat->name; ?><br></strong>
                <?php $row_count = count($result_con); ?>
                <?php for ($x = 0; $x < $row_count; $x++) : ?>
                    <a href="<?php echo base_url('home/content/' . $result_con[$x]->ref_id); ?>" class="text-decoration-none"><?php echo $result_con[$x]->name; ?></a><br>
                <?php endfor; ?>
                <!-- sample -->
                <!-- <?php $set_result = array_column($result_content, $result_content->id); ?> -->
                <!-- <a href="<?php echo base_url('home/content/' . $result_content->id); ?>"><?php echo $result_content->name; ?></a> -->
                <!-- <pre><?php print_r($result_cat); ?></pre> -->
                <!-- <pre><?php print_r($result_content); ?></pre> -->
                <!-- view/home/cat.php Content here -->
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