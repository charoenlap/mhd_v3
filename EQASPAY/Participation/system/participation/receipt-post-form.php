<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
<form action="receipt-post-save.php" method="post" onSubmit="return other()">
<?php 
    require("headPanel.php");  
     if($_POST["id"]<>null)
    {
        $id = $_POST["id"];
    }
    else
    {
        $id = $_GET["id"];
    }
	
    ?>
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
      <input type="text" class="form-control text-primary" value="<?php echo $id; ?>"  disabled>
	   <input type="hidden" value="<?php echo $id; ?>" name="idd">
    </div>
	
	<?php
   
	require("connection.php");
	$sql = "SELECT*FROM payment_lists WHERE id='$id'";
	$result = mysqli_query($link, $sql); 
	$dbrr = mysqli_fetch_array($result);
	
	?>
	
	
	
	
	
	
	<div class="form-group col-xl-5">
      <input type="text" class="form-control text-primary" value="<?php echo $dbrr["instituteName"] ?>" disabled>
    </div>

	</div>


<table width="100%" border="1" class="table table-bordered table-sm table-hover">
  <tbody>
    <thead class="thead-light">
		<tr align="center">
      	<th width="15%"><strong>Schemes</strong></th>
                    <th width="10%"><strong>เล่มที่</strong></th>
                    <th width="10%"><strong>เลขที่</strong></th>
                    <th width="10%"><strong>วันที่</strong></th>
		<th width="20%"><strong>วันที่ส่งใบเสร็จ</strong></th>
		<th width="25%"><strong>Post Tracking</strong></th>
		</tr>
	</thead>
     
    </tr>
	
<?php
	if($dbrr["eqac"]==4)
	{ 
		$sc = 1;
	?>
	<tr>
      <td><strong>EQAC</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>

<?php
	if($dbrr["eqah"]==4)
	{ 
		$sc = 2;
	?>
	<tr>
      <td><strong>EQAH</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>
	
<?php
	if($dbrr["eqat"]==4)
	{ 
		$sc = 3;
	?>
	<tr>
      <td><strong>EQAT</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>	
	
<?php
	if($dbrr["eqap"]==4)
	{ 
		$sc = 4;
	?>
	<tr>
      <td><strong>EQAP</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>	
	
<?php
	if($dbrr["beqam"]==4)
	{ 
		$sc = 5;
	?>
	<tr>
      <td><strong>B-EQAM</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>
	
	
	
<?php
	if($dbrr["heqam"]==4)
	{ 
		$sc = 6;
	?>
	<tr>
      <td><strong>H-EQAM</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>
		
<?php
	if($dbrr["uceqam"]==4)
	{ 
		$sc = 7;
	?>
	<tr>
      <td><strong>UC-EQAM</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>
		
<?php
	if($dbrr["eqaisyp"]==4)
	{ 
		$sc = 8;
	?>
	<tr>
      <td><strong>EQAI: SYP</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>
		
<?php
	if($dbrr["eqaihbv"]==4)
	{ 
		$sc = 9;
	?>
	<tr>
      <td><strong>EQAI: HBV</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>	
	
<?php
	if($dbrr["eqabgram"]==4)
	{ 
		$sc = 10;
	?>
	<tr>
      <td><strong>EQAB: GRAM</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>	
<?php
	if($dbrr["eqabafb"]==4)
	{ 
		$sc = 11;
	?>
	<tr>
      <td><strong>EQAB: AFB</strong></td>
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>	
	
<?php	}
	?>
	
	<?php
	if($dbrr["eqabiden"]==4)
	{ 
		$sc = 12;
	?>
	<tr>
      <td><strong>EQAB: IDEN</strong></td>
		
		
		<td><input type="input" class="text-primary" value="<?php echo $dbrr["reBook".$sc] ;?>" disabled ></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reNo".$sc] ;?>" disabled></td>
                    <td><input type="input" class="text-primary" value="<?php echo $dbrr["reDate".$sc] ;?>" disabled></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
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