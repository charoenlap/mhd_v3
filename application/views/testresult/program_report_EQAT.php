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
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAT</h5>
                    </div>
                    <div class="container-left">
                        <h5 class="text-left"><p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p></h5>
                        <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                        <div class="col">
                        <p>Trial: 290 - 291 (November 2020)</p>
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
                            <textarea class="form-control" id="received_status_other" name="received_status_other" ></textarea>
                        </div>
                        <div class="container-left" style="padding-top: 30px;">
                            <p class="font-weight-bold">ผลการตรวจ</p>
                        </div>
                        eqat.php
                        <div class="row">
                            <div class="cols12">
                                <table class="table text-center table-hover">
                                <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Analytes</th>
                                            <th scope="col">Instruments</th>
                                            <th scope="col">Principles</th>
                                            <th scope="col">Trial 290</th>
                                            <th scope="col">Trial 291</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>AFP* IU/mL</td>
                                                <td>
                                                <select class="custom-select" name="tools[]" other_id="other_0" data-no="1_0">
                                                            <option value="" selected="">Choose</option>
                                                            <option value="01" other="">01: Maglumi Series /800</option>
                                                            <option value="02" other="">02: Abbott, Architect Series /Armity</option>
                                                            <option value="03" other="">03: Siemens, Advia Centaur CP  [  ] XP</option>
                                                            <option value="04" other="">04: Beckman, Access ; Unicel DXi</option>
                                                            <option value="05" other="">05: BioMerieux, VIDAS ; Minividas</option>
                                                            <option value="06" other="">06: Tosoh AIA Series</option>
                                                            <option value="07" other="">07: Johnson, Vitros ECi 3600, 5600</option>
                                                            <option value="08" other="">08: Roche; Cobas Series, Modular, Elecsys series</option>
                                                            <option value="09" other="">09: Hybiome AE-180</option>
                                                            <option value="10" other="" selected="">10: Mindray CL 6000i,2000i / 1000i</option>
                                                            <option value="11" other="">11: Liaison Series ;</option>
                                                            <option value="12" other="">12: Immulite, LKB1277, DPC, Others</option>
                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                <select class="custom-select" name="method[]" other_id="other_method0" data-no="2_0">
                                                            <option value="" selected="">Select Method</option>
                                                            <option value="1" other="" selected="">CLIA</option>
                                                            <option value="2" other="">ECLIA</option>
                                                            <option value="3" other="">ELFA</option>
                                                            <option value="4" other="">CMIA</option>
                                                            <option value="5" other="">FEIA</option>
                                                            <option value="6" other="1">ICMA</option>
                                                            <option value="7" other="">IRMA</option>
                                                            <option value="99" other="">Others</option>
                                                        </select>
                                                </td>
                                                <td><input type="text" class="form-control" name="result_1[1]" style="padding-bottom: 0px;" ></td>
                                                <td><input type="text" class="form-control" name="result_1[2]" style="padding-bottom: 0px;" ></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>CEA ng/mL</td>
                                                <td>
                                                <select class="custom-select" name="tools[]" other_id="other_0" data-no="1_0">
                                                            <option value="" selected="">Choose</option>
                                                            <option value="01" other="">01: Maglumi Series /800</option>
                                                            <option value="02" other="">02: Abbott, Architect Series /Armity</option>
                                                            <option value="03" other="">03: Siemens, Advia Centaur CP  [  ] XP</option>
                                                            <option value="04" other="">04: Beckman, Access ; Unicel DXi</option>
                                                            <option value="05" other="">05: BioMerieux, VIDAS ; Minividas</option>
                                                            <option value="06" other="">06: Tosoh AIA Series</option>
                                                            <option value="07" other="">07: Johnson, Vitros ECi 3600, 5600</option>
                                                            <option value="08" other="">08: Roche; Cobas Series, Modular, Elecsys series</option>
                                                            <option value="09" other="">09: Hybiome AE-180</option>
                                                            <option value="10" other="" selected="">10: Mindray CL 6000i,2000i / 1000i</option>
                                                            <option value="11" other="">11: Liaison Series ;</option>
                                                            <option value="12" other="">12: Immulite, LKB1277, DPC, Others</option>
                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                <select class="custom-select" name="method[]" other_id="other_method0" data-no="2_0">
                                                            <option value="" selected="">Select Method</option>
                                                            <option value="1" other="" selected="">CLIA</option>
                                                            <option value="2" other="">ECLIA</option>
                                                            <option value="3" other="">ELFA</option>
                                                            <option value="4" other="">CMIA</option>
                                                            <option value="5" other="">FEIA</option>
                                                            <option value="6" other="1">ICMA</option>
                                                            <option value="7" other="">IRMA</option>
                                                            <option value="99" other="">Others</option>
                                                        </select>
                                                </td>
                                                <td><input type="text" class="form-control" name="result_2[1]" style="padding-bottom: 0px;" ></td>
                                                <td><input type="text" class="form-control" name="result_2[2]" style="padding-bottom: 0px;" ></td>
                                            </tr>
                                        </tbody>
                                </table>
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
                                <div class="form-gruop text-center">
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