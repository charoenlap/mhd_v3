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
<form class="form-inline" method="post" action="receipt-result.php">

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
	
	
session_start();
	if (mysqli_num_rows($result) > 0) {
	$i = 1;
  	while($row = mysqli_fetch_assoc($result)) {	

		$_SESSION["t".$i] = $row["Total"];
		$i++;
	}
			
		echo 
		$_SESSION[t1]
+$_SESSION[t2]
+$_SESSION[t3]
+$_SESSION[t4]
+$_SESSION[t5]
+$_SESSION[t6]
+$_SESSION[t7]
+$_SESSION[t8]
+$_SESSION[t9]
+$_SESSION[t10]
+$_SESSION[t11]
+$_SESSION[t12]
+$_SESSION[t13]
+$_SESSION[t14]
+$_SESSION[t15]
+$_SESSION[t16]
+$_SESSION[t17]
+$_SESSION[t18]
+$_SESSION[t19]
+$_SESSION[t20]
+$_SESSION[t21]
+$_SESSION[t22]
+$_SESSION[t23]
+$_SESSION[t24]
+$_SESSION[t25]
+$_SESSION[t26]
+$_SESSION[t27]
+$_SESSION[t28]
+$_SESSION[t29]
+$_SESSION[t30]
+$_SESSION[t31]
+$_SESSION[t32]
+$_SESSION[t33]
+$_SESSION[t34]
+$_SESSION[t35]
+$_SESSION[t36]
+$_SESSION[t37]
+$_SESSION[t38]
+$_SESSION[t39]
+$_SESSION[t40]
+$_SESSION[t41]
+$_SESSION[t42]
+$_SESSION[t43]
+$_SESSION[t44]
+$_SESSION[t45]
+$_SESSION[t46]
+$_SESSION[t47]
+$_SESSION[t48]
+$_SESSION[t49]
+$_SESSION[t50]
+$_SESSION[t51]
+$_SESSION[t52]
+$_SESSION[t53]
+$_SESSION[t54]
+$_SESSION[t55]
+$_SESSION[t56]
+$_SESSION[t57]
+$_SESSION[t58]
+$_SESSION[t59]
+$_SESSION[t60]
+$_SESSION[t61]
+$_SESSION[t62]
+$_SESSION[t63]
+$_SESSION[t64]
+$_SESSION[t65]
+$_SESSION[t66]
+$_SESSION[t67]
+$_SESSION[t68]
+$_SESSION[t69]
+$_SESSION[t70]
+$_SESSION[t71]
+$_SESSION[t72]
+$_SESSION[t73]
+$_SESSION[t74]
+$_SESSION[t75]
+$_SESSION[t76]
+$_SESSION[t77]
+$_SESSION[t78]
+$_SESSION[t79]
+$_SESSION[t80]
+$_SESSION[t81]
+$_SESSION[t82]
+$_SESSION[t83]
+$_SESSION[t84]
+$_SESSION[t85]
+$_SESSION[t86]
+$_SESSION[t87]
+$_SESSION[t88]
+$_SESSION[t89]
+$_SESSION[t90]
+$_SESSION[t91]
+$_SESSION[t92]
+$_SESSION[t93]
+$_SESSION[t94]
+$_SESSION[t95]
+$_SESSION[t96]
+$_SESSION[t97]
+$_SESSION[t98]
+$_SESSION[t99]
+$_SESSION[t100]

		;	
			
	}
	
		
	?>
	
	
	
	
	
	
  </div>
</body>
</html>