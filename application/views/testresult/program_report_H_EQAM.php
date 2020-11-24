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
                
                <form class="user" action="<?php echo $action;?>" method="POST" enctype="multipart/form-data">
                    <div class="container-left">
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : *H-EQAM - ปิดรับสมาชืกปี 2564 (สมาชิกเต็ม)</h5>
                    </div>
                    <div class="container-left">
                        <h5 class="text-left"><p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p></h5>
                        <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                        <div class="col">
                        <p>Trial: 6301</p>
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
                        h_eqam.php
                        <div class="row">
                            <div class="cols12 container-fluid">
                                <table class="table text-center table-hover">
                                <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col">รหัสเซลล์</th>
                                            <th scope="col">Cell Types</th>
                                            <th scope="col">6301.1 (%)</th>
                                            <th scope="col">6301.2 (%)</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Blast cell (cannot be identified)</td>
                                                <td><input type="text" class="form-control" name="sample[0][1]" style="padding-bottom: 0px;" ></td>
                                                <td><input type="text" class="form-control" name="sample[1][1]" style="padding-bottom: 0px;" ></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lymphoblast/prolymphocyte</td>
                                                <td><input type="text" class="form-control" name="sample[0][2]" style="padding-bottom: 0px;" ></td>
                                                <td><input type="text" class="form-control" name="sample[1][2]" style="padding-bottom: 0px;" ></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Monoblast/promonocyte</td>
                                                <td><input type="text" class="form-control" name="sample[0][3]" style="padding-bottom: 0px;" ></td>
                                                <td><input type="text" class="form-control" name="sample[1][3]" style="padding-bottom: 0px;" ></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>Total</td>
                                                <td><input type="text" class="form-control" name="sample[0][4]" style="padding-bottom: 0px;" ></td>
                                                <td><input type="text" class="form-control" name="sample[1][4]" style="padding-bottom: 0px;" ></td>
                                            </tr>
                                        </tbody>
                                </table>
                                <caption>Abnormal WBC เลือกเฉพาะเซลล์หรือความผิดปกติที่ตรวจพบเท่านั้น</caption>
                                <table class="table text-center table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col">รหัสเซลล์</th>
                                            <th scope="col">Cell Types</th>
                                            <th scope="col">6301.1 (Found)</th>
                                            <th scope="col">6301.2 (Found)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>Auer rod</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[0][4]" type="checkbox" value="1" id="test_0_sec_2_4">   
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[1][4]" type="checkbox" value="1" id="test_1_sec_2_4">
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Döhle bodies</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[0][5]" type="checkbox" value="" id="test_0_sec_2_5">
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[1][5]" type="checkbox" value="" id="test_1_sec_2_5">
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <caption>การรายงานรูปร่าง RBC และการ grading</caption>
                                <table class="table text-center table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th colspan="5">6301.1</th>
                                            <th></th>
                                            <th colspan="5">6301.2</th>
                                        </tr>
                                        <tr>
                                            <th>รหัสเซลล์</th>
                                            <th>Cell Types</th>
                                            <th>Few</th>
                                            <th>1+</th>
                                            <th>2+</th>
                                            <th>3+</th>
                                            <th>4+</th>
                                            <th></th>
                                            <th>Few</th>
                                            <th>1+</th>
                                            <th>2+</th>
                                            <th>3+</th>
                                            <th>4+</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>6</td>
                                            <td>Anisocytosis</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][6]" id="radio_0_sec_3_1_6" value="0.5">
                                            </div>           
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][6]" id="radio_0_sec_3_2_6" value="1">           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][6]" id="radio_0_sec_3_3_6" value="2" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][6]" id="radio_0_sec_3_4_6" value="3" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][6]" id="radio_0_sec_3_5_6" value="4" >           
                                            </div>
                                            <!-- second check -->
                                            <th class="bg-primary"></th>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][6]" id="radio_1_sec_3_1_6" value="0.5" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][6]" id="radio_1_sec_3_2_6" value="1" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][6]" id="radio_1_sec_3_3_6" value="2" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][6]" id="radio_1_sec_3_4_6" value="3" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][6]" id="radio_1_sec_3_5_6" value="4" >           
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Poikilocytosis</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][7]" id="radio_0_sec_3_1_7" value="0.5" >
                                            </div>           
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][7]" id="radio_0_sec_3_2_7" value="1" checked>           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][7]" id="radio_0_sec_3_3_7" value="2" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][7]" id="radio_0_sec_3_4_7" value="3" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[0][7]" id="radio_0_sec_3_5_7" value="4" >           
                                            </div>
                                            <!-- second check -->
                                            <th class="bg-primary"></th>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][7]" id="radio_1_sec_3_1_7" value="0.5" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][7]" id="radio_1_sec_3_2_7" value="1" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][7]" id="radio_1_sec_3_3_7" value="2" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][7]" id="radio_1_sec_3_4_7" value="3" >           
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sample[1][7]" id="radio_1_sec_3_5_7" value="4" >           
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <caption>*หากต้องการรายงาน "hypochromic microcytic RBC" โปรด เลือก grading (เช่น 2+) ที่รหัส 25 และ 39 ทั้งสองรหัส</caption>
                                <div style="padding: 10px;"></div>
                                <caption>รายงานรูปร่างเม็ดเลือดแดง</caption>
                                <table class="table text-center table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col">รหัสเซลล์</th>
                                            <th scope="col">Cell Types</th>
                                            <th scope="col">6301.1 (Found)</th>
                                            <th scope="col">6301.2 (Found)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8</td>
                                            <td>Normal red blood cell</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[0][8]" type="checkbox" value="1" id="test_0_sec_4_8" checked>   
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[1][8]" type="checkbox" value="2" id="test_1_sec_4_8">
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Basophilic stippling</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[0][9]" type="checkbox" value="1" id="test_0_sec_4_9">
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[1][9]" type="checkbox" value="2" id="test_1_sec_4_9">
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>48</td>
                                            <td>Nucleated red blood cell (โปรดระบุระยะของเซลล์ที่พบ)</td>
                                            <td><input type="text" class="form-control" name="sample[0][48]" style="padding-bottom: 0px;" ></td>
                                            <td><input type="text" class="form-control" name="sample[1][48]" style="padding-bottom: 0px;" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <caption>* หากเลือกช่องรหัส 48 กรุณาระบุคำตอบเป็นภาษาอังกฤษ</caption>
                                <div style="padding: 10px;"></div>
                                <caption>Platelet estimation</caption>
                                <table class="table text-center table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>รหัสเซลล์</th>
                                            <th>Cell Types</th>
                                            <th>6301.1</th>
                                            <th></th>
                                            <th>6301.2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>49</td>
                                            <td>Platelet</td>
                                            <td>
                                            <select class="custom-select" name="sample[0][49]">
                                                <option value="1">decrease</option>
                                                <option value="2" selected="">adequate</option>
                                                <option value="3">increase</option>
                                            </select>
                                            </td>
                                            <th class="bg-primary"></th>
                                            <td>
                                            <select class="custom-select" name="sample[1][49]">
                                                <option value="1" selected="">decrease</option>
                                                <option value="2">adequate</option>
                                                <option value="3">increase</option>
                                            </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="padding: 10px;"></div>
                                <caption>Abnormal Platelet</caption>
                                <table class="table text-center table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col">รหัสเซลล์</th>
                                            <th scope="col">Cell Types</th>
                                            <th scope="col">6301.1 (Found)</th>
                                            <th scope="col">6301.2 (Found)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>50</td>
                                            <td>Pale stained platelet</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[0][8]" type="checkbox" value="1" id="test_0_sec_6_50" checked>   
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[1][8]" type="checkbox" value="1" id="test_1_sec_6_50">
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>51</td>
                                            <td>Giant platelet</td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[0][51]" type="checkbox" value="" id="test_0_sec_6_51">
                                            </div>
                                            </td>
                                            <td>
                                            <div class="form-check">
                                            <input class="form-check-input" name="sample[1][51]" type="checkbox" value="" id="test_1_sec_6_51">
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>52</td>
                                            <td>Other abnormalities (โปรดระบุ)</td>
                                            <td><input type="text" class="form-control" name="sample[0][52]" style="padding-bottom: 0px;" ></td>
                                            <td><input type="text" class="form-control" name="sample[1][52]" style="padding-bottom: 0px;" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- file upload -->
                                <div class="row justify-content-between">
                                    <div class="page-title" style="padding-top: 20px; padding-bottom: 20px;">อัพโหลดไฟล์</div>
                                    <div class="input-group">
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
                                    <div class="form-gruop text-center">
                                    <button class="btn btn-primary" onclick="window.print()" name="printPageButton" id="printPageButton" name="printPageButton">พิมพ์</button>
                                    <a href="#" class="btn btn-primary" id="btnpreview" name="btnpreview">พรีวิว</a>
                                    <button type="submit" id="submit" class="btn btn-primary">ยืนยันการส่งผลการตรวจ</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
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