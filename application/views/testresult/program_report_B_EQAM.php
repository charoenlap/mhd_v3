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
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : B-EQAM</h5>
                    </div>
                    <div class="container-left">
                        <h5 class="text-left"><p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p></h5>
                        <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                        <div class="col">
                        <p>Trial: trial 185-186 ( November 2020 )</p>
                    </div>
                    <div class="font-weight-bold container-left">
                        <label for="report_date">วันที่ได้รับตัวอย่างทดสอบ *</label>
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
                            <textarea class="form-control" id="received_status_other" name="received_status_other" placeholder="ความคิดเห็นเพิ่มเติม"></textarea>
                        </div>
                            <div class="container-left" style="padding-top: 30px;">
                                <p class="font-weight-bold">ผลการตรวจ</p>
                            </div>
                            eqam.php
                            <div class="row justify-content-between">
                                <div class="col px-md-4">
                            <select name="tool" class="custom-select">
                <!-- <option value="">ชื่อเครื่องนับเม็ดเลือดอัตโนมัติและรุ่นที่ใช้</option> -->
                                      <option value="13">XN-L series</option>
                                      <option value="14">XN series</option>
                                      <option value="15">XS series</option>
                                      <option value="16">XT series</option>
                                      <option value="17">XE series</option>
                                      <option value="18">Sysmex K series, XP series</option>
                                      <option value="23">Ac.T 5 series</option>
                                      <option value="24">DxH 600 / 800 / 900</option>
                                      <option value="6">DxH 500 / 520</option>
                                      <option value="7">LH</option>
                                      <option value="1">BC 3000 series</option>
                                      <option value="2">BC 5000 series</option>
                                      <option value="3">BC 6000 series</option>
                                      <option value="4">BF 6800</option>
                                      <option value="5">Cell-Dyn </option>
                                      <option value="8">MEK</option>
                                      <option value="10">Pentra</option>
                                      <option value="11">Quintus</option>
                                      <option value="12">URIT</option>
                                      <option value="19">Swelab</option>
                                      <option value="20">Hycel</option>
                                      <option value="21">ABX Micros/Minos/ABC VET</option>
                                      <option value="22">Advia 120/2120</option>
                                      <option value="9">Others</option>
                                </select>
                                </div>
                            <div class="col px-md-3">
                            <input type="text" class="form-control" id="tool_other" name="tool_other" placeholder="รายชื่อเครื่องอื่นๆ">
                            </div>
                            </div>
                            <div class="row" style="padding-top: 20px;">
                                <div class="cols12 container-fluid">
                                    <table class="table text-center table-bordered">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>WBC (x109/L)</th>
                                                <th>RBC (x1012/L)</th>
                                                <th>Hb (g/dL)</th>
                                                <th>Hct (%)</th>
                                                <th>MCV (fL)</th>
                                                <th>MCH (pg)</th>
                                                <th>MCHC (g/dL)</th>
                                                <th>RDW (%)</th>
                                                <th>PLT (x109/L)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control" name="result_0"></td>
                                                <td><input type="text" class="form-control" name="result_1"></td>
                                                <td><input type="text" class="form-control" name="result_2"></td>
                                                <td><input type="text" class="form-control" name="result_3"></td>
                                                <td><input type="text" class="form-control" name="result_4"></td>
                                                <td><input type="text" class="form-control" name="result_5"></td>
                                                <td><input type="text" class="form-control" name="result_6"></td>
                                                <td><input type="text" class="form-control" name="result_7"></td>
                                                <td><input type="text" class="form-control" name="result_8"></td>
                                            </tr>
                                        </tbody>   
                                    </table>
                                    <div class="container-left">อัพโหลดไฟล์</div>
                                    <div class="row justify-content-between">
                                    <div class="input-group" style="padding-top: 10px;">
                                            <div class="col px-md-5">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="file_0">Upload one file</label>                          
                                                <input type="file" class="custom-file-input" id="file_0" name="file_0" >              
                                            </div>
                                            </div>
                                            <div class="col px-md-5">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="file_1">Upload one file</label>                          
                                                <input type="file" class="custom-file-input" id="file_1" name="file_1" >              
                                            </div>
                                            </div>                          
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
<script>
$('#file_0').on("change",function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_0')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file); 

    });
    $('#file_1').on("change",function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_1')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file); 

    });
</script>