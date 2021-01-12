<div class="container-fluid p-0 position-relative">
    <!-- Outer Row -->
    <div class="row navbar-row">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark p-0">
                <div class="col-sm-12 col-md-3 col-lg-2 bg-gradient-primary sidenav px-3">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" class="navbar-brand img-fluid my-4 w-100 " />
                    <button href class="navbar-toggler" data-toggle="collapse" data-target=".sidebar" aria-expanded="false" aria-label="Toggle navigation" aria-controls="nav-menubar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- view/home/navbar.php 
            MENU HERE -->
                    <div class="collapse navbar-collapse sidebar text-center w-100 px-1">
                        <div class="container-fluid nav-menu p-0 m-0 text-center" id="nav-menubar">
                            <a href="<?php echo base_url(); ?>" class="nav-link btn btn-outline-primary text-left mx-0 mb-1 bg-light text-primary w-100">หน้าหลัก</a>
                            <a href="<?php echo base_url('home/about_schemes'); ?>" class="nav-link btn btn-outline-primary text-left mx-0 mb-1 bg-light text-primary w-100">เกี่ยวกับโครงการ</a>
                            <a href="http://www.website-thai.com/mhd/member/webboard/" class="nav-link btn btn-outline-primary text-left mx-0 mb-1 bg-light text-primary w-100">เว็บบอร์ด</a>
                            <a href="<?php echo base_url('home/contact'); ?>" class="nav-link btn btn-outline-primary text-left mx-0 mb-1 bg-light text-primary w-100">ติดต่อโครงการ</a>
                            <a href="#collapsemenu" class="nav-link btn btn-outline-primary nav-about text-left mx-0 mb-1 bg-light text-primary w-100" data-toggle="collapse" aria-expanded="false" aria-controls="collapsemenu">Scheme ที่เปิดให้บริการ
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg></a>
                            <div class="collapse" id="collapsemenu">
                                <?php $count_row = count($sub_menu); ?>
                                <?php for ($x = 0; $x < $count_row; $x++) : ?>
                                    <a href="<?php echo base_url('home/content/' . $sub_menu[$x]->ref_id); ?>" class="btn btn-outline-primary text-primary bg-light text-center mb-1 w-100"><?php echo $sub_menu[$x]->name; ?></a>
                                <?php endfor; ?>
                            </div>
                            <a href="<?php echo base_url('member/login'); ?>" class=" nav-link btn btn-outline-primary text-left mx-0 mb-1 bg-light text-primary w-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                </svg>
                                เข้าสู่ระบบ Login
                            </a>
                            <input type="text" id="search" class="form-control nav-link w-100" placeholder="Search">
                        </div>
                    </div>
                </div>
            </nav>
        <div class="col-sm-12 col-md-9 col-lg-10 pl-0 ml-auto mx-0 bg-content" style="<?php echo isset($bgcontent) ? $bgcontent : ''; ?> <?php echo isset($size_bg) ? '':'height:100vh;' ?>width:100%;">