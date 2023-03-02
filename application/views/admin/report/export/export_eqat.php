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
                <?php foreach ($infections as $key => $value) : ?>
                    <th>Code <br> (<?php echo $value->name; ?>)</th>
                    <th>Automate <br> (<?php echo $value->name ?>) </th>

                    <!-- new edit -->
                    <th>sample 1 <br> (<?php echo $value->name ?>) </th>
                    <th>sample 2 <br> (<?php echo $value->name ?>) </th>
                    <!-- end new edit -->

                    <?php foreach ($specimens as $key => $val_spec) : ?>
                        <!-- <th><?php echo $val_spec->name . '<br> (' . $value->name . ')'; ?></th> -->
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <!-- <th>Principle</th>
                <th>Instrument</th>
                <th>Method</th>
                <th>Reagent</th>
                <th>Lot number</th>
                <th>result</th> -->
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
                    <?php foreach ($save_value->tools as $key_tool => $val_toolsave): ?>
                        <!-- <?php echo $key_tool; ?> -->
                        
                        <td>
                            <?php echo $val_toolsave; ?>
                        </td>
                        <td>
                        <?php foreach ($tools as $key => $val_tool) : ?>
                                <?php if ($val_toolsave == $val_tool->code) : ?>
                                    <?php echo $val_tool->name; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>
                            <?php 
                                foreach ($save_value->sample as $key_val => $val_sam): 
                            ?>
                            <td><?php echo $val_sam->$key_tool; ?></td>
                            <!-- <td><?php echo $key_tool->$key_tool; ?></td> -->
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