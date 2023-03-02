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
                <th>Staining Method</th>
                <?php foreach ($specimens as $key_spe => $val_spe) : ?>
                    <th><?php echo $val_spe->name; ?></th>
                <?php endforeach; ?>
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
                        <?php
                        if ($save_value->result == 4) {
                            echo $save_value->result_other;
                        } else {
                            foreach ($infections_sec4 as $key_sec4 => $val_sec4) {
                                if ($save_value->result == $val_sec4->code) {
                                    echo $val_sec4->name;
                                }
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        foreach ($infections_sec1 as $key_sec1 => $val_sec1) {
                            if ($save_value->sample[0] == $val_sec1->code) {
                                echo $val_sec1->name;
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        foreach ($infections_sec1 as $key_sec1 => $val_sec1) {
                            if ($save_value->sample[1] == $val_sec1->code) {
                                echo $val_sec1->name;
                            }
                        }
                        ?>
                    </td>
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