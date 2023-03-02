<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div style="width: 50%;">
<!-- <pre>
<?php print_r($program_register_info); ?>
</pre> -->
    <table border="1" id="export_excel_received" class="display nowrap" style="width: 100%;">
        <thead>
            <tr>
                <th>Lab ID</th>
                <th>Lab name</th>
                <th>Hospital Name</th>
                <th>Trial No.</th>
                <th>Received date</th>
                <th>Condition</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($program_register_info as $value): ?>
            <?php $save_value = json_decode($value->save); ?>
            <tr>
                <td><?php echo $value->code_program.$value->member_no; ?></td>
                <td><?php echo $value->room_comp; ?></td>
                <td><?php echo $value->name_comp; ?></td>
                <td><?php echo $value->name_trial; ?></td>
                <td><?php echo $value->date_report; ?></td>
                <td><?php if($value->received_status == 1){echo "สมบูรณ์";}elseif($value->received_status == 0){echo "ไม่สมบูรณ์"; } ?></td>
                <td><?php echo $save_value->comment; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#export_excel_received').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
    });
</script>