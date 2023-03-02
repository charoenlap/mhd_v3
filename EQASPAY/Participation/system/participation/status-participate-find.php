<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>Edit Find</title>

   
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


<form class="form-inline" method="post" action="status-participate-check.php" style="margin-bottom: 50px; margin-top: 20px">
  <div class="form-group mx-sm-3 mb-2">
    <label for="id" class="pr-2" > Schemes </label>
    <select class="form-control" name="scheme" id="id" style="width: 200px"> 
		<option class="form-control" value="eqac">EQAC</option>
		<option class="form-control" value="eqah">EQAH</option>
		<option class="form-control" value="eqat">EQAT</option>
		<option class="form-control" value="eqap">EQAP</option>
		<option class="form-control" value="beqam">B-EQAM</option>
		<option class="form-control" value="heqam">H-EQAM</option>
		<option class="form-control" value="uceqam">UC-EQAM</option>
		<option class="form-control" value="eqaisyp">EQAI:SYP</option>
		<option class="form-control" value="eqaihbv">EQAI:HBV</option>
		<option class="form-control" value="eqabgram">EQAB:GRAM</option>
		<option class="form-control" value="eqabafb">EQAB:AFB</option>
		<option class="form-control" value="eqabiden">EQAB:IDEN</option>
	 </select>	

    <label for="status" class="pr-2 pl-3" > Status </label>
    <select class="form-control" name="status" id="status" style="width: 200px"> 
		<option class="form-control" value="1">รอชำระเงิน</option>
		<option class="form-control" value="2">รอส่งการเงิน</option>
		<option class="form-control" value="3">อยู่ระหว่างออกใบเสร็จ</option>
		<option class="form-control" value="4">จัดส่งใบเสร็จเรียบร้อยแล้ว</option>
		<option class="form-control" value="5">สมัครสมาชิกสมบูรณ์</option>
		
		
	 </select>	
  </div>
	
  <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> Find </button>
</form>

<form class="form-inline" method="post" action="status-all-participate-check.php" style="margin-bottom: 50px; margin-top: 20px">
  <div class="form-group mx-sm-3 mb-2">
    <label for="id" class="pr-2" > Schemes </label>
    <select class="form-control" name="allScheme" id="id" style="width: 200px"> 
		<option class="form-control" >ALL</option>
	 </select>	

    <label for="status" class="pr-2 pl-3" > Status </label>
    <select class="form-control" name="status" id="status" style="width: 200px"> 
		<option class="form-control" value="1">รอชำระเงิน</option>
		<option class="form-control" value="2">รอส่งการเงิน</option>
		<option class="form-control" value="3">อยู่ระหว่างออกใบเสร็จ</option>
		<option class="form-control" value="4">จัดส่งใบเสร็จเรียบร้อยแล้ว</option>
		<option class="form-control" value="5">สมัครสมาชิกสมบูรณ์</option>
		
		
	 </select>	
  </div>
	
  <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> Find </button>
</form>	

</div>  

</body>
</html>