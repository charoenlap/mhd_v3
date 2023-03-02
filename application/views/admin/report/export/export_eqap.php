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
                <th>SpCode</th>
                <th>Pcode</th>
                <th>Pname</th>
                <th>ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($program_register_info as $key_reigs => $value) : ?>

                <?php $save_value = json_decode($value->save); ?>
                <?php foreach ($save_value->sample as $key_sam => $val_sav) : ?>
                    <?php foreach ($val_sav as $save_val) : ?>
                        <tr>
                            <td><?php echo $value->code_program . $value->member_no; ?></td>
                            <td><?php echo $value->name_trial; ?></td>
                            <td><?php echo $value->room_comp; ?></td>
                            <td><?php echo $value->name_comp; ?></td>
                            <td><?php echo $value->date_added; ?></td>
                            <td><?php echo $save_value->report_date; ?></td>
                            <td>
                                <?php echo $specimens[$key_sam]->name; ?>
                            </td>
                            <td><?php echo $save_val; ?></td>
                            <td>
                            <?php foreach($tools as $tool){
                                if($tool->code == $save_val){
                                    echo $tool->name;
                                }
                            } ?>
                            </td>
                            <td><?php echo $save_value->comment; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
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