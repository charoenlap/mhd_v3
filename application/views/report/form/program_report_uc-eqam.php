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

    <?php
    $head_name = array(
        '1' => '0,2',
        '2' => '0,2',
        '3' => '2,4',
        '4' => '2,4'
    );
    $U_C = 1;
    $in = array(
        '1' => $infections_sec1,
        '2' => $infections_sec2,
        '3' => $infections_sec3,
        '4' => $infections_sec4,
    );
    foreach ($head_name as $key => $value) :
        if ($key == 3) {
            $U_C++;
        }
    ?>
        <div class="col-md-6 col-sm-12">
            <table class="table text-center table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>รหัส</th>
                        <th>สิ่งที่ตรวจพบ</th>
                        <?php
                        $count = 0;
                        foreach ($specimens as $key_speci => $specimen) : ?>
                            <?php if (($value == '0,2' && $count < 2) || ($value == '2,4' && $count > 1 && $count < 4)) : ?>
                                <th><?php echo $specimen->name; ?></th>
                            <?php endif; ?>
                            <?php $count++; ?>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($in[$key] as $key_infec => $infection) : ?>
                        <tr>
                            <td>
                                <?php echo $infection->code; ?>
                            </td>
                            <td class="text-left"><?php echo $infection->name; ?> </td>


                            <?php
                            $count = 0;
                            foreach ($specimens as $key_speci => $specimen) : ?>
                                <?php if (($value == '0,2' && $count < 2) || ($value == '2,4' && $count > 1 && $count < 4)) : ?>
                                    <td>
                                        <div class="form-check">
                                            <!-- <input class="form-check-input" type="radio" name="save[sample][<?php echo $key_speci; ?>]" id="radio_<?php echo $key . '_' . $key_speci . '_' . $infection->id; ?>" <?php echo isset($save['sample'][$key_speci]) && $save['sample'][$key_speci] == $infection->code?'checked':''; ?> value="<?php echo $infection->code; ?>"> -->
                                            <input class="form-check-input" type="radio" name="save[sample_<?php echo $key_speci; ?>]" id="radio_<?php echo $key . '_' . $key_speci . '_' . $infection->id; ?>" <?php echo isset($save['sample_'.$key_speci]) && $save['sample_'.$key_speci] == $infection->code?'checked':''; ?> value="<?php echo $infection->code; ?>">
                                        </div>
                                        <?php if ($infection->name == "Other (โปรดระบุ)") : ?>
                                            <div><textarea name="save[sample_other_<?php echo $key_speci; ?>]" class="form-control" id="" cols="30" rows="3" style="margin-top:25px;"><?php echo isset($save['sample_other_'.$key_speci])?$save['sample_other_'.$key_speci]:''; ?></textarea></div>
                                        <?php endif; ?>
                                    </td>

                                <?php endif; ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endforeach; ?>
</div>

<div class="container-left" style="padding-bottom: 20px;">
    <dl>
        <dt>หมายเหตุ</dt>
        <dd> - กรณีพบ cell, cast, crystal หรือสิ่งอื่นๆ ที่ไม่มีรหัสสำหรับรายงานผล ให้เขียนสิ่งที่พบในช่อง Other (รหัส
            45)</dd>
        <dd> - กรณีการรายงาน broad cast เช่น broad waxy cast ให้เขียนรายงานในช่อง other (รหัส 45)</dd>
    </dl>
</div>
<div class="container-left">อัพโหลดไฟล์</div>
<div class="row justify-content-between">
    <div class="input-group" style="padding-top: 10px;">
        <div class="col px-md-5">
            <div class="custom-file">
                <label class="custom-file-label" for="file_0"><?php echo isset($_FILES['file_0'])? $_FILES['file_0']['name']:'C'; ?></label>
                <input type="file" class="custom-file-input" id="file_0" name="file_0">
            </div>
            <?php if(count($file_image['file_0']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_0']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
        </div>
        <div class="col px-md-5">
            <div class="custom-file">
                <label class="custom-file-label" for="file_1"><?php echo isset($_FILES['file_1'])? $_FILES['file_1']['name']:'U'; ?></label>
                <input type="file" class="custom-file-input" id="file_1" name="file_1">
            </div>
            <?php if(count($file_image['file_1']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_1']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
        </div>
    </div>
</div>
<div class="container-left">อัพโหลดไฟล์</div>
<div class="row justify-content-between">
    <div class="input-group" style="padding-top: 10px;">
        <div class="col px-md-5">
            <div class="custom-file">
                <label class="custom-file-label" for="file_2"><?php echo isset($_FILES['file_2'])? $_FILES['file_2']['name']:'C1'; ?></label>
                <input type="file" class="custom-file-input" id="file_2" name="file_2">
            </div>
            <?php if(count($file_image['file_2']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_2']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
        </div>
        <div class="col px-md-5">
            <div class="custom-file">
                <label class="custom-file-label" for="file_3"><?php echo isset($_FILES['file_3'])? $_FILES['file_3']['name']:'C2'; ?></label>
                <input type="file" class="custom-file-input" id="file_3" name="file_3">
            </div>
            <?php if(count($file_image['file_3']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_3']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
        </div>
    </div>
</div>
<div class="row justify-content-between">
    <div class="input-group" style="padding-top: 10px;">
        <div class="col px-md-5">
            <div class="custom-file">
                <label class="custom-file-label" for="file_4"><?php echo isset($_FILES['file_4'])? $_FILES['file_4']['name']:'U1'; ?></label>
                <input type="file" class="custom-file-input" id="file_4" name="file_4">
            </div>
            <?php if(count($file_image['file_4']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_4']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
                    <?php } ?>
        </div>
        <div class="col px-md-5">
            <div class="custom-file">
                <label class="custom-file-label" for="file_5"><?php echo isset($_FILES['file_5'])? $_FILES['file_5']['name']:'U2'; ?></label>
                <input type="file" class="custom-file-input" id="file_5" name="file_5">
            </div>
            <?php if(count($file_image['file_5']) > 0 ) { ?>
                    <img src="<?php echo base_url() . 'upload/' . $file_image['file_5']; ?>" class="w-50 mt-2 img-thumbnail" alt="">
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
    $('#file_2').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_2')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
    $('#file_3').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_3')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
    $('#file_4').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_4')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
    $('#file_5').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_5')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
</script>