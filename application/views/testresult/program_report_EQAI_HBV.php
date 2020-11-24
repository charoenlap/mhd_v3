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
                    <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAI:HBV</h5>
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
                                eqai_hbv.php
                                    <div class="container-fluid">
                                        <caption>รายงานผลการทดสอบแบบ qualitative report</caption>
                                        <table class="table text-center table-hover">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th>specimen</th>
                                                    <th>HBs Ag</th>
                                                    <th>Anti HBs</th>
                                                    <th>Anti HBc</th>
                                                    <th>HBe Ag</th>
                                                    <th>Anti HBe</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <?php $x=1; ?>
                                                    <?php while($x<=5): ?>
                                                    
                                                    <td>
                                                    <label for="tool[1]">Method</label>
                                                    <select name="tool[1]" class="form-control">
                                    	                        <option value="">Select</option>
                                        						<option value="1" data-id="auto">Automation</option>
						                						<option value="2" data-id="">Immunochromatography</option>
						                						<option value="3" data-id="other">Other</option>
						                            </select>
                                                    </td>
                                                    <?php $x++; ?>
                                                    <?php endwhile ?>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <?php $x=1; ?>
                                                    <?php while($x<=5): ?>
                                                    <td>
                                                    <span>Instrument/test kit/ Brand</span>
                                                    <input type="text" name="result_1[1]" value="" class="form-control">
                                                    </td>
                                                    <?php $x++; ?>
                                                    <?php endwhile ?>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <?php $x=1; ?>
                                                    <?php while($x<=5): ?>
                                                    <td>
                                                    <span>Reagent Lot Number </span>
                                                    <input type="text" name="result_2[1]" value="" class="form-control">
                                                    </td>
                                                    <?php $x++; ?>
                                                    <?php endwhile ?>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <?php $x=1; ?>
                                                    <?php while($x<=5): ?>
                                                    <td>
                                                    <span>Catalog number</span>
                                                    <input type="text" name="result_3[1]" value="" class="form-control">
                                                    </td>
                                                    <?php $x++; ?>
                                                    <?php endwhile ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table text-center table-hover">
                                            <thead class="bg-primary text-white">
                                                <tr>
                                                    <th>specimen</th>
                                                    <th>HBs Ag</th>
                                                    <th>Anti HBs</th>
                                                    <th>Anti HBc</th>
                                                    <th>HBe Ag</th>
                                                    <th>Anti HBe</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Trial 185</td>
                                                    <?php $x=1; ?>
                                                    <?php while($x<=5): ?>
                                                    <td>
                                                    <select name="sample_q_li[0][1]" id="" class="form-control">
			                                            <option value="">Select</option>
			                            			    <option value="1" class="fixed-color0">Positive</option>
                                                <!-- <option value="1" class="fixed-color0">Positive</option> -->
			                            			    <option value="2" class="fixed-color1">Weakly Positive</option>
                                                <!-- <option value="2" class="fixed-color1" >Weakly Positive</option> -->
			                            			    <option value="3" class="fixed-color2">Negative</option>
                                                <!-- <option value="3" class="fixed-color2" >Negative</option> -->
			                            			</select>
                                                    </td>
                                                    <?php $x++; ?>
                                                    <?php endwhile ?>
                                                </tr>
                                                <tr>
                                                    <td>Trial 186</td>
                                                    <?php $x=1; ?>
                                                    <?php while($x<=5): ?>
                                                    <td>
                                                    <select name="sample_q_li[0][1]" id="" class="form-control">
			                                            <option value="">Select</option>
			                            			    <option value="1" class="fixed-color0">Positive</option>
                                                <!-- <option value="1" class="fixed-color0">Positive</option> -->
			                            			    <option value="2" class="fixed-color1">Weakly Positive</option>
                                                <!-- <option value="2" class="fixed-color1" >Weakly Positive</option> -->
			                            			    <option value="3" class="fixed-color2">Negative</option>
                                                <!-- <option value="3" class="fixed-color2" >Negative</option> -->
			                            			</select>
                                                    </td>
                                                    <?php $x++; ?>
                                                    <?php endwhile ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <caption>รายงานผลการทดสอบแบบ quantitative report</caption>
                                        <table class="table text-center table-hover">
                                            <thead class="bg-primary text-white">
                                                  <tr>
                                                      <th>specimen</th>
                                                      <th colspan="2">HBs Ag</th>
                                                      <th colspan="2">Anti HBs</th>
                                                      <th class="bg-white border-0"></th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td></td>
                                                      <td colspan="2">
                                                    <span>Automation Principle</span>
                                                      <select name="tool_auto2[5][1]" cutoff="4" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="1" data-id="">EIA / ELISA</option>
                                                            <option value="2" data-id="">CLIA</option>
                                                            <option value="3" data-id="">CMIA</option>
                                                            <option value="4" data-id="">E-CLIA</option>
                                                            <option value="5" data-id="">FEIA</option>
                                                        </select>
                                                      </td>
                                                      <td colspan="2">
                                                      <span>Automation Principle</span>
                                                      <select name="tool_auto2[5][1]" cutoff="4" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="1" data-id="">EIA / ELISA</option>
                                                            <option value="2" data-id="">CLIA</option>
                                                            <option value="3" data-id="">CMIA</option>
                                                            <option value="4" data-id="">E-CLIA</option>
                                                            <option value="5" data-id="">FEIA</option>
                                                        </select>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td></td>
                                                      <td colspan="2">
                                                          <span>Instrument/test kit/ Brand</span>
                                                          <input type="text" class="form-control">
                                                      </td>
                                                      <td colspan="2">
                                                          <span>Instrument/test kit/ Brand</span>
                                                          <input type="text" class="form-control">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td></td>
                                                      <td colspan="2">
                                                          <span>Reagent Lot Number</span>
                                                          <input type="text" class="form-control">
                                                      </td>
                                                      <td colspan="2">
                                                          <span>Reagent Lot Number</span>
                                                          <input type="text" class="form-control">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td></td>
                                                      <td colspan="2">
                                                          <span>Catalog number</span>
                                                          <input type="text" class="form-control">
                                                      </td>
                                                      <td colspan="2">
                                                          <span>Catalog number</span>
                                                          <input type="text" class="form-control">
                                                      </td>
                                                  </tr>
                                                  <thead class="bg-primary text-white font-weight-bold">
                                                      <tr>
                                                          <th>specimen</th>
                                                          <th></th>
                                                          <th>HBs Ag (IU/ml)</th>
                                                          <th></th>
                                                          <th>HBsAg (S/CO,COI,Index) <br> กรอกช่องนี้และลงผล Qualitative ด้านบน</th>
                                                          <th></th>
                                                          <th>Anti HBs (mlU/ml,IU/L)</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>Trial 185</td>
                                                          <?php $x=1; ?>
                                                          <?php while($x<=3): ?> 
                                                          <td><select class="form-control" name="symbol[0][1]">
                                                            <option value="" selected=""></option>
                                                            <option value="<">&lt;</option>
                                                            <option value=">">&gt;</option>
                                                        </select>
                                                        </td>
                                                        <td><input type="text" class="form-control" name="tool_specimen_hbs[0][1]"></td>
                                                        <?php $x++; ?>
                                                        <?php endwhile; ?> 
                                                      </tr>
                                                      <tr>
                                                          <td>Trial 186</td>
                                                          <?php $x=1; ?>
                                                          <?php while($x<=3): ?> 
                                                          <td><select class="form-control" name="symbol[0][1]">
                                                            <option value="" selected=""></option>
                                                            <option value="<">&lt;</option>
                                                            <option value=">">&gt;</option>
                                                        </select>
                                                        </td>
                                                        <td><input type="text" class="form-control" name="tool_specimen_hbs[0][1]"></td>
                                                        <?php $x++; ?>
                                                        <?php endwhile; ?> 
                                                      </tr>
                                                  </tbody>
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