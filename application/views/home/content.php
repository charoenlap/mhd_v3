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
                ดาวน์โหลดไฟล์ : <a href="<?php echo base_url().'upload/content/'.$result->picture1;?>" target="new">คลิ๊ก</a>
            <!-- view/home/content.php Content here -->
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        Right Side change with page
    </div>
</div>