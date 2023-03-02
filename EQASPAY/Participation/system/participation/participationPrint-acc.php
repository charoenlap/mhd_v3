<?php 
require("../../tools/css/scripts.php") ;
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Status</title>

<link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Text&display=swap" rel="stylesheet">

<style>
    

          @media screen {
             #printable {display: none; }          
  div.divFooter {
    display: none;
  }
}
@media print { 
          #non-printable {display: none; }   
 #printable {display: block; }  
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
<?php $id = $_SESSION["ide"]; ?>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td><div style="background-color: white"><img class="p-3" src="../../tools/images/home/MT-TH-MU-H.png" width="300px"></div></td>
      <td><p align="right">วันที่พิมพ์ : <?=thai_date_and_time_short(time())?> น.</p><p align="right" style="font-family: 'Libre Barcode 39 Text', cursive; font-size: 50px;">*<?php echo $id; ?>*</p></td>
    </tr>
  </tbody>
</table>

<div style="padding-left: 20px; padding-right: 10px">
<center><h3><strong>แบบสรุปรายการออกใบเสร็จรับเงิน </strong></h3> 	
<h5>โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์กรภายนอก ประจำปี 2565 </h5></center>
<hr width="100%">
	
	<?php
	$id = $_SESSION["ide"];
	
	require "connection.php";
	$sql = "SELECT*FROM payment_lists WHERE id='$id'
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
			  <th width="15%">
			Status
			</th>
			  <th>
			Receipt Name
			</th>
			  <th>
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
	   $wait = "<span class='text-danger'><i class='fas fa-shopping-cart'></i> รอชำระค่าธรรมเนียม </span>";
	  $payWait = "<span class='text-warning'><i class='fas fa-money-check-alt'></i> ชำระเงินเรียบร้อยแล้ว-รอตรวจสอบหลักฐานชำระเงิน </span>";
	  $paySlip = "<span class='text-info'><i class='fas fa-cash-register'></i> อยู่ระหว่างออกใบเสร็จรับเงิน </span>";
	  $slipSent = " <span class='text-primary'><i class='fas fa-receipt'></i> ออกใบเสร็จรับเงินเรียบร้อยแล้ว </span>";
	  $complete = "<span class='text-success'><i class='fas fa-paper-plane'></i> จัดส่งใบเสร็จรับเงินเรียบร้อยแล้ว </span>";
            $member = "<div class='btn btn-success rounded-pill'><span><i class='fas fa-user'></i> รายการสมัครสมาชิกสมบูรณ์ </span></div>";       
	  ?>
	  
	  <?php
                                        $docNo = $_SESSION["docNo"];
                              
	  			$sc = "eqac";
                                        $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAC</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "3,000.00"; $c = 3000;} ?></td>
					<td><?php 
					
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
						<td><?php echo $dbrr["reName1"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook1"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo1"]; ?></td>
                                                              <td><?php 
                                         if($dbrr[$sc]>=4) 
                                         {
                                                   $reDate1 = $dbrr["reDate1"];
                                                                                echo thai_date_fullmonth(strtotime($reDate1));
                                         }
                                                                      ?>
                                                            </td></tr>
	  
	  </tr>
			<?php }
			?>
	
	 <?php
	  			$sc = "eqah";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAH</td>
					<td style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $h = 4500;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName2"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook2"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo2"]; ?></td>
                                                             <td><?php 
                                         if($dbrr[$sc]>=4) 
                                         {
                                                   $reDate2 = $dbrr["reDate2"];
                                                                                echo thai_date_fullmonth(strtotime($reDate2));
                                         }
                                                                      ?>
                                                            </td></tr>
	  
			<?php }
			?>
	  
	  <?php
	  			$sc = "eqat";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAT</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $t = 4500;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName3"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook3"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo3"]; ?></td>
                                                             <td><?php 
                                         if($dbrr[$sc]>=4) 
                                         {
                                                   $reDate3 = $dbrr["reDate3"];
                                                                                echo thai_date_fullmonth(strtotime($reDate3));
                                         }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqap";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAP</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,000.00"; $p = 2000;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName4"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook4"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo4"]; ?></td>
                                                             <td><?php 
                                         if($dbrr[$sc]>=4)  {
                                                   $reDate4 = $dbrr["reDate4"];
                                                                                echo thai_date_fullmonth(strtotime($reDate4));
                                         }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "beqam";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | B-EQAM</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,000.00"; $mb = 2000;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName5"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook5"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo5"]; ?></td>
                                                             <td><?php 
                                         if($dbrr[$sc]>=4) 
                                         {
                                                   $reDate5 = $dbrr["reDate5"];
                                                                                echo thai_date_fullmonth(strtotime($reDate5));
                                         }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "heqam";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | H-EQAM</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "1,500.00<br>"; $mh = 1500;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName6"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook6"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo6"]; ?></td>
                                                              <td><?php 
                                                                      if($dbrr[$sc]>=4) {
                                                                                $reDate6 = $dbrr["reDate6"];
                                                                                echo thai_date_fullmonth(strtotime($reDate6));
                                                                      }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "uceqam";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | UC-EQAM</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "1,000.00"; $mu = 1000;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName7"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook7"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo7"]; ?></td>
                                                              <td><?php 
                                                                                if($dbrr[$sc]>=4) 
                                                                                {
                                                                                          $reDate7 = $dbrr["reDate7"];
                                                                                echo thai_date_fullmonth(strtotime($reDate7));
                                                                                }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaisyp";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAI:SYP</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $is = 2200;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName8"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook8"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo8"]; ?></td>
                                                             <td>
                                                                       <?php 
                                                                      if($dbrr[$sc]>=4) 
                                                                      {
                                                                                $reDate8 = $dbrr["reDate8"];
                                                                                echo thai_date_fullmonth(strtotime($reDate8));
                                                                      }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaihbv";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAI:HBV</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $ih = 2200;} ?></td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName9"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook9"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo9"]; ?></td>
                                                              <td><?php 
                                         if($dbrr[$sc]>=4) 
                                         {
                                                   $reDate9 = $dbrr["reDate9"];
                                                                                echo thai_date_fullmonth(strtotime($reDate9));
                                         }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabgram";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAB:GRAM</td>
					<td bgcolor="#F4F4F4">*EQAB Fee</td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName10"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook10"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo10"]; ?></td>
                                                         <td><?php
                                                                      if($dbrr[$sc]>=4) 
                                                                      {
                                                                                $reDate10 = $dbrr["reDate10"];
                                                                                echo thai_date_fullmonth(strtotime($reDate10));
                                                                      }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabafb";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAB:AFB</td>
					<td bgcolor="#F4F4F4">*EQAB Fee</td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName11"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook11"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo11"]; ?></td>
                                                            <td><?php 
                                                                      if($dbrr[$sc]>=4)  
                                                                      {
                                                                                $reDate11 = $dbrr["reDate11"];
                                                                                echo thai_date_fullmonth(strtotime($reDate11));
                                                                      }
                                                                                
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>
  <?php
	  			$sc = "eqabiden";
				  $doc = $sc."p";
				if(($dbrr[$sc]==4) && $dbrr[$doc]==$docNo)
				{ ?>
					<tr>
					<td>O | EQAB:IDEN</td>
					<td bgcolor="#F4F4F4">*EQAB Fee</td>
					<td><?php 
					
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
						} ?></td>	<td><?php echo $dbrr["reName12"]; ?></td> <td  style="text-align: center"><?php echo $dbrr["reBook12"]; ?></td>
                                                            <td style="text-align: center"><?php echo $dbrr["reNo12"]; ?></td>
                                                            <td><?php if($dbrr[$sc]>=4) 
                                                            {
                                                                                $reDate12 = $dbrr["reDate12"];
                                                                                echo thai_date_fullmonth(strtotime($reDate12));
                                                            }
                                                                      ?>
                                                            </td></tr>
			<?php }
			?>

	<?php 
		if($dbrr["eqabgram"]==4 || $dbrr["eqabafb"]==4 || $dbrr["eqabiden"]==4) 
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
<div id="printable">
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
</div>
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
	
	<?php } ?>
	


<div id="non-printable">  
          <button type="button" style=" height: 100px; font-size: 30pt" class="btn btn-success  mr-5" onClick="window.print()">
                    <i class="fas fa-print"></i> Print
          </button>
          
<?php unset($_SESSION["ind"]); ?>
</div>	
	
<?php	
unset($_SESSION["pid"]); ?>

</div>   
</body>
</html>