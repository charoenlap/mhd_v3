<style>
  table {
    font-size: 11px !important;
  }
</style>
<div class="content-wrapper">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Content Header (Page header) -->
  <title>รายการผู้สมัครหลัก_<?php echo $filter_year; ?></title>
  <!-- Main content -->
  <section class="content">
    <?php

    $list_value = array();
    $list_regis = array();
    foreach ($lists as $vals) {
      $list_value[] = $vals['list_value'];
      $list_regis[] = $vals['list_regis'];
    }
    // echo "<pre>";
    // print_r($lists);
    // echo "</pre>";
    ?>
    <div class="container-fluid">
      <form action="<?php echo $action_export ?>" method="post">
    <input type="hidden" name="export_year" value="<?php echo $filter_year; ?>">
    <button class="btn btn-success my-2" type="submit">EXPORT</button>
    </form>
      <div class="row">
        <div class="col-md-12">
          <div class="table table-responsive table-sm">
            <table border="1" class="table">
              <thead>
                <!--ผู้ที่มาสมัคร<-->
                <tr>
                  <th class="align-middle" colspan="5">ผู้ทำการสมัครสมาชิก</th>
                  <th class="align-middle" colspan="12">ที่อยู่</th>
                  <th class="align-middle" colspan="<?php echo count($programs); ?>">หมายเลขสมาชิกสมาชิก</th>
                  <th class="align-middle" colspan="<?php echo count($programs); ?>">ชื่อห้องปฏิบัติการ</th>
                  <th class="align-middle" colspan="<?php echo count($programs); ?>">ผู้รับผิดชอบ</th>
                  <th class="align-middle" colspan="<?php echo count($programs); ?>">ประกาศนีย์บัตร</th>
                  <th class="align-middle" colspan="<?php echo count($programs); ?>">ผู้ชำระเงิน</th>
                  <th class="align-middle" colspan="<?php echo count($programs); ?>">ที่อยู่จัดส่งใบเสร็จ</th>
                </tr>
                <tr>

                  <th class="align-middle">มหายเลขสมาชิกเดิม</th>
                  <th class="align-middle">วันที่สมัครรับ เอกสาร</th>
                  <th class="align-middle">ชื่อโรงพยาบาล</th>
                  <th class="align-middle">ชื่อ</th>
                  <th class="align-middle">นามสกุล</th>
                  <th class="align-middle">เลขที่</th>
                  <th class="align-middle">ตึก ชั้น ซอย ถนน</th>
                  <th class="align-middle">ตำบล</th>
                  <th class="align-middle">อำเภอ</th>
                  <th class="align-middle">จังหวัด</th>
                  <th class="align-middle">รหัสไปรษณีย์</th>
                  <th class="align-middle">โทรศัพท์</th>
                  <th class="align-middle">FAX</th>
                  <th class="align-middle">E-mail</th>
                  <th class="align-middle">จำนวนเตียง</th>
                  <th class="align-middle">ประเภทโรงพยาบาล</th>
                  <th class="align-middle">สังกัด</th>
                  <?php for ($i = 0; $i <= 5; $i++) { ?>
                    <?php foreach ($programs as $val) : ?>
                      <th class="align-middle">
                        <?php echo $val->name; ?>
                      </th>
                    <?php endforeach; ?>
                  <?php } ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($list_value as $value) : ?>
                  <tr>
                    <td><?php echo $value->member_no; ?></td>
                    <!-- checkdate-add -->
                    <?php if ($value->date_added == '' || $value->date_added == 0) : ?>
                      <td>ยังไม่ได้รับการยืนยันตัวตน</td>
                    <?php else : ?>
                      <td><?php echo $value->date_added; ?></td>
                    <?php endif; ?>
                    <td><?php echo $value->hospital; ?></td>
                    <td><?php echo $value->firstname; ?></td>
                    <td><?php echo $value->lastname; ?></td>

                    <td><?php echo $value->address_1; ?></td>
                    <!-- ตึก ชั้น ซอย ถนน -->
                    <td><?php echo $value->address_2;?></td>

                    <td><?php echo $value->district; ?></td>
                    <td><?php echo $value->country; ?></td>
                    <td><?php echo $value->province; ?></td>
                    <td><?php echo $value->post_code; ?></td>

                    <td><?php echo $value->telephone; ?></td>
                    <?php if ($value->fax == '') : ?>
                      <td>ไม่ได้ระบุเบอร์ Fax</td>
                    <?php else : ?>
                      <td><?php echo $value->fax; ?></td>
                    <?php endif; ?>

                    <td><?php echo $value->email; ?></td>
                    <?php if ($value->total_bed == '') : ?>
                      <td>ไม่ได้ระบุจำนวนเตียง</td>
                    <?php elseif ($value->total_bed == 1) : ?>
                      <td>น้อยกว่า 100 เตียง</td>
                    <?php elseif ($value->total_bed == 2) : ?>
                      <td>101 - 300 เตียง</td>
                    <?php elseif ($value->total_bed == 3) : ?>
                      <td>301 - 500 เตียง</td>
                    <?php elseif ($value->total_bed == 4) : ?>
                      <td>มากกว่า 500 เตียง</td>
                    <?php endif; ?>

                    <?php if ($value->type_hospital_other == '') : ?>
                      <td><?php echo $value->type_hospital; ?></td>
                    <?php else : ?>
                      <td><?php echo $value->type_hospital_other; ?></td>
                    <?php endif; ?>
                    <!-- สังกัด -->
                    <td></td>
                      <?php for($i=0;$i <=5;$i++): ?>
                      <?php foreach ($programs as $program): ?>
                      <td>
                      <?php
                        foreach ($list_regis as $regis){
                          foreach ($regis as $reg){
                            if($reg->member_id == $value->id){
                              if($program->id == $reg->program_id){
                                if($i==0){
                                  if($reg->sub_member_id != ''){
                                    echo $reg->sub_member_id;
                                  } else { 
                                    echo "-";}
                                } elseif($i==1){
                                  echo $value->room;
                                } elseif($i==2){
                                  echo $reg->bill_contact;
                                } elseif($i==3){
                                  echo $reg->bill_title_th.", ".$reg->bill_title_en;
                                } elseif($i==4){
                                  echo $reg->bill_company;
                                } elseif($i==5){
                                  echo $reg->bill_address;
                                }
                              }
                            }
                          }
                        }
                      ?>
                      </td>
                      <?php endforeach; ?>
                      <?php endfor; ?>    
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>