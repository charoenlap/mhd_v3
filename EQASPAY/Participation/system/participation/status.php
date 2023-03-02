<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>

<title>Status</title>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
</head>

<body style="background-image:url('../../tools/images/index/bg-sw/1.jpg'); background-size: cover">
<div style="background-color: #0035ad; padding: 40px; vertical-align:middle">
<table width="100%" bgcolor="#0035ad" border="0">
  <tbody>
    <tr>
      <td width="20%"><img  src="../../tools/images/home/MT-TH-RGB-H-white.png" width="200px"></td>
      <td width="80%" style="vertical-align: center; text-align: right;"><h2 class="ft-prompt text-white pr-5"><strong>ระบบตรวจสอบสถานะการสมัครสมาชิก</strong> 	<br>
<h4 class="text-white pr-5">โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์กรภายนอก ประจำปี 2564 	</h4></h2></td>
    </tr>
  </tbody>
</table>
</div>

<center>	

<div>
<br><br>	
<div style="vertical-align: middle; background-color:#d1dbda; margin-left: 37%; margin-right: 37%; padding: 1%; border-radius: 5px">
<h4 class="text-primary">Example</h4>
<img style="border-radius: 5px" src="../../tools/images/index/info.jpg" width="250px">
</div>
	<h4 class="mt-3 text-white font-weight-bold" >กรอกรหัสสมาชิก</h4><h5 class="text-white">ขึ้นต้นด้วยปี 2021 + รหัส 4 ตัวท้าย</h5>


<form action="status-find.php" method="post">
      <input type="number" id="id" style="width: 500px; text-align: center" class="form-control form-control-lg mb-3 mt-3" name="id" maxlength="8" min="20210000"  max="20219999" placeholder="รหัสสมาชิก 8 หลัก" autofocus required>
  		

      <input type="email" style="width: 500px; text-align: center" class="form-control form-control-lg" name="pMail" placeholder="E-mail ที่ลงทะเบียน" required>


	<button class="btn btn-lg btn-success mt-3 mb-5" style="width: 500px"><i class="far fa-check-circle"></i> ตรวจสอบข้อมูลการสมัคร </button>	
</center>	
	</div> 
</div>
	
	</form>
</body>
</html>