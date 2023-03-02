<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>Edit Find</title>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
</head>

<body>
<?php require("headPanel.php") ;
session_start();
date_default_timezone_set("Asia/Bangkok");

	
	
?>	
	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="far fa-edit"></i> EDITING</h1> 	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Participation Right</li>
  </ol>
</nav>


<form class="form-inline" method="post" action="right-approve.php" style="margin-bottom: 50px; margin-top: 20px">
  <div class="form-group mx-sm-3 mb-2">
    <label for="id" class="pr-2" > Schemes </label>
    <select class="form-control" name="scheme" id="id" style="width: 200px"> 
		<option class="form-control" value="beqam">B-EQAM</option>
		<option class="form-control" value="heqam">H-EQAM</option>
	 </select>	

    <label for="status" class="pr-2 pl-3" > Status </label>
    <select class="form-control" name="status" id="status" style="width: 200px"> 
		<option class="form-control" value="*ได้รับสิทธิ์">ได้รับสิทธิ์</option>
		<option class="form-control" value="*รอยืนยันสิทธิ์">รอยืนยันสิทธิ์</option>
		<option class="form-control" value="*ไม่ได้รับสิทธิ์">ไม่ได้รับสิทธิ์</option>
		<option class="form-control" value="" selected>- ไม่ระบุ -</option>
		
	 </select>	
  </div>
	
  <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> Find </button>
</form>


</div>  

</body>
</html>