<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800" id="title" name="title"><?php echo $heading_title; ?></h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <div class="text-center p-3 mb-2 bg-primary text-white" id="title2" name="title2">
                        <h2><?php echo $heading_title; ?></h2>
                    </div>

                    <form action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
                    <input type="text" name="title_1" value="EQAP" class="d-none">

                        <div class="container-left">
                            <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAP</h5>
                        </div>
                        <div class="container-left">
                            <h5 class="text-left">
                                <p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p>
                            </h5>
                            <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                            <div class="col">
                                <h6><label class="font-weight-bold">Trial : </label> 4-2563</h6>
                            </div>
                            <div class="font-weight-bold container-left">
                                <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                                <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick" value="<?php echo date('Y-m-d'); ?>" ></input>
                            </div>
                            <div class="container-left">
                                <p class="font-weight-bold" style="padding-top: 30px;">ความสมบูรณ์ของตัวอย่างทดสอบ * </p>
                            </div>
                            <input type="radio" name="received_status" id="test1" name="test1" class="received_check theone" checked="" value="1">
                            <label class="choose_edit" for="test1">อยู่ในสภาพสมบูรณ์</label>
                            <div class="container-left">
                                <input type="radio" name="received_status" id="test2" name="test2" class="received_check theone" value="2">
                                <label class="choose_edit" for="test2">อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้</label>
                            </div>
                            <div class="container-left">
                                <label for="received_status_other" class="font-weight-bold">เนื่องจาก</label>
                                <textarea class="form-control" id="received_status_other" name="received_status_other"></textarea>
                            </div>
                            <div class="container-left" style="padding-top: 30px;">
                                <p class="font-weight-bold">ผลการตรวจ</p>
                            </div>
                            eqap.php
                            <div class="container-left">3.รายงานผลการทดสอบ *หากสมาชิกไม่ทำการทดสอบตัวอย่างให้เลือกข้อความ "Not tested"</div>
                            <h5 class="font-weight-bold" style="margin-left: 10px;">ST-6311-1</h5>
                            <div class="row">
                                <div class="cols12 container-fluid">
                                    <table class="table text-center table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>ลำดับที่</th>
                                                <th>Parasite Name</th>
                                                <th><a class="btn btn-add-row btn-event">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                        </svg>
                                                    </a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="custom-select" name="sample[0][]">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="1">Amoeba trophozoite </option>
                                                        <option value="2">Ascaris lumbricoides egg </option>
                                                        <option value="3">Balantidium coli cyst </option>
                                                        <option value="4">Balantidium coli trophozoite </option>
                                                        <option value="5">Blastocystis hominis </option>
                                                        <option value="6">Capillaria philippinensis adult </option>
                                                        <option value="7">Capillaria philippinensis egg </option>
                                                        <option value="8">Capillaria philippinensis larva </option>
                                                        <option value="9">Chilomastix mesnili cyst </option>
                                                        <option value="10">Chilomastix mesnili trophozoite </option>
                                                        <option value="11">Cyclospora oocyst </option>
                                                        <option value="12">Diphyllobrothium latum egg </option>
                                                        <option value="13">Dipylidium caninum egg </option>
                                                        <option value="14">Endolimax nana cyst </option>
                                                        <option value="15">Entamoeba coli cyst </option>
                                                        <option value="16">Entamoeba histolytica cyst </option>
                                                        <option value="17">Enterobious vermicularis egg </option>
                                                        <option value="18">Fasciolopsis/Fasciola/Echinostoma egg </option>
                                                        <option value="19">Giardia lamblia cyst </option>
                                                        <option value="20">Giardia lamblia trophozoite </option>
                                                        <option value="21">Hookworm egg </option>
                                                        <option value="22">Hookworm filariform larva </option>
                                                        <option value="23">Hookworm rhabditiform larva </option>
                                                        <option value="24">Hymenolepis diminuta egg </option>
                                                        <option value="25">Hymenolepis nana egg </option>
                                                        <option value="26">Iodamoeba butschlii cyst </option>
                                                        <option value="27">Isospora belli oocyst </option>
                                                        <option value="28">Opisthorchis/MIF egg </option>
                                                        <option value="29">Paragonimus heterotremus egg </option>
                                                        <option value="30">Paragonimus westermani egg </option>
                                                        <option value="31">Plasmodium falciparum asexual form </option>
                                                        <option value="32">Plasmodium falciparum gametocyte </option>
                                                        <option value="33">Plasmodium malariae asexual form </option>
                                                        <option value="34">Plasmodium malariae gametocyte </option>
                                                        <option value="35">Plasmodium ovale asexual form </option>
                                                        <option value="36">Plasmodium ovale gametocyte </option>
                                                        <option value="37">Plasmodium vivax asexual form </option>
                                                        <option value="38">Plasmodium vivax gametocyte </option>
                                                        <option value="39">Sarcocystis hominis sporocyst/oocyst </option>
                                                        <option value="40">Schistosoma haematobium egg </option>
                                                        <option value="41">Schistosoma japonicum egg </option>
                                                        <option value="42">Schistosoma mansoni egg </option>
                                                        <option value="43">Schistosoma mekongi egg </option>
                                                        <option value="44">Strongyloides stercoralis female </option>
                                                        <option value="45">Strongyloides stercoralis filariform larva </option>
                                                        <option value="46">Strongyloides stercoralis male </option>
                                                        <option value="47">Strongyloides stercoralis rhabditiform larva </option>
                                                        <option value="48">Taenia solium/Taenia saginata egg </option>
                                                        <option value="49">Trichomonas hominis trophozoite </option>
                                                        <option value="50">Trichuris trichiura egg </option>
                                                        <option value="51">Not Found </option>
                                                        <option value="52">Not Tested</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a class="btn waves-effect waves-light btn-delete-row btn_event">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h5 class="font-weight-bold">BL-6311-2</h5>
                                    <table class="table text-center table-hover">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>ลำดับที่</th>
                                                <th>Parasite Name</th>
                                                <th><a class="btn btn-add-row btn-event">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                                        </svg>
                                                    </a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="custom-select" name="sample[1][]">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="1">Amoeba trophozoite </option>
                                                        <option value="2">Ascaris lumbricoides egg </option>
                                                        <option value="3">Balantidium coli cyst </option>
                                                        <option value="4">Balantidium coli trophozoite </option>
                                                        <option value="5">Blastocystis hominis </option>
                                                        <option value="6">Capillaria philippinensis adult </option>
                                                        <option value="7">Capillaria philippinensis egg </option>
                                                        <option value="8">Capillaria philippinensis larva </option>
                                                        <option value="9">Chilomastix mesnili cyst </option>
                                                        <option value="10">Chilomastix mesnili trophozoite </option>
                                                        <option value="11">Cyclospora oocyst </option>
                                                        <option value="12">Diphyllobrothium latum egg </option>
                                                        <option value="13">Dipylidium caninum egg </option>
                                                        <option value="14">Endolimax nana cyst </option>
                                                        <option value="15">Entamoeba coli cyst </option>
                                                        <option value="16">Entamoeba histolytica cyst </option>
                                                        <option value="17">Enterobious vermicularis egg </option>
                                                        <option value="18">Fasciolopsis/Fasciola/Echinostoma egg </option>
                                                        <option value="19">Giardia lamblia cyst </option>
                                                        <option value="20">Giardia lamblia trophozoite </option>
                                                        <option value="21">Hookworm egg </option>
                                                        <option value="22">Hookworm filariform larva </option>
                                                        <option value="23">Hookworm rhabditiform larva </option>
                                                        <option value="24">Hymenolepis diminuta egg </option>
                                                        <option value="25">Hymenolepis nana egg </option>
                                                        <option value="26">Iodamoeba butschlii cyst </option>
                                                        <option value="27">Isospora belli oocyst </option>
                                                        <option value="28">Opisthorchis/MIF egg </option>
                                                        <option value="29">Paragonimus heterotremus egg </option>
                                                        <option value="30">Paragonimus westermani egg </option>
                                                        <option value="31">Plasmodium falciparum asexual form </option>
                                                        <option value="32">Plasmodium falciparum gametocyte </option>
                                                        <option value="33">Plasmodium malariae asexual form </option>
                                                        <option value="34">Plasmodium malariae gametocyte </option>
                                                        <option value="35">Plasmodium ovale asexual form </option>
                                                        <option value="36">Plasmodium ovale gametocyte </option>
                                                        <option value="37">Plasmodium vivax asexual form </option>
                                                        <option value="38">Plasmodium vivax gametocyte </option>
                                                        <option value="39">Sarcocystis hominis sporocyst/oocyst </option>
                                                        <option value="40">Schistosoma haematobium egg </option>
                                                        <option value="41">Schistosoma japonicum egg </option>
                                                        <option value="42">Schistosoma mansoni egg </option>
                                                        <option value="43">Schistosoma mekongi egg </option>
                                                        <option value="44">Strongyloides stercoralis female </option>
                                                        <option value="45">Strongyloides stercoralis filariform larva </option>
                                                        <option value="46">Strongyloides stercoralis male </option>
                                                        <option value="47">Strongyloides stercoralis rhabditiform larva </option>
                                                        <option value="48">Taenia solium/Taenia saginata egg </option>
                                                        <option value="49">Trichomonas hominis trophozoite </option>
                                                        <option value="50">Trichuris trichiura egg </option>
                                                        <option value="51">Not Found </option>
                                                        <option value="52">Not Tested</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a class="btn btn-delete-row btn_event">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="container-left">หากท่านประสงค์ต้องการแนบภาพถ่ายการย้อมสี อัพโหลดไฟล์ภาพ</div>
                                    <div class="row justify-content-between">
                                        <div class="input-group" style="padding-top: 10px;">
                                            <div class="col px-md-5">
                                                <h6 class="font-weight-bold">ST-6311-1</h6>
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="file_0">Upload one file</label>
                                                    <input type="file" class="custom-file-input" id="file_0" name="file_0">
                                                </div>
                                            </div>
                                            <div class="col px-md-5">
                                                <h6 class="font-weight-bold">BL-6311-2</h6>
                                                <div class="custom-file">
                                                    <label class="custom-file-label" for="file_1">Upload one file</label>
                                                    <input type="file" class="custom-file-input" id="file_1" name="file_1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-weight-bold" style="padding-top: 30px; padding-bottom: 10px;"> ข้อมูลผู้ส่ง </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="name_lname">ชื่อ</label>
                                            <input type="text" class="form-control" id="name_lname" name="name_lname" placeholder="ชื่อ">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="tel">หมายเลขโทรศัพท์</label>
                                            <input type="text" class="form-control" id="tel" name="tel" placeholder="หมายเลขโทรศัพท์">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="position">ตำแหน่ง</label>
                                            <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง">
                                        </div>
                                    </div>
                                    <div class="font-weight-bold" style="padding-top: 30px;">
                                        <label for="comment">ข้อคิดเห็นหรือเสนอแนะเพื่อการพัฒนาปรับปรุง </label>
                                        <textarea class="form-control" id="comment" name="comment" placeholder="ความคิดเห็นเพิ่มเติม"></textarea>
                                    </div>
                                    <div class="font-weight-bold container-left" style="padding-top: 30px;">
                                        <label for="report_date">วันที่ทำการทดสอบ </label>
                                        <input type="date" class="form-control" style="width: 180px;" id="report_date" name="report_date" value="<?php echo date('Y-m-d'); ?>" ></input>
                                    </div>
                                    <div class="form-gruop text-center" style="margin-top: 30px;">
                                        <input class="btn btn-primary" type="button" onclick="window.print()" name="printPageButton" id="printPageButton" name="printPageButton" value="พิมพ์" style="width: 60px;"></input>
                                        <button class="btn btn-primary" name="submit" type="submit" value="preview" id="btnpreview">พรีวิว</button>
                                        <button class="btn btn-primary" name="submit" type="submit" value="accept" id="btnsubmit">ยืนยันการส่งผลการตรวจ</button>
                                    </div>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media print {

            #printPageButton,
            #btnpreview,
            #btnsubmit,
            #accordionSidebar,
            #title,
            #submit {
                display: none;
            }
    }
</style>
<script>
    $(document).on("click", ".btn-add-row", function() {
        var clone = $(this).parents('table').find('tbody tr').first().clone();
        // var clone = $(this).next().find('tbody tr').first().clone();
        $(this).parents('table').find('tbody').append(clone);
        // $('.preview').find('table').find('tbody').append(clone);
        clone.removeClass('hidden');
        clone.find(".select-other").removeAttr('disabled');
        clone.find("input").removeAttr('disabled');
        clone.find("input").val('');

        $('.table').each(function(index, el) {
            number_plus('.number_topics_' + index);
        });
        $('.preview').html('');
        $("#htmlpreview").clone().appendTo(".preview");
    });

    $(document).on("click", ".btn-delete-row", function() {
        var clone = $(this).next().find('tbody tr').first().clone();
        $(this).next().find('tbody').append(clone);

        if (confirm('Do you want to delete') == true) {
            $(this).parents('tr').remove();
        } else {
            e.preventDefault();
        }
        $('.preview').html('');
        $("#htmlpreview").clone().appendTo(".preview");
    });
    $('#file_0').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_0')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
    $('#file_1').on("change", function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#file_1')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file);

    });
</script>