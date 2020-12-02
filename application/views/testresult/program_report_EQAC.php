<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800" id="title" name="title"><?php echo $heading_title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <div class="text-center p-3 mb-2 bg-primary text-white" id="title2" name="title2">
                    <form class="user" action="<?php echo $action; ?>" method="POST">
                    <input type="text" name="title_1" value="EQAC" class="d-none">
                        <h2><?php echo $heading_title; ?></h2>
                    </div>
                        <div class="container-left">
                            <h5 class="text-left font-weight-bold" style="padding-top: 30px;">Scheme : EQAC</h5>
                        </div>
                        <div class="container-left">
                            <h5 class="text-left">
                                <p class="font-weight-bold">โรงพยาบาล ศูนย์วิทยาศาสตร์การแพทย์อาเซียน (Test Account) กลุ่มงานพยาธิวิทยา</p>
                            </h5>
                            <p class="font-weight-bold"> บันทึกการรับตัวอย่าง</p>
                            <div class="col">
                                <h6><label class="font-weight-bold">Trial : </label> 280</h6>
                            </div>
                        </div>
                        <div class="font-weight-bold container-left">
                            <label for="datepick">วันที่ได้รับตัวอย่างทดสอบ *</label>
                            <input type="date" class="form-control" style="width: 180px;" id="datepick" name="datepick" value="<?php echo date('Y-m-d'); ?>" ></input>
                        </div>
                        <div class="container-left">
                            <p class="font-weight-bold" style="padding-top: 30px;">ความสมบูรณ์ของตัวอย่างทดสอบ * </p>
                        </div>
                        <input type="radio" name="received_status" id="test1" class="received_check theone" checked value="1">
                        <label class="choose_edit" for="test1">อยู่ในสภาพสมบูรณ์</label>
                        <div class="container-left">
                            <input type="radio" name="received_status" id="test2" class="received_check theone" value="2">
                            <label class="choose_edit" for="test2">อยู่ในสภาพไม่สมบูรณ์ และไม่สามารถนำมาทดสอบได้</label>
                        </div>
                        <div class="container-left">
                            <label for="received_status_other" class="font-weight-bold">เนื่องจาก</label>
                            <textarea class="form-control" id="received_status_other" name="received_status_other"></textarea>
                        </div>

                        <div class="container-left" style="padding-top: 30px;">
                            <p class="font-weight-bold">ผลการตรวจ</p>
                        </div>
                        eqac.php
                        <div class="row">
                            <div class="col s12">
                                <table class="table text-center table-hover">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Testing</th>
                                            <th scope="col">Principle/Method</th>
                                            <th scope="col">Instrument</th>
                                            <th scope="col">Reagent</th>
                                            <th scope="col">Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Albumin (g/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[1]" other_id="other_1">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="2" other="" selected="">Bromocresol green</option>
                                                    <option value="3" other="">Bromocresol purple</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[1]" other_id="other_1">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[1]" other_id="other_1">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[1]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>ALP (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[2]" other_id="other_1">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="4" other="">Beckman</option>
                                                    <option value="43" other="" selected="">PNP AMP buff; IFCC</option>
                                                    <option value="44" other="">PNP.AMP buff; AACC</option>
                                                    <option value="45" other="">PNP.DEA buff; DGKC</option>
                                                    <option value="46" other="">Reflotron</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[2]" other_id="other_2">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[2]" other_id="other_2">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>
                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[2]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>ALT (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[3]" other_id="other_2">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="4" other="">Beckman</option>
                                                    <option value="11" other="">Dade Behring</option>
                                                    <option value="35" other="">Kinetic - pyridoxal</option>
                                                    <option value="34" other="" selected="">Kinetic 37C/ Kinetic - without pyridoxal </option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[3]" other_id="other_3">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[3]" other_id="other_3">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[3]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Amylase, Total (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[4]" other_id="other_3">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="8" other="">CNPG3</option>
                                                    <option value="23" other="">G7PNP</option>
                                                    <option value="41" other="">Others</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[4]" other_id="other_4">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[4]" other_id="other_4">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[4]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>AST (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[5]" other_id="other_4">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="4" other="">Beckman</option>
                                                    <option value="11" other="">Dade Behring</option>
                                                    <option value="35" other="">Kinetic - pyridoxal</option>
                                                    <option value="34" other="" selected="">Kinetic 37C/ Kinetic - without pyridoxal </option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[5]" other_id="other_5">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[5]" other_id="other_5">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[5]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>BUN (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[6]" other_id="other_5">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="18" other="">Enzyme</option>
                                                    <option value="22" other="" selected="">Enzyme Kinetic</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[6]" other_id="other_6">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[6]" other_id="other_6">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[6]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Bilirubin, Total (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[7]" other_id="other_6">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="12" other="" selected="">DCA/DPD</option>
                                                    <option value="14" other="">Diazonium</option>
                                                    <option value="33" other="">Jendrassik - Grof </option>
                                                    <option value="36" other="">Malloy - Evelyn </option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="53" other="">Vanadate</option>
                                                    <option value="48" other="">Vitros</option>
                                                    <option value="52" other="">Water &amp; Gerarde Method</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[7]" other_id="other_7">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[7]" other_id="other_7">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[7]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Calcium (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[8]" other_id="other_7">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="10" other="">CPC/ Arsenazo</option>
                                                    <option value="30" other="">ISE</option>
                                                    <option value="54" other="">NM-BAPTA</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[8]" other_id="other_8">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[8]" other_id="other_8">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[8]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Chloride (mmol/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[9]" other_id="other_8">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="16" other="">Direct ISE</option>
                                                    <option value="29" other="">Indirect ISE</option>
                                                    <option value="49" other="">Vitros; ISE</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[9]" other_id="other_9">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[9]" other_id="other_9">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[9]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Cholesterol (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[10]" other_id="other_9">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="4" other="">Beckman</option>
                                                    <option value="11" other="">Dade Behring</option>
                                                    <option value="19" other="" selected="">Enzyme Colorimetric</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[10]" other_id="other_100">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[10]" other_id="other_100">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="" selected="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[10]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>CK, Total (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[11]" other_id="other_100">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="7" other="">CK-NAC/IFCC</option>
                                                    <option value="9" other="">Colorimetric</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[11]" other_id="other_111">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[11]" other_id="other_111">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[12]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Creatinine (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[12]" other_id="other_111">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="18" other="" selected="">Enzyme</option>
                                                    <option value="31" other="">Jaffe EP</option>
                                                    <option value="32" other="">Jaffe Kinetic</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[12]" other_id="other_122">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[12]" other_id="other_122">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="" selected="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[12]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>GGT (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[13]" other_id="other_122">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="11" other="">Dade Behring</option>
                                                    <option value="19" other="">Enzyme Colorimetric</option>
                                                    <option value="22" other="">Enzyme Kinetic</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[13]" other_id="other_133">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[13]" other_id="other_133">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[13]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td>Glucose (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[14]" other_id="other_133">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="24" other="">Glucose Dehydrogenase</option>
                                                    <option value="26" other="" selected="">Glucose Oxidase</option>
                                                    <option value="27" other="">Hexokinase</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[14]" other_id="other_144">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[14]" other_id="other_144">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="" selected="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[14]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td>HDL-cholesterol (mg/dL) </td>
                                            <td>
                                                <select class="custom-select" name="principle[15]" other_id="other_144">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="15" other="" selected="">Direct Determination</option>
                                                    <option value="50" other="">Direct with PVS/PEGMS</option>
                                                    <option value="51" other="">Imm.Inhibition</option>
                                                    <option value="41" other="">Others</option>
                                                    <option value="42" other="">Phospho. Precip./ Polyanion</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[15]" other_id="other_155">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[15]" other_id="other_155">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="" selected="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[15]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td>LDH (U/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[16]" other_id="other_155">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="4" other="">Beckman</option>
                                                    <option value="13" other="">DGKC</option>
                                                    <option value="28" other="">IFCC</option>
                                                    <option value="47" other="">SSCC</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>

                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[16]" other_id="other_166">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                                </td> <td>
                                                    <select class="custom-select" name="method[16]" other_id="other_166">
                                                        <option value="" selected="">Choose</option>
                                                        <option value="501" other="">Abbott laboratories</option>
                                                        <option value="502" other="">Beckman Coulter</option>
                                                        <option value="503" other="">BioSystems</option>
                                                        <option value="543" other="">Biotecnica Instruments</option>
                                                        <option value="504" other="">Biozen</option>
                                                        <option value="546" other="">Bt GEN</option>
                                                        <option value="505" other="">Caretium </option>
                                                        <option value="506" other="">Centronic</option>
                                                        <option value="507" other="">Diamond</option>
                                                        <option value="508" other="">DiaSys</option>
                                                        <option value="509" other="">Diazyme</option>
                                                        <option value="510" other="">Dirui</option>
                                                        <option value="511" other="">Electa</option>
                                                        <option value="512" other="">Elitech</option>
                                                        <option value="513" other="">Erba Lachema</option>
                                                        <option value="514" other="">Fuji</option>
                                                        <option value="515" other="">Furuno</option>
                                                        <option value="544" other="">Genrui Biotech</option>
                                                        <option value="516" other="">Horiba</option>
                                                        <option value="518" other="">I-med</option>
                                                        <option value="517" other="">Iberlab</option>
                                                        <option value="519" other="">Infocus firming</option>
                                                        <option value="520" other="">Instumentation laboratory</option>
                                                        <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                        <option value="545" other="">Medica</option>
                                                        <option value="522" other="">Meditop</option>
                                                        <option value="523" other="">Mindray</option>
                                                        <option value="524" other="">Olympus</option>
                                                        <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                        <option value="526" other="">PCL</option>
                                                        <option value="547" other="">Q4-Lyte</option>
                                                        <option value="548" other="">Q4-LyteEx</option>
                                                        <option value="550" other="">QuantILab</option>
                                                        <option value="527" other="">Randox</option>
                                                        <option value="549" other="">Rayto</option>
                                                        <option value="528" other="">Roche Diagnotics</option>
                                                        <option value="529" other="">SFRI</option>
                                                        <option value="530" other="">Shanghai Xunda</option>
                                                        <option value="531" other="">Siemens</option>
                                                        <option value="532" other="">Slidedrychem</option>
                                                        <option value="533" other="">Spinreact</option>
                                                        <option value="534" other="">Stanbio</option>
                                                        <option value="535" other="">Sysmex</option>
                                                        <option value="536" other="">Techno Medica</option>
                                                        <option value="537" other="">Tecom</option>
                                                        <option value="538" other="">Thermoscientific</option>
                                                        <option value="539" other="">Toyobo</option>
                                                        <option value="540" other="">URIT</option>
                                                        <option value="541" other="">Wako</option>
                                                        <option value="542" other="">YD diagnostic</option>
                                                    </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[16]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td>LDL-cholesterol (mg/dL) </td>
                                            <td>
                                                <select class="custom-select" name="principle[17]" other_id="other_166">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="15" other="">Direct Determination</option>
                                                    <option value="50" other="">Direct with PVS/PEGMS</option>
                                                    <option value="41" other="">Others</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[17]" other_id="other_177">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[17]" other_id="other_177">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[17]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td>Magnesium (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[18]" other_id="other_177">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="1" other="">Arsenazo/ Chlorophosphonazo</option>
                                                    <option value="37" other="">Margon/ Xylidyl blue</option>
                                                    <option value="38" other="">Methylthymol blue</option>
                                                    <option value="41" other="">Others</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[18]" other_id="other_188">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[18]" other_id="other_188">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[18]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td>Phosphorus, Inorganic (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[19]" other_id="other_188">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="39" other="">Molybdenum EP</option>
                                                    <option value="40" other="">Molybdenum UV</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[19]" other_id="other_199">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[19]" other_id="other_199">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[19]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td>Potassium (mmol/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[20]" other_id="other_199">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="16" other="" selected="">Direct ISE</option>
                                                    <option value="29" other="">Indirect ISE</option>
                                                    <option value="49" other="">Vitros; ISE</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[20]" other_id="other_200">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[20]" other_id="other_200">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[20]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td>Total Protein (g/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[21]" other_id="other_200">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="5" other="">Biuret - Blank</option>
                                                    <option value="6" other="" selected="">Biuret - Unblank</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[21]" other_id="other_211">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[21]" other_id="other_211">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[21]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td>Sodium (mmol/L)</td>
                                            <td>
                                                <select class="custom-select" name="principle[22]" other_id="other_211">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="16" other="" selected="">Direct ISE</option>
                                                    <option value="29" other="">Indirect ISE</option>
                                                    <option value="49" other="">Vitros; ISE</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[22]" other_id="other_222">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[22]" other_id="other_222">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[22]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td>Triglyceride (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[23]" other_id="other_222">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="11" other="">Dade Behring</option>
                                                    <option value="17" other="" selected="">Enz Color Total TG</option>
                                                    <option value="25" other="">Glycerol Blank</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[23]" other_id="other_233">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[23]" other_id="other_233">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[23]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td>Uric acid (mg/dL)</td>
                                            <td>
                                                <select class="custom-select" name="principle[24]" other_id="other_233">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="11" other="">Dade Behring</option>
                                                    <option value="20" other="" selected="">Enzyme EP Blank</option>
                                                    <option value="21" other="">Enzyme EP Unblank</option>
                                                    <option value="46" other="">Reflotron</option>
                                                    <option value="48" other="">Vitros</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="instrument[24]" other_id="other_244">
                                                    <option value="" selected="">Choose</option>
                                                    <option value="101" other="">Abbott Architect c Systems</option>
                                                    <option value="102" other="">Audicom AC9000 Series electrolyte analyzer</option>
                                                    <option value="103" other="">Beckman Coulter AU400/480/680/5800</option>
                                                    <option value="104" other="">Beckman Coulter DxC600/ DxC800</option>
                                                    <option value="105" other="">Beckman Coulter DxC700 AU</option>
                                                    <option value="106" other="">Biosystems A15</option>
                                                    <option value="160" other="">Biosystems BA200</option>
                                                    <option value="107" other="">Biosystems BA400</option>
                                                    <option value="157" other="">Biotecnica BT Series</option>
                                                    <option value="108" other="">Caretium XI-921</option>
                                                    <option value="110" other="">Diasys BioMajesty JCA-BM6010/C</option>
                                                    <option value="163" other="">Diasys Respons 920</option>
                                                    <option value="111" other="">Dirui CS Series</option>
                                                    <option value="113" other="">Electa4 analyzer</option>
                                                    <option value="114" other="">Erba XL Series</option>
                                                    <option value="115" other="">Fuji Dri-Chem NX500i</option>
                                                    <option value="156" other="">Furuno CA-800</option>
                                                    <option value="116" other="">GASTAT-1820</option>
                                                    <option value="159" other="">GE300 electrolyte analyzer</option>
                                                    <option value="117" other="">Hitachi 911</option>
                                                    <option value="118" other="">Horiba Pentra 400</option>
                                                    <option value="162" other="">HumaStar 200</option>
                                                    <option value="120" other="">ILab 600/650/Taurus</option>
                                                    <option value="121" other="">In4lyte</option>
                                                    <option value="122" other="">Konelab 20/30/60 / Thermo Indiko</option>
                                                    <option value="123" other="">Mindray BC 2000/3000 series</option>
                                                    <option value="124" other="" selected="">Mindray BS Series</option>
                                                    <option value="125" other="">Nova 4 electrolyte analyzer</option>
                                                    <option value="126" other="">Ortho Vitros 250/350</option>
                                                    <option value="127" other="">Ortho Vitros 4600/5600</option>
                                                    <option value="128" other="">PKL PPC 125</option>
                                                    <option value="129" other="">Q4-Lyte</option>
                                                    <option value="155" other="">Q4-LyteEx </option>
                                                    <option value="130" other="">Randox RX series</option>
                                                    <option value="164" other="">Rayto Chemray 120</option>
                                                    <option value="131" other="">Reflotron</option>
                                                    <option value="132" other="">Roche Cobas c111</option>
                                                    <option value="133" other="">Roche Cobas c311</option>
                                                    <option value="134" other="">Roche Cobas c501/502/503</option>
                                                    <option value="161" other="">Roche Cobas c701/702</option>
                                                    <option value="135" other="">Roche Cobas Integra 400 Plus</option>
                                                    <option value="109" other="">Roche Cobas Mira S</option>
                                                    <option value="136" other="">Rx Modena</option>
                                                    <option value="137" other="">Rx-lyte v.4</option>
                                                    <option value="138" other="">SFRI ISE electrolyte series</option>
                                                    <option value="139" other="">Siemens Advia 1800</option>
                                                    <option value="167" other="">Siemens Atellica Solution</option>
                                                    <option value="140" other="">Siemens Rapidlab 348Ex</option>
                                                    <option value="141" other="">Siemens/Dade Dimension EXL</option>
                                                    <option value="142" other="">Siemens/Dade Dimension RxL /Max/Xpand</option>
                                                    <option value="143" other="">Sinnowa BS-3000</option>
                                                    <option value="144" other="">Sinnowa DS301</option>
                                                    <option value="145" other="">Sysmex BX-3010</option>
                                                    <option value="146" other="">Sysmex BX-4000</option>
                                                    <option value="148" other="">Tecom TC220</option>
                                                    <option value="149" other="">Thermo Fisher Konelab Delta</option>
                                                    <option value="150" other="">Tokyo Boeki/Biolis/ Prestige 24i/TMS 1024</option>
                                                    <option value="158" other="">URIT 8280</option>
                                                    <option value="151" other="">URIT-8031</option>
                                                    <option value="166" other="">URIT-910 Plus</option>
                                                    <option value="152" other="">Vitalab Scientific Flexor E</option>
                                                    <option value="153" other="">XD 687 Electrolyte Analyzer</option>
                                                    <option value="154" other="">XD 697 Electrolyte Analyzer</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="method[24]" other_id="o                                      <option value="" selected="">Choose</option>
                                                                    <option value=" 501" other="">Abbott laboratories</option>
                                                    <option value="502" other="">Beckman Coulter</option>
                                                    <option value="503" other="">BioSystems</option>
                                                    <option value="543" other="">Biotecnica Instruments</option>
                                                    <option value="504" other="">Biozen</option>
                                                    <option value="546" other="">Bt GEN</option>
                                                    <option value="505" other="">Caretium </option>
                                                    <option value="506" other="">Centronic</option>
                                                    <option value="507" other="">Diamond</option>
                                                    <option value="508" other="">DiaSys</option>
                                                    <option value="509" other="">Diazyme</option>
                                                    <option value="510" other="">Dirui</option>
                                                    <option value="511" other="">Electa</option>
                                                    <option value="512" other="">Elitech</option>
                                                    <option value="513" other="">Erba Lachema</option>
                                                    <option value="514" other="">Fuji</option>
                                                    <option value="515" other="">Furuno</option>
                                                    <option value="544" other="">Genrui Biotech</option>
                                                    <option value="516" other="">Horiba</option>
                                                    <option value="518" other="">I-med</option>
                                                    <option value="517" other="">Iberlab</option>
                                                    <option value="519" other="">Infocus firming</option>
                                                    <option value="520" other="">Instumentation laboratory</option>
                                                    <option value="521" other="">Jiangsu Audicom&nbsp;</option>
                                                    <option value="545" other="">Medica</option>
                                                    <option value="522" other="">Meditop</option>
                                                    <option value="523" other="" selected="">Mindray</option>
                                                    <option value="524" other="">Olympus</option>
                                                    <option value="525" other="">Ortho-Clinical Diagnostics</option>
                                                    <option value="526" other="">PCL</option>
                                                    <option value="547" other="">Q4-Lyte</option>
                                                    <option value="548" other="">Q4-LyteEx</option>
                                                    <option value="550" other="">QuantILab</option>
                                                    <option value="527" other="">Randox</option>
                                                    <option value="549" other="">Rayto</option>
                                                    <option value="528" other="">Roche Diagnotics</option>
                                                    <option value="529" other="">SFRI</option>
                                                    <option value="530" other="">Shanghai Xunda</option>
                                                    <option value="531" other="">Siemens</option>
                                                    <option value="532" other="">Slidedrychem</option>
                                                    <option value="533" other="">Spinreact</option>
                                                    <option value="534" other="">Stanbio</option>
                                                    <option value="535" other="">Sysmex</option>
                                                    <option value="536" other="">Techno Medica</option>
                                                    <option value="537" other="">Tecom</option>
                                                    <option value="538" other="">Thermoscientific</option>
                                                    <option value="539" other="">Toyobo</option>
                                                    <option value="540" other="">URIT</option>
                                                    <option value="541" other="">Wako</option>
                                                    <option value="542" other="">YD diagnostic</option>
                                                </select>

                                            </td>
                                            <td><input type="number" step="0.1" class="form-control" name="result_2[24]" style="padding-bottom: 0px;"></td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <button class="btn btn-primary" onclick="window.print()" name="printPageButton" id="printPageButton" name="printPageButton">พิมพ์</button>
                                    <button class="btn btn-primary" name="submit" type="submit" value="preview">พรีวิว</button>
                                    <button class="btn btn-primary" name="submit" type="submit" value="accept">ยืนยันการส่งผลการตรวจ</button>
                                    <!-- <button type="submit" id="submit" class="btn btn-primary">ยืนยันการส่งผลการตรวจ</button> -->
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        @media print {

            #printPageButton,
            #btnpreview,
            #confirmpreview,
            #accordionSidebar,
            #title,
            #submit {
                display: none;
            }
        }
    </style>