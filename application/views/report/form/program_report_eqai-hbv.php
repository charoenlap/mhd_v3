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
        <div class="row">
            <div class="col-md-4">
                <h6 class="bg-primary py-3 px-3 text-white">รายงานผลการทดสอบแบบ qualitative report</h6>
            </div>
        </div>
        <!-- <caption>รายงานผลการทดสอบแบบ qualitative report</caption> -->
        <table class="table text-center table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <!-- <th>specimen</th> -->
                    <?php foreach ($infections as $infection) : ?>
                        <th class="text-center"><?php echo $infection->name; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <td></td> -->
                    <?php foreach ($infections as $key_infect => $infection) : ?>
                        <td class="text-left">
                            <label for="save[tool][<?php echo $infection->code; ?>]">Method</label>
                            <select name="save[tool][<?php echo $infection->code; ?>]" class="form-control selected check_select_<?php echo $key_infect; ?>">
                                <option value="" data-method="<?php echo $key_infect; ?>">Select</option>
                                <?php foreach ($tools_sec1 as $tool) : ?>
                                    <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool'][$infection->code]) && $save['tool'][$infection->code] == $tool->code?'selected':'';?>  data-id="<?php echo $tool->other; ?>" data-method="<?php echo $key_infect; ?>"><?php echo $tool->name; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="auto" style="<?php echo isset($save['tool'][$infection->code]) && $save['tool'][$infection->code] == 1 ?'':'display: none'; ?>">
                                <div class="input-field">
                                    <span>Automation</span>
                                    <select name="save[tool_auto][<?php echo $infection->code; ?>]" cutoff="<?php echo $infection->code; ?>" class="select_show_cutoff form-control">
                                        <option value="">Select</option>
                                        <?php foreach ($tools_auto as $tool) : ?>
                                            <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool_auto'][$infection->code]) && $save['tool_auto'][$infection->code] == $tool->code?'selected':'';?> data-id="<?php echo $tool->other; ?>"><?php echo $tool->name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="other" style="<?php echo isset($save['tool'][$infection->code]) && $save['tool'][$infection->code] == 3 ?'':'display: none'; ?>">
                                <div class="input-field">
                                    <span>Other</span>
                                    <input type="text" name="save[tool_other][<?php echo $infection->code; ?>]" value="<?php echo isset($save['tool_other'][$infection->code])?$save['tool_other'][$infection->code]:''; ?>" class="form-control">
                                </div>
                            </div>
                        </td>
                    <?php endforeach; ?>

                </tr>
                <tr>
                    <!-- <td></td> -->
                    <?php foreach ($infections as $key_infect => $infection) : ?>
                        <td class="text-left instrument_<?php echo $key_infect; ?>">
                            <span>Instrument/test kit/ Brand</span>
                            <input type="text" id="input_result" name="save[result_1][<?php echo $infection->code; ?>]" value="<?php echo isset($save['result_1'][$infection->code])?$save['result_1'][$infection->code]:''; ?>" class="input_check_<?php echo $key_infect; ?> form-control">
                        </td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <?php foreach ($infections as $key_infect => $infection) : ?>
                        <td class="text-left">
                            <span>Reagent Lot Number</span>
                            <input type="text" id="input_result" name="save[result_2][<?php echo $infection->code; ?>]" value="<?php echo isset($save['result_2'][$infection->code])?$save['result_2'][$infection->code]:''; ?>" class="input_check_<?php echo $key_infect; ?> form-control">
                        </td>
                    <?php endforeach; ?>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <?php foreach ($infections as $key_infect => $infection) : ?>
                        <td class="text-left">
                            <span>Catalog number</span>
                            <input type="text" id="input_result" name="save[result_3][<?php echo $infection->code; ?>]" value="<?php echo isset($save['result_3'][$infection->code])?$save['result_3'][$infection->code]:''; ?>" class="input_check_<?php echo $key_infect; ?> form-control">
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
                                <select name="save[sample_q_li][<?php echo $specimen->id; ?>][<?php echo $infection->code; ?>]" id="" class="fixed-color fixed-select-<?php echo $infection->code; ?> form-control method_specimen">
                                    <option value="">Select</option>
                                    <?php foreach ($tools_sec2 as $key => $tool) : ?>
                                        <option value="<?php echo $tool->code; ?>" <?php echo isset($save['sample_q_li'][$specimen->id][$infection->code]) && $save['sample_q_li'][$specimen->id][$infection->code] == $tool->code?'selected':''; ?> class="fixed-color<?php echo $key++; ?>" data-method="<?php echo $infection->code; ?>"><?php echo $tool->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-4">
                <h6 class="bg-success py-3 px-3 text-white">รายงานผลการทดสอบแบบ quantitative report</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <table class="table text-center table-hover table-success">
                    <thead class="bg-success text-white">
                        <tr>
                            <!-- <th>specimen</th> -->
                            <!-- <th colspan="2" style="width:25%;">HBs Ag</th> -->
                            <th colspan="2" style="width:25%;">Anti HBs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td></td> -->
                            <?php for ($i = 1; $i <= 2; $i++) { ?>
                                <?php if($i !== 1){ ?>
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
                            <?php } ?>
                        </tr>
                        <tr>
                            <!-- <td></td> -->
                            <?php for ($i = 1; $i <= 2; $i++) { ?>
                                <?php if($i !== 1){ ?>
                                <td colspan="2">
                                    <span>Instrument/test kit/ Brand</span>
                                    <input type="text" id="input_result" class="form-control" value="<?php echo isset($save['tool_reagent'][5][$i])?$save['tool_reagent'][5][$i]:''; ?>" name="save[tool_reagent][5][<?php echo $i; ?>]">
                                </td>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                        <tr>
                            <!-- <td></td> -->
                            <?php for ($i = 1; $i <= 2; $i++) { ?>
                                <?php if($i !== 1){ ?>
                                <td colspan="2">
                                    <span>Reagent Lot Number</span>
                                    <input type="text" id="input_result" class="form-control" value="<?php echo isset($save['tool_lot'][5][$i])?$save['tool_lot'][5][$i]:''; ?>" name="save[tool_lot][5][<?php echo $i; ?>]">
                                </td>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                        <tr>
                            <!-- <td></td> -->
                            <?php for ($i = 1; $i <= 2; $i++) { ?>
                                <?php if($i !== 1){ ?>
                                <td colspan="2">
                                    <span>Catalog number</span>
                                    <input type="text" id="input_result" class="form-control" value="<?php echo isset($save['tool_catalog'][5][$i])?$save['tool_catalog'][5][$i]:''; ?>" name="save[tool_catalog][5][<?php echo $i; ?>]">
                                </td>
                                <?php } ?>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-8">
                <table class="table text-center table-hover table-success">
                    <thead class="bg-success text-white font-weight-bold">
                        <tr>
                            <th>specimen</th>
                            <!-- <th></th> -->
                            <!-- <th>HBs Ag (IU/ml)</th> -->
                            <!-- <th></th> -->
                            <!-- <th>HBsAg (S/CO,COI,Index) <br> กรอกช่องนี้และลงผล Qualitative ด้านบน</th> -->
                            <th></th>
                            <th>Anti HBs (mlU/ml,IU/L)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($specimens as $key_specimen => $specimen) : ?>
                            <tr>
                                <td>
                                    <span>&nbsp;</span>
                                    <?php echo $specimen->name; ?>
                                </td>
                                <!-- <td style="width:10%;">
                                    <select class="form-control" name="save[symbol][<?php echo $specimen->id; ?>][1]">
                                        <option <?php if($save['symbol'][$specimen->id][1] == ''){echo "selected";} ?> value="" selected=""></option>
                                        <option <?php if($save['symbol'][$specimen->id][1] == '<'){echo "selected";} ?> value="<">&lt;</option>
                                        <option <?php if($save['symbol'][$specimen->id][1] == '>'){echo "selected";} ?> value=">">&gt;</option>
                                    </select>
                                </td> -->
                                <!-- <td><input type="number" id="input_result" class="form-control inputcheckempty checkempty1" value="<?php echo isset($save['tool_specimen_hbs'][$specimen->id][2])?$save['tool_specimen_hbs'][$specimen->id][1]:''; ?>" data-class=".checkempty1" name="save[tool_specimen_hbs][<?php echo $specimen->id; ?>][1]" onchange="(function(el){el.value=parseFloat(el.value).toFixed(5);})(this)" step="0.00001" autocomplete="off" min="-99999" max="99999"></td> -->
                                <!-- <td style="width:10%;">
                                    <select class="form-control" name="save[symbol_new][<?php echo $key_specimen; ?>]">
                                        <option <?php if($save['symbol_new'][$key_specimen] =="" ){echo "selected";} ?> value="" selected=""></option>
                                        <option <?php if($save['symbol_new'][$key_specimen] =="<"){echo "selected";} ?> value="<">&lt;</option>
                                        <option <?php if($save['symbol_new'][$key_specimen] ==">"){echo "selected";} ?> value=">">&gt;</option>
                                    </select>
                                </td> -->
                                <!-- <td><input type="number" id="input_result" class="form-control inputcheckempty checkempty1" value="<?php echo isset($save['tool_specimen_hbs_new'][$key_specimen])?$save['tool_specimen_hbs_new'][$key_specimen]:''; ?>" data-class=".checkempty1" name="save[tool_specimen_hbs_new][<?php echo $key_specimen; ?>]" onchange="(function(el){el.value=parseFloat(el.value).toFixed(5);})(this)" step="0.00001" autocomplete="off" min="-99999" max="99999"></td> -->
                                <td style="width:10%;">
                                    <span>&nbsp;</span>
                                    <select class="form-control" name="save[symbol][<?php echo $specimen->id; ?>][2]">
                                        <option <?php if($save['symbol'][$specimen->id][2] =="" ){echo "selected";} ?> value="" selected=""></option>
                                        <option <?php if($save['symbol'][$specimen->id][2] =="<"){echo "selected";} ?> value="<">&lt;</option>
                                        <option <?php if($save['symbol'][$specimen->id][2] ==">"){echo "selected";} ?> value=">">&gt;</option>
                                    </select>
                                </td>
                                <td>
                                    <span>&nbsp;</span>
                                    <input type="number" id="input_result" class="form-control inputcheckempty checkempty2" value="<?php echo isset($save['tool_specimen_hbs'][$specimen->id][2])?$save['tool_specimen_hbs'][$specimen->id][2]:''; ?>" data-class=".checkempty2" name="save[tool_specimen_hbs][<?php echo $specimen->id; ?>][2]"  onchange="(function(el){el.value=parseFloat(el.value).toFixed(5);})(this)" step="0.00001" autocomplete="off" min="-99999" max="99999">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </tbody>
                </table>
            </div>
        </div>
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
            <!-- <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo date('d-m-Y'); ?>" /> -->
            <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo $report_date; ?>" />
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

        // new event
        const select_method_specimen = $('.method_specimen')

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
            

            eleother.hide();
            

            if (attr === 'auto') {
                eleauto.show();
                
            } else if (attr == 'other') {
                eleother.show();
               
            }
        }

        const setRequiredInputText = (thiselement, value, key) => {
           
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
            const inputInstrument_1 = $(selectElement).parent('td').parent('tr').next('tr').children('td:eq(' + indexOfTd + ')').children('input')
            const inputInstrument_2 = $(selectElement).parent('td').parent('tr').next('tr').next('tr').children('td:eq(' + indexOfTd + ')').children('input')
            const inputInstrument_3 = $(selectElement).parent('td').parent('tr').next('tr').next('tr').next('tr').children('td:eq(' + indexOfTd + ')').children('input')
            
        }
        

        // Event
        select_method.change(function(e) {
            e.preventDefault();
            let option_value = $(this).val();
            let attribute_value = $(this).children('option[value="' + option_value + '"]').data('id');
            let methodId = $(this).children('option[value="' + option_value + '"]').data('method');

            setShowInputAutoAndInputOther(this, attribute_value);
            setRequiredInputText(this, option_value, methodId);
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

        // new
        select_method_specimen.change(function (e) {
            e.preventDefault();
            let option_value = $(this).val();
            let methodId = $(this).children('option[value="' + option_value + '"]').data('method');
            
            setRequiredSpecimen(option_value, methodId);
        });

    });
</script>