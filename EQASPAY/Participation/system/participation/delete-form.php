<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>Delete</title>
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

	
	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="far fa-edit"></i> Delete</h1> 	
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
	date_default_timezone_set("Asia/Bangkok");
	$sql = "SELECT * FROM participantRegister WHERE id = '$id';";
	$result = mysqli_query($link, $sql);
	$dbrr = mysqli_fetch_array($result);
	$idd = $dbrr["id"];
	

	?>	
	
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

<div style="padding: 10px; padding-right: 1500px">
	<h3>รายการสมัคร</h3>
	<table width="50%" border="0" cellpadding="0px" class="table table-sm table-striped table-hover">
  <tbody>
	<thead align="center">
	<tr height="30px" bgcolor="#0064FF" class="text-white">
		<th valign="middle"><i class="fas fa-check-circle"></i></th>
		<th valign="middle">Schemes</th>
		<th valign="middle">Payer</th>
		<th valign="middle">Delete</th>
		
	</tr>
	</thead>
    <tr align="center">
      <td width="10%"><input type="checkbox" class="form" name="eqac" value="1" 
							<?php if($dbrr["eqac"]<>0){echo "checked";}; ?>></td>
	  <td width="40%">EQAC</td>
      <td width="50%"><input type="text" name="eqacs" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqacs']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqac" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqac">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqac" <?php if($dbrr["eqac"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
    <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqah" value="1" 
							<?php if($dbrr["eqah"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAH</td>
      <td><input type="text" name="eqahs" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqahs']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqah" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqah">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqah" <?php if($dbrr["eqah"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqat" value="1" <?php if($dbrr["eqat"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAT</td>
      <td><input type="text" name="eqats" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqats']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqat" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqat">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqat" <?php if($dbrr["eqat"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>  
	 <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqap" value="1" <?php if($dbrr["eqap"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAP</td>
      <td><input type="text" name="eqaps" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqaps']; ?>"></td>
		 <form method="post" action="register-delete.php" id="eqap" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqap">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqap" <?php if($dbrr["eqap"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr> 
   <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="beqam" value="1" <?php if($dbrr["beqam"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">B-EQAM</td>
      <td><input type="text" name="beqams" style="width: 100%; text-align: center" value="<?php echo $dbrr['beqams']; ?>"></td>
	   <form method="post" action="register-delete.php" id="beqam" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="beqam">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="beqam" <?php if($dbrr["beqam"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="heqam" value="1" <?php if($dbrr["heqam"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">H-EQAM</td>
      <td><input type="text" name="heqams" style="width: 100%; text-align: center" value="<?php echo $dbrr['heqams']; ?>"></td>
		<form method="post" action="register-delete.php" id="heqam" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="heqam">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="heqam" <?php if($dbrr["heqam"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr> 
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="uceqam" value="1" <?php if($dbrr["uceqam"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">UC-EQAM</td>
      <td><input type="text" name="uceqams" style="width: 100%; text-align: center" value="<?php echo $dbrr['uceqams']; ?>"></td>
		<form method="post" action="register-delete.php" id="uceqam" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="uceqam">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="uceqam" <?php if($dbrr["uceqam"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqaisyp" value="1" <?php if($dbrr["eqaisyp"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAI: SYP</td>
      <td><input type="text" name="eqaisyps" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqaisyps']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqaisyp" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqaisyp">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqaisyp" <?php if($dbrr["eqaisyp"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqaihbv" value="1" <?php if($dbrr["eqaihbv"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAI: HBV</td>
      <td><input type="text" name="eqaihbvs" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqaihbvs']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqaihbv" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqaihbv">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqaihbv" <?php if($dbrr["eqaihbv"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabgram" value="1" <?php if($dbrr["eqabgram"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAB: GRAM</td>
      <td><input type="text" name="eqabgrams" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqabgrams']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqabgram" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqabgram">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqabgram" <?php if($dbrr["eqabgram"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
	<tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabafb" value="1" <?php if($dbrr["eqabafb"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAB: AFB</td>
      <td><input type="text" name="eqabafbs" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqabafbs']; ?>"></td>
		<form method="post" action="register-delete.php" id="eqabafb" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqabafb">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqabafb" <?php if($dbrr["eqabafb"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>
    
	  <tr align="center">
      <td width="5%"><input type="checkbox" class="form" name="eqabiden" value="1" <?php if($dbrr["eqabiden"]<>0){echo "checked";}; ?>></td>
	  <td width="10%">EQAB: IDEN</td>
      <td><input type="text" name="eqabidens" style="width: 100%; text-align: center" value="<?php echo $dbrr['eqabidens']; ?>"></td>
		  <form method="post" action="register-delete.php" id="eqabiden" onSubmit="return Delete()">
		<input type="hidden" name="deleteScheme" value="eqabiden">	
		<input type="hidden" name="deleteId" value="<?php echo $dbrr['id']; ?>">
		<td><button class="btn btn-danger" form="eqabiden" <?php if($dbrr["eqabiden"]>=3){echo " disabled";} ?>><i class="far fa-trash-alt"></i></button></td>
		</form>
    </tr>	
		</tbody>
	</table>
 </div>
	</div>   



	

</body>
</html>