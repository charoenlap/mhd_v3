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
<div>
    <div class="container-fluid">
        <table class="table text-center table-hover table-responsive">
            <thead class="bg-primary text-white">
                <tr>
                    <th></th>
                    <th style="width:20%;">Non treponemal Test</th>
                    <th></th>
                    <th></th>
                    <th colspan="2">Treponemal Test</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <select class="select-other select-ntp custom-select" name="save[tools_ntp]" other_id="other_ntp" data-no="4">
                            <option value="" selected="">Choose</option>
                            <?php foreach ($tools_ntp as $tool) : ?>
                                <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tools_ntp']) && $save['tools_ntp'] == $tool->code ? 'selected' : ''; ?> other="<?php echo $tool->other; ?>"><?php echo $tool->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="<?php echo isset($save['tools_other_ntp']) && $save['tools_ntp'] == '29' ? '' : 'd-none'; ?> form-control" name="save[tools_other_ntp]" id="other_ntp" placeholder="Other ระบุ" value="<?php echo $save['tools_other_ntp']; ?>">
                    </td>
                    <td class="text-left">Method</td>
                    <td class="bg-primary border-0"></td>
                    <td>
                        <select class="select-other select-tp custom-select" name="save[tools_tp]" other_id="other_tp" data-no="5">
                            <option value="" selected="">Choose</option>
                            <?php foreach ($tools_tp as $tool) : ?>
                                <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tools_tp']) && $save['tools_tp'] == $tool->code ? 'selected' : ''; ?> other="<?php echo $tool->other; ?>"><?php echo $tool->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" class="<?php echo isset($save['tools_other_tp']) && $save['tools_tp'] == '40' ? '' : 'd-none'; ?> form-control" name="save[tools_other_tp]" id="other_tp" placeholder="Other ระบุ" value="<?php echo $save['tools_other_tp']; ?>">
                    </td>
                    <td class="text-left">Method</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" id="input_result" class="form-control instru-ntp" name="save[ntp_result]" value="<?php echo $save['ntp_result']; ?>">
                    </td>
                    <td class="text-left">Instrument/Test Kit/ Brand</td>
                    <td class="bg-primary border-0"></td>
                    <!-- second input -->
                    <td>
                        <input type="text" id="input_result" class="form-control instru-tp" name="save[tp_result]" value="<?php echo $save['tp_result']; ?>">
                    </td>
                    <td class="text-left">Instrument/Test Kit/ Brand</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="text" id="input_result" class="form-control reagent-ntp" name="save[ntp_lot_number]" value="<?php echo $value_status == "show" ? $save['ntp_lot_number'] : ""; ?>">
                    </td>
                    <td class="text-left">Reagent Lot Number</td>
                    <td class="bg-primary border-0"></td>
                    <!-- second input -->
                    <td>
                        <input type="text" id="input_result" class="form-control reagent-tp" name="save[tp_lot_number]" value="<?php echo $value_status == "show" ? $save['tp_lot_number'] : ""; ?>">
                    </td>
                    <td class="text-left">Reagent Lot Number</td>
                </tr>
                <tr>
                    <td>Specimen No.</td>
                    <td>Qualitative</td>
                    <td>Semiquantitative</td>
                    <td class="bg-primary border-0"></td>
                    <td>Qualitative</td>
                    <td hidden>Specimen No.</td>
                </tr>
                <?php 
                    // echo "<pre>";
                    // print_r($save);
                    // echo "</pre>";
                    foreach ($specimens as $key_spe => $specimen) : 
                    // $data_ntp_semi[$key_spe] = $save['ntp_semi'][$key_spe];
                ?>
                    <tr>
                        <td><?php echo $specimen->name; ?></td>
                        <td>
                            <!-- <select name="save[<?php echo $specimen->name; ?>][qualitative_non_test]" id="" class="form-control"> -->
                            <select name="save[ntp_qua][]" id="" class="form-control ntp_select_<?php echo $key_spe; ?> ntp_fiexd">
                                <option value="">Choose</option>
                                <?php foreach ($tools_qualitative as $tool) : ?>
                                    <!-- <option value="<?php echo $tool->code; ?>" <?php echo isset($save[$specimen->name]['qualitative_non_test']) && $save[$specimen->name]['qualitative_non_test'] == $tool->code ? 'selected' : ''; ?>><?php echo $tool->name; ?></option> -->
                                    
                                    <?php if($value_status == "show"){ ?>
                                    <option value="<?php echo $tool->code; ?>" <?php echo isset($save['ntp_qua'][$key_spe]) && $save['ntp_qua'][$key_spe] == $tool->code ? 'selected' : ''; ?>><?php echo $tool->name; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $tool->code; ?>"><?php echo $tool->name; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?> ?>
                            </select>
                        </td>
                        <td>
                            <!-- <select name="save[<?php echo $specimen->name; ?>][semiquantitative]" id="" class="form-control"> -->
                            <select name="save[ntp_semi][]" id="" class="form-control ntp_semi_<?php echo $key_spe; ?> ntp_fiexd">
                                <option value="" <?php if($save[$key_spe] == ''){ echo "selected"; } ?>>Semiquantitative</option>
                                <?php if($value_status == "show"){ ?>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:1" <?php if($save['ntp_semi'][$key_spe] == '1:1'){ echo "selected"; } ?>>1:1</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:2" <?php if($save['ntp_semi'][$key_spe] == '1:2'){ echo "selected"; } ?>>1:2</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:4" <?php if($save['ntp_semi'][$key_spe] == '1:4'){ echo "selected"; } ?>>1:4</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:8" <?php if($save['ntp_semi'][$key_spe] == '1:8'){ echo "selected"; } ?>>1:8</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:16" <?php if($save['ntp_semi'][$key_spe] == '1:16'){ echo "selected"; } ?>>1:16</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:32" <?php if($save['ntp_semi'][$key_spe] == '1:32'){ echo "selected"; } ?>>1:32</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:64" <?php if($save['ntp_semi'][$key_spe] == '1:64'){ echo "selected"; } ?>>1:64</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:128" <?php if($save['ntp_semi'][$key_spe] == '1:128'){ echo "selected"; } ?>>1:128</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:256" <?php if($save['ntp_semi'][$key_spe] == '1:256'){ echo "selected"; } ?>>1:256</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:512" <?php if($save['ntp_semi'][$key_spe] == '1:512'){ echo "selected"; } ?>>1:512</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:1024" <?php if($save['ntp_semi'][$key_spe] == '1:1024'){ echo "selected"; } ?>>1:1024</option>
                                <?php }else{ ?>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:1">1:1</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:2">1:2</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:4">1:4</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:8">1:8</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:16">1:16</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:32">1:32</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:64">1:64</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:128">1:128</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:256">1:256</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:512">1:512</option>
                                <option class="data_hide_<?php echo $key_spe; ?>" value="1:1024">1:1024</option>
                                <?php } ?>
                                <!-- <option <?php if ($save['ntp_semi'][$key_spe] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:1">1:1</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:2">1:2</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:4">1:4</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:8">1:8</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:16') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:16">1:16</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:32') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:32">1:32</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:64') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:64">1:64</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:128') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:128">1:128</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:256') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:256">1:256</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:512') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:512">1:512</option>
                                <option <?php if ($save['ntp_semi'][$key_spe] == '1:1024') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:1024">1:1024</option> -->

                                <!-- <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:8') {
                                                    echo "selected";
                                                } else {
                                                    '';
                                                }; ?> value="1:1">1:1</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:2">1:2</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:4">1:4</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:8') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:8">1:8</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:16') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:16">1:16</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:32') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:32">1:32</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:64') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:64">1:64</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:128') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:128">1:128</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:256') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:256">1:256</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:512') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:512">1:512</option>
                                <option <?php if ($save[$specimen->name]['semiquantitative'] == '1:1024') {
                                            echo "selected";
                                        } else {
                                            '';
                                        }; ?> value="1:1024">1:1024</option> -->
                            </select>
                        </td>
                        <td class="bg-primary border-0"></td>
                        <td>
                            <!-- <select name="save[<?php echo $specimen->name; ?>][qualitative_test]" id="" class="form-control"> -->
                            <select name="save[tp_qua][]" id="" class="form-control tp_fiexd">
                                <option value="">Choose</option>
                                <?php foreach ($tools_qualitative as $tool) : ?>
                                    <?php if($value_status == "show"){ ?>
                                    <option value="<?php echo $tool->code; ?>" <?php echo isset($save['tp_qua'][$key_spe]) && $save['tp_qua'][$key_spe] == $tool->code ? 'selected' : ''; ?>><?php echo $tool->name; ?></option>
                                    <?php }else{ ?>
                                    <option value="<?php echo $tool->code; ?>"><?php echo $tool->name; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?> ?>
                            </select>
                        </td>
                        <td hidden>Specimen No.</td>
                    </tr>
                <?php endforeach; ?>
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
            <!-- <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo date('d-m-Y'); ?>" /> -->
            <input type="text" class="form-control datepicker" id="report_date" name="save[report_date]" value="<?php echo $report_date; ?>" />
        </div>
        <div class="col-sm-12 mb-2 text-center">
            <button class="btn btn-primary hidepreview" type="submit" id="btnsubmit">ส่งผลการตรวจ</button>
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
    $(".select-ntp").on("change", function() {
        if ($(this).val() > 0) {
            $(".reagent-ntp").attr('required', 'required');
            $(".ntp_fiexd").attr('required', 'required');
        } else {
            $(".reagent-ntp").removeAttr('required');
            $(".ntp_fiexd").removeAttr('required');
        }
    });
    $(".ntp_fiexd").on("change", function() {
        if ($(this).val() !== "") {
            $(".ntp_fiexd").removeAttr('required');
        } else {
            $(".ntp_fiexd").attr('required', 'required');
        }
    })
    $(".select-tp").on("change", function() {
        if ($(this).val() > 0) {
            $(".reagent-tp").attr('required', 'required');
            $(".tp_fiexd").attr('required', 'required');
        } else {
            $(".reagent-tp").removeAttr('required');
            $(".tp_fiexd").removeAttr('required');
        }
    })
    $(".tp_fiexd").on("change", function() {
        if ($(this).val() > 0) {
            $(".tp_fiexd").removeAttr('required');
        } else {
            $(".tp_fiexd").attr('required', 'required');
        }
    })
    <?php foreach ($specimens as $key => $value) { ?>
        // $(".ntp_semi_<?php echo $key; ?>").prop('disabled', true);
        $('.data_hide_<?php echo $key; ?>').addClass('d-none');
        $('.ntp_select_<?php echo $key; ?>').change(function() {
            if ($(this).val() == 37) {
                $('.data_hide_<?php echo $key; ?>').removeClass('d-none');
                // $(".ntp_semi_<?php echo $key; ?>").prop('disabled', false);
            } else {
                $('.data_hide_<?php echo $key; ?>').addClass('d-none');
                // $(".ntp_semi_<?php echo $key; ?>").prop('disabled', true);
            }
        })
    <?php } ?>


    <?php foreach ($specimens as $key => $value) { ?>
    $(".ntp_select_<?php echo $key; ?>").each(function(index){
        if ($(this).has('option:selected')){
            if ($(this).val() == 37) {
                $('.data_hide_<?php echo $key; ?>').removeClass('d-none');
                // $(".ntp_semi_<?php echo $key; ?>").prop('disabled', false);
            } else {
                $('.data_hide_<?php echo $key; ?>').addClass('d-none');
                // $(".ntp_semi_<?php echo $key; ?>").prop('disabled', true);
            }
        }
    });
    <?php } ?>
</script>