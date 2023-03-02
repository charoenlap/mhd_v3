<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RECEIPT ISSUING</title>
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
<form class="form-inline" method="post" action="payment-form.php">

<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">

	<h1 class="ft-prompt"><i class="fas fa-file-invoice-dollar"></i> RECEIPT ISSUING</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Payment Issuing</a></li> 
  </ol>
</nav>
	
  <input type="number" class="form-control-lg" placeholder="ID" name="id" maxlength="8" max="20229999" min="20220000" required autofocus style="width: 300px" >
  
  <button type="submit" class="btn btn-lg btn-primary">Submit <i class="fas fa-angle-double-right"></i></button>
</form>
	
	
	
	
  </div>
</body>
</html>