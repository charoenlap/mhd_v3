<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div>
    <?php foreach ($specimens as $key_spec => $val_spec) : ?>
        <h4><?php echo $val_spec->name; ?></h4>
        <table border="1" class="export_excel table display nowrap">
            <thead>
                <tr>
                    <th>Participant ID</th>
                    <th>Trial</th>
                    <th>Lab Name</th>
                    <th>Hospital Name</th>
                    <th>Report Date</th>
                    <th>Tested Date</th>
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
                        <?php foreach ($infections as $key_infec => $val_infec) : ?>
                            <td>
                                <?php
                                    foreach ($save_value->sample[$key_spec] as $key_sam => $val_sam){
                                        if($key_sam == $val_infec->code){
                                            if($key_sam == '49'){
                                                if($val_sam == '1'){
                                                    echo '2';
                                                }else if($val_sam == '2'){
                                                    echo '1';
                                                }
                                            }else{
                                                echo $val_sam;
                                            }
                                        }
                                    }
                                ?>
                            </td>
                        <?php endforeach; ?>
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
