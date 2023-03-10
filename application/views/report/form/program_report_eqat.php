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
<div class="row">
    <div class="cols12">
        <table class="table text-center table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Analytes</th>
                    <th scope="col">Instruments</th>
                    <th scope="col">Principles</th>
                    <th scope="col">Sample 1</th>
                    <th scope="col">Sample 2</th>
                </tr>
            <tbody>
                <?php foreach ($infections as $key => $value) : ?>
                <tr>
                    <td><?php echo $value->code;?></td>
                    <td><?php echo $value->name;?></td>
                    <td>
                        <select class="select-other custom-select" name="save[tools][<?php echo $value->code;?>]" other_id="other_tools<?php echo $value->code;?>">
                            <option value="" selected="">Choose</option>
                            <?php foreach ($tools as $tool): ?>
                            <option value="<?php echo $tool->code;?>" <?php echo isset($save['tools'][$value->code]) && $save['tools'][$value->code] == $tool->code ? 'selected' : ''; ?> other="<?php echo $tool->other;?>"><?php echo $tool->code.':'.$tool->name;?></option>
                            <?php endforeach; ?> 
                        </select>
                        <input type="text" class="<?php echo isset($save['tools_other'][$value->code]) && $save['tools'][$value->code] == '6' ? '' : 'd-none'; ?> form-control" name="save[tools_other][<?php echo $value->code;?>]" id="other_tools<?php echo $value->code;?>" placeholder="Other ????????????" value="">
                    </td>
                    <td>
                        <select class="select-other custom-select" name="save[method][<?php echo $value->code;?>]" other_id="other_method<?php echo $value->code;?>">
                            <option value="" selected="">Select Method</option>
                            <?php foreach ($principles as $principle) : ?>
                            <option value="<?php echo $principle->code;?>" <?php echo isset($save['method'][$value->code]) && $save['method'][$value->code] == $principle->code ? 'selected' : ''; ?> other="<?php echo $principle->other;?>"><?php echo $principle->name;?></option>
                            <?php endforeach; ?>

                        </select>
                        <input type="text" class="<?php echo isset($save['principle_other'][$value->code]) && $save['method'][$value->code] == '6' ? '' : 'd-none'; ?> form-control" name="save[principle_other][<?php echo $value->code;?>]" id="other_method<?php echo $value->code;?>" placeholder="Other ????????????" value="<?php echo $save['principle_other'][$value->code]; ?>">
                    </td>
                    <!-- <td><input type="number" class="form-control input_result_<?php echo $key; ?>" id="input_result" name="save[sample][0][<?php echo $value->code; ?>]" onblur="limit_decimal($(this),3)" value="<?php echo $save['sample'][0][$value->code]; ?>" data-no="0-0" style="padding-bottom: 0px;"></td>
                    <td><input type="number" class="form-control input_result_<?php echo $key; ?>" id="input_result" name="save[sample][1][<?php echo $value->code; ?>]" onblur="limit_decimal($(this),3)" value="<?php echo $save['sample'][1][$value->code]; ?>" data-no="0-1" style="padding-bottom: 0px;"></td> -->
                    
                    <!-- ???????????????????????????????????????????????????????????? show and hide -->
                    <!-- <td><input type="number" class="form-control input_result_<?php echo $key; ?>" id="input_result" name="save[sample][0][<?php echo $value->code; ?>]" value="<?php echo $save['sample'][0][$value->code]; ?>" data-no="0-0" step="0.001" style="padding-bottom: 0px;"></td> -->
                    <!-- <td><input type="number" class="form-control input_result_<?php echo $key; ?>" id="input_result" name="save[sample][1][<?php echo $value->code; ?>]" value="<?php echo $save['sample'][1][$value->code]; ?>" data-no="0-1" step="0.001" style="padding-bottom: 0px;"></td> -->

                    <td><input type="number" class="form-control input_result_<?php echo $key; ?>" id="input_result" name="save[sample][0][<?php echo $value->code; ?>]" value="<?php echo $value_status == "show" ? $save['sample'][0][$value->code] : ""; ?>" data-no="0-0" step="0.001" style="padding-bottom: 0px;"></td>
                    <td><input type="number" class="form-control input_result_<?php echo $key; ?>" id="input_result" name="save[sample][1][<?php echo $value->code; ?>]" value="<?php echo $value_status == "show" ? $save['sample'][1][$value->code] : ""; ?>" data-no="0-1" step="0.001" style="padding-bottom: 0px;"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-sm-12 mb-2">
                <p><b>????????????????????????????????????</b></p>
            </div>
            <div class="col-sm-6 mb-2">
                <label for="">????????????</label>
                <input type="text" class="form-control" id="name" name="save[name]" placeholder="????????????" value="<?php echo $name;?>" />
            </div>
            <div class="col-sm-3 mb-2">
                <label for="tel">?????????????????????????????????????????????</label>
                <input type="text" class="form-control" id="tel" name="save[telephone]" placeholder="?????????????????????????????????????????????" value="<?php echo $telephone;?>" />
            </div>
            <div class="col-sm-3 mb-2">
                <label for="position">?????????????????????</label>
                <input type="text" class="form-control" id="position" name="save[position]" placeholder="?????????????????????" value="<?php echo $position;?>" />
            </div>
            <div class="col-sm-12 mb-2">
                <label for="comment">?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? </label>
                <textarea class="form-control" id="comment" name="save[comment]" placeholder="????????????????????????????????????????????????????????????"><?php echo $comment;?></textarea>
            </div>
            <div class="col-sm-3 mb-2">
                <label for="report_date">???????????????????????????????????????????????? </label>
                <!-- <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo date('d-m-Y'); ?>" /> -->
                <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo $report_date; ?>" />
            </div>
            <div class="col-sm-12 mb-2 text-center">
                <button class="btn btn-primary hidepreview" type="submit" id="btnsubmit">????????????????????????????????????</button>
            </div>
        </div>
    </div>
</div>
                   
<script>
    $(document).on('change', '.select-other', function(e) {
        var status_other = $('option:selected', this).attr('other');;
        var other_id = $(this).attr('other_id');
        // console.log(other_id);

        if (status_other == '1') {
            $('#' + other_id).removeClass('d-none');
        } else {
            $('#' + other_id).addClass('d-none');
            $('#' + other_id).val('');
        }
    });

    <?php foreach ($infections as $key => $value) { ?>
        <?php if ($value->id == 72) { ?>
            $(document).on('blur', '.input_result_<?php echo $key; ?>', function(e) {
                limit_decimal($(this), 3);
            })
        <?php } else { ?>
            $(document).on('blur', '.input_result_<?php echo $key; ?>', function(e) {
                limit_decimal($(this), 2);
            })
        <?php } ?>
    <?php } ?>
</script>