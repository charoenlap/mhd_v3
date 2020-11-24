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
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAI:Syphilis</h5>
                    </div>
                    <div class="container-left">
                        <h5 class="text-left"><p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p></h5>
                        <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                        <div class="col">
                        <p>Trial: Trial 185-186 ( November 2020 )</p>
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
                            <textarea class="form-control" id="received_status_other" name="received_status_other"></textarea>
                        </div>
                            <div class="container-left" style="padding-top: 30px;">
                                <p class="font-weight-bold">ผลการตรวจ</p>
                            </div>
                            eqai_syphi.php
                                    <div class="container-fluid">
                                        <table class="table text-center table-hover">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th></th>
                                                    <th style="width: 300px;">Non treponemal Test</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Treponemal Test</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                    <select class="custom-select" name="tools[0]" other_id="other_ntp" data-no="4">
                                                            <option value="" selected="">Choose</option>
                                                            <option value="26" other="">VDRL</option>
                                                            <option value="27" other="">RPR</option>
                                                            <option value="28" other="">Unheated VDLR</option>
                                                            <option value="29" other="1">Other</option>
                                                    </select>
                                                    </td>
                                                    <td>Method</td>
                                                    <td class="bg-primary border-0"></td>
                                                    <td>
                                                    <select class="custom-select" name="tools[1]" other_id="other_tp" data-no="5">
                                                        <option value="" selected="">Choose</option>
                                                                                    <!-- <option value="30" other="" >TPHA</option>  -->
                                                        <option value="30" other="">TPHA</option> 
                                                                                    <!-- <option value="31" other="" >FTA-ABS</option>  -->
                                                        <option value="31" other="">FTA-ABS</option> 
                                                                                    <!-- <option value="32" other="" >TPPA</option>  -->
                                                        <option value="32" other="">TPPA</option> 
                                                                                    <!-- <option value="33" other="" >Immunochromatography</option>  -->
                                                        <option value="33" other="">Immunochromatography</option> 
                                                                                    <!-- <option value="34" other="" >CMIA</option>  -->
                                                        <option value="34" other="">CMIA</option> 
                                                                                    <!-- <option value="35" other="" >ECLIA</option>  -->
                                                        <option value="35" other="">ECLIA</option> 
                                                                                    <!-- <option value="36" other="" >CLIA</option>  -->
                                                        <option value="36" other="">CLIA</option> 
                                                                                    <!-- <option value="40" other="1" >Other</option>  -->
                                                        <option value="40" other="1">Other</option> 
                                                    </select>
                                                    </td>
                                                    <td>Method</td>                      
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                         <input type="text" class="form-control" name="ntp_result">
                                                    </td>
                                                    <td>Instrument/Test Kit/ Brand</td>
                                                    <td class="bg-primary border-0"></td>                                                    
                                                    <!-- second input -->
                                                    <td>
                                                        <input type="text" class="form-control" name="tp_result">
                                                    </td>
                                                    <td>Instrument/Test Kit/ Brand</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                         <input type="text" class="form-control" name="ntp_lot_number">
                                                    </td>
                                                    <td>Reagent Lot Number</td>
                                                    <td class="bg-primary border-0"></td>                                                  
                                                    <!-- second input -->
                                                    <td>
                                                        <input type="text" class="form-control" name="tp_lot_number">
                                                    </td>
                                                    <td>Reagent Lot Number</td>
                                                </tr>
                                                <tr>
                                                    <td>Specimen No.</td>
                                                    <td>Qualitative</td>
                                                    <td>Semiquantitative</td>
                                                    <td></td>
                                                    <td>Qualitative</td>
                                                    <td hidden>Specimen No.</td>
                                                </tr>
                                            </tbody>
                                        </table>
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