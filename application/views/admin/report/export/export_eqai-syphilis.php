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

            <th>ntp_method</th>
            <th>ntp_method_other</th>
            <th>ntp_kit brand</th>
            <th>Lot Number</th>

            <th>tp_method</th>
            <th>tp_method_other</th>
            <th>tp_kit_brand</th>
            <th>Lot Number</th>

            <th>ntp_quali_reading_1</th>
            <th>ntp_semiquant_reading_1</th>
            <th>tp_quali_reading_1</th>
            <!-- <th>tp_cutoff_1</th> -->
            <th>ntp_quali_reading_2</th>
            <th>ntp_semiquant_reading_2</th>
            <th>tp_quali_reading_2</th>
            <!-- <th>tp_cutoff_2</th> -->
            <th>ntp_quali_reading_3</th>
            <th>ntp_semiquant_reading_3</th>
            <th>tp_quali_reading_3</th>
            <!-- <th>tp_cutoff_3</th> -->
            <th>ntp_quali_reading_4</th>
            <th>ntp_semiquant_reading_4</th>
            <th>tp_quali_reading_4</th>
            <!-- <th>tp_cutoff_4</th> -->
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
                    foreach($tools_ntp as $key_ntp => $val_ntp){
                        if($save_value->tools_ntp == $val_ntp->code){
                            echo $val_ntp->name;
                        }
                    }
                    ?>
                </td>
                <td><?php echo isset($save_value->tools_other_ntp)?$save_value->tools_other_ntp:''; ?></td>
                <td><?php echo $save_value->ntp_result; ?></td>
                <td><?php echo $save_value->ntp_lot_number; ?></td>
                <td>
                <?php
                foreach($tools_tp as $key_tp => $val_tp){
                    if($save_value->tools_tp == $val_tp->code){
                        echo $val_tp->name;
                    }
                }
                ?>
                </td>
                <td><?php echo isset($save_value->tools_other_tp)?$save_value->tools_other_tp:''; ?></td>
                <td><?php echo $save_value->tp_result; ?></td>
                <td><?php echo $save_value->tp_lot_number; ?></td>

                <?php foreach($specimens as $key_spe => $val_spe): ?>
                <td>
                   <?php
                   foreach($tools_qualitative as $val_qua){
                       if($val_qua->id == $save_value->ntp_qua[$key_spe]){
                            echo $val_qua->name;
                       }
                   }
                   ?>
                </td>
                <td>
                <?php
                        echo $save_value->ntp_semi[$key_spe];
                   ?>
                </td>
                <td>
                <?php
                   foreach($tools_qualitative as $val_quas){
                       if($val_quas->id == $save_value->tp_qua[$key_spe]){
                            echo $val_quas->name;
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