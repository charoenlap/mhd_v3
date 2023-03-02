<?php
defined('BASEPATH') or exit('No direct script access allowed');

$filter = array('admin_id' => 0);
$report_info = $this->model_report->getReportNavBar($filter);
$report_trial = array_count_values(array_column($report_info, 'trial_del'));
// $filter = array('del' => 0, 'confirm_print' => 0);
// $payment_info = $this->model_payment->getPayments($filter);
$filter = array('del' => 0, 'admin_id' => 0, 'status' => 0);
$payment_assign_info = $this->model_payment_assign->getPayment_assigns($filter);
$admin_detail  = json_decode($this->encryption->decrypt($this->session->admin_token));
$admin_authority = $admin_detail->authority_id;
?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('member/login'); ?>" class="nav-link" target="new">ไปที่หน้าสมาชิก</a>
        </li>
    </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/home'); ?>" class="brand-link text-center">
        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="AdminLTE Logo" class="img-fluid" style="height:100px;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <p class="mb-0"><b class="text-white">ผู้ใช้งาน : <a href="#"><?php echo $_SESSION['admin_info']['username']; ?></a></b></p>
                <a href="<?php echo base_url('admin/user/logout'); ?>" class="text-danger">ออกจากระบบ</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/home'); ?>" class="nav-link">
                        <i class="fas fa-chart-pie"></i>
                        <p>
                            ภาพรวม
                        </p>
                    </a>
                </li>
                <?php if ($admin_authority == 1) { ?>
                    <li class="nav-header">ระบบจัดการ ADMIN</li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/admin'); ?>" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i>
                            <p>
                                รายชื่อ Admin
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('admin/admin_permission'); ?>" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i>
                            <p>
                                รายชื่อกลุ่ม Program
                            </p>
                        </a>
                    </li>
                <?php } ?>

                <li class="nav-header">ระบบรายงานผล</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/report/index'); ?>" class="nav-link">
                        <i class="fas fa-sign-in-alt"></i>
                        <p>
                            ดูรายงานที่สมาชิกแจ้งมา
                            <?php if (count($report_trial['0']) > 0 && !empty($report_trial['0'])) { ?>
                                <span class="badge badge-danger right"><?php echo count($report_trial['0']); ?></span>
                            <?php } ?>
                            <!-- <span class="badge badge-danger right"><?php echo count($report_info); ?></span> -->
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/result/list/'); ?>" class="nav-link">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <p>
                            อัพโหลดผล
                        </p>
                    </a>
                </li>

                <li class="nav-header">ระบบโปรแกรม</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/program/lists/'); ?>" class="nav-link">
                        <i class="fab fa-buffer"></i>
                        <p>
                            โปรแกรมทั้งหมด
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/admin/programs'); ?>" class="nav-link">
                        <i class="fab fa-buffer"></i>
                        <p>
                            เปิด - ปิด โปรแกรมทั้งหมด
                        </p>
                    </a>
                </li>

                <?php if ($admin_authority == 1) { ?>
                <li class="nav-header">ระบบสมาชิก</li>
                <!-- <li class="nav-item">
                    <a href="<?php echo base_url('admin/payment/lists/'); ?>" class="nav-link">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>
                            แจ้งชำระเงิน
                            <span class="badge badge-danger right"><?php echo count($payment_info); ?></span>
                        </p>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/payment/lists_register/'); ?>" class="nav-link">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>
                            แจ้งชำระเงิน
                            <?php if (count($payment_assign_info) <= 0) { ?>
                                <!-- <span class="badge badge-danger right"><?php echo empty($payment_assign_info) && $payment_assign_info <= 0 ? "" : count($payment_assign_info); ?></span> -->
                            <?php } else { ?>
                                <span class="badge badge-danger right"><?php echo count($payment_assign_info); ?></span>
                            <?php } ?>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/member/lists/'); ?>" class="nav-link">
                        <i class="fas fa-users-cog"></i>
                        <p>จัดการสมาชิก</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/setting/years/page/'); ?>" class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <p>
                            จัดการปีที่สมัคร
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/setting/year'); ?>" class="nav-link">
                        <i class="fas fa-user-clock"></i>
                        <p>
                            เปิด/ปิด รับสมัคร
                            <?php echo $_SESSION['admin_register']; ?>
                        </p>
                    </a>
                </li>
                <?php } ?>
                <?php if ($admin_authority == 1) { ?>
                <li class="nav-header">ระบบเนื้อหาเว็บไซต์</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/content/category/'); ?>" class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <p>
                            จัดการเนื้อหา
                        </p>
                    </a>
                </li>
                <?php } ?>
                <!-- <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="<?php echo base_url('admin/user/logout'); ?>" class="nav-link text-danger">
                        <i class="fas fa-door-open"></i>
                        <p>
                            ออกจากระบบ
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>