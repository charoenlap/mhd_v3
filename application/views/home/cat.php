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
                <a href="<?php echo base_url('home/content/'.$result_content->id);?>"><?php echo $result_content->name;?></a>
                <pre><?php print_r($result_cat);?></pre>
                <pre><?php print_r($result_content);?></pre>
            view/home/cat.php Content here
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        Right Side change with page
    </div>
</div>