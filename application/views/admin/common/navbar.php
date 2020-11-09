<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('member/login');?>" class="nav-link" target="new">ไปที่หน้าสมาชิก</a>
        </li>
    </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/home');?>" class="brand-link text-center">
        <img src="<?php echo base_url();?>assets/img/logo.png" alt="AdminLTE Logo" class="img-fluid">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <b class="text-white">แอดมิน :</b><a href="#" class="d-block"><?php echo $_SESSION['admin_info']['username'];?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/home');?>" class="nav-link">
                        <i class="fas fa-chart-pie"></i>
                        <p>
                            ภาพรวม
                        </p>
                    </a>
                </li>
                <li class="nav-header">ระบบรายงานผล</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>
                            ดูรายงานที่สมาชิกแจ้งมา
                            <span class="badge badge-danger right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>
                            อัพโหลดผล
                        </p>
                    </a>
                </li>

                <li class="nav-header">ระบบโปรแกรม</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/program/lists/page/');?>" class="nav-link">
                        <i class="fab fa-buffer"></i>
                        <p>
                            โปรแกรมทั้งหมด
                        </p>
                    </a>
                </li>

                <li class="nav-header">ระบบสมาชิก</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>
                            แจ้งชำระเงิน
                            <span class="badge badge-danger right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/member/lists/page/');?>" class="nav-link">
                        <i class="fas fa-users-cog"></i>
                        <p>จัดการสมาชิก</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/setting/years/page/');?>" class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <p>
                            จัดการปีที่สมัคร
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/setting/year');?>" class="nav-link">
                        <i class="fas fa-user-clock"></i>
                        <p>
                            เปิด/ปิด รับสมัคร
                            <?php echo $_SESSION['admin_register'];?>
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/user/logout');?>" class="nav-link text-danger">
                        <i class="fas fa-door-open"></i>
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