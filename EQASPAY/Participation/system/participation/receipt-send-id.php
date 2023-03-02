<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php require("../../tools/css/scripts.php"); session_start(); ?>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
</head>

<body>
<form class="form-inline" method="post" action="envelope.php">
<?php require("headPanel.php"); ?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Reciept Sending</a></li> 
  </ol>
</nav>
	
	<center><i class="fas fa-envelope-open-text fa-5x"></i> <h3>Envelope Print</h3></center><br><br>
  <input type="text" class="form-control-lg" placeholder="ID" name="id" required autofocus style="width: 300px" value="<?php 
																																	   if($_SESSION["ide"]<>null) 
																																	   {echo $_SESSION["ide"];
																																	   } else
																																		   
{
																																		   null;
																																	   }?>" >
<select class="form-control-lg" name="scheme">
	<option value="adName1">EQAC</option>
	<option value="adName2">EQAH</option>
	<option value="adName3">EQAT</option>
	<option value="adName4">EQAP</option>
	<option value="adName5">B-EQAM</option>
	<option value="adName6">H-EQAM</option>
	<option value="adName7">UC-EQAM</option>
	<option value="adName8">EQAI:SYP</option>
	<option value="adName9">EQAI:HBV</option>
	<option value="adName10">EQAB:GRAM</option>
	<option value="adName11">EQAB:AFB</option>
	<option value="adName12">EQAB:IDEN</option>

	</select>
          
          
          <select class="form-control-lg" name="postCode">
	<option value="1">ไปรษณีย์ศิริราช</option>
	<option value="2">ไปรษณีย์พุทธมณฑล</option>
	</select>

  
  <button type="submit" class="btn btn-lg btn-primary">Submit <i class="fas fa-angle-double-right"></i></button>
</form>
	

	
	
  </div>
</body>
</html>