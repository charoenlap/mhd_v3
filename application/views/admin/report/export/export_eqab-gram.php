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
                <?php foreach($specimens as $specimen){ ?>
                <th><?php echo $specimen->name; ?></th>
                <th><?php echo $specimen->name; ?></th>
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
                <?php foreach($infections as $key_infec1 => $val_infec1){ ?>
                    <?php
                        if($save_value->sample[0][0] == $val_infec1->id){
                            echo $val_infec1->name;
                        }    
                    ?>
                <?php } ?>
                </td>
                <td>
                <?php foreach($infections as $key_infec1 => $val_infec1){ ?>
                    <?php
                        if($save_value->sample[0][1] == $val_infec1->id){
                            echo $val_infec1->name;
                        }    
                    ?>
                <?php } ?>
                </td>
                <td>
                <?php foreach($infections as $key_infec1 => $val_infec1){ ?>
                    <?php
                        if($save_value->sample[1][0] == $val_infec1->id){
                            echo $val_infec1->name;
                        }    
                    ?>
                <?php } ?>
                </td>
                <td>
                <?php foreach($infections as $key_infec1 => $val_infec1){ ?>
                    <?php
                        if($save_value->sample[1][1] == $val_infec1->id){
                            echo $val_infec1->name;
                        }    
                    ?>
                <?php } ?>
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