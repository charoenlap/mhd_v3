 <?php
    $member_id          = json_decode($this->encryption->decrypt($this->session->token))->id;
    $year_id            = $this->model_setting->get('config_register_year_id');
    $year               = $this->model_year->getList($year_id);
    $years              = $this->model_year->getLists('','','','year','asc');
    $program_register   = $this->model_register_program->getListProgramByMemberIdYear($member_id, $year_id);
    $datetime_register  = array();
    foreach ($program_register as $value) {
        $datetime_register[] = strtotime($value->date_added);
    }
    $date_unique = array_unique($datetime_register);
    ?>
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-text mx-3">
             <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" class="img-fluid">
         </div>
     </a>
     <!-- Divider -->
     <hr class="sidebar-divider my-0">
     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('member/dashboard'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>หน้าแรก</span>
         </a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider mt-2">

     <!-- Heading -->
     <div class="sidebar-heading">ผลการทดสอบและผลการประเมิน</div>
     <?php
        $filter = array();
        $year_filter = $this->model_year->getLists($filter, 0, 99999999999);
        ?>
     <li class="nav-item">
         <!-- <a class="nav-link" href="<?php echo base_url('report'); ?>"> -->
         <a class="nav-link" data-toggle="collapse" href="#collapse-report" role="button" aria-expanded="false" aria-controls="collapse-report">
             <i class="fas fa-fw fa-file-upload"></i>
             <span>ส่งผลการทดสอบ</span>
         </a>
     </li>
     <div class="collapse ml-4" id="collapse-report">
         <!-- EDIT YEAR 12/7/64-->
         <!-- <li>
             <a class="text-white" href="<?php echo base_url('report/index/' . (date('Y') - 1)); ?>"> ปี <?php echo date('Y') - 1; ?></a>
         </li>
         <li>
             <a class="text-white" href="<?php echo base_url('report/index/' . date('Y')); ?>"> ปี <?php echo date('Y'); ?></a>
         </li> 
         <li>
            <a class="text-white" href="<?php echo base_url('report/index/' . (date('Y') + 1)); ?>"> ปี <?php echo date('Y') + 1; ?></a>
        </li> -->
        
        <!-- YEAR REGISTER -->
        <!-- <li>
            <a class="text-white" href="<?php echo base_url('report/index/' . $year->year); ?>"> ปี <?php echo $year->year; ?></a>
        </li> -->

        <?php foreach($years as $key => $val){ ?>
        <li>
            <a class="text-white" href="<?php echo base_url('report/index/' . $val->year); ?>"> ปี <?php echo $val->year; ?></a>
        </li>
        <?php } ?>
     </div>


     <li class="nav-item">
         <!-- <a class="nav-link" href="<?php echo base_url('result'); ?>"> -->
         <a class="nav-link" data-toggle="collapse" href="#collapse-report-result" role="button" aria-expanded="false" aria-controls="collapse-report-result">
             <i class="fas fa-fw fa-chart-line"></i>
             <span>ผลการประเมิน</span>
         </a>
     </li>
     <div class="collapse ml-4" id="collapse-report-result">
         <!-- EDIT YEAR 12/7/64-->
         <!-- <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . (date('Y') - 4)); ?>"> ปี <?php echo date('Y') - 4; ?></a>
         </li>
         <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . (date('Y') - 3)); ?>"> ปี <?php echo date('Y') - 3; ?></a>
         </li>
         <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . (date('Y') - 2)); ?>"> ปี <?php echo date('Y') - 2; ?></a>
         </li>
         <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . (date('Y') - 1)); ?>"> ปี <?php echo date('Y') - 1; ?></a>
         </li>
         <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . date('Y')); ?>"> ปี <?php echo date('Y'); ?></a>
         </li> 
         <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . (date('Y')+1)); ?>"> ปี <?php echo date('Y')+1; ?></a>
         </li> -->
         <!-- YEAR REGISTER -->
         <!-- <li>
             <a class="text-white" href="<?php echo base_url('result/index/' . $year->year); ?>"> ปี <?php echo $year->year; ?></a>
         </li> -->
        
        <?php foreach($years as $key => $val){ ?>
        <li>
            <a class="text-white" href="<?php echo base_url('result/index/' . $val->year); ?>"> ปี <?php echo $val->year; ?></a>
        </li>
        <?php } ?>
     </div>

     <!-- Divider -->
     <hr class="sidebar-divider mt-2">

     <div class="sidebar-heading">ระบบรับสมัครและข้อมูลสมาชิก</div>

     <?php if (isset($_SESSION['year']) && $_SESSION['year'] !== false) : ?>
         <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url('register'); ?>">
                 <i class="fas fa-fw fa-user-plus"></i>
                 <!-- <span>สมัครโปรแกรมปี <?php echo $_SESSION['year']; ?></span> -->
                 <span>สมัครสมาชิก</span>
             </a>
         </li>
     <?php endif; ?>
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('payment'); ?>">
             <i class="fas fa-fw fa-file-invoice-dollar"></i>
             <span>แจ้งชำระเงิน</span>
         </a>
     </li>
     <li class="nav-item">
         <!-- <a class="nav-link <?php echo isset($program_register) && $program_register > 0 ? '' : 'disabled'; ?>" href="<?php echo base_url('register/receipt'); ?>"> -->
         <a class="nav-link" data-toggle="collapse" href="#collapse-report-receipt" role="button" aria-expanded="false" aria-controls="collapse-report-receipt">
             <i class="fas fa-fw fa-file-invoice-dollar"></i>
             <span>ใบแจ้งหนี้</span>
         </a>
     </li>
     <div class="collapse ml-4" id="collapse-report-receipt">
         <?php $i = 1; ?>
         <?php if (count($date_unique) > 0) { ?>
             <?php foreach ($date_unique as $value) { ?>
                 <li>
                     <a class="text-white" href="<?php echo base_url('register/receipt/' . $value); ?>">รายการชำระที่ <?php echo $i++; ?> </a>
                 </li>
             <?php }; ?>
         <?php } else { ?>
             <li>
                 <p>ไม่พบรายการชำระ</p>
             </li>
         <?php } ?>
     </div>
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('permission'); ?>">
             <i class="fas fa-user-tag"></i>
             <span>จัดการสิทธิ์</span>
         </a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('member'); ?>">
             <i class="fas fa-fw fa-user-shield"></i>
             <span>ข้อมูลส่วนตัว</span>
         </a>
     </li>



     <hr class="sidebar-divider mt-2">

     <li class="nav-item">
         <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
             <i class="fas fa-fw fa-sign-out-alt"></i>
             <span>ออกจากระบบ</span>
         </a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block mt-2">
     <small class="px-3">Version 2.0</small>

 </ul>
 <!-- End of Sidebar -->


 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">
         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">

                 <div class="topbar-divider d-none d-sm-block"></div>

                 <!-- Nav Item - User Information -->
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['member_info']['member_no'] . ' - ' . $_SESSION['member_info']['email']; ?></span>
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                         <a class="dropdown-item" href="<?php echo base_url('member'); ?>">
                             <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                             ข้อมูลส่วนตัว
                         </a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                             <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                             ออกจากระบบ
                         </a>
                     </div>
                 </li>

             </ul>

         </nav>
         <!-- End of Topbar -->