<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800" id="title" name="title"><?php echo $heading_title;?></h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                <div class="text-center p-3 mb-2 bg-primary text-white" id="title2" name="title2"><h2><?php echo $heading_title;?></h2></div>
                
                <form action="<?php echo $action;?>" method="POST" role="form">
                    <div class="container-left">
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAB: AFB</h5>
                    </div>
                    <div class="container-left">
                        <h5 class="text-left"><p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p></h5>
                        <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                        <div class="col">
                        <h6><label class="font-weight-bold">Trial : </label> Trial 185-186 ( November 2020 )</h6>
                    </div>
                    <div class="font-weight-bold container-left">
                        <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                        <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick"></input>
                    </div>
                    <div class="container-left"><p class="font-weight-bold" style="padding-top: 30px;">ความสมบูรณ์ของตัวอย่างทดสอบ * </p></div>
                        <input type="radio" name="received_status" id="test1" name="test1" class="received_check theone" checked="" value="1">
                        <label class="choose_edit" for="test1">อยู่ในสภาพสมบูรณ์</label>
                        <div class="container-left">
                        <input type="radio" name="received_status" id="test2" name="test2" class="received_check theone" value="2">
                        <label class="choose_edit" for="test2">อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้</label>
                        </div>
                        <div class="container-left">
                            <label for="received_status_other" class="font-weight-bold">เนื่องจาก</label>
                            <textarea class="form-control" id="received_status_other" name="received_status_other"></textarea>
                        </div>
                            <div class="container-left" style="padding-top: 30px;">
                                <p class="font-weight-bold">ผลการตรวจ</p>
                            </div>
                            eqab_afb.php <br>
                            <label style="padding-top: 0px; margin: 0;">3.วิธีการที่ท่านใช้ในการย้อม AFB stain สำหรับตัวอย่างที่ได้รับ</label>
                                    <div class="container-fluid">
                                        <!-- first radio -->
                                        <div class="form-check col-md-auto">
                                        <input class="form-check-input" type="radio" name="result" id="radio_0" value="1">
                                        <label class="form-check-label" for="radio_0">
                                            Kinyo stain
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="result" id="radio_1" value="2">
                                        <label class="form-check-label" for="radio_1">
                                            Ziehl-Neelsen stain
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="result" id="radio_2" value="3">
                                        <label class="form-check-label" for="radio_2">
                                            Auramine Rhodamine Fluorochrome stain
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="result" id="radio_3" value="4">
                                        <label class="form-check-label" for="radio_3">
                                            Other ระบุ
                                        </label>                 
                                        </div>
                                        <input type="text" name="result_other" class="form-control" placeholder="Other ระบุ" style="margin-bottom: 20px;"></input>
                                        <caption>4.รายงานผลการย้อมสี</caption>
                                        <table class="table text-center table-hover">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th>Sample Id</th>
                                                    <th>รายงานผลการย้อมสี</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Trial 185</td>
                                                    <td>
                                                    <div class="form-check text-left">
                                                    <input class="form-check-input" type="radio" name="sample[0]" id="test2880" value="1">
                                                    <label class="form-check-label" for="test2880">
                                                        No AFB Observed
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="sample[0]" id="test2890" value="2">
                                                    <label class="form-check-label" for="test2890">
                                                        1-9 AFB per 100 fields
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="sample[0]" id="test2900" value="3">
                                                    <label class="form-check-label" for="test2900">
                                                        AFB 1+ (10-99 AFB/100 fields)
                                                    </label>
                                                    </tr>
                                                    <br>                
                                                    </div>
                                                    </td>
                                                    <tr>
                                                    <td>Trial 186</td>
                                                    <td>
                                                    <div class="form-check text-left">
                                                    <input class="form-check-input" type="radio" name="sample[1]" id="test2910" value="1">
                                                    <label class="form-check-label" for="test2910">
                                                        No AFB Observed
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="sample[1]" id="test2920" value="2">
                                                    <label class="form-check-label" for="test2920">
                                                        1-9 AFB per 100 fields
                                                    </label>
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="sample[1]" id="test2930" value="3">
                                                    <label class="form-check-label" for="test2930">
                                                        AFB 1+ (10-99 AFB/100 fields)
                                                    </label>
                                                    <br>                
                                                    </div>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        <div class="container-left">
                                            <h6>หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ</h6>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold" style="padding-top: 30px; padding-bottom: 10px;"> ข้อมูลผู้ส่ง </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-5">
                                    <label for="name_lname">ชื่อ</label>
                                    <input type="text" class="form-control" id="name_lname" name="name_lname" placeholder="ชื่อ">
                                    </div>
                                    <div class="form-group col-md-3">
                                    <label for="tel">หมายเลขโทรศัพท์</label>
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="หมายเลขโทรศัพท์">
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="position">ตำแหน่ง</label>
                                    <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง">
                                    </div>
                                    </div>
                                    <div class="font-weight-bold" style="padding-top: 30px;">
                                    <label for="comment">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง </label>
                                    <textarea class="form-control" id="comment" name="comment" placeholder="ความคิดเห็นเพิ่มเติม"></textarea>
                                    </div>
                                    <div class="font-weight-bold container-left" style="padding-top: 30px;">
                                    <label for="report_date">วันที่ทำการทดสอบ </label>
                                    <input type="date" class="form-control" style="width: 180px;" id="report_date" name="report_date" ></input>
                                    </div>
                                    <div class="form-gruop text-center" style="margin-top: 30px;">
                                    <button class="btn btn-primary" onclick="window.print()" name="printPageButton" id="printPageButton" name="printPageButton">พิมพ์</button>
                                    <a href="#" class="btn btn-primary" id="btnpreview" name="btnpreview">พรีวิว</a>
                                    <button type="submit" id="submit" class="btn btn-primary">ยืนยันการส่งผลการตรวจ</button>
                                    </div>
                                </div>
                            </div>                      
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media print {
  #printPageButton,#btnpreview,#confirmpreview,#accordionSidebar,#title,#submit{
    display: none;
  }
}
</style>
