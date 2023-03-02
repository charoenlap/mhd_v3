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
     #non-printable {display: none; }   
     #printable {display: block; }   
} 
</style>
</head>

<body>
<div id="non-printable" class="pt-3" style="background-color:#FFE2E3">
<center>
<button type="button" class="btn btn-danger btn-lg mr-5" onClick="window.print()"><i class="fas fa-print"></i> พิมพ์สถานะการสมัครสมาชิก</button>
</center>
<hr style="border-top: dashed red 1px">
</div>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td><div style="background-color: white"><img class="p-3" src="../../tools/images/home/MT-TH-MU-H.png" width="300px"></div></td>
      <td><p align="right">วันที่ตรวจสอบ: <?=thai_date_and_time(time())?> น.</p></td>
    </tr>
  </tbody>
</table>

<div style="padding-left: 20px; padding-right: 10px">
<center><h3 class="ft-prompt"><strong>สถานะการสมัครสมาชิก</strong></h3> 	
<h4>โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์กรภายนอก ประจำปี 2564 </h4></center>
<hr width="100%">
	
	<?php
	$id = $_POST["id"];
	$pMail = strtolower($_POST["pMail"]);
	
	require "connection.php";
	$sql = "SELECT*FROM participantRegister WHERE id='$id' AND pMail ='$pMail'
	";
	$result = mysqli_query($link, $sql); 
	$dbrr = mysqli_fetch_array($result);

	?>

<?php
	if($id==$dbrr["id"] && $pMail == $dbrr["pMail"])
	{
	?>
    <h5>รหัสสมาชิก: <?php echo $id; ?></h5>
	<h5><?php echo $dbrr["instituteName"]; ?></h5>
	<h5><?php echo $dbrr["labName"]; ?></h5>
 <br> 		
<h4>โครงการที่สมัคร</h4>
	<table width="100%" border="1" cellpadding="7px">
  <tbody>
	  <thead bgcolor="#D8D8D8">
		  <tr>
	  		<th>
			Schemes
			</th>
			  <th>
			Fee
			</th>
			  <th>
			Payer**
			</th>
			  <th>
			Status
			</th>
		  </tr>
	  </thead>
	  

	  
	 
		
    
	  
	  <?php
	  			$sc = "eqac";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td width="20%">EQAC | Clinical Chemistry</td>
					<td width="15%"><?php if($dbrr[$sc]<>0) {echo "3,000.00"; $c = 3000;} ?></td>
						<td width="5%"><?php echo $dbrr["eqacs"]; ?></td>
					<td><?php 
						$a = 1;
				 		require("status-condition.php")
				 
				 		 ?></td>
	  </tr>
			<?php }
			?>
	
	 <?php
	  			$sc = "eqah";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAH | Thyroid Hormones</td>
					<td><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $h = 4500;} ?></td>
					<td><?php echo $dbrr["eqahs"]; ?></td>
					<td><?php 
						$a = 2;
				 		require("status-condition.php") ;?>
						</td></tr>
			<?php }
			?>
	  
	  <?php
	  			$sc = "eqat";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAT | Tumor Markers</td>
					<td width="10%"><?php if($dbrr[$sc]<>0) {echo "4,500.00"; $t = 4500;} ?></td>
						<td><?php echo $dbrr["eqats"]; ?></td>
					<td><?php 
						$a = 3;
				 		require("status-condition.php");  ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqap";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAP | Parasitology</td>
					<td width="10%"><?php if($dbrr[$sc]<>0) {echo "2,000.00"; $p = 2000;} ?></td>
						<td><?php echo $dbrr["eqaps"]; ?></td>
					<td><?php 
						$a = 4;
				 		require("status-condition.php"); ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "beqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>B-EQAM | Complete Blood Count</td>
						
					<td width="10%"><?php 
				 if(($dbrr[$sc]<>0) && ($dbrr["beqamc"] <> "*ไม่ได้รับสิทธิ์")) 
				 {
					 echo "2,000.00<br>"; 
					 $mb = 2000;
				 } 
						
						echo $dbrr["beqamc"];
						?></td>
						<td><?php echo $dbrr["beqams"]; ?></td>
					<td><?php 
						$a = 5;
				 		if(($dbrr[$sc]==1) && ($dbrr["beqamc"]) <> "*ไม่ได้รับสิทธิ์" )
						{
							echo "<span class='text-danger font-weight-bold'>".$wait." รอชำระค่าธรรมเนียม</span>";
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $wait." ";
								echo "<span class='text-warning font-weight-bold'>".$payWait." ชำระเงินเรียบร้อยแล้ว-รอตรวจสอบหลักฐานชำระเงิน</span>";
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $wait." ";
									echo $payWait." ";
									echo "<span class='text-primary font-weight-bold'>".$paySlip." อยู่ระหว่างออกใบเสร็จรับเงิน</span>";
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $wait." ";
										echo $payWait." ";
										echo $paySlip." ";
										echo "<span class='text-info font-weight-bold'>".$slipSent." ".$dbrr["reTrack".$a]." จัดส่งใบเสร็จรับเงินเรียบร้อยแล้ว</span>";
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $wait." ";
											echo $payWait." ";
											echo $paySlip." ";
											echo $slipSent." ".$dbrr["reTrack".$a]." ";
											echo "<span class='text-success font-weight-bold'>".$complete." รายการสมัครเสร็จสมบูรณ์ - เข้าร่วมเป็นสมาชิกประจำปี 2564</span>";
										}
										}
									
									}
								}
						} ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "heqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>H-EQAM | Blood Flim Examination</td>
					<td width="10%">
			
						<?php
				$a = 6;
					if(($dbrr[$sc]<>0) && ($dbrr["heqamc"] <> "*ไม่ได้รับสิทธิ์")) 
				  {
					 echo "1,500.00<br>"; 
					 		$mh = 1500;
					 
				 } echo $dbrr["heqamc"]; ?></td>
						<td><?php echo $dbrr["heqams"]; ?></td>
					<td><?php 
					
				 		if(($dbrr[$sc]==1) && ($dbrr["heqamc"]) <> "*ไม่ได้รับสิทธิ์" )
						{
							echo "<span class='text-danger font-weight-bold'>".$wait." รอชำระค่าธรรมเนียม</span>";
						}
						else
						{
							if($dbrr[$sc]==2) 
							{
								echo $wait." ";
								echo "<span class='text-warning font-weight-bold'>".$payWait." ชำระเงินเรียบร้อยแล้ว-รอตรวจสอบหลักฐานชำระเงิน</span>";
							}
							else
								{
								if($dbrr[$sc]==3) 
								{
									echo $wait." ";
									echo $payWait." ";
									echo "<span class='text-primary font-weight-bold'>".$paySlip." อยู่ระหว่างออกใบเสร็จรับเงิน</span>";
								}
								else
									{
									if($dbrr[$sc]==4) 
									{
										echo $wait." ";
										echo $payWait." ";
										echo $paySlip." ";
										echo "<span class='text-info font-weight-bold'>".$slipSent." ".$dbrr["reTrack".$a]." จัดส่งใบเสร็จรับเงินเรียบร้อยแล้ว</span>";
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $wait." ";
											echo $payWait." ";
											echo $paySlip." ";
											echo $slipSent." ".$dbrr["reTrack".$a]." ";
											echo "<span class='text-success font-weight-bold'>".$complete." รายการสมัครเสร็จสมบูรณ์ - เข้าร่วมเป็นสมาชิกประจำปี 2564</span>";
										}
										}
									
									}
								}
						} ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "uceqam";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>UC-EQAM-Urine | Cytohematology Proficiency Test</td>
						<td width="10%"><?php if($dbrr[$sc]<>0) {echo "1,000.00"; $mu = 1000;} ?></td>
						<td><?php echo $dbrr["uceqams"]; ?></td>
					<td><?php 
						$a = 7;
				 		require("status-condition.php");  ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaisyp";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAI | Syphilis</td>
						<td width="10%"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $is = 2200;} ?></td>
						<td><?php echo $dbrr["eqaisyps"]; ?></td>
					<td>
						<?php 
					$a = 8;
				 		require("status-condition.php");  ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaihbv";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAI | HBV</td>
						<td width="10%"><?php if($dbrr[$sc]<>0) {echo "2,200.00"; $ih = 2200;} ?></td>
						<td><?php echo $dbrr["eqaihbvs"]; ?></td>
					<td><?php 
						$a = 9;
				 		require("status-condition.php"); ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabgram";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAB | GRAM</td>
					<td bgcolor="#F4F4F4">*see EQAB Fee</td>
					<td><?php echo $dbrr["eqabgrams"]; ?></td>
					<td><?php 
						$a = 10;
				 		require("status-condition.php"); ?></td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabafb";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAB | AFB</td>
					<td bgcolor="#F4F4F4">*see EQAB Fee</td>
					<td><?php echo $dbrr["eqabafbs"]; ?></td>
					<td><?php 
					$a = 11;
				 		require("status-condition.php"); ?></td></tr>
			<?php }
			?>
  <?php
	  			$sc = "eqabiden";
				if($dbrr[$sc]<>0)
				{ ?>
					<tr>
					<td>EQAB | IDEN&AST</td>
					<td bgcolor="#F4F4F4">*see EQAB Fee</td>
						<td><?php echo $dbrr["eqabidens"]; ?></td>
					<td><?php 
					$a = 12;
				 		require("status-condition.php");  ?></td></tr>
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
			
		
		<td colspan="2" bgcolor="#F4F4F4"></td>
	  </tr>
	  <?php } ?>
	  <tr bgcolor="#E1EBFF"><td><strong>GRAND TOTAL</strong></td>
		  <td><strong><?php echo number_format($fee,2); ?></strong></td>
	  
	  
	  <td colspan="2">
	  <?php require("baht.php");
	echo "[";
	echo  convert($fee); 
	echo  "]"; 
		  
	?>	
	  </td></tr>
  </tbody>
</table>
<br>
<p><strong>*หมายเหตุ</strong> รายการสมัครสถานะ <strong class="text-danger"><i class="fas fa-shopping-cart"></i> รอชำระค่าธรรมเนียม</strong> กรุณาชำระเงินภายในวันที่ <strong class="text-danger">31 มีนาคม 2564</strong><br>
<strong>**ช่องผู้ชำระเงิน (Payer)</strong> หากแสดงอักษร S (self) หมายถึง หน่วยงานชำระเงินเอง / ไม่ระบุ, ไม่เจาะจงผู้ชำระเงิน</p>
<h5><strong>สถานะการสมัครสมาชิก (status)</strong></h5>
<p class="pl-5"><strong>1. <i class="fas fa-shopping-cart"></i> รอชำระค่าธรรมเนียม</strong> | เจ้าหน้าที่ตรวจสอบรายการสมัครเรียบร้อยแล้ว สมาชิกสามารถดำเนินการชำระเงินได้ทันที <br>
<strong>2. <i class='fas fa-money-check-alt'></i> ชำระเงินเรียบร้อยแล้ว-รอตรวจสอบหลักฐานชำระเงิน</strong> | สมาชิกนำส่งหลักฐานชำระเงินเรียบร้อยแล้ว อยู่ระหว่างตรวจสอบเพื่อออกใบเสร็จ<br>
<strong>3. <i class='fas fa-cash-register'></i> อยู่ระหว่างออกใบเสร็จรับเงิน</strong>  | รอเจ้าหน้าที่การเงินออกใบเสร็จรับเงิน<br>
<strong>4. <i class='fas fa-box-open'></i> จัดส่งใบเสร็จรับเงินเรียบร้อยแล้ว</strong> | ทางศูนย์ฯ จัดส่งใบเสร็จรับเงินให้กับสมาชิกเรียบร้อยแล้ว ท่านสามารถติดตามสถานะการจัดส่งได้ที่ ไปรษณีย์ไทย <a href="https://track.thailandpost.co.th" target="_blank">https://track.thailandpost.co.th</a> <br>
<strong>5. <i class='fas fa-user-check'></i> รายการสมัครเสร็จสมบูรณ์ - เข้าร่วมเป็นสมาชิกประจำปี 2564</strong> | สมาชิกได้สมัครเข้าร่วมโครงการ ประจำปี 2564 เรียบร้อยแล้ว<br>
</p>
<div class="page-break" style="padding-top: 50px">
<h5><i class="fas fa-money-check-alt"></i> | <strong>ช่องทางชำระเงิน</strong></h5>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="15%" style="vertical-align: top">1. ชำระเงินสด</td>
      <td width="85%">ศูนย์พัฒนามาตรฐานและการประเมินผลิตภัณฑ์ ชั้น 1 <br>
อาคารคณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล <br>
(โรงพยาบาลศิริราช บางกอกน้อย กรุงเทพฯ)<br>
*ติดต่อ-นัดหมายกับเจ้าหน้าที่ศูนย์ฯ ก่อนเข้ารับบริการ <br><br>
</td>
    </tr>
    <tr>
      <td style="vertical-align: top">2. โอนเงินเข้าบัญชี <br>
		<img src="https://i.pinimg.com/originals/dd/d0/ee/ddd0ee575cbe0691f917e214d70e6a51.png" height="100px">
		</td>
      <td>ผ่านธนาคาร / ATM / ธุรกรรมออนไลน์ (E-banking)<br>
แอปพลิเคชัน (mobile banking) เข้าบัญชี<br>
<strong>ธนาคารไทยพาณิชย์ จำกัด (มหาชน) <br>
เลขที่ 016-452491-2<br>
ชื่อบัญชี “โครงการ การประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก คณะเทคนิคการแพทย์”</strong>
<br><br>
</td>
    </tr>
    <tr>
      <td style="vertical-align: top">3. เช็คธนาคาร</td>
      <td>ในนาม <strong>“โครงการ การประเมินคุณภาพทางห้องปฏิบัติการโดยองค์กรภายนอก คณะเทคนิคการแพทย์”</strong></td>
    </tr>
  </tbody>
</table>
<br><hr><br>
<h5><i class="fas fa-file-invoice-dollar"></i> | <strong>การส่งหลักฐานชำระเงินค่าธรรมเนียม</strong></h5>
<span>เมื่อสมาชิกดำเนินการชำระเงินค่าธรรมเนียมการสมัครสมาชิกเรียบร้อยแล้ว ต้องส่งสำเนาหลักฐานการชำระเงินมายังศูนย์ฯ เพื่อตรวจสอบข้อมูล<br> และออกใบเสร็จรับเงินให้กับสมาชิก ผ่านช่องทางต่อไปนี้</span><br>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="10%" style="vertical-align: top">Website</td>
      <td width="90%">www.eqamtmu.com</td>
    </tr>
    <tr>
      <td width="10%" style="vertical-align: top">E-mail</td>
      <td width="90%">eqamtmu@gmail.com</td>
    </tr>
    <tr>
       <td width="10%" style="vertical-align: top">โทรสาร</td>
      <td width="90%">02 412 4110</td>
    </tr>
	 <tr>
       <td width="10%" style="vertical-align: top">ไปรษณีย์</td>
      <td width="90%">ศูนย์พัฒนามาตรฐานและการประเมินผลิตภัณฑ์ <br>
คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล<br>
เลขที่ 2 ถนนวังหลัง แขวงศิริราช <br>
เขตบางกอกน้อย กรุงเทพฯ 10700
</td>
    </tr> 
	  
  </tbody>
</table>	
	<br><hr><br>
<h5><i class="fas fa-info-circle"></i> | <strong>ติดต่อ - สอบถาม</strong></h5>	
<table width="100%" border="0">
  <tbody>
	  <tr>
      <td width="10%" style="vertical-align: top">เวลาให้บริการ</td>
      <td width="90%">วันจันทร์ - ศุกร์ ภาคเช้า 09.00 - 12.00 น. ภาคบ่าย 13.00 - 16.00 น.
		  <br>
		  หยุดวันเสาร์ - อาทิตย์ และวันหยุดราชการ
		  </td>
    </tr>
    <tr>
      <td width="10%" style="vertical-align: top">โทรศัพท์</td>
      <td width="90%">02 412 3441</td>
    </tr>
    <tr>
      <td width="10%" style="vertical-align: top">โทรศัพท์</td>
      <td width="90%">02 411 2258 ต่อ 142</td>
    </tr>
    <tr>
       <td width="10%" style="vertical-align: top">E-mail</td>
      <td width="90%">eqamtmu@gmail.com</td>
		
    </tr>
	 <tr>
       <td width="10%" style="vertical-align: top">ไปรษณีย์</td>
      <td width="90%">ศูนย์พัฒนามาตรฐานและการประเมินผลิตภัณฑ์ <br>
คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล<br>
เลขที่ 2 ถนนวังหลัง แขวงศิริราช <br>
เขตบางกอกน้อย กรุงเทพฯ 10700
</td>
    </tr> 
	  
  </tbody>
</table>		
</div> 
</div>

<div id="non-printable" style="background-color:#FFE2E3">
<hr style="border-top: dashed red 1px">
<div class=" mt-3 mb-3 pb-3" style="background-color:#FFE2E3">
<center>
<button type="button" class="btn btn-danger btn-lg mr-5" onClick="window.print()"><i class="fas fa-print"></i> พิมพ์สถานะการสมัครสมาชิก</button>
</center>
</div>
</div>
	
<?php
	}
	else
	{ ?>
		
	<center><h2 class="text-primary">
		<i class="fas fa-times fa-3x mb-3 text-warning"></i><br>
		<strong>ไม่พบข้อมูลของท่าน [ รหัสสมาชิก: <?php echo $id; ?> ] ในฐานข้อมูลการสมัครสมาชิก</strong></h2>
		<h3>กรุณาตรวจสอบ ID และ E-mail ของท่านอีกครั้ง</h3>
	<h4 class="text-danger">สถานะจะแสดงหลังจากจากทำการสมัคร 3 วันทำการ</h4>
		<h4 class="text-secondary">หากไม่พบข้อมูล กรุณาติดต่อ 02 412 3441 <br> จันทร์-ศุกร์ 09.00 น. - 12.00 น. และ 13.00 น. - 16.00 น. </h4>
	</center>
	
	<?php }
	
	

?>
</body>
</html>