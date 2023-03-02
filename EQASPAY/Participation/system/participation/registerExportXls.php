<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8" /> 
<?php require("../../tools/css/scripts.php") ?>
<style>
.status
	{
		color: green;
		font-weight: bold;
	}
.statusOver
	{
		color: red;
		font-weight: bold;
	}
</style>
	
<?php
	$d = date("Y-m-d");
	header("Content-Type: application/vnd.ms-excel");
	header ("Content-Disposition: attachment; filename=EQASMUMT-2023-$d.xls");//ชื่อไฟล์
?>
	<title>EQAS MUMT 2023</title>	
	<html xmlns:o="urn:schemas-microsoft-com:office:office"  xmlns:x="urn:schemas-microsoft-com:office:excel"  xmlns="http://www.w3.org/TR/REC-html401"> 
</head>

<body>
		<?php require("connection.php");
		$va = null;
		$sql = "SELECT * FROM payment_lists WHERE id <> '$va' ORDER BY no DESC";
		$result = mysqli_query($link, $sql);
		$rowcount = mysqli_num_rows($result);
		
			 ?>	
<p><?php echo "Update : ". $d; ?></p>
<table width="100%" border="0" class="table table-sm table-hover">
			  <tbody>
				  <thead class="thead-dark">
				<tr style="padding-top: 100px;">
				<th>No.</th>
				  <th align="center" width="10%"><h>ID</h></th>
				  <th align="center" width="33%"><h>Participant</h></th>
					<th align="center" width="3%"><h>C</h></th>
					<th align="center" width="3%"><h>H</h></th>
					<th align="center" width="3%"><h>T</h></th>
					<th align="center" width="3%"><h>P</h></th>
					<th align="center" width="3%"><h>BM</h></th>
					<th align="center" width="3%"><h>HM</h></th>
					<th align="center" width="3%"><h>UM</h></th>
					<th align="center" width="3%"><h>SY</h></th>
					<th align="center" width="3%"><h>HB</h></th>
					<th align="center" width="3%"><h>GR</h></th>
					<th align="center" width="3%"><h>AF</h></th>
					<th align="center" width="3%"><h>ID</h></th>
					<th align="center" width="6%"><h>EQAB Fee</h></th>
					<th align="center" width="5%"><h>รวมเงิน</h></th>
					<th align="center" width="5%"><h>ชำระแล้ว</h></th>
					<th align="center" width="5%"><h>ค้างชำระ</h></th>
				</tr>
				  </thead>

				<?php 
				  $i = 1;
				if (mysqli_num_rows($result) > 0) {
  				while($row = mysqli_fetch_assoc($result)) 
				{
    			?>
				  
				<tr valign="middle">
					<td style="text-align: center"><?php echo $i;  ?></td>
					<td style="text-align: center">
						<form action="edit-form.php" method="post">
							<?php echo $row["id"]; ?>
							<input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
						</form>
					</td>
					<td style="text-align: left"><?php echo $row["instituteName"]; $no = $row["no"];?> </td>
					
				<?php $sql2 = "SELECT*FROM payment_lists WHERE no='$no'";
						$result2 = mysqli_query($link, $sql2); 
						$dbrr = mysqli_fetch_array($result2);
					?>
					<td>
						<?php 
						if($dbrr["eqac"]>= 1 && $dbrr["eqac"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>3000</p>";
								$cw = 3000;
								$cp = 0;
								$c = 3000;
							
						}
						else
						{
							if($dbrr["eqac"]>3)
							{	
								echo "<p class = 'status'>3000</p>";
								$cw = 0;
								$cp = 3000;
								$c = 3000;	
							}
							else
							{
								$cw = 0;
								$cp = 0;
								$c = 0;	
							}
							
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["eqah"]>= 1 && $dbrr["eqah"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>4500</p>";
								$hp = 0;
								$hw = 4500;
								$h = 4500;
						}
						else
						{
							if($dbrr["eqah"]>3)
							{
								echo "<p class = 'status'>4500</p>";
								$hp = 4500;
								$hw = 0;
								$h = 4500;
							}
							else
							{
								$hp = 0;
								$hw = 0;
								$h = 0;	
							}
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["eqat"]>= 1 && $dbrr["eqat"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>4500</p>";
								$tp = 0;
								$tw = 4500;
								$t = 4500;
						}
						else
						{
							if($dbrr["eqat"]>3)
							{
								echo "<p class = 'status'>4500</p>";
								$tp = 4500;
								$tw = 0;
								$t = 4500;
							}
							else
							{
								$tp = 0;
								$tw = 0;
								$t = 0;
							}
						
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["eqap"]>= 1 && $dbrr["eqap"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>2000</p>";
								$pp = 0;
								$pw = 2000;
								$p = 2000;
						}
						else
						{
							if($dbrr["eqap"]>3)
							{
								echo "<p class = 'status'>2000</p>";
								$pp = 2000;
								$pw = 0;
								$p = 2000;
							}
							else
							{
								$p = 0;
								$pp = 0;
								$pw = 0;
							
							}
						
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["beqam"]>= 1 && $dbrr["beqam"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>2000</p>";
							$bmw = 2000;
							$bmp = 0;
							$bm = 2000;
						}
						else
						{
							if($dbrr["beqam"]>3)
							{
								echo "<p class = 'status'>2000</p>";
								$bmw = 0;
								$bmp = 2000;
								$bm = 2000;
							}
							else
							{
								$bmw = 0;
								$bmp = 0;
								$bm = 0;	
							}
						
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["heqam"]>= 1 && $dbrr["heqam"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>1500</p>";
							$hmp = 0;
							$hmw = 1500;
							$hm = 1500;
						}
						else
						{
							if($dbrr["heqam"]>3)
							{
								echo "<p class = 'status'>1500</p>";
								$hmp = 1500;
								$hmw = 0;
								$hm = 1500;
							}
							else
							{
								$hmp = 0;
								$hmw = 0;
								$hm = 0;
							}
							
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["uceqam"]>= 1 && $dbrr["uceqam"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>1000</p>";
							$ucmw = 1000;
							$ucmp = 0;
							$ucm = 1000;
						}
						else
						{
							if($dbrr["uceqam"]>3)
							{
								echo "<p class = 'status'>1000</p>";
								$ucmw = 0;
								$ucmp = 1000;
								$ucm = 1000;
							}
							else
							{
								$ucmw = 0;
								$ucmp = 0;
								$ucm = 0;
							}
						
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["eqaisyp"]>= 1 && $dbrr["eqaisyp"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>2200</p>";
							$sypw = 2200;
							$sypp = 0;
							$syp = 2200;
						}
						else
						{
							if($dbrr["eqaisyp"]>3)
							{
								echo "<p class = 'status'>2200</p>";
								$sypw = 0;
								$sypp = 2200;
								$syp = 2200;
							}
							else
							{
								$sypw = 0;
								$sypp = 0;
								$syp = 0;
							}
						
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["eqaihbv"]>= 1 && $dbrr["eqaihbv"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>2200</p>";
							$hbvw = 2200;
							$hbvp = 0;
							$hbv = 2200;
						}
						else
						{
							if($dbrr["eqaihbv"]>3)
							{
								echo "<p class = 'status'>2200</p>";
								$hbvw = 0;
								$hbvp = 2200;
								$hbv = 2200;
							}
							else
							{
								$hbvw = 0;
								$hbvp = 0;
								$hbv = 0;
							}
						
						}
						?>
					</td>
					<td>
						<?php 
							if($dbrr["eqabgram"]>= 1 && $dbrr["eqabgram"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>WAIT</p>";
							$b1w = 1;
							$b1p = 0;
							$gram = 1;
						}
						else
						{
							if($dbrr["eqabgram"]>3)
							{
								echo "<p class = 'status'>PAID</p>";
								$b1w = 0;
								$b1p = 1;
								$gram = 1;
							}
							else
							{
								
								$b1w = 0;
								$b1p = 0;
								$gram = 0;
							}
							
						}
						?>
					</td>
					<td>
						<?php 
						if($dbrr["eqabafb"]>= 1 && $dbrr["eqabafb"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>WAIT</p>";
							$b2w = 3;
							$b2p = 0;
							$afb = 3;
						}
						else
						{
							if($dbrr["eqabafb"]>3)
							{
								echo "<p class = 'status'>PAID</p>";
							$b2w = 0;
							$b2p = 3;
							$afb = 3;
							}
							else
							{
								
								$b2w = 0;
								$b2p = 0;
								$afb = 0;
							}
							
						}
						?>
					</td>
					<td>
						<?php 
					if($dbrr["eqabiden"]>= 1 && $dbrr["eqabiden"] <= 3 )
						{ 
							echo "<p class = 'statusOver'>WAIT</p>";
							$b3w = 5;
							$b3p = 0;
							$iden = 5;
						}
						else
						{
							if($dbrr["eqabiden"]>3)
							{
								echo "<p class = 'status'>PAID</p>";
								$b3w = 0;
								$b3p = 5;
								$iden = 5;
							}
							else
							{
								$b3w = 0;
								$b3p = 0;
								$iden = 0;
							}
					
						}
						
					$eqabSum = $gram + $afb + $iden;
					if($eqabSum == 1)
					{
						$eqabPay = 1000;
					}
					else
					{
						if($eqabSum == 3)
						{
							$eqabPay = 1000;
						}
						else
						{
							if($eqabSum == 4)
							{
								$eqabPay = 1800;
							}
							else
							{
								if($eqabSum == 5)
								{
									$eqabPay = 1000;
								}
								else
								{
									if($eqabSum == 6)
									{
										$eqabPay = 2000;
									}
									else
									{
										if($eqabSum == 8)
										{
											$eqabPay = 2000;
										}
										else
										{
											if($eqabSum == 9)
											{
												$eqabPay = 2500;
											}
										}
									}
								}
							}
						}
					}
					
					$eqabSumPay = $b1p + $b2p + $b3p;
					if($eqabSumPay == 1)
					{
						$eqabPaid = 1000;
					}
					else
					{
						if($eqabSumPay == 3)
						{
							$eqabPaid = 1000;
						}
						else
						{
							if($eqabSumPay == 4)
							{
								$eqabPaid = 1800;
							}
							else
							{
								if($eqabSumPay == 5)
								{
									$eqabPaid = 1000;
								}
								else
								{
									if($eqabSumPay == 6)
									{
										$eqabPaid = 2000;
									}
									else
									{
										if($eqabSumPay == 8)
										{
											$eqabPaid = 2000;
										}
										else
										{
											if($eqabSumPay == 9)
											{
												$eqabPaid = 2500;
											}
										}
									}
								}
							}
						}
					}
					
					$eqabSumWait = $b1w + $b2w + $b3w;
					if($eqabSumWait == 1)
					{
						$eqabWait = 1000;
					}
					else
					{
						if($eqabSumWait == 3)
						{
							$eqabWait = 1000;
						}
						else
						{
							if($eqabSumWait == 4)
							{
								$eqabWait = 1800;
							}
							else
							{
								if($eqabSumWait == 5)
								{
									$eqabWait = 1000;
								}
								else
								{
									if($eqabSumWait == 6)
									{
										$eqabWait = 2000;
									}
									else
									{
										if($eqabSumWait == 8)
										{
											$eqabWait = 2000;
										}
										else
										{
											if($eqabSumWait == 9)
											{
												$eqabWait = 2500;
											}
										}
									}
								}
							}
						}
					}
					
						?>
					</td>
					<td><?php echo $eqabPay; ?></td>
				<!-- ยอดทั้งหมด -->
					<td bgcolor="#C1DFFB"><?php 
						$total = $c+$h+$t+$p+$bm+$hm+$ucm+$syp+$hbv+$eqabPay;
						echo number_format($total, 0); 
						?>
					</td>
				<!-- ชำระแล้ว -->
					<td bgcolor="#DCFCDD">
						<?php
							$totalPay = $cp+$hp+$tp+$pp+$bmp+$hmp+$ucmp+$sypp+$hbvp+$eqabPaid;
							echo number_format($totalPay, 0);
						?>
					</td>
				<!-- ค้างชำระ -->
					<td bgcolor="#FDAEB0">
					<?php
							$totalWait = $cw+$hw+$tw+$pw+$bmw+$hmw+$ucmw+$sypw+$hbvw+$eqabWait;
							echo number_format($totalWait, 0);
						?>
					</td>
			<?php
					$c = 0;
					$h = 0;
					$t = 0;
					$p = 0;
					$bm = 0;
					$hm = 0;
					$ucm = 0;
					$syp = 0;
					$hbv = 0;
					$eqabPay = 0;
					
					$cp = 0;
					$hp = 0;
					$tp = 0;
					$pp = 0;
					$bmp = 0;
					$hmp = 0;
					$ucmp = 0;
					$sypp = 0;
					$hbvp = 0;
					$eqabPaid = 0;
					
					$cw = 0;
					$hw = 0;
					$tw = 0;
					$pw = 0;
					$bmw = 0;
					$hmw = 0;
					$ucmw = 0;
					$sypw = 0;
					$hbvw = 0;
					$eqabWait = 0;
					
					$i++;
				}
				}
				  else
				  {
					  echo "<tr align='center'><td colspan ='3'><h3 class='p-5 text-danger'><i class='fas fa-exclamation'></i> ยังไม่มีข้อมูล</h3></td></tr>"; 
				  } 
				?>		
	
				
			  </tbody>
			</table>

<?php 
	mysqli_close($link);
	?>
	
</body>
</html>