<div class="container-fluid" style="background:url('<?php echo MURL;?>assets/images/bg.png') no-repeat center center / cover;">
	<div class="container">
		<div class="row vh-100 d-flex justify-content-center">
			<div class="col-12">
				<img src="<?php echo MURL;?>assets/images/header.png" alt="" class="img-fluid">
			</div>
			<div class="col-12 align-self-center">

				<div class="row">
					<div class="col-lg-6 mx-auto">

						<div class="card">
							<div class="card-body p-0 auth-header-box">
								<div class="text-center p-3">
									<h4 class="mt-3 mb-1 font-weight-semibold font-18">ลืมรหัสผ่าน</h4>
								</div>
							</div>
							<div class="card-body pt-0">
								<?php echo isset($success) ? '<div class="alert alert-success" role="alert">'.$success.'</div>' : ''; ?>
								<?php echo isset($error) ? '<div class="alert alert-danger" role="alert">'.$error.'</div>' : ''; ?>
								<!-- Login -->
								<form class="form-horizontal auth-form" action="<?php echo $action;?>" method="POST">
									<div class="form-group">
										<label for="username">อีเมลผู้ใช้งาน</label>
										<div class="input-group mb-3">
											<input type="text" class="form-control" name="email" id="username" placeholder="Email Address" autofocus="on">
										</div>
									</div>
									<!--end form-group-->
									<div class="form-group mb-0 row">
										<div class="col-12 mt-1">
											<button class="btn btn-primary btn-block waves-effect waves-light" type="submit">ลืมรหัสผ่าน
											</button>
											<a href="<?php echo $link_login; ?>" class="btn btn-block btn-outline-light" id="linklogin">เข้าสู่ระบบ</a>
										</div>
										<!--end col-->
									</div>
									<!--end form-group-->
								</form>
								<!--end form-->
								<!-- Login -->



							</div>
						</div>
						<!--end card-body-->
						<div class="card-body text-center">
							<span class="text-muted d-none d-sm-inline-block">Power by <a href="http://www.friendlysoftpro.com/">Friendlysoftpro</a> © <?php echo date('Y');?></span>
						</div>
					</div>
					<!--end card-->
				</div>
				<!--end col-->
			</div>
			<!--end row-->
		</div>
		<!--end col-->
	</div>
	<!--end row-->
</div>