<?php 
require("../../tools/css/scripts.php") ;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Status</title>
<style>

@media print
{
    .page-break { display:block;height:1px; page-break-before:always; }
    @page {size: landscape}
    div.divFooter {
        position: fixed;
        bottom: 20px; 
    }
}
</style>
</head>

<body style="padding: 2%" class="ft-sarabun !important">
<div style="padding-left: 20px; padding-right: 10px">
<table width="100%" border="0">
  <tbody>
    <tr>
      <td></td>
      <td><p align="right">ข้อมูล ณ วันที่ <?=thai_date_and_time(time())?> น.</p></td>
    </tr>
  </tbody>
</table>
<?php
    if($_POST["id"] <> null)
    {
       $id = $_POST["id"]; 
    }
	else
    {
        $id = $_GET["id"]; 
    }
	
	require "connection.php";
	$sql = "SELECT*FROM payment_lists WHERE id='$id' 
	";
	$result = mysqli_query($link, $sql); 
	$dbrr = mysqli_fetch_array($result);
    
	if($id==$dbrr["id"])
	{
	?>
<center><h3><strong>บันทึกการออกใบเสร็จรับเงิน</strong></h3> 	
<h4 class="ft-sarabun">โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์กรภายนอก ประจำปี 2566 </h4></center>
<hr width="100%">
	
	

    <h2>รหัสสมาชิก: <?php echo $id; ?></h2>


	<h5 class="ft-sarabun">ห้องปฏิบัติการ <?php echo $dbrr["labName"]; ?> <?php echo $dbrr["instituteName"]; ?></h5>
 <br> 		
<h4 class="ft-sarabun">โครงการที่ชำระเงิน</h4>
	<table width="100%" border="1" cellpadding="7px">
  <tbody>
	  <thead bgcolor="#D8D8D8">
		  <tr>
	  		<th>Schemes</th>
			<th>Fee</th>
			<th>Status</th>
			<th>Ctrl. No</th>
			<th>ออกใบเสร็จในนาม</th>
			<th>ที่อยู่จัดส่งใบเสร็จ</th>
			<th>วันที่ออกใบเสร็จ</th>
			<th>เล่มที่</th>
			<th>เลขที่</th>
			<th>วันที่ส่งใบเสร็จ</th>
			<th>Tracking No.</th>
            <th>ผู้บันทึก/<br>วันที่บันทึก</th>
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
	  			$sc = "eqac";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
						<td>EQAC | Clinical Chemistry</td>
						<td><?php if($dbrr[$sc]<>0) {echo "3,000.00"; $c = 3000;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>
						<?php $n = 1; require("status-staff-find-sup.php");?> 
	  				</tr>
			<?php ;} ?>
	
	 <?php
	  			$sc = "eqah";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
						<td>EQAH | Thyroid Hormones</td>
						<td><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $h = 4500;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>
					
						<?php $n = 2; require("status-staff-find-sup.php"); ?>
	  </tr>
			<?php ;}
			?>
	  
	  <?php
	  			$sc = "eqat";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAT | Tumor Markers</td>
					<td width="10%"><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $t = 4500;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>
	  	<?php $n = 3; require("status-staff-find-sup.php"); ?>
	  </tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqap";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAP | Parasitology</td>
					<td width="10%"><?php if($dbrr[$sc]<>0) {echo "2,000.00"; $p = 2000;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>	<?php $n = 4; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "beqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>B-EQAM | Complete Blood Count</td>
					<td width="10%">
						<?php 
				 if(($dbrr[$sc]<>0) && ($dbrr["beqamc"] <> "*ไม่ได้รับสิทธิ์")) 
				 {echo "2,500.00<br>"; $mb = 2500;} 
						
						echo $dbrr["beqamc"];
						?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td><?php $n = 5; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "heqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>H-EQAM | Blood Flim Examination</td>
					<td width="10%"><?php if(($dbrr[$sc]<>0) && ($dbrr["heqamc"] <> "*ไม่ได้รับสิทธิ์"))  {
					echo "1,500.00<br>"; 
					$mh = 1500;} 
					
				 echo $dbrr["heqamc"];
						
						?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td><?php $n = 6; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "uceqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>UC-EQAM-Urine | Cytohematology Proficiency Test</td>
						<td width="10%"><?php if($dbrr[$sc]<>0) {echo "1,200.00"; $mu = 1200;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>	<?php $n = 7; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaisyp";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAI | Syphilis</td>
						<td width="10%"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $is = 2200;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td><?php $n = 8; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaihbv";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAI | HBV</td>
						<td width="10%"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $ih = 2200;} ?></td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>	<?php $n = 9; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabgram";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAB | GRAM</td>
					<td bgcolor="#F4F4F4">*see EQAB Fee</td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>	<?php $n = 10; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabafb";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAB | AFB</td>
					<td bgcolor="#F4F4F4">*see EQAB Fee</td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>	<?php $n = 11; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>
  <?php
	  			$sc = "eqabiden";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAB | IDEN&AST</td>
					<td bgcolor="#F4F4F4">*see EQAB Fee</td>
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
                                                                                                    else
                                                                                                              {
                                                                                                              if($dbrr[$sc]==6) 
										          {
											         echo $member;
										          }
                                                                                                    }
                                                                                                              
										}
									
									}
								}
						} ?></td>	<?php $n = 12; require("status-staff-find-sup.php"); ?></tr>
			<?php }
			?>

	<?php 
		if($dbrr["eqabgram"]<>0 || $dbrr["eqabafb"]<>0 || $dbrr["eqabiden"]<>0) 
		{ 
		?>	  
<tr>
	<td>EQAB Fee</td>
	<td><?php 

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
		?></td>
	<?php } $fee = $c+$h+$t+$p+$mb+$mh+$mu+$is+$ih+$bt;
		?>
	<?php if($bt>0)
		{ ?>
			
		
		<td colspan="9" bgcolor="#F4F4F4"></td>
	  </tr>
	  <?php } ?>
	  <tr bgcolor="#E1EBFF"><td><strong>GRAND TOTAL</strong></td>
		  <td><strong><?php echo number_format($fee,2); ?></strong></td>
	  
	  
	  <td colspan="10">
	  <?php require("baht.php");
	echo "[";
	echo  convert($fee); 
	echo  "]"; 
		  
	?>	
	  </td></tr>
  </tbody>
</table>


</div>
    <div  class="divFooter ft-sarabun mt-3">
          <span style="font-size: 8pt !important;">F/QP043-SP-01/05 แก้ไขครั้งที่ 0 ( 14 มิ.ย. 64)</span>
          </div>
<?php
	}
	else
	{ ?>
		
	<center><h2 class="text-primary">
		<i class="fas fa-user-edit fa-3x mb-3 text-warning"></i><br>
		<strong>ไม่พบข้อมูล [ รหัสสมาชิก: <?php echo $id; ?> ] ในฐานข้อมูลการชำระเงิน</strong></h2>
	</center>
	
	<?php }
	
	

?>
</div>

   
</body>
</html>