<?php  
    $filName = "file_export/export.csv";
    $objWrite = fopen("file_export/export.csv", "w");

    $dataHead = array(array('มหายเลขสมาชิกเดิม','วันที่สมัครรับ เอกสาร','ชื่อโรงพยาบาล','ชื่อ','นามสกุล','เลขที่','หมู่','ถนน','ตำบล','อำเภอ','จังหวัด','รหัสไปรษณีย์','ตึก','ชั้น','โทรศัพท์','FAX','E-mail','จำนวนเตียง','ประเภทโรงพยาบาล','สังกัด'));
    for ($i = 0; $i <= 5; $i++) {
        foreach($programs as $val){
            array_push($dataHead[0],$val->name);
        }
    }
    $dataBody = array();
    foreach($list_value as $key => $value){
        $dataBody[] = array(
            $value->member_no,
            ($value->date_added == '' || $value->date_added == 0?"ยังไม่ได้รับการยืนยันตัวตน":$value->date_added),
            $value->hospital,
            $value->firstname,
            $value->lastname,
            $value->address_1,
            '',
            '',
            $value->district,
            $value->country,
            $value->province,
            $value->post_code,
            '',
            '',
            $value->telephone,
            ($value->fax == ''?"ไม่ได้ระบุเบอร์":$value->fax),
            $value->email,
            ($value->total_bed == 0?"ไม่ได้ระบุจำนวนเตียง":($value->total_bed == 1?"น้อยกว่า 100 เตียง":($value->total_bed == 2?"101 - 300 เตียง":($value->total_bed == 3?"301 - 500 เตียง":($value->total_bed == 4?"มากกว่า 500 เตียง":"ไม่ได้ระบุจำนวนเตียง"))))),
            ($value->type_hospital == ''?"ไม่ได้ระบุประเภท":$value->type_hospital),
            '',
            $value->sub_member_id_eqac,
            $value->sub_member_id_eqah,
            $value->sub_member_id_eqat,
            $value->sub_member_id_eqap,
            $value->sub_member_id_beqam,
            $value->sub_member_id_heqam,
            $value->sub_member_id_uceqam,
            $value->sub_member_id_syphilis,
            $value->sub_member_id_hbv,
            $value->sub_member_id_gram,
            $value->sub_member_id_afb,
            $value->sub_member_id_iden,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->room,
            $value->eqac, 
            $value->eqah,
            $value->eqat,
            $value->eqap, 
            $value->beqam, 
            $value->heqam, 
            $value->uceqam, 
            $value->syphilis, 
            $value->hbv, 
            $value->gram, 
            $value->afb, 
            $value->iden, 
            $value->eqac_2, 
            $value->eqah_2,
            $value->eqat_2,
            $value->eqap_2, 
            $value->beqam_2, 
            $value->heqam_2, 
            $value->uceqam_2, 
            $value->syphilis_2, 
            $value->hbv_2, 
            $value->gram_2, 
            $value->afb_2, 
            $value->iden_2, 
            $value->eqac_3, 
            $value->eqah_3,
            $value->eqat_3,
            $value->eqap_3, 
            $value->beqam_3, 
            $value->heqam_3, 
            $value->uceqam_3, 
            $value->syphilis_3, 
            $value->hbv_3, 
            $value->gram_3, 
            $value->afb_3, 
            $value->iden_3, 
            $value->eqac_4, 
            $value->eqah_4,
            $value->eqat_4,
            $value->eqap_4, 
            $value->beqam_4, 
            $value->heqam_4, 
            $value->uceqam_4, 
            $value->syphilis_4, 
            $value->hbv_4, 
            $value->gram_4, 
            $value->afb_4, 
            $value->iden_4,
        );
        // for ($i = 0; $i <= 5; $i++) {
        //     foreach($programs as $program){
        //         foreach ($list_register as $regis) {
        //             foreach ($regis as $reg) {
        //                 if ($reg->member_id == $value->id) {
        //                     if ($program->id == $reg->program_id) {
        //                         if($i == 0){
        //                             array_push($dataBody[$key],$reg->sub_member_id);
        //                         }elseif($i == 1){
        //                             array_push($dataBody[$key],$value->room);
        //                         }elseif($i == 2){
        //                             array_push($dataBody[$key],$reg->bill_contact);
        //                         }elseif($i == 3){
        //                             array_push($dataBody[$key],$reg->bill_title_th);
        //                         }elseif($i == 4){
        //                             array_push($dataBody[$key],$reg->bill_company);   
        //                         }elseif($i == 5){
        //                             array_push($dataBody[$key],$reg->bill_address);                         
        //                         }
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // }
    }
    // echo "<pre>";
    // print_r($dataBody);
    // echo "</pre>";
    fputcsv($objWrite,array('ผู้ทำการสมัครสมาชิก','','','','','ที่อยู่','','','','','','','','','','','','','','','หมายเลขสมาชิกสมาชิก','','','','','','','','','','','','ชื่อห้องปฏิบัติการ','','','','','','','','','','','','ผู้รับผิดชอบ','','','','','','','','','','','','ประกาศนีย์บัตร','','','','','','','','','','','','ผู้ชำระเงิน','','','','','','','','','','','','ที่อยู่จัดส่งใบเสร็จ','','','','','','','','','','','',));
    foreach($dataHead as $fields){
        fputcsv($objWrite,$fields);
    }
    foreach($dataBody as $fields){
        fputcsv($objWrite,$fields);
    }
    fclose($objWrite);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="รายการผู้สมัครหลัก_'.date("F").'_'. $year_filter.'.csv"');
    readfile("file_export/export.csv");
?>
