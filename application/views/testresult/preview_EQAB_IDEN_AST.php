<?php
defined('BASEPATH') or exit('No direct script access allowed');
print_r($_POST);
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Preview-<?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.css">
    <script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">
</head>

<div class="container-fuild">
    <div class="container container-EQAB_IDEN_AST" id="EQAB_IDEN_AST">
        <div class="card border border-dark">
            <form action="">
                <div class="card-title text-center text-white" style="padding:20px; background-color:rgba(0, 0, 255, 0.7);">
                    <h5 class="font-weight-bold"><?php echo $title; ?></h5>
                </div>
                <div class="card-body" style="background-color:white;">
                    <div class="container-left">
                        <h6 class="font-weight-bold" style="margin-top: 5px;">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</h6>
                        <h6 class="font-weight-bold" style="margin-top: 5px;">บันทึกการรับตัวอย่าง</h6>
                        <span>Trial 185-186 ( November 2020 )</span>
                        <h6 class="font-weight-bold" style="margin-top: 5px;">วันที่ได้รับตัวอย่างทดสอบ *</h6>
                        <span><?php echo $datepick; ?></span>
                        <h6 class="font-weight-bold" style="margin-top: 5px;">ความสมบูรณ์ของตัวอย่างทดสอบ</h6>
                        <span><?php echo $received_status; ?></span>
                        <hr>
                        <div class="container-left">

                        </div>
                        <div class="container-fluid">
                            <caption class="font-weight-bold">ผลการตรวจ</caption><br>
                            <div class="container-left btn btn-primary" style="margin: 20px; margin-left: 0;">BACTERIA IDENTIFICATION</div>
                        <div class="container-left col-md-auto">
                            <span class="font-weight-bold">1.วิธีการที่ท่านใช้ในการตรวจวินิจฉัยเชื้อแบคทีเรียสำหรับตัวอย่างที่ได้รับ</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="result" id="radio_0" value="1">
                                <label class="form-check-label" for="radio_0">
                                    Conventional tests
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name="result" id="radio_1" value="2">
                                <label class="form-check-label" for="radio_1">
                                    VITEK
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name="result" id="radio_2" value="3">
                                <label class="form-check-label" for="radio_2">
                                    VITEK 2
                                </label>
                                <br>
                                <input class="form-check-input" type="radio" name="result" id="radio_3" value="4">
                                <label class="form-check-label" for="radio_3">
                                    Other..
                                </label>
                                <br>
                                <input type="text" name="result_other" class="form-control" placeholder="Other ระบุ"></input>
                            </div>
                        </div>
                        <div style="padding: 10px;"></div>
                        <div class="card text-black font-weight-bold" style="background-color: rgba(255, 167, 71, 0.5); padding:10px;">
                            <div class="btn btn-primary col-2" style="margin: 10px;">Trial 185</div>
                            <div class="card-content">
                                <span class="font-weight-bold">2.รายงานชนิดของเชื้อแบคทีเรียที่พบในตัวอย่าง Trial 185</span>
                                <input type="text" class="form-control border-white" name="result_1[]" >
                                <div class="card-content" style="margin-top: 20px;">
                                    <span class="font-weight-bold ">3.วิธีการที่ท่านใช้ในการทดสอบความไวต่อยาปฏิชีวนะสำหรับเชื้อตัวอย่างที่ได้รับ</span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="infection_sec1[0]" id="radio_sec1_01" value="1">
                                        <label class="form-check-label" for="radio_sec1_01">
                                            Disc diffusion
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="infection_sec1[0]" id="radio_sec1_02" value="2">
                                        <label class="form-check-label" for="radio_sec1_02">
                                            VITEX
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="infection_sec1[0]" id="radio_sec1_03" value="3">
                                        <label class="form-check-label" for="radio_sec1_03">
                                            VITEX 2
                                        </label>
                                        <br>
                                        <input class="form-check-input" type="radio" name="infection_sec1[0]" id="radio_sec1_04" value="4">
                                        <label class="form-check-label" for="radio_sec1_04">
                                            Other..
                                        </label>
                                        <textarea name="infection_sec1_other[0]" id="radio_other" class="form-control border-white" placeholder="Other"></textarea>
                                    </div>
                                    <div class="card-content" style="padding-top: 20px;">
                                        <caption>4.รายงานผลการทดสอบความไวต่อยาในตารางข้างล่างนี้</caption>
                                        <table class="table text-center table-hover bordered">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th>ยา</th>
                                                    <th>zone size (mm.)</th>
                                                    <th>การแปลผล</th>
                                                    <th>MIC(μg/ml) (ถ้ามี)</th>
                                                    <th>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="tool_sec2[0][]">
                                                            <option value="">Choose</option>
                                                            <option value="1">Amikacin</option>
                                                            <option value="2">Amoxicillin-calvulonate</option>
                                                            <option value="3">Ampicillin</option>
                                                            <option value="4">Ampicillin-sulbactam</option>
                                                            <option value="5">Azithromycin</option>
                                                            <option value="6">Aztreonam</option>
                                                            <option value="7">Cefazolin</option>
                                                            <option value="8">Cefepime</option>
                                                            <option value="9">Cefotaxime</option>
                                                            <option value="10">Cefotetan</option>
                                                            <option value="11">Cefoxtin</option>
                                                            <option value="12">Ceftaroline</option>
                                                            <option value="13">Ceftazidime</option>
                                                            <option value="14">Ceftolozane-lazobactam</option>
                                                            <option value="15">Ceftriaxone</option>
                                                            <option value="16">Cefuroxime</option>
                                                            <option value="17">Chloramphenicol</option>
                                                            <option value="18">Ciprofloxacin</option>
                                                            <option value="19">Clarithomycin</option>
                                                            <option value="20">Clindamycin</option>
                                                            <option value="21">Colistin</option>
                                                            <option value="22">Daptomycin</option>
                                                            <option value="23">Doripenem</option>
                                                            <option value="24">Doxycycline</option>
                                                            <option value="25">Ertapenem</option>
                                                            <option value="26">Erythomycin</option>
                                                            <option value="27">Fosfomycin</option>
                                                            <option value="28">Gentamycin</option>
                                                            <option value="29">Hight-level Gentamycin</option>
                                                            <option value="30">Hight-level Streptomycin </option>
                                                            <option value="31">Imipenem</option>
                                                            <option value="32">Levofloxacin</option>
                                                            <option value="33">Linezolid</option>
                                                            <option value="34">Meropenem</option>
                                                            <option value="35">Minocycline</option>
                                                            <option value="36">Moxifloxacin</option>
                                                            <option value="37">Netilmicin</option>
                                                            <option value="38">Nitrofurantoin</option>
                                                            <option value="39">Oritavancin</option>
                                                            <option value="40">Oxacillin</option>
                                                            <option value="41">Penicillin</option>
                                                            <option value="42">Rifampin</option>
                                                            <option value="43">Piperracillin-tazobactam</option>
                                                            <option value="44">Sulfisoxazole</option>
                                                            <option value="45">Tedizolid</option>
                                                            <option value="46">Telavancin</option>
                                                            <option value="47">Tetracycline</option>
                                                            <option value="48">Tobramycin</option>
                                                            <option value="49">Trimethoprim</option>
                                                            <option value="50">Trimethoprim-sulfamethoxzole</option>
                                                            <option value="51">Vancomycin</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_2[0][]">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="infection_sec3[0][]">
                                                            <option <?php if($infection_sec3[0] ==""){echo "selected='selected'";}?> value="">Choose</option>
                                                            <option <?php if($infection_sec3[0] ==""){echo "selected='selected'";}?> value="1">Susceptible</option>
                                                            <option <?php if($infection_sec3[0] ==""){echo "selected='selected'";}?> value="2">Susceptible dose dependent</option>
                                                            <option <?php if($infection_sec3[0] ==""){echo "selected='selected'";}?> value="3">Intermedate</option>
                                                            <option <?php if($infection_sec3[0] ==""){echo "selected='selected'";}?> value="4">Resistant</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="result_3[0][]" value="<?php echo $result_3[0][0]; ?>">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="card-content">
                                            <span>5.ในกรณีที่ยาบางชนิดที่ท่านทดสอบนั้นมีวิธีการทดสอบที่แตกต่างไปจากที่ให้ข้อมูลโปรดระบุ</span>
                                            <input type="text" class="form-control border-white" name="result_4[]" value="<?php echo $result_4; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin: 20px;"></div>
                        <div class="card text-black font-weight-bold" style="background-color: rgba(95, 77, 189, 0.3); padding:10px;">
                            <div class="btn btn-primary col-2" style="margin: 10px;">Trial 186</div>
                            <span class="font-weight-bold">6.รายงานชนิดของเชื้อแบคทีเรียที่พบในตัวอย่าง Trial 186</span>
                            <input type="text" class="form-control border-white" name="result_1[]" value="<?php echo $result_1; ?>">
                            <div class="card-content" style="margin-top: 20px;">
                                <span class="font-weight-bold ">7.วิธีการที่ท่านใช้ในการทดสอบความไวต่อยาปฏิชีวนะสำหรับเชื้อตัวอย่างที่ได้รับ</span>
                                <div class="form-check ">
                                    <input <?php if($infection_sec1[1] =="1"){echo "checked";}?> class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_11" value="1">
                                    <label class="form-check-label" for="radio_sec1_11">
                                        Disc diffusion
                                    </label>
                                    <br>
                                    <input <?php if($infection_sec1[1] =="2"){echo "checked";}?> class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_12" value="2">
                                    <label class="form-check-label" for="radio_sec1_12">
                                        VITEX
                                    </label>
                                    <br>
                                    <input <?php if($infection_sec1[1] =="3"){echo "checked";}?> class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_13" value="3">
                                    <label class="form-check-label" for="radio_sec1_13">
                                        VITEX 2
                                    </label>
                                    <br>
                                    <input <?php if($infection_sec1[1] =="4"){echo "checked";}?> class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_14" value="4">
                                    <label class="form-check-label" for="radio_sec1_14">
                                        Other..
                                    </label>
                                    <textarea name="infection_sec1_other[1]" id="radio_other1" class="form-control border-white" placeholder="Other" value="<?php echo $infection_sec1_other[1];?>"></textarea>
                                </div>
                                <div class="card-content" style="padding-top: 20px;">
                                    <caption>8.รายงานผลการทดสอบความไวต่อยาในตารางข้างล่างนี้</caption>
                                    <table class="table text-center table-hover bordered">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>ยา</th>
                                                <th>zone size (mm.)</th>
                                                <th>การแปลผล</th>
                                                <th>MIC(μg/ml) (ถ้ามี)</th>
                                                <th>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="tool_sec2[0][]">
                                                        <option <?php if($tool_sec2[0] ==""){echo "selected='selected'";}?> value="">Choose</option>
                                                        <option <?php if($tool_sec2[0] =="1"){echo "selected='selected'";}?> value="1">Amikacin</option>
                                                        <option <?php if($tool_sec2[0] =="2"){echo "selected='selected'";}?> value="2">Amoxicillin-calvulonate</option>
                                                        <option <?php if($tool_sec2[0] =="3"){echo "selected='selected'";}?> value="3">Ampicillin</option>
                                                        <option <?php if($tool_sec2[0] =="4"){echo "selected='selected'";}?> value="4">Ampicillin-sulbactam</option>
                                                        <option <?php if($tool_sec2[0] =="5"){echo "selected='selected'";}?> value="5">Azithromycin</option>
                                                        <option <?php if($tool_sec2[0] =="6"){echo "selected='selected'";}?> value="6">Aztreonam</option>
                                                        <option <?php if($tool_sec2[0] =="7"){echo "selected='selected'";}?> value="7">Cefazolin</option>
                                                        <option <?php if($tool_sec2[0] =="8"){echo "selected='selected'";}?> value="8">Cefepime</option>
                                                        <option <?php if($tool_sec2[0] =="9"){echo "selected='selected'";}?> value="9">Cefotaxime</option>
                                                        <option <?php if($tool_sec2[0] =="10"){echo "selected='selected'";}?> value="10">Cefotetan</option>
                                                        <option <?php if($tool_sec2[0] =="11"){echo "selected='selected'";}?> value="11">Cefoxtin</option>
                                                        <option <?php if($tool_sec2[0] =="12"){echo "selected='selected'";}?> value="12">Ceftaroline</option>
                                                        <option <?php if($tool_sec2[0] =="13"){echo "selected='selected'";}?> value="13">Ceftazidime</option>
                                                        <option <?php if($tool_sec2[0] =="14"){echo "selected='selected'";}?> value="14">Ceftolozane-lazobactam</option>
                                                        <option <?php if($tool_sec2[0] =="15"){echo "selected='selected'";}?> value="15">Ceftriaxone</option>
                                                        <option <?php if($tool_sec2[0] =="16"){echo "selected='selected'";}?> value="16">Cefuroxime</option>
                                                        <option <?php if($tool_sec2[0] =="17"){echo "selected='selected'";}?> value="17">Chloramphenicol</option>
                                                        <option <?php if($tool_sec2[0] =="18"){echo "selected='selected'";}?> value="18">Ciprofloxacin</option>
                                                        <option <?php if($tool_sec2[0] =="19"){echo "selected='selected'";}?> value="19">Clarithomycin</option>
                                                        <option <?php if($tool_sec2[0] =="20"){echo "selected='selected'";}?> value="20">Clindamycin</option>
                                                        <option <?php if($tool_sec2[0] =="21"){echo "selected='selected'";}?> value="21">Colistin</option>
                                                        <option <?php if($tool_sec2[0] =="22"){echo "selected='selected'";}?> value="22">Daptomycin</option>
                                                        <option <?php if($tool_sec2[0] =="23"){echo "selected='selected'";}?> value="23">Doripenem</option>
                                                        <option <?php if($tool_sec2[0] =="24"){echo "selected='selected'";}?> value="24">Doxycycline</option>
                                                        <option <?php if($tool_sec2[0] =="25"){echo "selected='selected'";}?> value="25">Ertapenem</option>
                                                        <option <?php if($tool_sec2[0] =="26"){echo "selected='selected'";}?> value="26">Erythomycin</option>
                                                        <option <?php if($tool_sec2[0] =="27"){echo "selected='selected'";}?> value="27">Fosfomycin</option>
                                                        <option <?php if($tool_sec2[0] =="28"){echo "selected='selected'";}?> value="28">Gentamycin</option>
                                                        <option <?php if($tool_sec2[0] =="29"){echo "selected='selected'";}?> value="29">Hight-level Gentamycin</option>
                                                        <option <?php if($tool_sec2[0] =="30"){echo "selected='selected'";}?> value="30">Hight-level Streptomycin </option>
                                                        <option <?php if($tool_sec2[0] =="31"){echo "selected='selected'";}?> value="31">Imipenem</option>
                                                        <option <?php if($tool_sec2[0] =="32"){echo "selected='selected'";}?> value="32">Levofloxacin</option>
                                                        <option <?php if($tool_sec2[0] =="33"){echo "selected='selected'";}?> value="33">Linezolid</option>
                                                        <option <?php if($tool_sec2[0] =="34"){echo "selected='selected'";}?> value="34">Meropenem</option>
                                                        <option <?php if($tool_sec2[0] =="35"){echo "selected='selected'";}?> value="35">Minocycline</option>
                                                        <option <?php if($tool_sec2[0] =="36"){echo "selected='selected'";}?> value="36">Moxifloxacin</option>
                                                        <option <?php if($tool_sec2[0] =="37"){echo "selected='selected'";}?> value="37">Netilmicin</option>
                                                        <option <?php if($tool_sec2[0] =="38"){echo "selected='selected'";}?> value="38">Nitrofurantoin</option>
                                                        <option <?php if($tool_sec2[0] =="39"){echo "selected='selected'";}?> value="39">Oritavancin</option>
                                                        <option <?php if($tool_sec2[0] =="40"){echo "selected='selected'";}?> value="40">Oxacillin</option>
                                                        <option <?php if($tool_sec2[0] =="41"){echo "selected='selected'";}?> value="41">Penicillin</option>
                                                        <option <?php if($tool_sec2[0] =="42"){echo "selected='selected'";}?> value="42">Rifampin</option>
                                                        <option <?php if($tool_sec2[0] =="43"){echo "selected='selected'";}?> value="43">Piperracillin-tazobactam</option>
                                                        <option <?php if($tool_sec2[0] =="44"){echo "selected='selected'";}?> value="44">Sulfisoxazole</option>
                                                        <option <?php if($tool_sec2[0] =="45"){echo "selected='selected'";}?> value="45">Tedizolid</option>
                                                        <option <?php if($tool_sec2[0] =="46"){echo "selected='selected'";}?> value="46">Telavancin</option>
                                                        <option <?php if($tool_sec2[0] =="47"){echo "selected='selected'";}?> value="47">Tetracycline</option>
                                                        <option <?php if($tool_sec2[0] =="48"){echo "selected='selected'";}?> value="48">Tobramycin</option>
                                                        <option <?php if($tool_sec2[0] =="49"){echo "selected='selected'";}?> value="49">Trimethoprim</option>
                                                        <option <?php if($tool_sec2[0] =="50"){echo "selected='selected'";}?> value="50">Trimethoprim-sulfamethoxzole</option>
                                                        <option <?php if($tool_sec2[0] =="51"){echo "selected='selected'";}?> value="51">Vancomycin</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" name="result_2[0][]" value="<?php echo $result_2[0]; ?>">
                                                </td>
                                                <td>
                                                    <select class="form-control" name="infection_sec3[0][]">
                                                        <option <?php if($infection_sec3[0] ==""){echo "selected='selected'";}?> value="">Choose</option>
                                                        <option <?php if($infection_sec3[0] =="1"){echo "selected='selected'";}?>value="1">Susceptible</option>
                                                        <option <?php if($infection_sec3[0] =="2"){echo "selected='selected'";}?>value="2">Susceptible dose dependent</option>
                                                        <option <?php if($infection_sec3[0] =="3"){echo "selected='selected'";}?>value="3">Intermedate</option>
                                                        <option <?php if($infection_sec3[0] =="4"){echo "selected='selected'";}?>value="4">Resistant</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="result_3[0][]" value="<?php echo $result_3[0][1]; ?>">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card-content">
                                        <span>9.ในกรณีที่ยาบางชนิดที่ท่านทดสอบนั้นมีวิธีการทดสอบที่แตกต่างไปจากที่ให้ข้อมูลโปรดระบุ</span>
                                        <input type="text" class="form-control border-white" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-left">
                            <p style="font-size: 17px; margin-top: 20px;" class="font-weight-bold">หากท่านประสงค์ ต้องการแนบภาพถ่ายที่เกี่ยวข้องกับการวิจัย เช่น colony บนอาหารเลี้ยงเชื้อ , Biochemical , test , Antimicrobial susceptibility testing</p>
                        </div>
                        <div class="container-left">
                            <h6>หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ</h6>
                        </div>
                        <div class="container align-middle">
                            <div class="form-row">
                                <div class="form-group col">
                                    <div class="custom-file" style="width: 400px;">
                                        <label class="custom-file-label" for="file_0">Upload one file</label>
                                        <input type="file" class="custom-file-input" id="file_0" name="file_0">
                                    </div>
                                    </div>
                                    <div class="form-group col">
                                        <div class="custom-file" style="width: 400px;">
                                            <label class="custom-file-label" for="file_1">Upload one file</label>
                                            <input type="file" class="custom-file-input" id="file_1" name="file_1">
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="form-group col">
                                        <div class="custom-file" style="width: 400px;">
                                            <label class="custom-file-label" for="file_2">Upload one file</label>
                                            <input type="file" class="custom-file-input" id="file_2" name="file_2">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <div class="custom-file" style="width: 400px;">
                                            <label class="custom-file-label" for="file_3">Upload one file</label>
                                            <input type="file" class="custom-file-input" id="file_3" name="file_3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <caption>ข้อมูลผู้ส่ง</caption>
                            <table class="table text-center table-hover">
                                <tbody class="text-left">
                                    <tr>
                                        <td class="bg-primary text-white" style="width: 350px;">ชื่อ</td>
                                        <td><?php echo $name; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-primary text-white" style="width: 350px;">หมายเลขโทรศัพท์</td>
                                        <td><?php echo $tel; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-primary text-white" style="width: 350px;">ตำแหน่ง</td>
                                        <td><?php echo $position; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-primary text-white" style="width: 350px;">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง</td>
                                        <td><?php echo $comment; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="bg-primary text-white" style="width: 350px;">วันที่ทำการทดสอบ</td>
                                        <td><?php echo $datereport; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit" name="submit">ยืนยันการส่งผลตรวจ</button>
                    </div>
            </form>
        </div>

    </div>

</div>
<style>
    select {
        width: auto;
        text-align-last: center;
        border: none !important;
        pointer-events: none;
        background: none !important;
    }
</style>
<script>
    $(document).ready(function(){
        //=====
    })
</script>