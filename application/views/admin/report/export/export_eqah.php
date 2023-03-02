<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php $sub_head = array('T3', 'T4', 'FT3', 'FT4', 'TSH'); ?>
<div>
    <table border="1" id="export_excel" class="table display nowrap">
        <thead>
            <tr>
                <th>Participant ID</th>
                <th>Trial</th>
                <th>Lab Name</th>
                <th>Hospital Name</th>
                <th>received_date</th>
                <th>Report Date</th>
                <th>Tested Date</th>
                <?php foreach ($sub_head as $val_head) { ?>
                    <th>Code <br>(<?php echo $val_head; ?>)</th>
                    <th>Automate <br>(<?php echo $val_head; ?>)</th>
                    <?php foreach ($specimens as $key_spe => $val_spe) { ?>
                        <th><?php echo $val_spe->name ?><br>(<?php echo $val_head; ?>)</th>
                    <?php } ?>
                <?php } ?>
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
                    <?php foreach ($sub_head as $key_sub => $val_sub) : ?>
                        <td>
                            <?php echo $save_value->tools[$key_sub]; ?>
                        </td>
                        <td>
                            <?php foreach ($tools as $val_tool) { ?>
                                <?php
                                if ($save_value->tools[$key_sub] == $val_tool->code) {
                                    echo $val_tool->name;
                                }
                                ?>
                            <?php } ?>
                        </td>
                        <?php foreach ($specimens as $key_spec => $val_spec) : ?>
                            <td><?php echo $save_value->result[$key_spec][$key_sub]; ?></td>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
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