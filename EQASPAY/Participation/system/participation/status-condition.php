<?php 
$wait = "<i class='fas fa-shopping-cart'></i>";
	  $payWait = "<i class='fas fa-money-check-alt'></i>";
	  $paySlip = "<i class='fas fa-cash-register'></i>";
	  $slipSent = " <i class='fas fa-box-open'></i>";
	  $complete = "<i class='fas fa-user-check'></i>";


if($dbrr[$sc]==1) 
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
										echo "<span class='text-info font-weight-bold'>".$slipSent." ".$dbrr["reTrack".$a]."  [".$dbrr["reSent".$a]."] จัดส่งใบเสร็จรับเงินเรียบร้อยแล้ว</span>";
									}
									else
										{
										if($dbrr[$sc]==5) 
										{
											echo $wait." ";
											echo $payWait." ";
											echo $paySlip." ";
											echo $slipSent." ".$dbrr["reTrack".$a]." [".$dbrr["reSent".$a]."] ";
											echo "<span class='text-success font-weight-bold'>".$complete." รายการสมัครเสร็จสมบูรณ์ - เข้าร่วมเป็นสมาชิกประจำปี 2564</span>";
										}
										}
									
									}
								}
						}
?>