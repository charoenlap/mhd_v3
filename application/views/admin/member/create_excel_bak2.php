<?php 
    $filName = "file_export/export.csv";
    $objWrite = fopen("file_export/export.csv", "w");
    
    // fwrite($objWrite, "<table border='1'>");
    // fwrite($objWrite, "<thead>");
    // fwrite($objWrite, "<tr>");
    // fwrite($objWrite, "<th colspan='5'>ผู้ทำการสมัครสมาชิก</th>");
    // fwrite($objWrite, "<th colspan='12'>ที่อยู่</th>");
    // fwrite($objWrite, "<th colspan=".count($programs).">หมายเลขสมาชิกสมาชิก</th>");
    // fwrite($objWrite, "<th colspan=".count($programs).">ชื่อห้องปฏิบัติการ</th>");
    // fwrite($objWrite, "<th colspan=".count($programs).">ผู้รับผิดชอบ</th>");
    // fwrite($objWrite, "<th colspan=".count($programs).">ประกาศนีย์บัตร</th>");
    // fwrite($objWrite, "<th colspan=".count($programs).">ผู้ชำระเงิน</th>");
    // fwrite($objWrite, "<th colspan=".count($programs).">ที่อยู่จัดส่งใบเสร็จ</th>");
    // fwrite($objWrite, "</tr>");
    // fwrite($objWrite, "<tr>");
    // fwrite($objWrite, "<th>มหายเลขสมาชิกเดิม</th>");
    // fwrite($objWrite, "<th>วันที่สมัครรับ เอกสาร</th>");
    // fwrite($objWrite, "<th>ชื่อโรงพยาบาล</th>");
    // fwrite($objWrite, "<th>ชื่อ</th>");
    // fwrite($objWrite, "<th>นามสกุล</th>");
    // fwrite($objWrite, "<th>เลขที่</th>");
    // fwrite($objWrite, "<th>หมู่</th>");
    // fwrite($objWrite, "<th>ถนน</th>");
    // fwrite($objWrite, "<th>ตำบล</th>");
    // fwrite($objWrite, "<th>อำเภอ</th>");
    // fwrite($objWrite, "<th>จังหวัด</th>");
    // fwrite($objWrite, "<th>รหัสไปรษณีย์</th>");
    // fwrite($objWrite, "<th>ตึก</th>");
    // fwrite($objWrite, "<th>ชั้น</th>");
    // fwrite($objWrite, "<th>โทรศัพท์</th>");
    // fwrite($objWrite, "<th>FAX</th>");
    // fwrite($objWrite, "<th>E-mail</th>");
    // fwrite($objWrite, "<th>จำนวนเตียง</th>");
    // fwrite($objWrite, "<th>ประเภทโรงพยาบาล</th>");
    // fwrite($objWrite, "<th>สังกัด</th>");
    // for ($i = 0; $i <= 5; $i++) { 
    //     foreach ($programs as $val) :
    //         fwrite($objWrite, "<th>");
    //         fwrite($objWrite, $val->name);
    //         fwrite($objWrite, "</th>");
    //     endforeach;
    // } 
    // fwrite($objWrite, "</tr>");
    // fwrite($objWrite, "</thead>");

    // fwrite($objWrite, "<tbody>");
    // foreach ($list_value as $value) : 
    // fwrite($objWrite, "<tr>");
    //     fwrite($objWrite, "<td>".$value->member_no."</td>");
    //     fwrite($objWrite, ($value->date_added == '' || $value->date_added == 0)?"<td>ยังไม่ได้รับการยืนยันตัวตน</td>":"<td>".$value->date_added."</td>");
    //     fwrite($objWrite, "<td>".$value->hospital."</td>");
    //     fwrite($objWrite, "<td>".$value->firstname."</td>");
    //     fwrite($objWrite, "<td>".$value->lastname."</td>");
    //     fwrite($objWrite, "<td>".$value->address_1."</td>");
    //     fwrite($objWrite, "<td></td>");
    //     fwrite($objWrite, "<td></td>");
    //     fwrite($objWrite, "<td>".$value->district."</td>");
    //     fwrite($objWrite, "<td>".$value->country."</td>");
    //     fwrite($objWrite, "<td>".$value->province."</td>");
    //     fwrite($objWrite, "<td>".$value->post_code."</td>");
    //     fwrite($objWrite, "<td></td>");
    //     fwrite($objWrite, "<td></td>");
    //     fwrite($objWrite, "<td>".$value->telephone."</td>");
    //     fwrite($objWrite, ($value->fax == '')?"<td>ไม่ได้ระบุเบอร์ Fax</td>":"<td>".$value->fax."</td>");
    //     fwrite($objWrite, "<td>".$value->email."</td>");
    //     if ($value->total_bed == '') :
    //         fwrite($objWrite, "<td>ไม่ได้ระบุจำนวนเตียง</td>");
    //     elseif ($value->total_bed == 1) :
    //         fwrite($objWrite, "<td>น้อยกว่า 100 เตียง</td>");
    //     elseif ($value->total_bed == 2) :
    //         fwrite($objWrite, "<td>101 - 300 เตียง</td>");
    //     elseif ($value->total_bed == 3) :
    //         fwrite($objWrite, "<td>301 - 500 เตียง</td>");
    //     elseif ($value->total_bed == 4) :
    //         fwrite($objWrite, "<td>มากกว่า 500 เตียง</td>");
    //     endif;
    //     fwrite($objWrite, ($value->type_hospital == '')?"<td>ไม่ได้ระบุประเภท</td>":"<td>".$value->type_hospital."</td>");
    //     fwrite($objWrite, "<td></td>");
    //     for ($i = 0; $i <= 5; $i++) : 
    //         foreach ($programs as $program) : 
    //             fwrite($objWrite, "<td>");
    //             foreach ($list_register as $regis) {
    //                 foreach ($regis as $reg) {
    //                     if ($reg->member_id == $value->id) {
    //                         if ($program->id == $reg->program_id) {
    //                             if ($i == 0) {
    //                                 ($reg->sub_member_id != '' || $reg->sub_member_id != 0)?fwrite($objWrite,$reg->sub_member_id):fwrite($objWrite,"-");
    //                             } elseif ($i == 1) {
    //                                 fwrite($objWrite,$value->room);
    //                             } elseif ($i == 2) {
    //                                 fwrite($objWrite,$reg->bill_contact);
    //                             } elseif ($i == 3) {
    //                                 fwrite($objWrite,$reg->bill_title_th);
    //                             } elseif ($i == 4) {
    //                                 fwrite($objWrite,$reg->bill_company);
    //                             } elseif ($i == 5) {
    //                                 fwrite($objWrite,$reg->bill_address);
    //                             }
    //                         }
    //                     }
    //                 }
    //             }
    //             fwrite($objWrite, "</td>");
    //         endforeach;
    //     endfor;
    // fwrite($objWrite, "</tr>");
    // endforeach;
    // fwrite($objWrite, "</tbody>");
    // fwrite($objWrite, "</table>");
    // fclose($objWrite);
?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
    <?php
        header("Content-Type: application/vnd.ms-excel"); 
        header('Content-Disposition: attachment; filename="รายการผู้สมัครหลัก_'.date("F").'_'. $year_filter.'.xls"'); 
        header("Content-Type: application/force-download"); 
        header("Expires: 0");
        readfile("file_export/export.csv");
    ?>
</body>
</html>