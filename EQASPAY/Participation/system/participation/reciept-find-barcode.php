<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RECEIPT FIND</title>
<?php require("../../tools/css/scripts.php") ;
	session_start();?>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
</head>

<body>
<?php require("headPanel.php"); ?>
<form class="form-inline" method="post" action="receipt-result-barcode.php">

<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">

	<h1 class="ft-prompt"><i class="fas fa-file-invoice-dollar"></i> RECEIPT FIND</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Receipt Finding</a></li> 
  </ol>
</nav>
	Recript Doc. No <br>
	<?php
	
	require "connection.php";
	$sql = "SELECT * FROM paymentSlip;";
	$result = mysqli_query($link, $sql);
	?>
	
	<select class="form-control-lg" style="width: auto" name="doc">
	
	<?php 
	if (mysqli_num_rows($result) > 0) {
  	while($row = mysqli_fetch_assoc($result)) {	
		
	?>
	<option value="<?php echo $row["doc"]; ?>"><?php echo $row["doc"] ." | ".$row["date"]; ?></option>
	<?php 
											 
	}
	} 
		
	?>
	
	</select>
  
  <button type="submit" class="btn btn-lg btn-primary">Submit <i class="fas fa-angle-double-right"></i></button>
</form>
	
	
	
	
  </div>
</body>
</html>