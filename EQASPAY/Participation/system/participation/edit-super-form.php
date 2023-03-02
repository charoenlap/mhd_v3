<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php");
	session_start();?>
<title>Edit</title>
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
<form method="post" action="edit-super-save.php" id="editForm">

	
	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="far fa-edit"></i> EDITING</h1> 	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
	<li class="breadcrumb-item"><a href="register.php">Register</a></li>  
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<?php
	$id = $_POST["id"];
	require "connection.php";
	$sql = "SELECT * FROM payment_lists WHERE id = '$id';";
	$result = mysqli_query($link, $sql);
	$dbrr = mysqli_fetch_array($result);
	$idd = $dbrr["id"];
	$no = $dbrr["no"];

if($idd==$id)
{
	

	?>	
<input type="hidden" value="<?php echo $no; ?>" name="no">	
<div class="form-row">
   <div class="form-group col-3">
      <input type="text" class="form-control form-control-sm" name="id" value="<?php echo $dbrr["id"]; ?>">
    </div>
	</div>	
  <div class="form-row">
    <div class="form-group col">
      <input type="text" class="form-control form-control-sm" name="instituteName" value="<?php echo $dbrr["instituteName"]; ?>">
    </div>
</div>
	<div class="form-row">
    <div class="form-group col">
      <input type="text" class="form-control form-control-sm" name="laboratoryName" value="<?php echo $dbrr["labName"]; ?>">
    </div>
</div>
	
<div class="form-row">
    <div class="form-group col">
      <input type="email" class="form-control form-control-lg" name="pMail" value="<?php echo $dbrr["pMail"]; ?>">
    </div>
</div>

<div style="padding-right: 50%">
	<h3>รายการสมัคร</h3>
	<table width="100%" border="0" cellpadding="0px" class="table table-sm table-striped table-hover">
  <tbody>
	<thead align="center">
	<tr bgcolor="#0064FF" class="text-white">
		
		<th valign="middle" width="30%">Schemes</th>
		<th valign="middle" width="30%">CODE</th>
		<th valign="middle" width="30%">Comment</th>
	</tr>
	</thead>
<!-- EQAC -->
    <tr align="center">
    
	  <td>EQAC</td>
      <td><input type="text" name="eqac" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqac']; ?>"></td>
	  <td><input type="text" name="eqacp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqacp']; ?>"></td>	
    </tr>
	  
	  
<!-- EQAH -->
    <tr align="center">
     <td>EQAH</td>
      <td><input type="text" name="eqah" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqah']; ?>"></td>
	  <td><input type="text" name="eqahp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqahp']; ?>"></td>	
    </tr>
	  
	  
<!-- EQAT -->
    <tr align="center">
     <td>EQAT</td>
      <td><input type="text" name="eqat" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqat']; ?>"></td>
	  <td><input type="text" name="eqatp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqatp']; ?>"></td>	
    </tr>	

	  	  
<!-- EQAP -->
    <tr align="center">
     <td>EQAP</td>
      <td><input type="text" name="eqap" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqap']; ?>"></td>
	  <td><input type="text" name="eqapp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqapp']; ?>"></td>	
    </tr>
	
		  
<!-- BEQAM -->
    <tr align="center">
     <td>B-EQAM</td>
      <td><input type="text" name="beqam" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['beqam']; ?>"></td>
	  <td><input type="text" name="beqamp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['beqamp']; ?>"></td>	
    </tr>
	  
	<!-- HEQAM -->
    <tr align="center">
     <td>H-EQAM</td>
      <td><input type="text" name="heqam" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['heqam']; ?>"></td>
	  <td><input type="text" name="heqamp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['heqamp']; ?>"></td>	
    </tr>  

<!-- UCEQAM -->
    <tr align="center">
     <td>UC-EQAM</td>
      <td><input type="text" name="uceqam" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['uceqam']; ?>"></td>
	  <td><input type="text" name="uceqamp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['uceqamp']; ?>"></td>	
    </tr>  
<!-- EQAI:SYP -->
    <tr align="center">
     <td>EQAI:SYP</td>
      <td><input type="text" name="eqaisyp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaisyp']; ?>"></td>
	  <td><input type="text" name="eqaisypp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaisypp']; ?>"></td>	
    </tr>  
<!-- EQAI:hbv -->
    <tr align="center">
     <td>EQAI:HBV</td>
      <td><input type="text" name="eqaihbv" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaihbv']; ?>"></td>
	  <td><input type="text" name="eqaihbvp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqaihbvp']; ?>"></td>	
    </tr>	  
<!-- EQAB:GRAM -->
    <tr align="center">
     <td>EQAB:GRAM</td>
      <td><input type="text" name="eqabgram" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabgram']; ?>"></td>
	  <td><input type="text" name="eqabgramp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabgramp']; ?>"></td>	
    </tr>	  	  
	  
	<!-- EQAB:AFB -->
    <tr align="center">
     <td>EQAB:AFB</td>
      <td><input type="text" name="eqabafb" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabafb']; ?>"></td>
	  <td><input type="text" name="eqabafbp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabafbp']; ?>"></td>	
    </tr>	  
	
	  <!-- EQAB:IDEN -->
    <tr align="center">
     <td>EQAB:IDEN</td>
      <td><input type="text" name="eqabiden" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabiden']; ?>"></td>
	  <td><input type="text" name="eqabidenp" style="width: 100%; text-align: center" maxlength="5" value="<?php echo $dbrr['eqabidenp']; ?>"></td>	
    </tr>	
	  
	  
	  
	  
		</tbody>
	</table>
 </div>
	<button class="btn btn-lg btn-success mt-3 mb-5" style="width: 10%" form="editForm"><i class="fas fa-user-plus"></i> ENTER</button>	
	
	</div>   
<?php
}
else
{
	?> 
	<center><h2 class="h1 text-danger"><i class="fas fa-exclamation fa-3x mb-5"></i><br>ไม่พบ ID ดังกล่าว</h2><br>
	</center>
	<?php
}
	?>


	
</form>
</body>
</html>