<div class="container-fluid p-0 position-relative">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-3 col-lg-2 bg-gradient-primary px-3">
            <img src="<?php echo base_url();?>assets/img/logo.png" class="img-fluid my-4" />
            <!-- view/home/navbar.php 
            MENU HERE -->
            <div class="container-fuild"> 
                <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" style="margin: 5px;">หน้าหลัก</a>
                <a href="<?php echo base_url('about-of-schemes'); ?>" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" style="margin: 5px;">เกี่ยวกับโครงการ</a>
                <a href="<?php echo base_url('member/webboard/'); ?>" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" style="margin: 5px;">เว็บบอร์ด</a>
                <a href="<?php echo base_url('contact'); ?>" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" style="margin: 5px;">ติดต่อโครงการ</a>
                <a href="#collapsemenu" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" style="margin: 5px;">Scheme ที่เปิดให้บริการ 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg></a>
                <div class="collapse" id="collapsemenu">
                    <a href="ww" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" style="margin: 5px;">ติดต่อโครงการ</a>
                    <a href="ww" class="btn btn-outline-primary form-control bg-light text-center fon-weight-bold" style="margin: 5px;">ติดต่อโครงการ</a>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-10 m-0 p-0" style="<?php echo isset($bgcontent) ? $bgcontent : '';?> height:100vh;">