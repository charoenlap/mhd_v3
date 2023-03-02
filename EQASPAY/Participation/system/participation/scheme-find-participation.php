<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>Statistic</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 

</head>

<body>
<?php require("headPanel.php") ; ?>

	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt font-weight-bold h-3">Participants of EQAS MUMT 2023</h1> 
<p> Updated : <?php echo date('j F Y'); ?></p> 	

<?php
require("connection.php");
$va = null;

	$sql1 = "SELECT * FROM mhd_register_program WHERE (program_id = 1) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result1 = mysqli_query($link, $sql1);
	$rowcount1 = mysqli_num_rows($result1);
	
	$sql2 = "SELECT * FROM mhd_register_program WHERE (program_id = 2) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result2 = mysqli_query($link, $sql2);
	$rowcount2 = mysqli_num_rows($result2);
	
	$sql3 = "SELECT * FROM mhd_register_program WHERE (program_id = 3) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result3 = mysqli_query($link, $sql3);
	$rowcount3 = mysqli_num_rows($result3);
	
	$sql4 = "SELECT * FROM mhd_register_program WHERE (program_id = 4) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result4 = mysqli_query($link, $sql4);
	$rowcount4 = mysqli_num_rows($result4);	
	
	$sql5 = "SELECT * FROM mhd_register_program WHERE (program_id = 5) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result5 = mysqli_query($link, $sql5);
	$rowcount5 = mysqli_num_rows($result5);	
	
	$sql6 = "SELECT * FROM mhd_register_program WHERE (program_id = 6) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result6 = mysqli_query($link, $sql6);
	$rowcount6 = mysqli_num_rows($result6);	

	$sql7 = "SELECT * FROM mhd_register_program WHERE (program_id = 7) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result7 = mysqli_query($link, $sql7);
	$rowcount7 = mysqli_num_rows($result7);
	
	$sql8 = "SELECT * FROM mhd_register_program WHERE (program_id = 8) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result8 = mysqli_query($link, $sql8);
	$rowcount8 = mysqli_num_rows($result8);
	
	$sql9 = "SELECT * FROM mhd_register_program WHERE (program_id = 9) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result9 = mysqli_query($link, $sql9);
	$rowcount9 = mysqli_num_rows($result9);
	
	$sql10 = "SELECT * FROM mhd_register_program WHERE (program_id = 10) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result10 = mysqli_query($link, $sql10);
	$rowcount10 = mysqli_num_rows($result10);
	
	$sql11 = "SELECT * FROM mhd_register_program WHERE (program_id = 12) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result11 = mysqli_query($link, $sql11);
	$rowcount11 = mysqli_num_rows($result11);
	
	$sql12 = "SELECT * FROM mhd_register_program WHERE (program_id = 13) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000)";
	$result12 = mysqli_query($link, $sql12);
	$rowcount12 = mysqli_num_rows($result12);
	


	
?>

<form class="row g-3" method="post" action="register-find-participant.php">
  <div class="col-auto">
    <label for="id" class="visually-hidden" > Schemes </label>
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

  <div class="col-auto">
     <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-search"></i> Find </button>
  </div>
</form>
    
    
<!--
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
-->


<hr style="border-top: dashed black 1px">
	
<table class="table d-table" width="100%" border="0">
  <tbody>
	  <thead class="bg-primary text-white">
	  <th width="10%">Schemes</th>
		 <th width="10%">สมาชิกปี 2566 (ราย)</th>
		<th width="10%">สมาชิกปี 2565 (ราย)</th>
		<th width="10%">สัดส่วนสมาชิก (%)</th>
	    <th width="10%">Dif (ราย)</th>
		<th width="10%">Dif (%)</th>
	  </thead>
	  <?php
	  	session_start();
		$_SESSION["sco1"] = 748;
		$_SESSION["sco2"] = 504;
		$_SESSION["sco3"] = 351;
		$_SESSION["sco4"] = 171;
		$_SESSION["sco5"] = 441;
		$_SESSION["sco6"] = 239;
		$_SESSION["sco7"] = 230;
		$_SESSION["sco8"] = 291;
		$_SESSION["sco9"] = 502;
		$_SESSION["sco10"] = 132;
		$_SESSION["sco11"] = 130;
		$_SESSION["sco12"] = 56;
	  
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
	  
	 <tr style="background-color: rgba(167,212,255,1.00)">
         <td>รวม</td>
         
         <?php 
         $j = 1;
         $k = 0;
         while ($j <= 12) 
         { 
		?>
          
          <?php
                $sum = $_SESSION["row".$j];
                $Grand = $sum + $k;
                $k = $Grand; 
          ?>
         
         <?php
         $j++;
         }
         ?>
         
         <td><?php echo number_format($k,0); ?> </td>
         <td>3,795</td>
         <td><?php echo number_format(($k/3795)*100,2) ?></td>
         <td></td>
         <td></td>
      </tr>
	 
	</tbody>
	</table>

	
<?php mysqli_close($link); ?>	
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>	
	
</div>  
</body>
</html>