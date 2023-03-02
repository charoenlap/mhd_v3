<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>Edit Find</title>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
</head>

<body>
<?php require("headPanel.php") ; ?>

	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="far fa-edit"></i> EDITING</h1> 	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Participant in Scheme</li>
  </ol>
</nav>


<?php
require("connection.php");
$va = null;
	$sql1 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqac > '0')";
	$result1 = mysqli_query($link, $sql1);
	$rowcount1 = mysqli_num_rows($result1);
	
	$sql2 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqah > '0')";
	$result2 = mysqli_query($link, $sql2);
	$rowcount2 = mysqli_num_rows($result2);
	
	$sql3 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqat > '0')";
	$result3 = mysqli_query($link, $sql3);
	$rowcount3 = mysqli_num_rows($result3);
	
	$sql4 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqap > 0)";
	$result4 = mysqli_query($link, $sql4);
	$rowcount4 = mysqli_num_rows($result4);	
	
	$sql5 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (beqam > 0)";
	$result5 = mysqli_query($link, $sql5);
	$rowcount5 = mysqli_num_rows($result5);	
	
	$sql6 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (heqam > 0)";
	$result6 = mysqli_query($link, $sql6);
	$rowcount6 = mysqli_num_rows($result6);	

	$sql7 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (uceqam > 0)";
	$result7 = mysqli_query($link, $sql7);
	$rowcount7 = mysqli_num_rows($result7);
	
	$sql8 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqaisyp > 0)";
	$result8 = mysqli_query($link, $sql8);
	$rowcount8 = mysqli_num_rows($result8);
	
	$sql9 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqaihbv > 0)";
	$result9 = mysqli_query($link, $sql9);
	$rowcount9 = mysqli_num_rows($result9);
	
	$sql10 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqabgram > 0)";
	$result10 = mysqli_query($link, $sql10);
	$rowcount10 = mysqli_num_rows($result10);
	
	$sql11 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqabafb > 0)";
	$result11 = mysqli_query($link, $sql11);
	$rowcount11 = mysqli_num_rows($result11);
	
	$sql12 = "SELECT * FROM payment_lists WHERE (id <> '$va') AND (eqabiden > 0)";
	$result12 = mysqli_query($link, $sql12);
	$rowcount12 = mysqli_num_rows($result12);
	


	
?>
<form class="form-inline" method="post" action="register-find.php" style="margin-bottom: 50px; margin-top: 20px">
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
  </div>
  <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> Find </button>
</form>
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

<h5 class="ft-prompt font-weight-bold">
Participants of EQAS MUMT 2021</h5>

<hr style="border-top: dashed black 1px">
	
<table width="100%" border="0">
  <tbody>
	  <thead>
	  <th width="10%">Schemes</th>
		 <th width="10%">สมาชิกปี 2564 (ราย)</th>
		<th width="10%">สมาชิกปี 2563 (ราย)</th>
		<th width="10%">สัดส่วนสมาชิก (%)</th>
	    <th width="10%">Dif (ราย)</th>
		<th width="10%">Dif (%)</th>
	  </thead>
	  <?php
	  	session_start();
		$_SESSION["sco1"] = 642;
		$_SESSION["sco2"] = 435;
		$_SESSION["sco3"] = 320;
		$_SESSION["sco4"] = 146;
		$_SESSION["sco5"] = 397;
		$_SESSION["sco6"] = 233;
		$_SESSION["sco7"] = 224;
		$_SESSION["sco8"] = 281;
		$_SESSION["sco9"] = 456;
		$_SESSION["sco10"] = 113;
		$_SESSION["sco11"] = 109;
		$_SESSION["sco12"] = 61;
	  
	  	$_SESSION["scheme1"] = "EQAC";
	  	$_SESSION["scheme2"] = "EQAH";
	  	$_SESSION["scheme3"] = "EQAT";
	  $_SESSION["scheme4"] = "EQAP";
	  $_SESSION["scheme5"] = "B-EQAM";
	  $_SESSION["scheme6"] = "H-EQAM";
	  $_SESSION["scheme7"] = "UC-EQAM";
	  $_SESSION["scheme8"] = "EQAI: SYP";
	  $_SESSION["scheme9"] = "EQAI: HBV";
	  $_SESSION["scheme10"] = "EQAB:GRAM";
	   $_SESSION["scheme11"] = "EQAB:AFB";
	   $_SESSION["scheme12"] = "EQAB:IDEN";
	  
	  
	  	$_SESSION["row1"] = $rowcount1;
	  $_SESSION["row2"] = $rowcount2;
	  $_SESSION["row3"] = $rowcount3;
	  $_SESSION["row4"] = $rowcount4;
	  $_SESSION["row5"] = $rowcount5;
	  $_SESSION["row6"] = $rowcount6;
	  $_SESSION["row7"] = $rowcount7;
	  $_SESSION["row8"] = $rowcount8;
	  $_SESSION["row9"] = $rowcount9;
	  $_SESSION["row10"] = $rowcount10;
	  $_SESSION["row11"] = $rowcount11;
	  $_SESSION["row12"] = $rowcount12;
	  
	  
	  
	  	$i = 1;
	  ?>
	  
		<?php while ($i <= 12) 
			{ 
		?>
	  	<tr>
	   	<td><?php echo $_SESSION["scheme".$i]; ?></td>
		<td><?php $rowcount = $_SESSION["row".$i]; echo $rowcount; ?></td>
		<td><?php $sco = $_SESSION["sco".$i]; echo $sco; ?></td>
		<td><?php echo number_format(($rowcount/$sco)*100,2) ?></td>
		<td><?php echo number_format(($rowcount-$sco),2) ?></td> 
		<td><?php echo number_format(((($rowcount/$sco)*100)-100),2) ?></td>
	  </tr>
	  
	  <?php
			$i++;
			}
		?>
	  
	 
	 
	</tbody>
	</table>


	
	
	
	
	
	
	
	
	
<?php mysqli_close($link); ?>	
	
	
</div>  
</body>
</html>