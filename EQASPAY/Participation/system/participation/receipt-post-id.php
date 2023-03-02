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

<body>
<div style="background-color: #0035ad; padding: 40px; vertical-align:middle">
<table width="100%" bgcolor="#0035ad" border="0">
  <tbody>
    <tr>
      <td width="20%"><img class="p-3" src="../../tools/images/home/MT-TH-RGB-H-white.png" width="300px"></td>
      <td width="80%" style="vertical-align: center; text-align: right;"><h2 class="ft-prompt text-white pr-5"><strong>ระบบกรอกรายละเอียดการจัดส่งใบเสร็จรับเงิน</strong></h2></td>
    </tr>
  </tbody>
</table>
</div>	
<center>	
<br><br>
<i class="fas fa-shipping-fast fa-5x"></i>
<h4 class="ft-sarabun mt-3" >รหัสสมาชิก</h4>
<form action="receipt-post-form.php" method="post">
	<input type="hidden" name="route" value="OK">
      <input type="number" id="id" style="width: 500px; text-align: center" class="form-control form-control-lg mb-3 mt-3" name="id" maxlength="8" min="20230000"  max="20239999" autofocus required>
  		

    


	<button class="btn btn-lg btn-success mt-3 mb-5" style="width: 500px"><i class="fas fa-user-plus"></i> ENTER</button>	
</center>	
	</div> 


	
	</form>
</body>
</html>