<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <?php foreach ($infections as $key_infec => $value_infec) : ?>
        <h2><?php echo $value_infec->name; ?></h2>
        <table border="1" class="table export_excel-<?php echo $key_infec; ?> display nowrap">
            <thead>
                <tr>
                    <th>Participant ID</th>
                    <th>Trial</th>
                    <th>Lab Name</th>
                    <th>Hospital Name</th>
                    <th>received_date</th>
                    <th>Report Date</th>
                    <th>Tested Date</th>
                    <th>Principle</th>
                    <th>Instrument</th>
                    <th>Reagent</th>
                    <th>Result</th>
                    <th>ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($program_register_info as $value) : ?>
                    <?php $save_value = json_decode($value->save); ?>
                    <tr>
                        <td><?php echo $value->code_program . $value->member_no; ?></td>
                        <td><?php echo $value->name_trial; ?></td>
                        <td><?php echo $value->room_comp; ?></td>
                        <td><?php echo $value->name_comp; ?></td>
                        <td><?php echo $value->date_report; ?></td>
                        <td><?php echo $value->date_added; ?></td>
                        <td><?php echo $save_value->report_date; ?></td>
                        <td>
                            <?php 
                                //  เดิมใช้ที่ comment ไว้ เปลี้ยนเป็น ตัวแปร i เท่ากับ ตัวแปร key ของลูปแทน
                                $i = 0;
                                foreach ($save_value->infection as $key_save_inf => $val_save_inf) {
                                // if ($key_save_inf == $value_infec->id) {
                                //     foreach ($tools_sec1 as $tool_secs) {
                                //         if ($tool_secs->code == $val_save_inf) {
                                //             echo $tool_secs->name;
                                //         }
                                //     }
                                // }
                                if($i == $key_infec){
                                    foreach ($tools_sec1 as $tool_secs) {
                                        if ($tool_secs->code == $val_save_inf) {
                                            echo $tool_secs->name;
                                        }
                                    }
                                }
                            $i++; } ?>
                        </td>
                        <td>
                            <?php
                                $i = 0; 
                                foreach ($save_value->tool_sec2 as $key_save_inf => $val_save_inf) {
                                // if ($key_save_inf == $value_infec->id) {
                                //     foreach ($tools_sec2 as $tool_secs) {
                                //         if ($tool_secs->code == $val_save_inf) {
                                //             echo $tool_secs->name;
                                //         }
                                //     }
                                // }
                                if($i == $key_infec){
                                    foreach ($tools_sec2 as $tool_secs) {
                                        if ($tool_secs->code == $val_save_inf) {
                                            echo $tool_secs->name;
                                        }
                                    }
                                }
                            $i++; } ?>
                        </td>
                        <td>
                            <?php
                                $i = 0; 
                                foreach ($save_value->tool_sec3 as $key_save_inf => $val_save_inf) {
                                // if ($key_save_inf == $value_infec->id) {
                                //     foreach ($tools_sec3 as $tool_secs) {
                                //         if ($tool_secs->code == $val_save_inf) {
                                //             echo $tool_secs->name;
                                //         }
                                //     }
                                // }
                                if ($i == $key_infec) {
                                    foreach ($tools_sec3 as $tool_secs) {
                                        if ($tool_secs->code == $val_save_inf) {
                                            echo $tool_secs->name;
                                        }
                                    }
                                }
                            $i++; } ?>
                        </td>
                        <td>
                            <?php
                                $i = 0; 
                                // foreach ($save_value->result as $key_save_inf => $val_save_inf) {
                                // if ($key_save_inf == $value_infec->id) {
                                //     echo $val_save_inf;
                                // }
                                foreach ($save_value->result as $key_save_inf => $val_save_inf) {
                                if ($i == $key_infec) {
                                    echo $val_save_inf;
                                }
                            $i++; } ?>
                        </td>
                        <td><?php echo $save_value->comment; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>
<script>
    <?php foreach ($infections as $key_infec => $value_infec) : ?>
    $(document).ready(function() {
        $('.export_excel-<?php echo $key_infec; ?>').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excelHtml5',
                title: '<?php echo $value_infec->name."".$report_file_name; ?>'
            }
            ]
        });
    });
    <?php endforeach; ?>
</script>