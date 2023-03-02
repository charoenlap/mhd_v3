<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php");
	session_start();?>
<title>HOME</title>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
</head>

<body>
<?php require("headPanel.php") ;
date_default_timezone_set("Asia/Bangkok");
?>
<form method="post" action="register-save.php" onSubmit="return confirmed()">

	
	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="fas fa-address-card"></i> PARTICIPANT REGISTER</h1> 	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
	<li class="breadcrumb-item"><a href="register.php">Register</a></li>  
    <li class="breadcrumb-item active" aria-current="page">Participate</li>
  </ol>
</nav>


<div class="form-row">
   <div class="form-group col-3">
      <input type="number" class="form-control form-control-lg" max="20229999" min="20220000" name="id" maxlength="8" placeholder="ID" autofocus required>
    </div>
	</div>	
  <div class="form-row">
    <div class="form-group col">
      <input type="text" class="form-control form-control-sm" name="instituteName" placeholder="โรงพยาบาล/หน่วยงาน" required>
    </div>
</div>
	<!--<div class="form-row">
    <div class="form-group col">
      <input type="text" class="form-control form-control-sm" name="laboratoryName" placeholder="ห้องปฏิบัติการ" value="ห้องปฏิบัติการ" required>
    </div>
</div> -->
	


	<h3>รายการสมัคร</h3>
<div style="padding-right: 50%"> 
	<table width="100%" class="table table-sm table-striped table-hover">
  <tbody>
	<thead align="center">
	<tr bgcolor="#0064FF" class="text-white">
		<th valign="middle" width="10%"><i class="fas fa-check-circle"></i></th>
		<th valign="middle" width="30%">Schemes</th>
		<th valign="middle" width="30%">Payer</th>
		<th valign="middle" width="30%">Comment</th>
	</tr>
	</thead>
    <tr align="center">
      <td><input type="checkbox" class="form" name="eqac" value="1"></td>
	  <td>EQAC</td>
      <td><input type="text" name="eqacs" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
		<td></td>
    </tr>
    <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqah" value="1"></td>
	  <td width="10%">EQAH</td>
      <td><input type="text" name="eqahs" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
		<td></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqat" value="1"></td>
	  <td width="10%">EQAT</td>
      <td><input type="text" name="eqats" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
		<td></td>
    </tr>  
	 <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqap" value="1"></td>
	  <td width="10%">EQAP</td>
      <td><input type="text" name="eqaps" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
		 <td></td>
    </tr> 
   <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="beqam" value="1"></td>
	  <td width="10%">B-EQAM</td>
      <td><input type="text" name="beqams" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
	   <td><select name="beqamc" class="btn btn-outline-primary" style="width: 100%">
		   	<option value="">สิทธิ์การสมัคร</option>
		   <option value="*ได้รับสิทธิ์" style="background-color: green; color:white">ได้รับสิทธิ์</option>
		   <option value="*รอยืนยันสิทธิ์" style="background-color: red; color:white">***รอยืนยันสิทธิ์***</option>
		   <option value="*ไม่ได้รับสิทธิ์" style="background-color: black; color:white">***ไม่ได้รับสิทธิ์ (สมาชิกเต็ม)***</option>
		   <option value="" style="background-color: black; color:white">*****ไม่ระบุ*****</option>
		   </select>
	</td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="heqam" value="1"></td>
	  <td width="10%">H-EQAM</td>
      <td><input type="text" name="heqams" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
	  <td><select name="heqamc" class="btn btn-outline-primary" style="width: 100%">
		   	<option value="">สิทธิ์การสมัคร</option>
		   <option value="*ได้รับสิทธิ์" style="background-color: green; color:white">ได้รับสิทธิ์</option>
		   <option value="*รอยืนยันสิทธิ์" style="background-color: red; color:white">***รอยืนยันสิทธิ์***</option>
		   <option value="*ไม่ได้รับสิทธิ์" style="background-color: black; color:white">*****ไม่ได้รับสิทธิ์ (สมาชิกเต็ม)********</option>
		  <option value="" style="background-color: black; color:white">*****ไม่ระบุ*****</option>
		   </select>
	</td>
    </tr> 
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="uceqam" value="1"></td>
	  <td width="10%">UC-EQAM</td>
      <td><input type="text" name="uceqams" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
			<td></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqaisyp" value="1"></td>
	  <td width="10%">EQAI: SYP</td>
      <td><input type="text" name="eqaisyps" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
			<td></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqaihbv" value="1"></td>
	  <td width="10%">EQAI: HBV</td>
      <td><input type="text" name="eqaihbvs" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
			<td></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabgram" value="1"></td>
	  <td width="10%">EQAB: GRAM</td>
      <td><input type="text" name="eqabgrams" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
			<td></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabafb" value="1"></td>
	  <td width="10%">EQAB: AFB</td>
      <td><input type="text" name="eqabafbs" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
			<td></td>
    </tr>
    
	  <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabiden" value="1"></td>
	  <td width="10%">EQAB: IDEN</td>
      <td><input type="text" name="eqabidens" style="width: 100%; text-align: center" value="S" maxlength="5"></td>
		  	<td></td>
    </tr>	
		</tbody>
	</table>
</div>
	<button class="btn btn-lg btn-success mt-3 mb-5" style="width: 10%"><i class="fas fa-user-plus"></i> ENTER</button>	
	
	</div>   



	
</form>
</body>
</html>