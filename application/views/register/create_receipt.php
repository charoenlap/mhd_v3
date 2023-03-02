<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><?php echo $heading_title; ?></h1>

  <!-- DataTales Example -->
  <?php if (!empty($success)) { ?>
    <div class="card shadow mb-4">
      <div class="card-body border-left-success text-success"><i class="fas fa-check-circle text-success"></i> <?php echo $success; ?></div>
    </div>
  <?php } ?>
  <?php if (!empty($error)) { ?>
    <div class="card shadow mb-4">
      <div class="card-body border-left-danger text-danger"><i class="fas fa-times-circle text-danger"></i> <?php echo $error; ?></div>
    </div>
  <?php } ?>
  <form class="user" action="<?php echo $action; ?>" method="POST">

    <div class="card shadow mb-2">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ค่าธรรมเนียมการสมัคร</h6>
      </div>
      <div class="card-body">
        <!-- <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="payment_method1" value="bank_transfer" checked>
            <label class="form-check-label" for="payment_method1">
              โอนเงินเข้าบัญชี ธนาคารไทยพาณิชย์ จำกัด (มหาชน) สาขาศิริราช เลขที่บัญชี 016-452491-2 ชื่อบัญชี "โครงการ การประเมินคุณภาพทางห้องปฏิบัติการ โดดยองค์กรภายนอก คณะเทคนิคการแพทย์" พร้อมหลักฐานแนบ
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="payment_method2" value="cheque">
            <label class="form-check-label" for="payment_method2">
              เช็คธนาคารในนาม "โครงการ การประเมินคุณภาพทางห้องปฏิบัติการ โดดยองค์กรภายนอก คณะเทคนิคการแพทย์"
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_method" id="payment_method3" value="cash">
            <label class="form-check-label" for="payment_method3">
              ชำระเงินสด ที่ ศูนย์พัฒนามาตรฐานการประเมินผลิตภัณฑ์ คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล (โรงพยาบาลศิริราช)
            </label>
          </div> -->
        <div class="form-group row mt-0">
        <p class="mb-2 col-sm-12 text-danger">*หมายเหตุ จะได้รับส่วนลด 200 บาท หากสมัคร EQAB: GRAM & AFB หรือ 500 บาท หากสมัคร EQAB ทุกโครงการ</p>
          <label class="col-sm-2 col-form-label">ยอดชำระ</label>
          <div class="col-sm-10">
            <!-- <input type="number" class="form-control-plaintext" readonly id="inputTotal" value="100"> -->
            <h4><?php echo isset($total_discount) ? number_format($total_discount, 2) : number_format($total, 2); ?> บาท <br> <small>(<?php echo $total_text; ?>)</small></h4>
          </div>
        </div>
      </div>
    </div>

    <div class="card shadow mb-2">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">กรอกรายละเอียดการชำระเงินและการออกใบเสร็จรับเงิน</h6>
      </div>
      <div class="card-body">
        <?php
        // $program_list;
        ?>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center" width="20%">โครงการ</th>
              <th class="text-center" width="20%">ผู้ชำระเงิน<br>(ชื่อบริษัท หรือ ชื่อโรงพยาบาล)</th>
              <th class="text-center" width="20%">ออกใบเสร็จในนาม</th>
              <th class="text-center" width="20%">ผู้ประสานงาน<br>โทรศัพท์/อีเมล</th>
              <th class="text-center" width="20%">ที่อยู่จัดส่งใบเสร็จ</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($program_list as $register_program) : ?>
              <tr>
                <td width="20%"><?php echo $register_program->program_name; ?></td>
                <!-- <td width="20%"><input type="text" name="bill_company[<?php echo $register_program->id; ?>]" value="<?php echo $register_program->bill_company; ?>" class="form-control" placeholder="ผู้ชำระเงิน" required /></td>
                <td width="20%"><input type="text" name="bill_name[<?php echo $register_program->id; ?>]" value="<?php echo $register_program->bill_name; ?>" class="form-control" placeholder="ออกใบเสร็จในนาม" required /></td>
                <td width="20%"><input type="text" name="bill_contact[<?php echo $register_program->id; ?>]" value="<?php echo $register_program->bill_contact; ?>" class="form-control" placeholder="ผู้ประสานงาน" required /></td>
                <td width="20%"><input type="text" name="bill_address[<?php echo $register_program->id; ?>]" value="<?php echo $register_program->bill_address; ?>" class="form-control" placeholder="ที่อยู่จัดส่งใบเสร็จ" required /></td> -->

                <td width="20%"><textarea name="bill_company[<?php echo $register_program->id; ?>]" id="" class="form-control" cols="30" rows="2" required><?php echo $register_program->bill_company; ?></textarea></td>
                <td width="20%"><textarea name="bill_name[<?php echo $register_program->id; ?>]" id="" class="form-control" cols="30" rows="2" required><?php echo $register_program->bill_name; ?></textarea></td>
                <td width="20%"><textarea name="bill_contact[<?php echo $register_program->id; ?>]" id="" class="form-control" cols="30" rows="2" required><?php echo $register_program->bill_contact; ?></textarea></td>
                <td width="20%"><textarea name="bill_address[<?php echo $register_program->id; ?>]" id="" class="form-control" cols="30" rows="2" required><?php echo $register_program->bill_address; ?></textarea></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="card shadow mb-2">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ข้อมูลสำหรับจัดทำประกาศนียบัตร</h6>
      </div>
      <div class="card-body">
      <!-- <label class="text-danger font-weight-bold">*กรุณากรอกชื่อห้องปฏิบัติการ และชื่อหน่วยงาน/โรงพยาบาล ของท่านให้ถูกต้อง อาจมีค่าใช้จ่ายเพิ่มเติมสำหรับการเปลี่ยนแปลงข้อมูลภายหลัง</label> -->
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <th class="text-center">โครงการ</th>
              <th class="text-center">ชื่อห้องปฏิบัติการ (ภาษาอังกฤษเท่านั้น)</th>
              <th class="text-center">ชื่อหน่วยงาน/โรงพยาบาล (ภาษาอังกฤษเท่านั้น)</th>
              <!-- <th class="text-center">ชื่อที่หน่วยงานประสงค์ให้ปรากฏบนใบประกาศนียบัตร (โปรดเลือกภาษาที่ท่านต้องการหรือทั้งสองภาษา)</th> -->
            </tr>
          </thead>
          <tbody>
            <?php foreach ($program_list as $register_program) : ?>
              <tr>
                <td><?php echo $register_program->program_name; ?></td>
                <td width="40%">
                  <!-- <input type="text" name="bill_title_th[<?php echo $register_program->id; ?>]" value="<?php echo $register_program->bill_title_th; ?>" class="form-control" aria-label="ภาษาไทย" placeholder="ภาษาไทย" required> -->
                  <textarea name="bill_title_th[<?php echo $register_program->id; ?>]" id="bill_title_th[<?php echo $register_program->id; ?>]" class="form-control bill_title_th_<?php echo $register_program->id; ?>" cols="30" rows="2" required></textarea>
                </td>
                <td width="40%">
                  <!-- <input type="text" name="bill_title_en[<?php echo $register_program->id; ?>]" value="<?php echo $register_program->bill_title_en; ?>" class="form-control" aria-label="English" placeholder="English" required> -->
                  <textarea name="bill_title_en[<?php echo $register_program->id; ?>]" id="bill_title_en[<?php echo $register_program->id; ?>]" class="form-control bill_title_en_<?php echo $register_program->id; ?>" cols="30" rows="2" required></textarea>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- <div class="card shadow mb-2">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ในกรณีที่ไม่สามารถสมัครออนไลน์ได้ ท่านสามารถส่งใบสมัครและสำเนาหลักฐานการโอนเงินได้ที่</h6>
      </div>
      <div class="card-body">
        <p class="mb-0">ทางโทรสาร : หมายเลข 02 412 4110</p>
        <p class="mb-0">ทางไปรษณีย์ : ศูนย์พัฒนามาตรฐานและประเมินผลิตภัณฑ์ ถนนวังหลัง แขวงศิริราช เขตบางกอกน้อย กรุงเทพฯ 10700</p>
        <p class="mb-0">ทางอีเมล : eqamtmu@gmail.com</p>
        <br>
        <p class="mb-0"><u>พิเศษ</u></p>
        <p class="mb-0">สมัครโครงการ EQAB: GRAM & AFB ระบบจะลดราคาให้ 200 บาท (อัตโนมัติ) หลังจากกดสมัคร</p>
        <p>สมัครโครงการ EQAB: GRAM, AFB และ IDEN&AST ระบบจะลดราคาให้ 500 บาท (อัตโนมัติ) หลังจากกดสมัคร</p>
        <br>
        <h4 class="mb-0">หมดเขตรับสมัคร ปี 2020 วันที่ 20 มกราคม 2564</h4>
        <p>********** เพื่อเป็นการรักษาสิทธิ์ในการสมัครสมาชิกโครงการฯ ขอให้ท่านดำเนินการชำระเงิน <span class="text-danger">>>> ภายในวันที่ 20 มกราคม 2564 <<< </span>
        </p>

      </div>
    </div> -->
    <input type="hidden" name="date_time_value"  value="<?php echo $date_time_create; ?>">
    <div class="card shadow mb-2">
      <div class="card-body">
        <input type="submit" class="btn btn-primary btn-block" value="บันทึกข้อมูล" />
      </div>
    </div>
  </form>
</div>
<script>
$(function(){
  <?php foreach ($program_list as $register_program) : ?>
    $(".bill_title_th_<?php echo $register_program->id; ?>").keypress(function(event){
        var ew = event.which;
        if(ew == 32)
            return true;
        if(ew == 44)
            return true;
        if(48 <= ew && ew <= 57)
            return true;
        if(65 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        return false;
    });
    $(".bill_title_en_<?php echo $register_program->id; ?>").keypress(function(event){
        var ew = event.which;
        if(ew == 32)
            return true;
        if(ew == 44)
            return true;
        if(48 <= ew && ew <= 57)
            return true;
        if(65 <= ew && ew <= 90)
            return true;
        if(97 <= ew && ew <= 122)
            return true;
        return false;
    });
    $('.bill_title_en_<?php echo $register_program->id; ?>').on("cut copy paste",function(e) {
      e.preventDefault();
   });
   $('.bill_title_th_<?php echo $register_program->id; ?>').on("cut copy paste",function(e) {
      e.preventDefault();
   });
  <?php endforeach; ?>
});
</script>