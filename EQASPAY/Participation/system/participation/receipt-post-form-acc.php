<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Receipt Issuing</title>
<?php require("../../tools/css/scripts.php");
	session_start();?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
</head>

<body>
<?php require("headPanel.php");  ?>
<form action="receipt-post-save-acc.php" method="post" onSubmit="return other()">

<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<div class="pb-5">
<h1 class="ft-prompt"><i class="fas fa-file-invoice-dollar"></i> RECEIPT ISSUING</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Receipt Sending</a></li> 
  </ol>
</nav>
<div class="form-row">
   <div class="form-group col-xl-2">
      <input type="text" class="form-control text-primary" value="<?php echo $_POST["id"]; ?>"  disabled>
	   <input type="hidden" value="<?php echo $_POST["id"]; ?>" name="idd">
    </div>
	
	<?php
	$id = $_POST["id"];
	require("connection.php");
	$sql = "SELECT*FROM payment_lists WHERE id='$id'";
	$result = mysqli_query($link, $sql); 
	$dbrr = mysqli_fetch_array($result);
	
	?>
	
	
	
	
	
	
	<div class="form-group col-xl-5">
      <input type="text" class="form-control text-primary" value="<?php echo $dbrr["instituteName"] ?>" disabled>
    </div>
	<div class="form-group col-xl-5">
      <input type="text" class="form-control text-primary" value="<?php echo $dbrr["labName"] ?>" disabled>
    </div>
	
	
	</div>


<table width="100%" border="1" class="table table-bordered table-sm table-hover">
  <tbody>
    <thead class="thead-light">
		<tr align="center">
      	<th width="15%"><strong>Schemes</strong></th>
		<th width="20%"><strong>วันที่ออกใบเสร็จ</strong></th>
		<th width="10%"><strong>เล่มที่</strong></th>
		<th width="10%"><strong>เลขที่</strong></th>
		</tr>
	</thead>
     
    </tr>
	
<?php
        session_start();
          $docNo = $_SESSION["docNo"];
          $sch = "eqac";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 1;
	?>
	<tr>
      <td><strong>EQAC</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
		
    </tr>	
	
<?php	}
	?>

<?php
	 $sch = "eqah";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 2;
	?>
	<tr>
      <td><strong>EQAH</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
	
    </tr>	
	
<?php	}
	?>
	
<?php
	 $sch = "eqat";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 3;
	?>
	<tr>
      <td><strong>EQAT</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
	
    </tr>	
	
<?php	}
	?>	
	
<?php
	 $sch = "eqap";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 4;
	?>
	<tr>
      <td><strong>EQAP</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
	
    </tr>	
	
<?php	}
	?>	
	
<?php
	 $sch = "beqam";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 5;
	?>
	<tr>
      <td><strong>B-EQAM</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>

    </tr>	
	
<?php	}
	?>
	
	
	
<?php
	 $sch = "heqam";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 6;
	?>
	<tr>
      <td><strong>H-EQAM</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>

    </tr>	
	
<?php	}
	?>
		
<?php
	 $sch = "uceqam";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 7;
	?>
	<tr>
      <td><strong>UC-EQAM</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
		
    </tr>	
	
<?php	}
	?>
		
<?php
          
	 $sch = "eqaisyp";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 8;
	?>
	<tr>
      <td><strong>EQAI: SYP</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
	
    </tr>	
	
<?php	}
	?>
		
<?php
	 $sch = "eqaihbv";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 9;
	?>
	<tr>
      <td><strong>EQAI: HBV</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
	
    </tr>	
	
<?php	}
	?>	
	
<?php
	 $sch = "eqabgram";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 10;
	?>
	<tr>
      <td><strong>EQAB: GRAM</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
	
    </tr>	
	
<?php	}
	?>	
<?php
	 $sch = "eqabafb";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 11;
	?>
	<tr>
      <td><strong>EQAB: AFB</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
		
    </tr>	
	
<?php	}
	?>
	
	<?php
	 $sch = "eqabiden";
          $doc = $sch."p";
	if(($dbrr[$sch]==3 || $dbrr[$sch]==4) && ($dbrr[$doc] == $docNo) )
	{ 
		$sc = 12;
	?>
	<tr>
      <td><strong>EQAB: IDEN</strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" value="<?php echo $dbrr["reDate".$sc]; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" value="<?php echo $dbrr["reBook".$sc]; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" value="<?php echo $dbrr["reNo".$sc]; ?>" ></strong></td>
		
    </tr>	
	
<?php	}
	
	mysqli_close($link);
	?>	
		
	
	
  </tbody>
</table>
	

<center><button type="submit" class="btn btn-lg btn-success mt-3" style="width: 20%"><i class="fas fa-chevron-circle-right"></i> Next</button></center>
	</form>
</div>	
</body>
</html>