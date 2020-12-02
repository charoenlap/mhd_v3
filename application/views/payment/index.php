<?php
defined('BASEPATH') OR exit('No direct script access allowed');
<<<<<<< Updated upstream
// print_r($_POST);
=======
>>>>>>> Stashed changes
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">แจ้งชำระเงิน</h1>

    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?php if (!empty($success)) { ?>
            <div class="card shadow mb-4">
                <div class="card-body border-left-success text-success"><i class="fas fa-check-circle text-success"></i> <?php echo $success;?></div>
            </div>
            <?php } ?>
            <?php if (!empty($error)) { ?>
            <div class="card shadow mb-4">
                <div class="card-body border-left-danger text-danger"><i class="fas fa-times-circle text-danger"></i> <?php echo $error;?></div>
            </div>
            <?php } ?>
            
            <!--check data upload-->
            <?php if (!empty($uploadSuccess)) { ?>
            <div class="card shadow mb-4">
                <div class="card-body border-left-success text-success"><i class="fas fa-check-circle text-success"></i> <?php echo $uploadSuccess;?></div>
            </div>
            <?php } ?>
            <?php if (!empty($uploadFailed)) { ?>
            <div class="card shadow mb-4">
                <div class="card-body border-left-danger text-danger"><i class="fas fa-times-circle text-danger"></i> <?php echo $uploadFailed;?></div>
            </div>
            <?php } ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">ข้อมูลชำระเงิน</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">                            
                            <form class="user" action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="ชื่อ" value="<?php echo $firstname; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="" placeholder="นามสกุล" value="<?php echo $lastname; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select name="bank_comp" id="bank" class="form-control" required>
                                                <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                                                <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                                <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                                <option value="ธนาคารทหารไทย">ธนาคารทหารไทย</option>
                                                <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                                                <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                                                <option value="ธนาคารเกียรตินาคิน">ธนาคารเกียรตินาคิน</option>
                                                <option value="ธนาคารซีไอเอ็มบีไทย">ธนาคารซีไอเอ็มบีไทย</option>
                                                <option value="ธนาคารทิสโก้">ธนาคารทิสโก้</option>
                                                <option value="ธนาคารธนชาต">ธนาคารธนชาต</option>
                                                <option value="ธนาคารยูโอบี">ธนาคารยูโอบี</option>
                                                <option value="ธนาคารไทยเครดิตเพื่อรายย่อย">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                                                <option value="ธนาคารแลนด์แอนด์ เฮ้าส์">ธนาคารแลนด์แอนด์ เฮ้าส์</option>
                                                <option value="ธนาคารไอซีบีซี (ไทย)">ธนาคารไอซีบีซี (ไทย)</option>
                                                <option value="ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย">ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย</option>
                                                <option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                                                <option value="ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย">ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
                                                <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                                                <option value="ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                                                <option value="ธนาคารอิสลามแห่งประเทศไทย">ธนาคารอิสลามแห่งประเทศไทย</option>
                                                <option value="อื่นๆ">อื่นๆ</option>
                                            </select>
                                            <input type="text" class="form-control mt-2" id="bank_other" name="bank_oth" placeholder="ช่องทางที่ชำระเงิน" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="inputSlip">เลือก ไฟล์รูปภาพสลิป (.jpg .jpeg .png)</label>                          
                                                <input type="file" class="custom-file-input" id="inputSlip" name="inputSlip" required>              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" name="date_payment" value="<?php echo date('Y-m-d');?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="time" class="form-control" name="time_payment" value="<?php echo date('H:i:s');?>" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary" value="">แจ้งชำระเงิน</button>
                                        <button type="button" class="btn btn-primary disabled" disabled>ไม่มียอดชำระ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold">รายการโปรแกรม</h6>
                </div>
                <div class="card-body"></div>
                    <div class="row">
                        <div class="col-12">
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">ปี</th>
                                                    <th class="text-center">โปรแกรม</th>
                                                    <th class="text-center">ราคา</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($program_list as $key => $value) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $_SESSION['year']; ?></td>
                                                    <td class="text-center"><?php echo $value->program_name; ?></td>
                                                    <td class="text-right"><?php echo $value->price; ?></td>
                                                </tr>
                                                <?php } ?>
                                                <!-- <tr>
                                                    <td colspan="3" class="text-center">ไม่พบโปรแกรมที่สมัคร</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2020</td>
                                                    <td class="text-center">EQAC</td>
                                                    <td class="text-right">3,000</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2020</td>
                                                    <td class="text-center">EQAS</td>
                                                    <td class="text-right">3,000</td>
                                                </tr> -->
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="text-right">ส่วนลด</th>
                                                    <th class="text-right"></th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-right">ยอดชำระ</th>
                                                    <th class="text-right"><?php echo number_format($total,2); ?></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('#inputSlip').on("change",function() {
        console.log("change fired");
        var i = $(this).prev('label').clone();
        var file = $('#inputSlip')[0].files[0].name;
        console.log(file);
        $(this).prev('label').text(file); 

    });

$(document).ready(function() {
    $('#bank_other').hide();
    $('#bank').change(function() {
        if ($(this).val() == 'อื่นๆ') {
            $('#bank_other').slideDown('fast');
        } else {
            $('#bank_other').slideUp('fast');
            $('#bank_other').focus();
        }

    });
});

</script>