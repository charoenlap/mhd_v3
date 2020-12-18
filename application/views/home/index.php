<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-9">
                <img src="<?php echo base_url();?>assets/img/header.png" class="img-fluid my-4 mx-0 px-0" />
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-9 col-lg-9">
        <div class="px-3">
            <img src="<?php echo base_url().'upload/content/'.$banner;?>" />
            view/home/index.php Content here
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        Right Side change with page
        <br>
        <a href="<?php echo base_url('home/contentcat/59');?>">Content 1</a>
    </div>
</div>