<div class="container-fluid p-0 position-relative">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-3 col-lg-2 bg-gradient-primary px-3 sidenav">
            <img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-fluid my-4" />
            <!-- view/home/navbar.php 
            MENU HERE -->
            <div class="container-fuild pl-1">
                <!-- <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary form-control bg-light text-center mb-1" >หน้าหลัก</a> -->
                <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary form-control bg-light text-center mb-1">หน้าหลัก</a>
                <a href="<?php echo base_url('home/about_schemes'); ?>" class="btn btn-outline-primary form-control bg-light text-center mb-1">เกี่ยวกับโครงการ</a>
                <a href="<?php echo base_url(''); ?>" class="btn btn-outline-primary form-control bg-light text-center mb-1">เว็บบอร์ด</a>
                <a href="<?php echo base_url('home/contact'); ?>" class="btn btn-outline-primary form-control bg-light text-center mb-1">ติดต่อโครงการ</a>
                <a href="#collapsemenu" class="btn btn-outline-primary form-control bg-light text-center mb-1" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample">Scheme ที่เปิดให้บริการ
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg></a>
                <div class="collapse" id="collapsemenu">
                    <?php $count_row = count($sub_menu); ?>
                    <?php for ($x = 0; $x < $count_row; $x++) : ?>
                        <a href="<?php echo base_url('home/content/' . $sub_menu[$x]->ref_id); ?>" class="btn btn-outline-dark bg-light form-control text-center mb-1"><?php echo $sub_menu[$x]->name; ?></a>
                    <?php endfor; ?>
                </div>
                <a href="<?php echo base_url('member/login'); ?>" class="btn btn-outline-primary form-control bg-light text-center mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                    </svg>
                    เข้าสู่ระบบ Login
                </a>
                <input type="text" id="search" class="form-control mb-1" placeholder="Search">
                <hr class="bg-white">
            </div>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-10 m-0 p-0" style="<?php echo isset($bgcontent) ? $bgcontent : ''; ?> height:100vh;">