<div class="col-sm-12 col-md-3 col-lg-2">
  <section id="sidebar" class="bg-blue <?php if($this->uri->segment(2) == 'about_schemes'){echo 'h-100';}else{'';} ?>">
    <img src="<?php echo base_url();?>assets/img/logo.png" class="img-fluid d-none d-md-block d-lg-block d-xl-block" alt="logo" />
    <button type="button" class="btn d-block d-md-none d-lg-none d-xl-none" id="navmenubtn"><i
        class="fas fa-bars"></i></button>
    <ul id="mainmenu" class="list-unstyled">
      <li>
        <a href="<?php echo base_url();?>" class="<?php if(base_url(uri_string()) == base_url()){echo 'active';} ?>">หน้าหลัก</a>
      </li>
      <li>
        <a href="<?php echo base_url('home/about_schemes') ?>" class="<?php if(base_url(uri_string()) == base_url('home/about_schemes')){echo 'active';} ?>">เกี่ยวกับโครงการ</a>
      </li>
      <li>
        <a href="http://www.website-thai.com/mhd/member/webboard/">เว็บบอร์ด</a>
      </li>
      <li>
        <a href="<?php echo base_url('home/contact') ?>" class="<?php if(base_url(uri_string()) == base_url('home/contact')){echo 'active';} ?>">ติดต่อโครงการ</a>
      </li>
      <li>
        <a data-bs-toggle="collapse" href="#submenu_scheme" role="button" aria-expanded="false"
          aria-controls="submenu_scheme">Scheme ที่ให้บริการ</a>
          <div class="collapse" id="submenu_scheme">
          <div class="">
            <ul class="list-unstyled">
                <?php foreach ($sub_menu as $menu) : ?>
                <li class="">
                    <a href="<?php echo base_url('home/content/'.$menu->id); ?>">- <?php echo $menu->name;?></a>
                </li>
                <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </li>
      <li>
        <a href="<?php echo base_url('member/login'); ?>" class="loginlink"><img src="<?php echo base_url();?>assets/img/login_btn.png"
            class="img-fluid" /></a>
      </li>
    </ul>
  </section>
</div>