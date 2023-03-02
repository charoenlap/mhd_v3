<?php 
require("../../tools/css/scripts.php") ;
session_start();

if($_POST["route"]=="OK")
{
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Status</title>

<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Text&display=swap" rel="stylesheet">

<style>
          @media screen {
  div.divFooter {
    display: none;
  }
}
@media print {
  div.divFooter {
    position: fixed;
    bottom: 0;
  }
}
          h1, h2, h3, h4,h5,h6,h7, body {
		font-family: 'Sarabun';
	}
</style>
	
</head>

<body>
<?php $id = $_POST["id"]; ?>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td><div style="background-color: white"><img class="p-3" src="../../tools/images/home/MT-TH-MU-H.png" width="300px"></div></td>
      <td><p align="right">วันที่พิมพ์ : <?=thai_date_and_time_short(time())?> น.</p><p align="right" style="font-family: 'Libre Barcode 39 Text', cursive; font-size: 50px;">*<?php echo $id; ?>*</p></td>
    </tr>
  </tbody>
</table>

<div style="padding-left: 20px; padding-right: 10px">
<center><h3><strong>แบบสรุปรายการสมัครสมาชิก </strong></h3> 	
<h5>โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์กรภายนอก ประจำปี 2565 </h5></center>
<hr width="100%">
	
	<?php
	$id = $_POST["id"];
	
	require "connection.php";
	$sql = "SELECT*FROM participantRegister WHERE id='$id'
	";
	$result = mysqli_query($link, $sql); 
	$dbrr = mysqli_fetch_array($result);

	
		
	
	
	?>
    <h3>รหัสสมาชิก: <?php echo $id; ?></h3>
<?php
	if($id==$dbrr["id"])
	{
	?>

	<h5><?php echo $dbrr["labName"]." ".$dbrr["instituteName"]; ?></h5>
	
 <br> 		
<h4>โครงการที่สมัคร</h4>
	<table width="100%" border="1" cellpadding="5px">
  <tbody>
	  <thead bgcolor="#D8D8D8" style="text-align: center">
		  <tr>
	  		  <th width="20%">
			Schemes
			</th>
			  <th width="10%">
			Fee
			</th>
			  <th width="5%" style="text-align: center">
			Status
			</th>
			  <th>
			Receipt Name
			</th>
			  <th width="10%">
			Book
			</th>
			  <th width="10%">
			No
			</th>
			  <th width="15%">
			Date
			</th>
		  </tr>
	  </thead>
	  

	  
	 
		
      <?php
	  $wait = "<i class='fas fa-shopping-cart'></i>";
	  $payWait = "<i class='fas fa-money-check-alt'></i>";
	  $paySlip = "<i class='fas fa-cash-register'></i>";
	  $slipSent = " <i class='fas fa-box-open'></i>";
	  $complete = "<i class='fas fa-user-check'></i>";
	  ?>
	  
	  <?php
	  			$sc = "eqac";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAC</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "3,000.00"; $c = 3000;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>
						<td><?php echo $dbrr["reName1"]; ?></td>
						<td></td><td></td><td></td>
	  
	  </tr>
			<?php }
			?>
	
	 <?php
	  			$sc = "eqah";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAH</td>
					<td style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $h = 4500;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName2"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  
	  <?php
	  			$sc = "eqat";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAT</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $t = 4500;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName3"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqap";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAP</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,000.00"; $p = 2000;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName4"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "beqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | B-EQAM</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,000.00"; $mb = 2000;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName5"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "heqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | H-EQAM</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "1,500.00<br>"; $mh = 1500;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName6"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "uceqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | UC-EQAM</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "1,000.00"; $mu = 1000;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName7"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaisyp";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAI:SYP</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $is = 2200;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName8"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaihbv";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAI:HBV</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $ih = 2200;} ?></td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName9"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabgram";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAB:GRAM</td>
					<td bgcolor="#F4F4F4">*EQAB Fee</td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName10"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabafb";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAB:AFB</td>
					<td bgcolor="#F4F4F4">*EQAB Fee</td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName11"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>
  <?php
	  			$sc = "eqabiden";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>O | EQAB:IDEN</td>
					<td bgcolor="#F4F4F4">*EQAB Fee</td>
					<td style="text-align: center"><?php 
					
				 		if($dbrr[$sc]==1) 
						{
							echo $wait;
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $payWait;
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $paySlip;
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $slipSent;
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $complete;
										}
										}
									
									}
								}
						} ?></td>	<td><?php echo $dbrr["reName12"]; ?></td><td></td><td></td><td></td></tr>
			<?php }
			?>

	<?php 
		if($dbrr["eqabgram"]<>0 || $dbrr["eqabafb"]<>0 || $dbrr["eqabiden"]<>0) 
		{ 
		?>	  
<tr>
	<td>*EQAB Fee</td>
	<td style="text-align: right"><?php 

			if($dbrr["eqabgram"]<>0 && $dbrr["eqabafb"]<>0 && $dbrr["eqabiden"]<>0) 
		{ 
		
			$bt = 2500;
		}
		else
		{
			if($dbrr["eqabgram"]<>0 && $dbrr["eqabafb"]<>0)
			{
			
				$bt = 1800;
			}
			else
			{
				if($dbrr["eqabgram"]<>0 && $dbrr["eqabiden"]<>0)
				{
			
					$bt = 2000;
				}
				else
				{
					if($dbrr["eqabafb"]<>0 && $dbrr["eqabiden"]<>0)
					{
			
						$bt = 2000;
					}
					else
					{
						if($dbrr["eqabgram"]<>0)
						{
						
							$bt = 1000;
						}
						else
						{
							if($dbrr["eqabafb"]<>0)
							{
								
								$bt = 1000;
							}
							else
							{
								if($dbrr["eqabiden"]<>0)
								{
							
									$bt = 1000;
								}
								else
								{
									
									$bt = 0;
								}
							}
						}
					}
				}
			}
		}
		
		
		echo number_format($bt,2); 
		?></td><td colspan="5"></td></tr>
	<?php } $fee = $c+$h+$t+$p+$mb+$mh+$mu+$is+$ih+$bt;
		?>
		

	  
	  <tr bgcolor="#E1EBFF"><td><strong>TOTAL</strong></td>
		  <td style="text-align: right"><strong><?php echo number_format($fee,2); ?></strong></td>
	  <td colspan="5" style="text-align: right;padding-right: 10px">
	  <span class="mr-3"><strong>จำนวนเงินที่ออกใบเสร็จ</strong></span><button style="width: 40%; height: 50px" class="btn btn-outline-dark"></button>
	  </td>
	  
	  </tr>
  </tbody>
</table>
<br><br><br>
	<table width="100%" height="100px" border="0">
  <tbody>
    <tr>
      <td width="60%" style="text-align: right; margin-top: 50px; vertical-align: bottom">Sign</td>
      <td width="40%"><div style="border-bottom:dotted;border-bottom-width: 2px; padding-top: 10px; margin-top: 50px"></div></td>
    </tr>
    <tr>
       <td></td>
		<td style="text-align: center;padding-top: 40px">(<?php echo ucwords($_SESSION["nameTH"]." ".$_SESSION["surnameTH"]); ?>)</td>
      
    </tr>
    <tr>
      <td></td>
		<td style="text-align: center"> <?=thai_date_fullmonth(time())?></td>
      
    </tr>
  </tbody>
</table>
<div  class="divFooter">F/QP043-SP-01/05 แก้ไขครั้งที่ 0 (1 มิ.ย. 64) </div>
	
	

<?php
	}
	else
	{ ?>
		
	<center><h2 class="text-primary">
		<i class="fas fa-user-edit fa-3x mb-3 text-warning"></i><br>
		<strong>Error ! </strong></h2>
	<h4 class="text-danger">ไม่พบข้อมูลสมาชิก</h4>
	</center>
	
	<?php }
	

}
else
{
	echo "<center><h1 class='text-danger pt-5 ft-prompt '><i class='fas fa-user-slash fa-3x pb-3'></i><br><strong>ACCESS DENIED</strong></h1></center>";
	 
	header( "refresh: 3; url=participationPrint.php" );
 	exit(0);
	
	
}
		?>

	
	
<?php unset($_SESSION["pid"]); ?>

</div>   
</body>
</html>