<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800" id="title" name="title"><?php echo $heading_title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <div class="text-center p-3 mb-2 bg-primary text-white" id="title2" name="title2">
                        <h2><?php echo $heading_title; ?></h2>
                    </div>

                    <form action="<?php echo $action; ?>" method="POST" role="form">
                        <div class="container-left">
                            <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAB IDEN&AST</h5>
                        </div>
                        <div class="container-left">
                            <h5 class="text-left">
                                <p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p>
                            </h5>
                            <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                            <div class="col">
                                <h6><label class="font-weight-bold">Trial : </label> Trial 185-186 ( November 2020 )</h6>
                            </div>
                        </div>
                        <div class="font-weight-bold container-left">
                            <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                            <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick"></input>
                        </div>
                        <div class="container-left">
                            <p class="font-weight-bold" style="padding-top: 30px;">ความสมบูรณ์ของตัวอย่างทดสอบ * </p>
                        </div>
                        <input type="radio" name="received_status" id="test1" class="received_check theone" checked="" value="1">
                        <label class="choose_edit" for="test1">อยู่ในสภาพสมบูรณ์</label>
                        <div class="container-left">
                            <input type="radio" name="received_status" id="test2" class="received_check theone" value="2">
                            <label class="choose_edit" for="test2">อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้</label>
                        </div>
                        <div class="container-left">
                            <label for="received_status_other" class="font-weight-bold">เนื่องจาก</label>
                            <textarea class="form-control" id="received_status_other" name="received_status_other"></textarea>
                        </div>
                        <div class="container-left" style="padding-top: 30px;">
                            <p class="font-weight-bold">ผลการตรวจ</p>
                        </div>
                        eqab_iden_ast.php
                        <br>
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
                            <div class="btn btn-primary col-1" style="margin: 10px;">Trial 185</div>
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
                                                        <a class="btn btn-add-row btn-event">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                            </svg>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="tool_sec2[0][]">
                                                            <option value="" selected="">Choose</option>
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
                                                            <option value="" selected="">Choose</option>
                                                            <option value="1">Susceptible</option>
                                                            <option value="2">Susceptible dose dependent</option>
                                                            <option value="3">Intermedate</option>
                                                            <option value="4">Resistant</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="result_3[0][]">
                                                    </td>
                                                    <td>
                                                        <a class="btn waves-effect waves-light btn-delete-row btn_event">
                                                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="card-content">
                                            <span>5.ในกรณีที่ยาบางชนิดที่ท่านทดสอบนั้นมีวิธีการทดสอบที่แตกต่างไปจากที่ให้ข้อมูลโปรดระบุ</span>
                                            <input type="text" class="form-control border-white" name="result_4[]" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin: 20px;"></div>
                        <div class="card text-black font-weight-bold" style="background-color: rgba(95, 77, 189, 0.3); padding:10px;">
                            <div class="btn btn-primary col-1" style="margin: 10px;">Trial 186</div>
                            <span class="font-weight-bold">6.รายงานชนิดของเชื้อแบคทีเรียที่พบในตัวอย่าง Trial 186</span>
                            <input type="text" class="form-control border-white" name="result_1[]" id="">
                            <div class="card-content" style="margin-top: 20px;">
                                <span class="font-weight-bold ">7.วิธีการที่ท่านใช้ในการทดสอบความไวต่อยาปฏิชีวนะสำหรับเชื้อตัวอย่างที่ได้รับ</span>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_11" value="1">
                                    <label class="form-check-label" for="radio_sec1_11">
                                        Disc diffusion
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_12" value="2">
                                    <label class="form-check-label" for="radio_sec1_12">
                                        VITEX
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_13" value="3">
                                    <label class="form-check-label" for="radio_sec1_13">
                                        VITEX 2
                                    </label>
                                    <br>
                                    <input class="form-check-input" type="radio" name="infection_sec1[1]" id="radio_sec1_14" value="4">
                                    <label class="form-check-label" for="radio_sec1_14">
                                        Other..
                                    </label>
                                    <textarea name="infection_sec1_other[1]" id="radio_other1" class="form-control border-white" placeholder="Other"></textarea>
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
                                                    <a class="btn btn-add-row btn-event">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                        </svg>
                                                    </a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="tool_sec2[0][]">
                                                        <option value="" selected="">Choose</option>
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
                                                        <option value="" selected="">Choose</option>
                                                        <option value="1">Susceptible</option>
                                                        <option value="2">Susceptible dose dependent</option>
                                                        <option value="3">Intermedate</option>
                                                        <option value="4">Resistant</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="result_3[0][]">
                                                </td>
                                                <td>
                                                    <a class="btn btn-delete-row btn_event">
                                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </a>
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
                            <input type="date" class="form-control" style="width: 180px;" id="report_date" name="report_date"></input>
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

        #printPageButton,
        #btnpreview,
        #confirmpreview,
        #accordionSidebar,
        #title,
        #submit {
            display: none;
        }
    }
</style>
<script>
$(document).on("click", ".btn-add-row", function() {
    var clone = $(this).parents('table').find('tbody tr').first().clone();
    // var clone = $(this).next().find('tbody tr').first().clone();
    $(this).parents('table').find('tbody').append(clone);
    // $('.preview').find('table').find('tbody').append(clone);
    clone.removeClass('hidden');
    clone.find(".select-other").removeAttr('disabled');
    clone.find("input").removeAttr('disabled');
    clone.find("input").val('');

    $('.table').each(function(index, el) {
        number_plus('.number_topics_'+index);
    });
    $('.preview').html('');
    $("#htmlpreview").clone().appendTo( ".preview" );
});

$(document).on("click", ".btn-delete-row", function() {
    var clone = $(this).next().find('tbody tr').first().clone();
    $(this).next().find('tbody').append(clone);

    if(confirm('Do you want to delete')==true){
        $(this).parents('tr').remove();
    }else{
        e.preventDefault();
    }
    $('.preview').html('');
    $("#htmlpreview").clone().appendTo( ".preview" );
});
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
    $('#file_2').on("change",function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_2')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file); 

    });
    $('#file_3').on("change",function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_3')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file); 

    });
</script>