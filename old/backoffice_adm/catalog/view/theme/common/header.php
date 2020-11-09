<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets//css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/custom.css">
  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition <?php echo get('route')=='member/login' ? 'login-page' : 'sidebar-mini layout-fixed';?>"> 

  <?php 
  $not = array('member/login');
  if (in_array(get('route'), $not)==false) {
  ?>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">สถานะ : <span class="text-success">เปิดรับสมัครปี 2020</span></a>
      </li>
      <!-- <li class="nav-item">
        <a href="#" class="nav-link">สถานะ : <span class="text-danger">ปิดรับสมัคร</span></a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 การแจ้งเตือน</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 2 ข้อความใหม่
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 แจ้งชำระเงิน
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 12 การทดสอบใหม่
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">ดูการแจ้งเตือนทั้งหมด</a>
        </div>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link elevation-4">
      <!-- <img src="../assets/images/logoleft.png" alt="Admin" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                หน้าหลัก
              </p>
            </a>
          </li>

          <li class="nav-header">ระบบสมาชิก</li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                สมาชิกแจ้งการทดสอบ
                <span class="right badge badge-danger">12</span> 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>สมาชิกแจ้งชำระเงิน
                <span class="right badge badge-danger">8</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo route('customer');?>" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                รายการสมาชิก
                <!-- <span class="right badge badge-danger">ใหม่</span> -->
              </p>
            </a>
          </li>

          <li class="nav-header">ระบบผลทดสอบ</li>
          <li class="nav-item">
            <a href="../../index.html" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>อัพโหลด ผลการทดสอบ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                รายการ ผลทดสอบ
              </p>
            </a>
          </li>

          <li class="nav-header">ระบบโปรแกรม</li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                เปิดรับสมัคร
                <span class="right badge badge-success">เปิดปี 2020</span>
                <!-- <span class="right badge badge-danger">ปิดรับสมัคร</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                จัดการโปรแกรม
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
              foreach ($menu_programs as $program) :
              ?>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    <?php echo $program['name'];?>
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview pl-3">
                  <li class="nav-item">
                    <a href="<?php echo route('programs', 'program='.strtolower($program['code']) );?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Trial</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Test Result</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>ตั้งค่าเครื่อง</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>คู่มือ</p>
                    </a>
                  </li>
                </ul>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>

          <li class="nav-header">ระบบแอดมิน</li>
          <li class="nav-item">
            <a href="<?php echo route('setting'); ?>" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>การตั้งค่า</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo route('member'); ?>" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>รายการแอดมิน</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo route('member/logout'); ?>" class="nav-link" onclick="return confirm('ยืนยันการออกจากระบบ');">
              <i class="nav-icon fas fa-circle text-danger"></i>
              <p>
                ออกจากระบบ
              </p>
            </a>
          </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php } ?>