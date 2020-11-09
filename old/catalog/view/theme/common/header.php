<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>EQAS-MUMT<?php echo isset($title) ? ' - '.$title : ''; ?></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<meta content="" name="description">
		<meta content="" name="author">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- App favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">
		<!-- jvectormap -->
		<link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
		<!-- App css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/jquery-ui.min.css" rel="stylesheet">
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
		<link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">
		<link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="assets/css/custom.css">

		
		<script src="assets/js/jquery.min.js"></script>
		
	</head>
	<body class="dark-sidenav">
		<?php 
		$check = explode('/', get('route'));
		$not = array('member/login', 'member/register', 'member/forgot');
		if(!empty(get('route'))&&!in_array(get('route'), $not)&&!in_array('mail',$check)){ 
		?>
		<!-- Left Sidenav -->
		<div class="left-sidenav">
			<!-- LOGO -->
			<div class="brand" style="height:auto;">
				<a href="#" class="logo">
					<img src="<?php echo MURL;?>assets/images/logoleft.png" alt="" class="img-fluid py-3 px-3">
				</a>
			</div>
			<!--end logo-->
			<div class="menu-content h-100" data-simplebar>
				<ul class="metismenu left-sidenav-menu">
					<li class="text-light mt-0">
						<?php $session = json_decode(decrypt($_SESSION['token']),true); ?>
						<table class="table" id="user_info">
							<tbody>
								<tr>
									<td><i class="fas fa-id-card"></i></td>
									<td><?php echo $session['member_no']; ?></td>
								</tr>
								<tr>
									<td><i class="fas fa-user"></i></td>
									<td><?php echo $session['name']; ?></td>
								</tr>
								<tr>
									<td><i class="fas fa-envelope"></i></td>
									<td><?php echo $session['email']; ?></td>
								</tr>
							</tbody>
						</table>
					</li>
					<li class="menu-label mt-0">Main</li>
					<li>
						<a href="<?php echo route('home'); ?>">
							<i class="align-self-center text-light fas fa-home"></i>
							<span>หน้าหลัก</span>
						</a>
					</li>
					<li>
						<a href="<?php echo route('member/edit'); ?>">
							<i class="align-self-center text-light fas fa-user-edit"></i>
							<span>ตรวจสอบและแก้ไขข้อมูลส่วนตัว</span>
						</a>
					</li>
					<hr class="hr-dashed hr-menu">
					<li class="menu-label mt-0">Programs</li>
					<li>
						<a href="#">
							<i class="align-self-center text-light fas fa-plus-square"></i>
							<span>สมัครโปรแกรม</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="align-self-center text-light fas fa-file-invoice-dollar"></i>
							<span>ส่งเอกสารแจ้งชำระเงิน</span>
						</a>
					</li>
					<hr class="hr-dashed hr-menu">
					<li class="menu-label mt-0">Reports</li>
					<li>
						<a href="#">
							<i class="align-self-center text-light fas fa-clipboard-list"></i>
							<span>รายงานผลทดสอบ</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="align-self-center text-light fas fa-clipboard-check"></i>
							<span>ตรวจสอบผลการประเมิน</span>
						</a>
					</li>
					<hr class="hr-dashed hr-menu">
					<li>
						<a href="<?php echo route('member/logout');?>" onclick="return confirm('ยืนยันการออกจากระบบ');">
							<i class="align-self-center text-light fas fa-door-open"></i>
							<span>ออกจากระบบ</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end left-sidenav-->
	<?php } ?>