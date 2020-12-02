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
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : UC-EQAM</h5>
                    </div>
                    <div class="container-left">
                        <h5 class="text-left"><p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p></h5>
                        <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                        <div class="col">
                        <p><p class="text-bold">Trial:</p> trial 185-186 ( November 2020 )</p>
                    </div>
                    <div class="font-weight-bold container-left">
                        <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                        <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick" value="<?php echo date('Y-m-d'); ?>" ></input>
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
                            uc_eqam.php
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <table class="table text-center table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>รหัส</th>
                                                <th>สิ่งที่ตรวจพบ</th>
                                                <th>Trial 185</th>
                                                <th>Trial 186</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $x=1;?>
                                            <?php while($x<=21):?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td>Lymphoblast</td>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sample_1[0]" id="radio_1_0_<?php echo $x; ?>" value="<?php echo $x; ?>" >           
                                                </div>
                                                </td>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sample_1[1]" id="radio_1_1_<?php echo $x; ?>" value="<?php echo $x; ?>" >           
                                                </div>
                                                </td>
                                            </tr>
                                            <?php $x++;?>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <table class="table text-center table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>รหัส</th>
                                                <th>สิ่งที่ตรวจพบ</th>
                                                <th>Trial 185</th>
                                                <th>Trial 186</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $x=1;?>
                                            <?php while($x<=20):?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td>Lymphoblast</td>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sample_1[0]" id="radio_1_0_<?php echo $x; ?>" value="<?php echo $x; ?>" >           
                                                </div>
                                                </td>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sample_1[1]" id="radio_1_1_<?php echo $x; ?>" value="<?php echo $x; ?>" >           
                                                </div>
                                                </td>
                                            </tr>
                                            <?php $x++;?>
                                            <?php endwhile; ?>
                                            <tr>
                                                <td>21</td>
                                                <td>Other (โปรดระบุ)</td>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sample_1[0]" id="radio_1_0_1" value="1" >
                                                <label class="choose-edit" for="radio_1_0_1"></label>
                                                <textarea name="sample_other_1[0]" class="validate form-control valid" id="" cols="30" rows="6" ></textarea>           
                                                </div>
                                                </td>
                                                <td>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sample_1[1]" id="radio_1_1_1" value="1" >
                                                <label class="choose-edit" for="radio_1_1_1"></label>
                                                <textarea name="sample_other_1[1]" class="validate form-control valid" id="" cols="30" rows="6" ></textarea>           
                                                </div>
                                                </td>
                                            </tr>     
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <table class="table text-center table-hover">
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <th>รหัส</th>
                                                        <th>สิ่งที่ตรวจพบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $x=1;?>
                                                <?php while($x<=20):?>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td>Red blood cell</td>   
                                                </tr>
                                                <?php $x++;?>
                                                <?php endwhile; ?>
                                                </tbody>
                                            </table>            
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <table class="table text-center table-hover">
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <th>รหัส</th>
                                                        <th>สิ่งที่ตรวจพบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $x=21;?>
                                                <?php while($x<=40):?>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td>Bacterial cast</td>   
                                                </tr>
                                                <?php $x++;?>
                                                <?php endwhile; ?>
                                                </tbody>
                                            </table>            
                                        </div>
                                    </div>
                                </div>
                                 <div class="container-left" style="padding-bottom: 20px;">
                                    <dl>
                                        <dt>หมายเหตุ</dt>
                                        <dd> - กรณีพบ cell, cast, crystal หรือสิ่งอื่นๆ ที่ไม่มีรหัสสำหรับรายงานผล ให้เขียนสิ่งที่พบในช่อง Other (รหัส 45)</dd>
                                        <dd> - กรณีการรายงาน broad cast เช่น broad waxy cast ให้เขียนรายงานในช่อง other (รหัส 45)</dd>
                                    </dl>
                                 </div>                       
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
                                    <input type="date" class="form-control" style="width: 180px;" id="report_date" name="report_date" value="<?php echo date('Y-m-d'); ?>" ></input>
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