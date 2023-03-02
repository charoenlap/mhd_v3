<html>
<?php
header("Content-Type: application/vnd.ms-excel"); // ประเภทของไฟล์
header('Content-Disposition: attachment; filename="รายการผู้สมัครหลัก_'.date("F").'_'. $year_filter.'.xls"'); //กำหนดชื่อไฟล์
header("Content-Type: application/force-download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Type: application/octet-stream");
// header("Content-Type: application/download"); // กำหนดให้ถ้าเปิดหน้านี้ให้ดาวน์โหลดไฟล์
header("Content-Transfer-Encoding: binary");
header("Content-Length: " . filesize("myexcel.xls"));
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
    <table border="1">
        <thead>
            <!--ผู้ที่มาสมัคร<-->
            <tr>
                <th colspan="5">ผู้ทำการสมัครสมาชิก</th>
                <th colspan="12">ที่อยู่</th>
                <th colspan="<?php echo count($programs); ?>">หมายเลขสมาชิกสมาชิก</th>
                <th colspan="<?php echo count($programs); ?>">ชื่อห้องปฏิบัติการ</th>
                <th colspan="<?php echo count($programs); ?>">ผู้รับผิดชอบ</th>
                <th colspan="<?php echo count($programs); ?>">ประกาศนีย์บัตร</th>
                <th colspan="<?php echo count($programs); ?>">ผู้ชำระเงิน</th>
                <th colspan="<?php echo count($programs); ?>">ที่อยู่จัดส่งใบเสร็จ</th>
            </tr>
            <tr>

                <th>มหายเลขสมาชิกเดิม</th>
                <th>วันที่สมัครรับ เอกสาร</th>
                <th>ชื่อโรงพยาบาล</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>

                <th>เลขที่</th>
                <th>หมู่</th>
                <th>ถนน</th>
                <th>ตำบล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>รหัสไปรษณีย์</th>
                <th>ตึก</th>
                <th>ชั้น</th>
                <th>โทรศัพท์</th>
                <th>FAX</th>
                <th>E-mail</th>
                <th>จำนวนเตียง</th>
                <th>ประเภทโรงพยาบาล</th>
                <th>สังกัด</th>
                <?php for ($i = 0; $i <= 5; $i++) { ?>
                    <?php foreach ($programs as $val) : ?>
                        <th>
                            <?php echo $val->name; ?>
                        </th>
                    <?php endforeach; ?>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_value as $value) : ?>
                <tr>
                    <td><?php echo $value->member_no; ?></td>
                    <!-- checkdate-add -->
                    <?php if ($value->date_added == '' || $value->date_added == 0) : ?>
                        <td>ยังไม่ได้รับการยืนยันตัวตน</td>
                    <?php else : ?>
                        <td><?php echo $value->date_added; ?></td>
                    <?php endif; ?>
                    <td><?php echo $value->hospital; ?></td>
                    <td><?php echo $value->firstname; ?></td>
                    <td><?php echo $value->lastname; ?></td>

                    <td><?php echo $value->address_1; ?></td>
                    <!-- หมู่ -->
                    <td></td>

                    <!-- ถนน -->
                    <td></td>

                    <td><?php echo $value->district; ?></td>
                    <td><?php echo $value->country; ?></td>
                    <td><?php echo $value->province; ?></td>
                    <td><?php echo $value->post_code; ?></td>
                    <!-- ตึก -->
                    <td></td>
                    <!-- ชั้น -->
                    <td></td>

                    <td><?php echo $value->telephone; ?></td>
                    <?php if ($value->fax == '') : ?>
                        <td>ไม่ได้ระบุเบอร์ Fax</td>
                    <?php else : ?>
                        <td><?php echo $value->fax; ?></td>
                    <?php endif; ?>

                    <td><?php echo $value->email; ?></td>
                    <?php if ($value->total_bed == '') : ?>
                        <td>ไม่ได้ระบุจำนวนเตียง</td>
                    <?php elseif ($value->total_bed == 1) : ?>
                        <td>น้อยกว่า 100 เตียง</td>
                    <?php elseif ($value->total_bed == 2) : ?>
                        <td>101 - 300 เตียง</td>
                    <?php elseif ($value->total_bed == 3) : ?>
                        <td>301 - 500 เตียง</td>
                    <?php elseif ($value->total_bed == 4) : ?>
                        <td>มากกว่า 500 เตียง</td>
                    <?php endif; ?>

                    <?php if ($value->type_hospital == '') : ?>
                        <td>ไม่ได้ระบุประเภท</td>
                    <?php else : ?>
                        <td><?php echo $value->type_hospital; ?></td>
                    <?php endif; ?>
                    <!-- สังกัด -->
                    <td></td>
                    <?php for ($i = 0; $i <= 5; $i++) : ?>
                        <?php foreach ($programs as $program) : ?>
                            <td>
                                <?php
                                foreach ($list_register as $regis) {
                                    foreach ($regis as $reg) {
                                        if ($reg->member_id == $value->id) {
                                            if ($program->id == $reg->program_id) {
                                                if ($i == 0) {
                                                    if ($reg->sub_member_id != '' || $reg->sub_member_id != 0) {
                                                        echo $reg->sub_member_id;
                                                    } else {
                                                        echo "-";
                                                    }
                                                } elseif ($i == 1) {
                                                    echo $value->room;
                                                } elseif ($i == 2) {
                                                    echo $reg->bill_contact;
                                                } elseif ($i == 3) {
                                                    echo $reg->bill_title_th;
                                                } elseif ($i == 4) {
                                                    echo $reg->bill_company;
                                                } elseif ($i == 5) {
                                                    echo $reg->bill_address;
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>
                            </td>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>