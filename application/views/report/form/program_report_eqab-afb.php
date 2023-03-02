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
<label style="padding-top: 0px; margin: 0;">3.วิธีการที่ท่านใช้ในการย้อม AFB stain สำหรับตัวอย่างที่ได้รับ</label>
<div class="container-fluid">
    <!-- first radio -->

    <?php foreach ($infections_sec4 as $key => $infection) : ?>
        <div class="form-check col-md-auto">
            <input class="form-check-input" type="radio" name="save[result]" id="radio_<?php echo $key; ?>" value="<?php echo $infection->code; ?>" <?php echo $key == 0 ? 'checked' : ''; ?> <?php echo isset($save['result']) && $save['result'] == $infection->code ? 'checked' : ''; ?> />
            <label class="form-check-label" for="radio_<?php echo $key; ?>">
                <?php echo $infection->name; ?>
            </label>
        </div>
    <?php endforeach; ?>
    <input type="text" name="save[result_other]" value="<?php echo isset($save['result_other']) ? $save['result_other'] : ''; ?>" class="form-control" placeholder="Other ระบุ" style="margin-bottom: 20px;"></input>


    <caption>รายงานผลการย้อมสี</caption>
    <table class="table text-center table-hover">
        <thead class="bg-primary text-white">
            <tr>
                <th>Sample Id</th>
                <th>4.รายงานผลการย้อมสี</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($specimens as $key_spe => $specimen) : ?>
                <tr>
                    <td width="30%"><?php echo $specimen->name; ?></td>
                    <td>
                        <?php foreach ($infections_sec1 as $key => $infection) : ?>
                            <div class="form-check text-left">
                                <input class="form-check-input" type="radio" name="save[sample][<?php echo $key_spe; ?>]" id="test<?php echo $specimen->id . $infection->id; ?>" value="<?php echo $infection->code; ?>" <?php echo isset($save['sample'][$key_spe]) && $save['sample'][$key_spe] == $infection->code ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="test<?php echo $specimen->id . $infection->id; ?>">
                                    <?php echo $infection->name; ?>
                                </label>
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
</div>
</div>