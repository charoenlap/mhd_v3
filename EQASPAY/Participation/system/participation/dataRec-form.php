<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DATABASE</title>
<?php require("../../tools/css/scripts.php");
	session_start();?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
</head>

<body>
<form method="post" action="database-save.php" >
<?php require("headPanel.php");?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="fas fa-database"></i> DATABASE</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Database</a></li> 
  </ol>
</nav>
<?php
	$id = $_POST["id"];
	require "connection.php";
	$sql1 = "SELECT * FROM participantRegister WHERE id = '$id';";
	$result1 = mysqli_query($link, $sql1);
	$dbrr = mysqli_fetch_array($result1);
	$_SESSION["pid"] = $dbrr["id"];
	$_SESSION["pname"] = $dbrr["instituteName"];
?>
<div class="form-row">
   	<div class="form-group col-xl-2">
	   	<label>Participant ID</label>
      	<input type="text" class="form-control" value="<?php echo $dbrr["id"]; ?>" disabled>
    </div>
	
	<div class="form-group col-xl-3">
		<label>Institute Name</label>
      	<input type="text" class="form-control" value="<?php echo $dbrr["instituteName"]; ?>" disabled>
    </div>
	
	<div class="form-group col-xl-7">
		<label>Laboratory Name</label>
      	<input type="text" class="form-control" value="<?php echo $dbrr["labName"]; ?>" disabled>
    </div>
	</div>

	<div>
	<h3>รายการสมัคร</h3>
	<table width="100%" border="0" cellpadding="0px" class="table table-sm table-striped table-hover">
  <tbody>
	<thead align="center">
	<tr bgcolor="#0064FF" class="text-white">
		<th valign="middle" width="10%">Schemes</th>
		<th valign="middle" width="10%">Payer</th>
		<th valign="middle" width="10%">สิทธิ์การสมัคร</th>
		<th valign="middle" width="10%">สถานะการสมัคร</th>
		
	</tr>
	</thead>
	   <?php
	  $wait = "รอชำระค่าธรรมเนียม";
	  $payWait = "ชำระเงินเรียบร้อยแล้ว";
	  $paySlip = "อยู่ระหว่างออกใบเสร็จรับเงิน";
	  $slipSent = "จัดส่งใบเสร็จรับเงินเรียบร้อยแล้ว";
	  $complete = "รายการสมัครเสร็จสมบูรณ์";
	  ?>
	  
<!-- EQAC -->
	  
	  <?php 
	  $sc = "eqac";
	  if($dbrr[$sc]>=1)
	  {
	  ?>
    <tr align="center">
	  <td>EQAC</td>
      <td><?php echo $dbrr['eqacs']; ?></td>
	<td></td>
	<td><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} 
	  } ?>
		</td>
    </tr>
	  
	  
	  
	  
	  
<!-- EQAH -->
    <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqah" value="<?php if($dbrr["eqah"]==0) { echo 1; } else {echo $dbrr["eqah"];} ?>" 
							<?php if($dbrr["eqah"]<>0)
									{
										echo "checked";
									} ?>
							<?php if($dbrr["eqah"]>=3){echo " disabled";} ?>></td>
	 
	<td width="10%">EQAH</td>
      <td><input type="text" name="eqahs" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqahs']; ?>"
				 <?php if($dbrr["sup2"]<>""){echo "disabled";}; if($dbrr["eqah"]>1){echo "disabled";};?>></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqat" value="<?php if($dbrr["eqat"]==0) { echo 1; } else {echo $dbrr["eqat"];} ?>" <?php if($dbrr["eqat"]<>0){echo "checked";} ?><?php if($dbrr["eqat"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAT</td>
      <td><input type="text" name="eqats" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqats']; ?>"<?php if($dbrr["sup3"]<>""){echo "disabled";}; if($dbrr["eqat"]>1){echo "disabled";}; ?>></td>
    </tr>  
	 <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqap" value="<?php if($dbrr["eqap"]==0) { echo 1; } else {echo $dbrr["eqap"];} ?>" <?php if($dbrr["eqap"]<>0){echo "checked";} ?><?php if($dbrr["eqap"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAP</td>
      <td><input type="text" name="eqaps" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaps']; ?>"<?php if($dbrr["sup4"]<>""){echo "disabled";}; if($dbrr["eqap"]>1){echo "disabled";}; ?>></td>
    </tr> 
   <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="beqam" value="<?php if($dbrr["beqam"]==0) { echo 1; } else {echo $dbrr["beqam"];} ?>" <?php if($dbrr["beqam"]<>0){echo "checked";} ?><?php if($dbrr["beqam"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">B-EQAM</td>
      <td><input type="text" name="beqams" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['beqams']; ?>"<?php if($dbrr["sup5"]<>""){echo "disabled";}; if($dbrr["beqam"]>1){echo "disabled";}; ?>>
	   </td>
	  
	   <td><select name="beqamc" class="btn btn-outline-primary" style="width: 100%" <?php if($dbrr["beqam"]>=3){echo " disabled";} ?>>
		   	<option value="<?php echo $dbrr['beqamc']; ?>"><?php echo $dbrr['beqamc']; ?> </option>
		   <option value="*ได้รับสิทธิ์" style="background-color: green; color:white">ได้รับสิทธิ์</option>
		   <option value="*รอยืนยันสิทธิ์" style="background-color: red; color:white">***รอยืนยันสิทธิ์***</option>
		   </select>
	   </td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="heqam" value="<?php if($dbrr["heqam"]==0) { echo 1; } else {echo $dbrr["heqam"];} ?>" <?php if($dbrr["heqam"]<>0){echo "checked";} ?><?php if($dbrr["heqam"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">H-EQAM</td>
      <td><input type="text" name="heqams" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['heqams']; ?>"<?php if($dbrr["sup6"]<>""){echo "disabled";}; if($dbrr["heqam"]>1){echo "disabled";};?>></td>
			   <td><select name="heqamc" class="btn btn-outline-primary" style="width: 100%" <?php if($dbrr["heqam"]>=3){echo " disabled";} ?>>
		   	<option value="<?php echo $dbrr['heqamc']; ?>"><?php echo $dbrr['heqamc']; ?></option>
		   <option value="*ได้รับสิทธิ์" style="background-color: green; color:white">ได้รับสิทธิ์</option>
		   <option value="*รอยืนยันสิทธิ์" style="background-color: red; color:white">***รอยืนยันสิทธิ์***</option>
		   </select>
	   </td>
    </tr> 
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="uceqam" value="<?php if($dbrr["uceqam"]==0) { echo 1; } else {echo $dbrr["uceqam"];} ?>" <?php if($dbrr["uceqam"]<>0){echo "checked";} ?><?php if($dbrr["uceqam"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">UC-EQAM</td>
      <td><input type="text" name="uceqams" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['uceqams']; ?>"<?php if($dbrr["sup7"]<>""){echo "disabled";}; if($dbrr["uceqam"]>1){echo "disabled";}; ?>></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqaisyp" value="<?php if($dbrr["eqaisyp"]==0) { echo 1; } else {echo $dbrr["eqaisyp"];} ?>" <?php if($dbrr["eqaisyp"]<>0){echo "checked";} ?><?php if($dbrr["eqaisyp"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAI: SYP</td>
      <td><input type="text" name="eqaisyps" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaisyps']; ?>"<?php if($dbrr["sup8"]<>""){echo "disabled";}; if($dbrr["eqaisyp"]>1){echo "disabled";};?>></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqaihbv" value="<?php if($dbrr["eqaihbv"]==0) { echo 1; } else {echo $dbrr["eqaihbv"];} ?>" <?php if($dbrr["eqaihbv"]<>0){echo "checked";} ?><?php if($dbrr["eqaihbv"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAI: HBV</td>
      <td><input type="text" name="eqaihbvs" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaihbvs']; ?>"<?php if($dbrr["sup9"]<>""){echo "disabled";}; if($dbrr["eqaihbv"]>1){echo "disabled";}; ?>></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabgram" value="<?php if($dbrr["eqabgram"]==0) { echo 1; } else {echo $dbrr["eqabgram"];} ?>" <?php if($dbrr["eqabgram"]<>0){echo "checked";} ?><?php if($dbrr["eqabgram"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAB: GRAM</td>
      <td><input type="text" name="eqabgrams" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabgrams']; ?>"<?php if($dbrr["sup10"]<>""){echo "disabled";}; if($dbrr["eqabgram"]>1){echo "disabled";}; ?>></td>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabafb" value="<?php if($dbrr["eqabafb"]==0) { echo 1; } else {echo $dbrr["eqabafb"];} ?>" <?php if($dbrr["eqabafb"]<>0){echo "checked";} ?><?php if($dbrr["eqabafb"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAB: AFB</td>
      <td><input type="text" name="eqabafbs" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabafbs']; ?>"<?php if($dbrr["sup11"]<>""){echo "disabled";}; if($dbrr["eqabafb"]>1){echo "disabled";}; ?>></td>
    </tr>
    
	  <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabiden" value="<?php if($dbrr["eqabiden"]==0) { echo 1; } else {echo $dbrr["eqabiden"];} ?>" <?php if($dbrr["eqabiden"]<>0){echo "checked";} ?><?php if($dbrr["eqabiden"]>=3){echo " disabled";} ?>></td>
	  <td width="10%">EQAB: IDEN</td>
      <td><input type="text" name="eqabidens" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabidens']; ?>"<?php if($dbrr["sup12"]<>""){echo "disabled";}; if($dbrr["eqabiden"]>1){echo "disabled";}; ?>></td>
    </tr>	
		</tbody>
	</table>
 </div>
	 


<?php if(($_SESSION["userLevel"]=="Administrator")&&($_SESSION["depCode"]=="00")) { ?>
<center><button class="btn btn-lg btn-success mt-3" style="width: 20%"> NEXT <i class="fas fa-chevron-circle-right"></i> </button></center>
<?php } ?>	
	</form>

<?php mysqli_close($link); ?>
</body>
</html>