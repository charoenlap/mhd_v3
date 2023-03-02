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
<div class="row justify-content-between">
    <div class="col px-md-4">
        <select name="save[tool]" id="" class="custom-select select-other" required>
            <!-- <option value="">ชื่อเครื่องนับเม็ดเลือดอัตโนมัติและรุ่นที่ใช้</option> -->
            <?php foreach ($tools as $tool) : ?>
                <option value="">กรุณาเลือก</option>
                <?php if($value_status == "show"){ ?>
                <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tool']) && $save['tool'] == $tool->code?'selected':''; ?> ><?php echo $tool->name; ?></option>
                <?php }else{ ?>
                <option value="<?php echo $tool->code; ?>"><?php echo $tool->name; ?></option>
                <?php } ?>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col px-md-3">
        <input type="text" class="form-control" id="tool_other" value="<?php echo $value_status == "show" ? (isset($save['tool_other'])?$save['tool_other']:'') : ""; ?>" name="save[tool_other]" placeholder="รายชื่อเครื่องอื่นๆ">
    </div>
</div>
<div class="row" style="padding-top: 20px;">
    <div class="cols12 container-fluid">
        <table class="table text-center table-bordered">
            <thead class="bg-primary text-white">
                <tr>
                    <?php foreach ($infections as $infection) : ?>
                        <th><?php echo $infection->name; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($infections as $key => $infection) : ?>
                        <!-- <td><input type="text" class="form-control" name="save[result_<?php echo $key; ?>]" value="<?php echo isset($save['result_'.$key])?$save['result_'.$key]:''; ?>"></td> -->

                        <!-- new 30-11-22 -->
                        <td><input type="number" step="0.01" onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)" class="form-control" name="save[result_<?php echo $key; ?>]" value="<?php echo $value_status == "show" ? (isset($save['result_'.$key])?$save['result_'.$key]:'') : ""; ?>"></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
        <div class="container-left">อัพโหลดไฟล์</div>
        <div class="row justify-content-between">
            <div class="input-group" style="padding-top: 10px;">
                <div class="col px-md-5">
                    <div class="custom-file">
                        <label class="custom-file-label" for="file_0"><?php echo isset($_FILES['file_0'])? $_FILES['file_0']['name']:'Upload one file'; ?></label>
                        <input type="file" class="custom-file-input" id="file_0" name="file_0">
                    </div>
                    <?php if(count($file_image['file_0']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_0']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
                </div>
                <div class="col px-md-5">
                    <div class="custom-file">
                        <label class="custom-file-label" for="file_1"><?php echo isset($_FILES['file_1'])? $_FILES['file_1']['name']:'Upload one file'; ?></label>
                        <input type="file" class="custom-file-input" id="file_1" name="file_1">
                    </div>
                    <?php if(count($file_image['file_1']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_1']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
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
</div>

<script>
    $('#file_0').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_0')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
    $('#file_1').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_1')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
</script>