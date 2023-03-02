<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <table border="1" id="export_excel" class="table display nowrap">
        <thead>
            <tr>
                <th colspan="6"></th>
                <?php foreach ($infections as $key_infec => $val_infec) { ?>
                    <th colspan="<?php echo (count($infections) * 2) + 7; ?>" rowspan="1"><?php echo $val_infec->name; ?></th>
                <?php } ?>
                <th rowspan="3">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง</th>
                <th colspan="4" rowspan="2">HBsAg (S/CO,COI,Index)</th>
            </tr>
            <tr>
                <th colspan="6"></th>
                <?php
                foreach ($infections as $key => $value) { ?>
                    <th colspan="5">qualitative test</th>
                    <th colspan="4">quantitative test</th>
                    <?php foreach ($specimens as $key => $value_spe) { ?>
                        <th colspan="2"><?php echo $value_spe->name; ?></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th>Participant ID</th>
                <th>Trial</th>
                <th>Lab Name</th>
                <th>Hospital Name</th>
                <th>Report Date</th>
                <th>Tested Date</th>

                <?php
                foreach ($infections as $key => $value) { ?>
                    <th>Method</th>
                    <th>Automation</th>
                    <th>Reagent</th>
                    <th>Lot</th>
                    <th>Cutoff</th>

                    <th>Automation</th>
                    <th>Reagent</th>
                    <th>Lot</th>
                    <th>Cutoff</th>
                    <?php foreach ($specimens as $key => $value) { ?>
                        <th>Qualitative</th>
                        <th>Quantitative</th>
                    <?php } ?>
                <?php } ?>
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <th>SE-02-20-2-<?php echo $i; ?></th>
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
                    <?php
                    $i = 1;
                    foreach ($infections as $key => $value) { ?>
                        <td>
                            <?php echo $save_value->tool->$i; ?>
                        </td>
                        <td>
                            <?php foreach ($tools_auto as $tool_val) { ?>
                                <?php
                                if ($tool_val->code == $save_value->tool_auto->$i) {
                                    echo $tool_val->name;
                                }
                                ?>
                            <?php } ?>
                        </td>
                        <td>
                            <?php echo $save_value->result_1->$i; ?>
                        </td>
                        <td>
                            <?php echo $save_value->result_2->$i; ?>
                        </td>
                        <td></td>

                        <td>
                            <?php foreach ($save_value->tool_auto2 as $key_auto => $val_auto) {
                                foreach ($tools_auto as $tool_val) {
                                    if ($tool_val->code == $val_auto->$i) {
                                        echo $tool_val->name;
                                    }
                                }
                            } ?>
                        </td>
                        <td>
                            <?php
                            foreach ($save_value->tool_reagent as $key_rea => $val_rea) {
                                echo $val_rea->$i;
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            foreach ($save_value->tool_lot as $key_lot => $val_tool) {
                                echo $val_tool->$i;
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            foreach ($save_value->tool_catalog as $key_lot => $val_tool) {
                                echo $val_tool->$i;
                            }
                            ?>
                        </td>

                        <?php foreach ($specimens as $key => $value) { ?>
                            <td>
                                <?php
                                foreach ($save_value->sample_q_li as $key_sam => $val_sam) {
                                    if ($key_sam == $value->id) {
                                        foreach ($tools_sec2 as $val_tool_sec2) {
                                            if ($val_sam->$i == $val_tool_sec2->code) {
                                                echo $val_tool_sec2->name;
                                            }
                                        }
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <?php foreach ($save_value->symbol as $key_sym => $val_sym) {
                                    if ($key_sym == $value->id) {
                                        echo $val_sym->$i;
                                    }
                                } ?>
                                <?php foreach ($save_value->tool_specimen_hbs as $key_hbs => $val_hbs) {
                                    if ($key_hbs == $value->id) {
                                        echo ' &nbsp; ' . $val_hbs->$i;
                                    }
                                } ?>
                            </td>
                        <?php } ?>
                        <?php $i++; ?>
                    <?php } ?>
                    <td><?php echo $save_value->comment; ?></td>
                    <?php for ($x = 0; $x <= 3; $x++) { ?>
                        <td><?php echo $save_value->symbol_new[$x] . ' &nbsp; ' . $save_value->tool_specimen_hbs_new[$x]; ?></td>
                    <?php } ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#export_excel').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excelHtml5',
                title: '<?php echo $program_head; ?>'
            }]
        });
    });
</script>