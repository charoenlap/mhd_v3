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
                            <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAI:HBV</h5>
                        </div>
                        <div class="container-left">
                            <h5 class="text-left">
                                <p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p>
                            </h5>
                            <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                            <div class="col">
                                <h6><label class="font-weight-bold">Trial : </label> Trial 185-186 ( November 2020 )</h6>
                            </div>
                            <div class="font-weight-bold container-left date">
                                <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                                <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick" ></input>
                            </div>
                            <div class="container-left">
                                <p class="font-weight-bold" style="padding-top: 30px;">ความสมบูรณ์ของตัวอย่างทดสอบ * </p>
                            </div>
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
                                            <?php $x = 1; $y = 0; $z = 0;?>
                                            <?php while ($x <= 5) : ?>

                                                <td>
                                                    <label for="tool[<?php echo $x; ?>]">Method</label>
                                                    <select name="tool[<?php echo $x; ?>]" class="form-control selected check_select_<?php echo $y++; ?>" >
                                                        <option value="">Select</option>
                                                        <option value="1" data-id="auto">Automation</option>
                                                        <option value="2" data-id="">Immunochromatography</option>
                                                        <option value="3" data-id="other">Other</option>
                                                    </select>
                                                    <div class="auto" style="display: none;">
                                                        <div class="input-field">
                                                            <span>Automation</span>
                                                            <!--<select name="tool_auto[1]"  cutoff="0" class="browser-default select_show_cutoff"> -->
                                                            <select name="tool_auto[<?php echo $x; ?>]" cutoff="<?php echo $z++; ?>" class="select_show_cutoff form-control">
                                                                <option value="">Select</option>
                                                                <option value="1" data-id>EIA / ELISA</option>
                                                                <option value="2" data-id>CLIA</option>
                                                                <option value="3" data-id>CMIA</option>
                                                                <option value="4" data-id>E-CLIA</option>
                                                                <option value="5" data-id>FEIA</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="other" style="display: none;">
                                                        <div class="input-field">
                                                            <span>Other</span>
                                                            <input type="text" name="tool_other[<?php echo $x; ?>]" value class="form-control">
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php $x++; ?>
                                            <?php endwhile ?>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <?php $x = 1; $y = 0;?>
                                            <?php while ($x <= 5) : ?>
                                                <td>
                                                    <span>Instrument/test kit/ Brand</span>
                                                    <input type="text" name="result_1[<?php echo $x; ?>]" value="" class="input_check_<?php echo $y++; ?> form-control">
                                                </td>
                                                <?php $x++; ?>
                                            <?php endwhile ?>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <?php $x = 1; ?>
                                            <?php while ($x <= 5) : ?>
                                                <td>
                                                    <span>Reagent Lot Number </span>
                                                    <input type="text" name="result_2[<?php echo $x; ?>]" value="" class="form-control">
                                                </td>
                                                <?php $x++; ?>
                                            <?php endwhile ?>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <?php $x = 1; ?>
                                            <?php while ($x <= 5) : ?>
                                                <td>
                                                    <span>Catalog number</span>
                                                    <input type="text" name="result_3[<?php echo $x; ?>]" value="" class="form-control">
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
                                            <?php $x = 1; $y = 0;?>
                                            <?php while ($x <= 5) : ?>
                                                <td>
                                                    <select name="sample_q_li[0][<?php echo $x; ?>]" id="" class="fixed-select-<?php echo $y++; ?> form-control">
                                                        <option value="">Select</option>
                                                        <option value="1" class="text-danger">Positive</option>
                                                        <!-- <option value="1" class="fixed-color0">Positive</option> -->
                                                        <option value="2" class="text-success">Weakly Positive</option>
                                                        <!-- <option value="2" class="fixed-color1" >Weakly Positive</option> -->
                                                        <option value="3" class="text-primary">Negative</option>
                                                        <!-- <option value="3" class="fixed-color2" >Negative</option> -->
                                                    </select>
                                                </td>
                                                <?php $x++; ?>
                                            <?php endwhile ?>
                                        </tr>
                                        <tr>
                                            <td>Trial 186</td>
                                            <?php $x = 1; $y = 0;?>
                                            <?php while ($x <= 5) : ?>
                                                <td>
                                                    <select name="sample_q_li[1][<?php echo $x; ?>]" id="" class="fixed-select-<?php echo $y++; ?> form-control">
                                                        <option value="">Select</option>
                                                        <option value="1" class="text-danger">Positive</option>
                                                        <!-- <option value="1" class="fixed-color0">Positive</option> -->
                                                        <option value="2" class="text-success">Weakly Positive</option>
                                                        <!-- <option value="2" class="fixed-color1" >Weakly Positive</option> -->
                                                        <option value="3" class="text-primary">Negative</option>
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
                                                <input type="text" class="form-control" name="tool_reagent[5][1]">
                                            </td>
                                            <td colspan="2">
                                                <span>Instrument/test kit/ Brand</span>
                                                <input type="text" class="form-control" name="tool_reagent[5][2]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">
                                                <span>Reagent Lot Number</span>
                                                <input type="text" class="form-control" name="tool_lot[5][1]">
                                            </td>
                                            <td colspan="2">
                                                <span>Reagent Lot Number</span>
                                                <input type="text" class="form-control" name="tool_lot[5][2]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">
                                                <span>Catalog number</span>
                                                <input type="text" class="form-control" name="tool_catalog[5][1]">
                                            </td>
                                            <td colspan="2">
                                                <span>Catalog number</span>
                                                <input type="text" class="form-control" name="tool_catalog[5][2]">
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
                                                <td><select class="form-control" name="symbol[0][1]">
                                                        <option value="" selected=""></option>
                                                        <option value="<">&lt;</option>
                                                        <option value=">">&gt;</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control fixed-select2-1" name="tool_specimen_hbs[0][1]"></td>
                                                <td>
                                                <select class="form-control" name="symbol_new[0]">
                                                        <option value="" selected=""></option>
                                                        <option value="<">&lt;</option>
                                                        <option value=">">&gt;</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control fixed-select2-3" name="tool_specimen_hbs_new[0]"></td>
                                                <td>
                                                <select class="form-control" name="symbol[0][2]">
                                                        <option value="" selected=""></option>
                                                        <option value="<">&lt;</option>
                                                        <option value=">">&gt;</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control fixed-select2-2" name="tool_specimen_hbs[0][2]" required="required"></td>
                                        </tr>
                                        <tr>
                                            <td>Trial 186</td>
                                                <td><select class="form-control" name="symbol[1][1]">
                                                        <option value="" selected=""></option>
                                                        <option value="<">&lt;</option>
                                                        <option value=">">&gt;</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control fixed-select2-1" name="tool_specimen_hbs[1][1]"></td>
                                                <td>
                                                <select class="form-control" name="symbol_new[1]">
                                                        <option value="" selected=""></option>
                                                        <option value="<">&lt;</option>
                                                        <option value=">">&gt;</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control fixed-select2-3" name="tool_specimen_hbs_new[1]"></td>
                                                <td>
                                                <select class="form-control" name="symbol[1][2]">
                                                        <option value="" selected=""></option>
                                                        <option value="<">&lt;</option>
                                                        <option value=">">&gt;</option>
                                                    </select>
                                                </td>
                                                <td><input type="number" class="form-control fixed-select2-2" name="tool_specimen_hbs[1][2]" required="required"></td>
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

$(document).ready(function () {
        // select();
        $(".selected").on('change', function(event) {
            // select();
            // $(this).parents('.row').find('.other .input-field input').val("");
            
            var option = $('option:selected', this).attr('data-id');
            console.log(option);
            
            if (option == 'other') {
                $(this).parent().find('.other').show();
                $(this).parent().find('.auto').hide();
                // $(this).parent().find('.select_show_cutoff').removeAttr('required');
                $(this).parent().find('.other .input-field input').attr('required', 'required');
            } else if(option == 'auto') {
                $(this).parent().find('.auto').show();
                $(this).parent().find('.other').hide();
                $(this).parent().find('.other .input-field input').val("");
                $(this).parent().find('.select_show_cutoff').attr('required', 'required');

            } else {
                $(this).parent().find('.auto').hide();
                $(this).parent().find('.other').hide();

                $(this).parent().find('.other .input-field input').val("");
                $(this).parent().find('.select_show_cutoff').removeAttr('required');
                $(this).parent().find('.other .input-field input').removeAttr('required')
            }
        });

        function show_cutoff($this) {
            var cutoff = $this.attr('cutoff');
            var auto_name = $this.find('option:selected').text()
            console.log(cutoff)
            console.log(auto_name)
            $('#cutoff_automation_'+cutoff).text(auto_name);
        }

        $('.select_show_cutoff').each(function(index, el) {
            show_cutoff($(this))
        });

        $(".select_show_cutoff").on('change', function(event) {
            show_cutoff($(this))
        });
    });

        $(document).ready(function() {
        $('.check_select_0').change(function(event) {
            if($(this).val() == 0){
                $('.input_check_0').removeAttr("required");
            }else {
                $('.input_check_0').attr("required","required");
            }
        }).trigger("change");
    });
        $(document).ready(function() {
        $('.check_select_1').change(function(event) {
            if($(this).val() == 0){
                $('.input_check_1').removeAttr("required");
            }else {
                $('.input_check_1').attr("required","required");
            }
        }).trigger("change");
    });
        $(document).ready(function() {
        $('.check_select_2').change(function(event) {
            if($(this).val() == 0){
                $('.input_check_2').removeAttr("required");
            }else {
                $('.input_check_2').attr("required","required");
            }
        }).trigger("change");
    });
        $(document).ready(function() {
        $('.check_select_3').change(function(event) {
            if($(this).val() == 0){
                $('.input_check_3').removeAttr("required");
            }else {
                $('.input_check_3').attr("required","required");
            }
        }).trigger("change");
    });
        $(document).ready(function() {
        $('.check_select_4').change(function(event) {
            if($(this).val() == 0){
                $('.input_check_4').removeAttr("required");
            }else {
                $('.input_check_4').attr("required","required");
            }
        }).trigger("change");
    });
            $(document).ready(function() {
        $('.check_select2_1').change(function(event) {
            if($(this).val() == 0){
                $('.input_check2_1').removeAttr("required");
                $('.fixed-select2-2').removeAttr("required","required")
            }else {
                $('.input_check2_1').attr("required","required");
                $('.fixed-select2-2').attr("required","required");
            }
        }).trigger("change");
    });
        $(document).ready(function() {
        $('.check_select2_2').change(function(event) {
            if($(this).val() == 0){
                $('.input_check2_2').removeAttr("required");
                $('.fixed-select2-2').removeAttr("required","required")
            }else {
                $('.input_check2_2').attr("required","required");
                $('.fixed-select2-2').attr("required","required");
            }
        }).trigger("change");
    });
    $(document).ready(function() {
	   $('.fixed-color').change(function() {
	      var current = $(this).val();
	      if (current == '1') {
          	$(this).addClass('text-danger');
	      }else if(current == '2') {
          	$(this).css('color','green');
	      }else if(current == '3') {
	      	$(this).css('color','blue');
	      }
		  var current = $(this).val();
	   }); 
	});

</script>