<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php if ($report_id != '' && isset($_SESSION['admin_token'])) { ?>
    <input type="hidden" name="report_id" value="<?php echo $report_id; ?>">
    <input type="hidden" name="year_edit" value="<?php echo $year_edit; ?>">
    <input type="hidden" name="trial_edit" value="<?php echo $trial_slug; ?>">
    <input type="hidden" name="program_edit" value="<?php echo $program_slug; ?>">
    <input type="hidden" name="date_modify" value="<?php echo $date_modify; ?>">
<?php } ?>
<div class="">
    <div class="container-fluid">
        <caption>รายงานผลการทดสอบแบบ qualitative report</caption>
        <table class="table text-center table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>specimen</th>
                    <?php foreach ($infections as $infection) : ?>
                        <th class="text-center"><?php echo $infection->name; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <?php foreach ($infections as $key_infect => $infection) : ?>
                        <td class="text-left">
                            <label for="save[tool][][<?php echo $infection->code; ?>]">Method</label>
                            <select name="save[tool][][<?php echo $infection->code; ?>]" class="form-control selected check_select_<?php echo $key_infect; ?>">
                                <option value="">Select</option>
                                <?php foreach ($tools_sec1 as $tool) : ?>
                                    <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool'][$key_infect][$infection->code]) && $save['tool'][$key_infect][$infection->code] == $tool->code?'selected':'';?>  data-id="<?php echo $tool->other; ?>"><?php echo $tool->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="auto" style="<?php echo isset($save['tool'][$key_infect][$infection->code]) && $save['tool'][$key_infect][$infection->code] == 1 ?'':'display: none'; ?>">
                                <div class="input-field">
                                    <span>Automation</span>
                                    <select name="save[tool_auto][][<?php echo $infection->code; ?>]" cutoff="<?php echo $infection->code; ?>" class="select_show_cutoff form-control">
                                        <option value="">Select</option>
                                        <?php foreach ($tools_auto as $tool) : ?>
                                            <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool_auto'][$key_infect][$infection->code]) && $save['tool_auto'][$key_infect][$infection->code] == $tool->code?'selected':'';?> data-id="<?php echo $tool->other; ?>"><?php echo $tool->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="other" style="<?php echo isset($save['tool'][$key_infect][$infection->code]) && $save['tool'][$key_infect][$infection->code] == 3 ?'':'display: none'; ?>">
                                <div class="input-field">
                                    <span>Other</span>
                                    <input type="text" name="save[tool_other][][<?php echo $infection->code; ?>]" value="<?php echo isset($save['tool_other'][$key_infect][$infection->code])?$save['tool_other'][$key_infect][$infection->code]:''; ?>" class="form-control">
                                </div>
                            </div>
                        </td>
                    <?php endforeach; ?>

                </tr>
                <tr>
                    <td></td>
                    <?php foreach ($infections as $key_infect => $infection) : ?>
                        <td class="text-left">
                            <span>Instrument/test kit/ Brand</span>
                            <input type="text" name="save[result_1][<?php echo $infection->code; ?>]" value="<?php echo isset($save['result_1'][$infection->code])?$save['result_1'][$infection->code]:''; ?>" class="input_check_<?php echo $key_infect; ?> form-control">
                        </td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td></td>
                    <?php foreach ($infections as $infection) : ?>
                        <td class="text-left">
                            <span>Reagent Lot Number</span>
                            <input type="text" name="save[result_2][<?php echo $infection->code; ?>]" value="<?php echo isset($save['result_2'][$infection->code])?$save['result_2'][$infection->code]:''; ?>" class="form-control">
                        </td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <td></td>
                    <?php foreach ($infections as $infection) : ?>
                        <td class="text-left">
                            <span>Catalog number</span>
                            <input type="text" name="save[result_3][<?php echo $infection->code; ?>]" value="<?php echo isset($save['result_3'][$infection->code])?$save['result_3'][$infection->code]:''; ?>" class="form-control">
                        </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
        <table class="table text-center table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>specimen</th>
                    <?php foreach ($infections as $infection) : ?>
                        <th class="text-left"><?php echo $infection->name; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specimens as $specimen) : ?>
                    <tr>
                        <td class="text-left"><?php echo $specimen->name; ?></td>
                        <?php foreach ($infections as $infection) : ?>
                            <td>
                                <select name="save[sample_q_li][<?php echo $specimen->id; ?>][<?php echo $infection->code; ?>]" id="" class="fixed-color fixed-select-<?php echo $infection->code; ?> form-control">
                                    <option value="">Select</option>
                                    <?php foreach ($tools_sec2 as $key => $tool) : ?>
                                        <option value="<?php echo $tool->code; ?>" <?php echo isset($save['sample_q_li'][$specimen->id][$infection->code]) && $save['sample_q_li'][$specimen->id][$infection->code] == $tool->code?'selected':''; ?> class="fixed-color<?php echo $key++; ?>"><?php echo $tool->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <caption>รายงานผลการทดสอบแบบ quantitative report</caption>
        <table class="table text-center table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>specimen</th>
                    <th colspan="2" style="width:25%;">HBs Ag</th>
                    <th colspan="2" style="width:25%;">Anti HBs</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                        <td colspan="2">
                            <span>Automation Principle</span>
                            <select name="save[tool_auto2][5][<?php echo $i; ?>]" cutoff="4" class="form-control check_select2_<?php echo $i; ?>" data-class=".checkempty<?php echo $i; ?>">
                                <option value="">Select</option>
                                <?php foreach ($tools_auto as $tool) : ?>
                                    <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool_auto2'][5][$i]) && $save['tool_auto2'][5][$i] == $tool->code?'selected':''; ?> data-id="<?php echo $tool->other; ?>"><?php echo $tool->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td></td>
                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                        <td colspan="2">
                            <span>Instrument/test kit/ Brand</span>
                            <input type="text" class="form-control" value="<?php echo isset($save['tool_reagent'][5][$i])?$save['tool_reagent'][5][$i]:''; ?>" name="save[tool_reagent][5][<?php echo $i; ?>]">
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td></td>
                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                        <td colspan="2">
                            <span>Reagent Lot Number</span>
                            <input type="text" class="form-control" value="<?php echo isset($save['tool_lot'][5][$i])?$save['tool_lot'][5][$i]:''; ?>" name="save[tool_lot][5][<?php echo $i; ?>]">
                        </td>
                    <?php } ?>
                </tr>
                <tr>
                    <td></td>
                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                        <td colspan="2">
                            <span>Catalog number</span>
                            <input type="text" class="form-control" value="<?php echo isset($save['tool_catalog'][5][$i])?$save['tool_catalog'][5][$i]:''; ?>" name="save[tool_catalog][5][<?php echo $i; ?>]">
                        </td>
                    <?php } ?>
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
                <?php foreach ($specimens as $key_specimen => $specimen) : ?>
                    <tr>
                        <td><?php echo $specimen->name; ?></td>
                        <td style="width:10%;">
                            <select class="form-control" name="save[symbol][<?php echo $key_specimen; ?>][1]">
                                <option <?php if($save['symbol'][$key_specimen][1] == ''){echo "selected";} ?> value="" selected=""></option>
                                <option <?php if($save['symbol'][$key_specimen][1] == '<'){echo "selected";} ?> value="<">&lt;</option>
                                <option <?php if($save['symbol'][$key_specimen][1] == '>'){echo "selected";} ?> value=">">&gt;</option>
                            </select>
                        </td>
                        <td><input type="number" id="input_result" class="form-control inputcheckempty checkempty1" value="<?php echo isset($save['tool_specimen_hbs'][$key_specimen][2])?$save['tool_specimen_hbs'][$key_specimen][1]:''; ?>" data-class=".checkempty1" name="save[tool_specimen_hbs][<?php echo $key_specimen; ?>][1]"></td>
                        <td style="width:10%;">
                            <select class="form-control" name="save[symbol_new][<?php echo $key_specimen; ?>]">
                                <option <?php if($save['symbol_new'][$key_specimen] =="" ){echo "selected";} ?> value="" selected=""></option>
                                <option <?php if($save['symbol_new'][$key_specimen] =="<"){echo "selected";} ?> value="<">&lt;</option>
                                <option <?php if($save['symbol_new'][$key_specimen] ==">"){echo "selected";} ?> value=">">&gt;</option>
                            </select>
                        </td>
                        <td><input type="number" id="input_result" class="form-control inputcheckempty checkempty1" value="<?php echo isset($save['tool_specimen_hbs_new'][$key_specimen])?$save['tool_specimen_hbs_new'][$key_specimen]:''; ?>" data-class=".checkempty1" name="save[tool_specimen_hbs_new][<?php echo $key_specimen; ?>]"></td>
                        <td style="width:10%;">
                            <select class="form-control" name="save[symbol][<?php echo $key_specimen; ?>][2]">
                                <option <?php if($save['symbol'][$key_specimen][2] =="" ){echo "selected";} ?> value="" selected=""></option>
                                <option <?php if($save['symbol'][$key_specimen][2] =="<"){echo "selected";} ?> value="<">&lt;</option>
                                <option <?php if($save['symbol'][$key_specimen][2] ==">"){echo "selected";} ?> value=">">&gt;</option>
                            </select>
                        </td>
                        <td><input type="number" id="input_result" class="form-control inputcheckempty checkempty2" value="<?php echo isset($save['tool_specimen_hbs'][$key_specimen][2])?$save['tool_specimen_hbs'][$key_specimen][2]:''; ?>" data-class=".checkempty2" name="save[tool_specimen_hbs][<?php echo $key_specimen; ?>][2]"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-12 mb-2">
            <p><b>ข้อมูลผู้ส่ง</b></p>
        </div>
        <div class="col-sm-6 mb-2">
            <label for="">ชื่อ</label>
            <input type="text" class="form-control" id="name" name="save[name]" placeholder="ชื่อ" value="<?php echo $name; ?>" />
        </div>
        <div class="col-sm-3 mb-2">
            <label for="tel">หมายเลขโทรศัพท์</label>
            <input type="text" class="form-control" id="tel" name="save[telephone]" placeholder="หมายเลขโทรศัพท์" value="<?php echo $telephone; ?>" />
        </div>
        <div class="col-sm-3 mb-2">
            <label for="position">ตำแหน่ง</label>
            <input type="text" class="form-control" id="position" name="save[position]" placeholder="ตำแหน่ง" value="<?php echo $position; ?>" />
        </div>
        <div class="col-sm-12 mb-2">
            <label for="comment">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง </label>
            <textarea class="form-control" id="comment" name="save[comment]" placeholder="ความคิดเห็นเพิ่มเติม"><?php echo $comment; ?></textarea>
        </div>
        <div class="col-sm-3 mb-2">
            <label for="report_date">วันที่ทำการทดสอบ </label>
            <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo date('d-m-Y'); ?>" />
        </div>
        <div class="col-sm-12 mb-2 text-center">
            <button class="btn btn-primary hidepreview" type="submit" id="btnsubmit">ส่งผลการตรวจ</button>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {

        // init data
        const select_method = $('.selected')
        const select_color = $('.fixed-color')
        const select_hb = $('.check_select2_1')
        const select_antihb = $('.check_select2_2')
        const input_empty = $('.inputcheckempty')

        const fixColor = {
            1: 'red',
            2: 'green',
            3: 'blue'
        }; // 0 black , 1 red, 2 green , 3 blue


        // Method
        const setShowInputAutoAndInputOther = (thiselement, attr) => {
            let eleauto = $(thiselement).parent('td').children('.auto')
            let eleautoSelect = eleauto.children('div').children('select')

            let eleother = $(thiselement).parent('td').children('.other')
            let eleautoInput = eleother.children('div').children('input')

            eleauto.hide();
            eleautoSelect.removeAttr('required');

            eleother.hide();
            eleautoInput.removeAttr('required');

            if (attr === 'auto') {
                eleauto.show();
                eleautoSelect.attr('required', 'required');
            } else if (attr == 'other') {
                eleother.show();
                eleautoInput.attr('required', 'required');
            }
        }

        const setRequiredInputText = (thiselement, value) => {
            if (value.length > 0) {
                $(thiselement).parent('td').parent('tr').next('tr').children('td:eq(1)').children('input').attr('required', 'required');
            } else {
                $(thiselement).parent('td').parent('tr').next('tr').children('td:eq(1)').children('input').removeAttr('required');
            }
        }

        const setColorSelect = (thiselement, thisvalue) => {
            let thiscolor = typeof fixColor[thisvalue] !== 'undefined' ? fixColor[thisvalue] : '#333';
            $(thiselement).css('color', thiscolor);
        }




        const mainCondition = (selectElement) => {
            let specClass = $(selectElement).data('class');
            let response1 = setConditionHBsIsSelected(selectElement);
            let response2 = setConditionSpecHasValue(specClass);

            if (response1 === true) {
                requiredInputInstrument(selectElement, true);
                if (setConditionSpecHasValue(specClass) == false) {
                    requiredHBs(specClass, true);
                    requiredHBs(selectElement, false);
                } else {
                    requiredHBs(specClass, false);
                    requiredHBs(selectElement, true);
                }
            } else {
                if (setConditionSpecHasValue(specClass) == false) {
                    requiredHBs(specClass, false);
                    requiredHBs(selectElement, false);
                    requiredInputInstrument(selectElement, false);
                } else {
                    requiredHBs(selectElement, true);
                    requiredInputInstrument(selectElement, true);
                }
            }
        }
        const setConditionHBsIsSelected = (selectElement) => {
            let thisvalue = $(selectElement).val();
            let isRequired = (thisvalue.length > 0)

            return isRequired;
        }

        const setConditionSpecHasValue = (className) => {
            let someoneHasValue = false;
            $(className).each(function(index, element) {
                if ($(element).val().length > 0) {
                    someoneHasValue = true;
                }
            });
            return someoneHasValue;
        }

        // set required
        const requiredInputInstrument = (selectElement, isRequired = false) => {
            const indexOfTd = $(selectElement).parent('td').index();
            // condition check input "Instrument/test kit/ Brand" is need required or not
            const inputInstrument = $(selectElement).parent('td').parent('tr').next('tr').children('td:eq(' + indexOfTd + ')').children('input')
            if (isRequired) {
                inputInstrument.attr('required', 'required');
            } else {
                inputInstrument.removeAttr('required');
            }
        }
        const requiredHBs = (selectElement, isRequired = false) => {
            if (isRequired) {
                $(selectElement).attr('required', 'required');
            } else {
                $(selectElement).removeAttr('required');
            }
        }

        // Event
        select_method.change(function(e) {
            e.preventDefault();
            let option_value = $(this).val();
            let attribute_value = $(this).children('option[value="' + option_value + '"]').data('id');

            setShowInputAutoAndInputOther(this, attribute_value);
            setRequiredInputText(this, option_value);
        });

        select_color.change(function(e) {
            e.preventDefault();
            setColorSelect(this, $(this).val());
        });


        select_hb.change(function(e) {
            mainCondition(this);
        });
        select_antihb.change(function(e) {
            mainCondition(this);
        });

        input_empty.keyup(function(e) {
            let thisclass = $(this).data('class');
            let mainelement = $('select[data-class="' + thisclass + '"]')
            mainCondition(mainelement);
        });


    });
</script>

<!-- 
<script>
    $(document).ready(function () {
        // select();
        $(".selected").on('change', function(event) {
            // select();
            // $(this).parents('.row').find('.other .input-field input').val("");
            
            var option = $('option:selected', this).attr('data-id');
            console.log(option);
            
            if (option == 'other') {
                $(this).parent().parent().parent().find('.other').show();
                $(this).parent().parent().parent().find('.auto').hide();
                // $(this).parent().parent().parent().find('.select_show_cutoff').removeAttr('required');
                $(this).parent().parent().parent().find('.other .input-field input').attr('required', 'required');
            } else if(option == 'auto') {
                $(this).parent().parent().parent().find('.auto').show();
                $(this).parent().parent().parent().find('.other').hide();
                $(this).parent().parent().parent().find('.other .input-field input').val("");
                $(this).parent().parent().parent().find('.select_show_cutoff').attr('required', 'required');

            } else {
                $(this).parent().parent().parent().find('.auto').hide();
                $(this).parent().parent().parent().find('.other').hide();

                $(this).parent().parent().parent().find('.other .input-field input').val("");
                $(this).parent().parent().parent().find('.select_show_cutoff').removeAttr('required');
                $(this).parent().parent().parent().find('.other .input-field input').removeAttr('required')
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

    <?php for ($i = 0; $i <= 4; $i++) { ?>
    $(document).ready(function() {
        $('.check_select_<?php echo $i; ?>').change(function(event) {
            if($(this).val() == 0){
                $('.input_check_<?php echo $i; ?>').removeAttr("required");
            }else {
                $('.input_check_<?php echo $i; ?>').attr("required","required");
            }
        }).trigger("change");
    });
    <?php } ?>


    $(document).ready(function() {
        $('.check_select2_1').change(function(event) {
            if($(this).val() == 0){
                $('.input_check2_1').removeAttr("required");
                $('.fixed-select2-1').removeAttr("required","required");
                $('.fixed-select2-3').removeAttr("required","required");
            }else {
                $('.input_check2_1').attr("required","required");
                $('.fixed-select2-1').attr("required","required");
                $('.fixed-select2-3').attr("required","required");
            }
        }).trigger("change");
    });

    <?php for ($i = 1; $i <= 2; $i++) { ?>
    $(document).ready(function() {
        $('.check_select2_2').change(function(event) {
            if($(this).val()== 0){
                $('.input_check2_2').removeAttr("required");
                $('.fixed-select2-2').removeAttr("required","required")
            }else {
                $('.input_check2_2').attr("required","required");

                let pass = false;
                $('.fixed-select2-2').each(function(index, el) {
                    if ($(el).val().length>0) {
                        pass = true;
                    }
                });

                if (!pass) {
                    $('.fixed-select2-2').attr("required","required");
                }
            }
        }).trigger("change");
    });
    <?php } ?>


    $(document).ready(function() {
	   $('.fixed-color').change(function() {
	      var current = $(this).val();
	      if (current == '1') {
          	$(this).css('color','red');
	      }else if(current == '2') {
          	$(this).css('color','green');
	      }else if(current == '3') {
	      	$(this).css('color','blue');
	      }
		  var current = $(this).val();
	   }); 
	});
</script>

<script type="text/javascript">
    <?php for ($i = 0; $i <= 4; $i++) { ?>
    jQuery(document).ready(function($) {
        function checkValue() {
            var allzero = true;
            $('.fixed-select-<?php echo $i; ?>').each(function(e){
            if ( $(this).val() > 0 ) {
                allzero = false;
            }
          });
          return allzero;
        }
        $('.fixed-select-<?php echo $i; ?>').change(function(e){
          if ( checkValue() == true ) {
            // console.log('= 0 ทั้งหมด');
            $('.check_select_<?php echo $i; ?>').removeAttr("required");
          } else {
            // console.log('>0 บางตัว');
            $('.check_select_<?php echo $i; ?>').attr("required","required");
          }
        });
    });    
    <?php } ?> 

    jQuery(document).ready(function($) {
        function checkInput() {
            var allinput = true;
            $('.fixed-select2-2').each(function(e){
            if ( $(this).val().length>0) {
                allinput = false;
            } 
          });
          return allinput;
        }
        $('.fixed-select2-2').keyup(function(e){
          if ( checkInput() == true ) {
            $('.check_select2_2').removeAttr("required");
          } else {
            $('.check_select2_2').attr("required","required");
          }
        });
    });    
</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('.checkempty').keyup(function(event) {
            let pass = false;
            $('.checkempty').each((e) => {
                if ($(e).val().length>0) {
                    pass = true;
                }
            });
            if (pass) {
                $('.checkempty').removeAttr("required","required");
            } else {
                $('.checkempty').attr("required","required");
            }
        });
        $('.checkempty2').keyup(function(event) {
            if($(this).val().length > 0){
                $('.checkempty2').removeAttr("required","required");
            }else{
                $('.checkempty2').attr("required","required");
            }
        });
    });
</script>
-- >