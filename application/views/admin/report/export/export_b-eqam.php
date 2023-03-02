<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <table border="1" id="export_excel" class="table display nowrap">
        <thead>
            <tr>
                <th>Participant ID</th>
                <th>Trial</th>
                <th>Lab Name</th>
                <th>Hospital Name</th>
                <th>Report Date</th>
                <th>Tested Date</th>
                <th>automate_model</th>
                <th>Other</th>
                <th>method</th>
                <?php
                foreach ($infections as $key => $value) { ?>
                    <th><?php echo $value->name; ?></th>
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
                    <?php foreach ($tools as $key_tool => $tool_val) : ?>
                        <?php if ($save_value->tool == $tool_val->code) {
                            echo $tool_val->name;
                        } ?>
                    <?php endforeach; ?>
                </td>
                <td><?php echo $save_value->tool_other; ?></td>
                <td><?php echo $save_value->tool; ?></td>
                <td><?php echo $save_value->result_0; ?></td>
                <td><?php echo $save_value->result_1; ?></td>
                <td><?php echo $save_value->result_2; ?></td>
                <td><?php echo $save_value->result_3; ?></td>
                <td><?php echo $save_value->result_4; ?></td>
                <td><?php echo $save_value->result_5; ?></td>
                <td><?php echo $save_value->result_6; ?></td>
                <td><?php echo $save_value->result_7; ?></td>
                <td><?php echo $save_value->result_8; ?></td>
                <td><?php echo $save_value->comment; ?></td>
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
            }
            ]
        });
    });
</script>