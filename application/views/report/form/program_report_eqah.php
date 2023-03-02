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
<div class="row" id="showdetail">
    <div class="col-12">
        <table class="table text-center table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Code</th>
                    <th scope="col">Principles</th>
                    <?php foreach ($specimens as $key_spe => $val_spe) { ?>
                        <th><?php echo $val_spe->name; ?></th>
                    <?php } ?>
                </tr>
            <tbody>
                <?php foreach ($infections as $key => $value) : ?>
                    <tr>
                        <td><?php echo $value->code; ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td>
                            <select class="select-other custom-select" name="save[tools][<?php echo $key; ?>]" other_id="other_tools<?php echo $value->id; ?>">
                                <option value="" selected="">Choose</option>
                                <?php foreach ($tools as $tool) : ?>
                                    <option value="<?php echo $tool->code; ?>" other="<?php echo $tool->other; ?>" <?php echo isset($save['tools'][$key]) && $save['tools'][$key] == $tool->code ? 'selected' : ''; ?>>
                                        <?php echo $tool->code . ':' . $tool->name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <input type="text" class="<?php echo isset($save['tools_other'][$key]) && !empty($save['tools_other'][$key]) ? '' : 'd-none' ?> form-control" name="save[tools_other][<?php echo $key; ?>]" id="other_tools<?php echo $value->id; ?>" placeholder="Other ระบุ" value="<?php echo isset($save['tools_other'][$key]) ? $save['tools_other'][$key] : ''; ?>" />
                        </td>
                        <td>
                            <select class="select-other custom-select" name="save[method][<?php echo $key; ?>]" other_id="other_method<?php echo $value->id; ?>">
                                <option value="" selected="">Select Method</option>
                                <?php foreach ($principles as $principle) : ?>
                                    <option value="<?php echo $principle->code; ?>" other="<?php echo $principle->other; ?>" <?php echo isset($save['method'][$key]) && $save['method'][$key] == $principle->code ? 'selected' : ''; ?>>
                                        <?php echo $principle->name; ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                            <input type="text" class="<?php echo isset($save['principle_other'][$key]) && !empty($save['principle_other'][$key]) ? '' : 'd-none' ?> form-control" name="save[principle_other][<?php echo $key; ?>]" id="other_method<?php echo $value->id; ?>" placeholder="Other ระบุ" value="<?php echo isset($save['principle_other'][$key]) ? $save['principle_other'][$key] : ''; ?>" />
                        </td>
                        <?php foreach ($specimens as $key_spes => $val_spes) : ?>
                            <!-- <td><input type="nunber" id="input_result" class="form-control input_result_<?php echo $key; ?>" name="save[result][<?php echo $key_spes; ?>][<?php echo $key; ?>]" onblur="limit_decimal($(this),3)" value="<?php echo isset($save['result'][$key_spes][$key]) ? $save['result'][$key_spes][$key] : ''; ?>"></td> -->
                            <td><input type="nunber" id="input_result" class="form-control input_result_<?php echo $key; ?>" name="save[result][<?php echo $key_spes; ?>][<?php echo $key; ?>]" value="<?php echo $value_status == "show" ? (isset($save['result'][$key_spes][$key]) ? $save['result'][$key_spes][$key] : '') : ""; ?>"></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>


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
</div>


<script>
    $(document).on('change', '.select-other', function(e) {
        var status_other = $('option:selected', this).attr('other');;
        var other_id = $(this).attr('other_id');

        if (status_other == '1') {
            $('#' + other_id).removeClass('d-none');
        } else {
            $('#' + other_id).addClass('d-none');
            $('#' + other_id).val('');
        }
    });
    <?php foreach ($infections as $key => $value) { ?>
        <?php if ($value->id == 436 || $value->id == 434 || $value->id == 432) { ?>
            $(document).on('blur', '.input_result_<?php echo $key; ?>', function(e) {
                limit_decimal($(this), 2);
            })
        <?php } else if ($value->id == 430) { ?>
            $(document).on('blur', '.input_result_<?php echo $key; ?>', function(e) {
                limit_decimal($(this), 3);
            })
        <?php } ?>
    <?php } ?>
</script>