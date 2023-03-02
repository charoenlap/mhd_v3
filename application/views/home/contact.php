<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="col-sm-12 col-md-9 col-lg-10">
    <div id="content" class="row">
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
                    <div class="blog-content">
                        <h3>ติดต่อเรา</h3>
                        <p>&nbsp;</p>
                        <div class="row">
                            <div class="col-md-12">
                                <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                <span>สถานที่ : คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล เลขที่ 2 ถนนวังหลัง แขวงศิริราช เขตบางกอกน้อย กรุงเทพฯ 10700</span>
                                <p>&nbsp;</p>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                                <span>โทร : 02 412 3441 , 02 411 2258 ต่อ 142</span>
                                <p>&nbsp;</p>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>อีเมลล์ : eqamtmu@gmail.com</span>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <!-- view/home/content.php Content here -->
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4" style="padding:15px 15px;">
            <ul class="list-group" style="margin-right:15px;margin-left:15px;">
                <?php //foreach ($sub_menu as $menu) : ?>
                    <?php foreach ($right_side as $menu) : ?>
                    <li class="list-group-item bg-blue">
                        <a href="<?php echo $menu->link; ?>" class="text-write"><i class="fas fa-arrow-right"></i> <?php echo $menu->name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>