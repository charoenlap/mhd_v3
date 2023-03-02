<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <h4>IDEN</h4>
    <table border="1" id="export_excel" class="export_excel table display nowrap">
        <thead>
            <tr>
                <th>Participant ID</th>
                <th>Trial</th>
                <th>Lab Name</th>
                <th>Hospital Name</th>
                <th>Report Date</th>
                <th>Tested Date</th>
                <th>Identification Method</th>
                <?php foreach ($specimens as $key_spec => $val_spec) { ?>
                    <th><?php echo $val_spec->name; ?></th>
                <?php } ?>
                <th>ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($program_register_info as $key_reigs => $value) : ?>
                <?php $save_value = json_decode($value->save); ?>
                <tr>
                    <td><?php echo $value->code_program . $value->member_no; ?></td>
                    <td><?php echo $value->name_trial; ?></td>
                    <td><?php echo $value->room_comp; ?></td>
                    <td><?php echo $value->name_comp; ?></td>
                    <td><?php echo $value->date_added; ?></td>
                    <td><?php echo $save_value->report_date; ?></td>
                    <td>
                        <?php if ($save_value->result == '11') {
                            echo $save_value->result_other;
                        } else { ?>
                            <?php foreach ($infections_sec3 as $key_infec => $val_infec) : ?>
                                <?php if ($save_value->result == $val_infec->code) {
                                    echo $val_infec->name;
                                } ?>
                            <?php endforeach; ?>
                        <?php } ?>
                    </td>

                    <?php foreach ($specimens as $key_spe => $val_spe) { ?>
                        <td>
                            <?php echo $save_value->result_1[$key_spe]; ?>
                        </td>
                    <?php } ?>
                    <td><?php echo $save_value->comment; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h4>AST</h4>
    <?php foreach ($specimens as $key_spec => $val_spec) : ?>
        <h4><?php echo $val_spec->name; ?></h4>
        <table border="1" id="export_excel" class="export_excel table display nowrap">
            <thead>
                <tr>
                    <th colspan="7"></th>
                    <th colspan="<?php echo count($tools); ?>" style="text-align: left;">การแปลผล</th>
                    <th colspan="<?php echo count($tools); ?>" style="text-align: left;">Zone size</th>
                    <th colspan="<?php echo count($tools); ?>" style="text-align: left;">MIC (ถ้ามี)</th>
                    <th rowspan="2">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง</th>
                </tr>
                <tr>
                    <th>Participant ID</th>
                    <th>Trial</th>
                    <th>Lab Name</th>
                    <th>Hospital Name</th>
                    <th>Report Date</th>
                    <th>Tested Date</th>
                    <th>Method</th>
                    <?php for ($i = 0; $i < 3; $i++) {  ?>
                        <?php foreach ($tools as $key_tool => $val_tool) { ?>
                            <th><?php echo $val_tool->name; ?></th>
                        <?php } ?>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($program_register_info as $key_reigs => $value) : ?>
                    <?php $save_value = json_decode($value->save); ?>
                    <tr>
                        <td><?php echo $value->code_program . $value->member_no; ?></td>
                        <td><?php echo $value->name_trial; ?></td>
                        <td><?php echo $value->room_comp; ?></td>
                        <td><?php echo $value->name_comp; ?></td>
                        <td><?php echo $value->date_added; ?></td>
                        <td><?php echo $save_value->report_date; ?></td>
                        <td>
                            <?php
                            if ($save_value->infection_sec1[$key_spec] == '7') {
                                echo $save_value->infection_sec1_other[$key_spec];
                            } else {
                            ?>
                                <?php foreach ($infections_sec1 as $key_infec => $val_infec) : ?>
                                    <?php
                                    if ($save_value->infection_sec1[$key_spec] == $val_infec->code) {
                                        echo $val_infec->name;
                                    }
                                    ?>
                                <?php endforeach; ?>
                            <?php } ?>
                        </td>
                        <?php
                        $drug_arr = array();
                        foreach ($save_value->tool_sec2[$key_spec] as $key => $value) {
                            $drug_arr[$value] = array(
                                $save_value->infection_sec3[$key_spec][$key],
                                $save_value->result_2[$key_spec][$key],
                                $save_value->result_3[$key_spec][$key],
                            );
                        }
                        ?>
                        <?php foreach ($tools as $key_tool => $val_tools) { ?>
                            <td>
                                <?php
                                foreach ($drug_arr as $key => $value) {
                                    if ($key == $val_tools->code) {
                                        foreach ($infections_sec4 as $val_sec4) {
                                            if ($val_sec4->code == $value[0]) {
                                                echo $val_sec4->name;
                                            }
                                        }
                                    }
                                } ?>
                            </td>
                        <?php } ?>
                        <?php foreach ($tools as $key_tool => $val_tools) { ?>
                            <td>
                                <?php
                                foreach ($drug_arr as $key => $value) {
                                    if ($key == $val_tools->code) {
                                        echo $value[1];
                                    }
                                } ?>
                            </td>
                        <?php } ?>
                        <?php foreach ($tools as $key_tool => $val_tools) { ?>
                            <td>
                                <?php
                                foreach ($drug_arr as $key => $value) {
                                    if ($key == $val_tools->code) {
                                        echo $value[2];
                                    }
                                } ?>
                            </td>
                        <?php } ?>
                        <td><?php echo $save_value->comment; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>

<script>
    $(document).ready(function() {
        $('.export_excel').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excelHtml5',
                title: '<?php echo $program_head; ?>'
            }
            ]
        });
    });
</script>