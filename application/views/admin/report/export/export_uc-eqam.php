<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<?php
$head_name = array(
    '1' => 'Cell Picture',
    '2' => 'Urine Sediment Picture',
);
$group_speci = array(
    '1' => '0,2',
    '2' => '2,4',
);
$in = array(
    '1' => $infections_sec1,
    '2' => $infections_sec2,
    '3' => $infections_sec3,
    '4' => $infections_sec4,
);
$infec_section_1 = array_merge($in[1], $in[2]);
$infec_section_2 = array_merge($in[3], $in[4]);
?>
<div>
    <?php foreach ($group_speci as $key_spec => $value_spec) : ?>
        <h4><?php echo $head_name[$key_spec]; ?></h4>
        <table border="1" id="export_excel" class="export_excel table display nowrap">
            <thead>
                <tr>
                    <th>Participant ID</th>
                    <th>Trial</th>
                    <th>Lab Name</th>
                    <th>Hospital Name</th>
                    <th>Report Date</th>
                    <th>Tested Date</th>
                    <?php if ($key_spec == 1) { ?>
                        <th><?php echo $specimens[0]->name; ?></th>
                        <th><?php echo $specimens[0]->name; ?> Instruments name </th>
                        <th><?php echo $specimens[1]->name; ?></th>
                        <th><?php echo $specimens[1]->name; ?> Instruments name </th>
                    <?php } ?>
                    <?php if ($key_spec == 2) { ?>
                        <th><?php echo $specimens[2]->name; ?></th>
                        <th><?php echo $specimens[2]->name; ?> Instruments name </th>
                        <th><?php echo $specimens[3]->name; ?></th>
                        <th><?php echo $specimens[3]->name; ?> Instruments name </th>
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
                        <?php if ($key_spec == 1) { ?>
                            <td><?php
                                if ($save_value->sample_0 == '70') {
                                    echo $save_value->sample_other_0;
                                } else {
                                    echo $save_value->sample_0;
                                }
                                ?></td>
                            <td>
                                <?php
                                foreach ($infec_section_1 as $key_infec => $val_infec) {
                                    if ($val_infec->code == $save_value->sample_0) {
                                        echo $val_infec->name;
                                    }
                                }
                                ?>
                            </td>
                            <td><?php
                                if ($save_value->sample_1 == '70') {
                                    echo $save_value->sample_other_1;
                                } else {
                                    echo $save_value->sample_1;
                                }
                                ?></td>
                            <td>
                                <?php
                                foreach ($infec_section_1 as $key_infec => $val_infec) {
                                    if ($val_infec->code == $save_value->sample_1) {
                                        echo $val_infec->name;
                                    }
                                }
                                ?>
                            </td>
                        <?php } ?>

                        <?php if ($key_spec == 2) { ?>
                            <td><?php
                                if ($save_value->sample_2 == '45') {
                                    echo $save_value->sample_other_2;
                                } else {
                                    echo $save_value->sample_2;
                                }
                                ?></td>
                            <td>
                                <?php
                                foreach ($infec_section_2 as $key_infec => $val_infec) {
                                    if ($val_infec->code == $save_value->sample_2) {
                                        echo $val_infec->name;
                                    }
                                }
                                ?>
                            </td>
                            <td><?php
                                if ($save_value->sample_3 == '45') {
                                    echo $save_value->sample_other_3;
                                } else {
                                    echo $save_value->sample_3;
                                }
                                ?></td>
                            <td>
                                <?php
                                foreach ($infec_section_2 as $key_infec => $val_infec) {
                                    if ($val_infec->code == $save_value->sample_3) {
                                        echo $val_infec->name;
                                    }
                                }
                                ?>
                            </td>
                        <?php } ?>
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
            }]
        });
    });
</script>