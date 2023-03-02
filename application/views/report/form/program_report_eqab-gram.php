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
    <div class="row">
        <div class="col-12">
            <p>3.รายงานผลการทดสอบ (ท่านสามารถเลือกคำตอบได้ไม่เกิน 2 ตำตอบ)</p>
            <table class="table text-center table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th width="30%">Sample Id</th>
                        <th>รายงานผลการย้อมสี</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($specimens as $key_spe => $specimen) : ?>
                        <tr>
                            <td>
                                <?php echo $specimen->name; ?>
                                <?php if (!empty($specimen->file)) { ?>
                                    <a href="<?php base_url() . 'upload/trial_report/vdo/' . $specimen->file; ?>" target="new" class="font_blue">(โปรดคลิ๊กที่ link เพื่อเข้าดู <?php echo $specimen->file_name; ?>)</a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php foreach ($infections as $key_infec => $infection) : ?>
                                    <div class="form-check text-left">
                                        <!-- <input class="form-check-input checkbox-two-<?php echo $key_spe; ?>" type="checkbox" value="<?php echo $infection->id; ?>" name="save[sample][<?php echo $key_spe; ?>][]" <?php echo isset($save['sample'][$key_spe][$infection->code]) && $save['sample'][$key_spe][$infection->code] == $infection->id ? 'checked' : ''; ?> id="test<?php echo $specimen->id . $infection->id; ?>"> -->
                                        <input class="form-check-input checkbox-two-<?php echo $key_spe; ?>" type="checkbox" value="<?php echo $infection->id; ?>" name="save[sample][<?php echo $key_spe; ?>][]" <?php if($save['sample'][$key_spe][0] == $infection->id || $save['sample'][$key_spe][1] == $infection->id ){echo 'checked';} ?> id="test<?php echo $specimen->id . $infection->id; ?>">
                                        <label class="form-check-label" for="test<?php echo $specimen->id . $infection->id; ?>"><?php echo $infection->name; ?></label>
                                        <br>
                                    </div>
                                <?php endforeach; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="container-left">
                <h6>หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ</h6>
            </div>
        </div>
    </div>
</div>


<div class="container-left">อัพโหลดไฟล์</div>
<div class="row justify-content-between">
    <div class="input-group" style="padding-top: 10px;">
        <?php foreach ($specimens as $key => $specimen) : ?>
            <div class="col px-md-5">
                <div class="custom-file">
                    <label class="custom-file-label" for="file_<?php echo $key; ?>"><?php echo isset($_FILES['file_' . $key]) ? $_FILES['file_' . $key]['name'] : $specimen->name; ?></label>
                    <input type="file" class="custom-file-input" id="file_<?php echo $key; ?>" name="file_<?php echo $key; ?>">
                </div>
                <?php if(count($file_image['file_'.$key]) > 0 ) { ?>
                        <img src="<?php echo base_url() . 'upload/' . $file_image['file_'.$key]; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
            </div>
        <?php endforeach; ?>
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

<script>
    $(document).ready(function() {
        <?php foreach ($specimens as $key => $specimen) : ?>
            $('#file_<?php echo $key; ?>').on("change", function() {
                console.log("change fired");
                var i = $(this).prev('label').clone();
                var file = $('#file_<?php echo $key; ?>')[0].files[0].name;
                console.log(file);
                $(this).prev('label').text(file);

            });
        <?php endforeach; ?>
    });
</script>