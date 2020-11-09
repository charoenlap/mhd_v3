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
                                    <h4 class="mt-3 mb-1 font-weight-semibold font-18">โครงการประเมินคุณภาพห้อปฏิบัติการโดยองค์กรภายนอก</h4>
                                    <p class="text-muted mb-0">คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php echo isset($success) ? '<div class="alert alert-success" role="alert">'.$success.'</div>' : ''; ?>
                                <?php echo isset($error) ? '<div class="alert alert-danger" role="alert">'.$error.'</div>' : ''; ?>
                                <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-weight-semibold" data-toggle="tab" href="#login_tab" role="tab">เข้าสู่ระบบ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-semibold" href="<?php echo $link_register; ?>" role="tab">สมัครสมาชิก</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <!-- Login -->
                                    <div class="tab-pane active p-3 pt-3" id="login_tab" role="tabpanel">
                                        <form class="form-horizontal auth-form my-4" action="<?php echo $action;?>" method="POST">
                                            <div class="form-group">
                                                <label for="username">อีเมลผู้ใช้งาน</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="email" id="username" placeholder="Email Address">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="userpassword">รหัสผ่าน</label>
                                                <div class="input-group mb-3">
                                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-1">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">เข้าสู่ระบบ <i class="fas fa-sign-in-alt ml-1"></i>
                                                    </button>
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <a href="<?php echo $forgot; ?>">ลืมรหัสผ่าน</a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                    </div>
                                    <!-- Login -->


                                </div>

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