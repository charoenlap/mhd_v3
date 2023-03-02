<?php 
require("../../tools/css/scripts.php") ;
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
<?php $id = $_GET["id"]; 
          $docNo = $_SESSION["docNo"];
          ?>


<div class="mt-5" style="padding-left: 20px; padding-right: 10px">
<center><h3><strong>รายการชำระเงิน</strong></h3> 	
<h5>โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์กรภายนอก ประจำปี 2565 </h5></center>
<hr width="100%">
<form method="post" action="receipt-post-form-acc.php">
<input type="hidden" name="id" value="<?php echo $id; ?>"	
	<?php
	$id = $_GET["id"];
	
	require "connection.php";
	$sql = "SELECT*FROM payment_lists WHERE (id='$id') 
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
	  		  <th width="20%">Scheme</th>
			  <th width="10%">Fee</th>
			  <th width="15%">Status</th>
			  <th>Receipt Name</th>
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
                                        $doc = "eqacp";
				if( ($dbrr[$sc]>=3) && ($dbrr[$doc] == $docNo) )
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
                                                                                ?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip1"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                          $pay1 = 3000;
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
                        <td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_1()">
                            <span id="label_1"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_1" style="display: none"><?php echo $dbrr["reName1"]; ?></textarea>
                            <?php echo $dbrr["reName1"]; ?>
                            <script>
                              function copyToClipboard_1() {
                                var copyText = document.getElementById("content_1").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_1").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td>
                       
	  
	  </tr>
			<?php }
			?>
	
	 <?php
	  			$sc = "eqah";
                                        $doc = "eqahp";
				if( ($dbrr[$sc]>=3) && ($dbrr[$doc] == $docNo) )
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
									?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip2"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay2 = 4500;
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
						} ?> </td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_2()">
                            <span id="label_2"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_2" style="display: none"><?php echo $dbrr["reName2"]; ?></textarea>
                            <?php echo $dbrr["reName2"]; ?>
                            <script>
                              function copyToClipboard_2() {
                                var copyText = document.getElementById("content_2").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_2").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td>
			<?php }
			?>
	  
	  <?php
	  			$sc = "eqat";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip3"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay3 = 4500;
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
                        <td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_3()">
                            <span id="label_3"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_3" style="display: none"><?php echo $dbrr["reName3"]; ?></textarea>
                            <?php echo $dbrr["reName3"]; ?>
                            <script>
                              function copyToClipboard_3() {
                                var copyText = document.getElementById("content_3").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_3").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td>
			<?php }
			?>
	  <?php
	  			$sc = "eqap";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip4"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay4 = 2000;
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
                          <td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_4()">
                            <span id="label_4"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_4" style="display: none"><?php echo $dbrr["reName4"]; ?></textarea>
                            <?php echo $dbrr["reName4"]; ?>
                            <script>
                              function copyToClipboard_4() {
                                var copyText = document.getElementById("content_4").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_4").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td>
      
      
      </tr>
			<?php }
			?>
	  <?php
	  			$sc = "beqam";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
				{ ?>
					<tr>
					<td>O | B-EQAM</td>
					<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "2,500.00"; $mb = 2500;} ?></td>
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip5"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay5 = 2500;
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
                              <td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_5()">
                            <span id="label_5"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_5" style="display: none"><?php echo $dbrr["reName5"]; ?></textarea>
                            <?php echo $dbrr["reName5"]; ?>
                            <script>
                              function copyToClipboard_5() {
                                var copyText = document.getElementById("content_5").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_5").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td>
                              </tr>
			<?php }
			?>
	  <?php
	  			$sc = "heqam";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip6"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay6 = 1500;
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_6()">
                            <span id="label_6"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_6" style="display: none"><?php echo $dbrr["reName6"]; ?></textarea>
                            <?php echo $dbrr["reName6"]; ?>
                            <script>
                              function copyToClipboard_6() {
                                var copyText = document.getElementById("content_6").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_6").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td>
      </tr>
			<?php }
			?>
	  <?php
	  			$sc = "uceqam";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
				{ ?>
					<tr>
					<td>O | UC-EQAM</td>
						<td width="10%" style="text-align: right"><?php if($dbrr[$sc]<>0) {echo "1,200.00"; $mu = 1200;} ?></td>
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
									?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip7"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay7 = 1200;
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_7()">
                            <span id="label_7"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_7" style="display: none"><?php echo $dbrr["reName7"]; ?></textarea>
                            <?php echo $dbrr["reName7"]; ?>
                            <script>
                              function copyToClipboard_7() {
                                var copyText = document.getElementById("content_7").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_7").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaisyp";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																	?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip8"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay1 = 2200;
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_8()">
                            <span id="label_8"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_8" style="display: none"><?php echo $dbrr["reName8"]; ?></textarea>
                            <?php echo $dbrr["reName8"]; ?>
                            <script>
                              function copyToClipboard_8() {
                                var copyText = document.getElementById("content_8").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_8").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqaihbv";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip9"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                            $pay9 = 2200;
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_9()">
                            <span id="label_9"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_9" style="display: none"><?php echo $dbrr["reName9"]; ?></textarea>
                            <?php echo $dbrr["reName9"]; ?>
                            <script>
                              function copyToClipboard_9() {
                                var copyText = document.getElementById("content_9").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_9").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabgram";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip10"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                          
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_10()">
                            <span id="label_10"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_10" style="display: none"><?php echo $dbrr["reName10"]; ?></textarea>
                            <?php echo $dbrr["reName10"]; ?>
                            <script>
                              function copyToClipboard_10() {
                                var copyText = document.getElementById("content_10").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_10").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td></tr>
			<?php }
			?>
	  <?php
	  			$sc = "eqabafb";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip11"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                       
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_11()">
                            <span id="label_11"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_11" style="display: none"><?php echo $dbrr["reName11"]; ?></textarea>
                            <?php echo $dbrr["reName11"]; ?>
                            <script>
                              function copyToClipboard_11() {
                                var copyText = document.getElementById("content_11").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_11").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td></tr>
			<?php }
			?>
  <?php
	  			$sc = "eqabiden";
				if( ($dbrr[$sc]>=3) && ($dbrr[$sc."p"] == $docNo) )
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
																		?>
                                                                                           <a href="./slip/<?php echo $dbrr["slip12"]; ?>" target="_blank"><?php echo $paySlip; ?></a>
                                                                                <?php 
                                                                                      
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
						} ?></td>	<td>
                            <button class="btn btn-sm btn-outline-primary" type="button" onclick="copyToClipboard_12()">
                            <span id="label_12"><i class="bi bi-clipboard"></i> Copy</span></button>
                            <textarea id="content_12" style="display: none"><?php echo $dbrr["reName12"]; ?></textarea>
                            <?php echo $dbrr["reName12"]; ?>
                            <script>
                              function copyToClipboard_12() {
                                var copyText = document.getElementById("content_12").value;
                                navigator.clipboard.writeText(copyText).then(() => {
                                    // Alert the user that the action took place.
                                    // Nobody likes hidden stuff being done under the hood!
                                    document.getElementById("label_12").innerHTML = "<i class='bi bi-clipboard-check-fill'></i> Copied";
                                });
                              }
                            </script>
                        </td></tr>
			<?php }
			?>

	
          <?php
                  if (($dbrr["eqabgramp"] == $docNo) || ($dbrr["eqabafbp"] == $docNo) ||  ($dbrr["eqabidenp"] == $docNo))    
                  {
          ?>
            
            <?php 
		if($dbrr["eqabgram"]==3 || $dbrr["eqabafb"]==3 || $dbrr["eqabiden"]==3) 
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
                              
                   

			if($dbrr["eqabgram"]<>0 && $dbrr["eqabafb"]<>0 && $dbrr["eqabiden"]<>0) 
		{ 
		
			$pay10 = 2500;
		}
		else
		{
			if($dbrr["eqabgram"]<>0 && $dbrr["eqabafb"]<>0)
			{
			
				$pay10 = 1800;
			}
			else
			{
				if($dbrr["eqabgram"]<>0 && $dbrr["eqabiden"]<>0)
				{
			
					$pay10 = 2000;
				}
				else
				{
					if($dbrr["eqabafb"]<>0 && $dbrr["eqabiden"]<>0)
					{
			
						$pay10 = 2000;
					}
					else
					{
						if($dbrr["eqabgram"]<>0)
						{
						
							$pay10 = 1000;
						}
						else
						{
							if($dbrr["eqabafb"]<>0)
							{
								
								$pay10= 1000;
							}
							else
							{
								if($dbrr["eqabiden"]<>0)
								{
							
									$pay10 = 1000;
								}
								else
								{
									
									$pay10 = 0;
								}
							}
						}
					}
				}
			}
		}
		
		
		echo number_format($bt,2); 
                    
                  } //end if EQAB Fee Calculation
                            
		?></td><td colspan="5"></td></tr>
	<?php } $fee = $c+$h+$t+$p+$mb+$mh+$mu+$is+$ih+$bt;
                    $pay = $pay1+$pay2+$pay3+$pay4+$pay5+$pay6+$pay7+$pay8+$pay9+$pay10;
                    $_SESSION["pay"] = $pay;
		?>
		

	  
	  <tr bgcolor="#E1EBFF"><td><strong>TOTAL</strong></td>
		  <td style="text-align: right"><strong><?php echo number_format($fee,2); ?></strong></td>
	
	  
	  </tr>
  </tbody>
</table>
<br><br><br>

    <button class="btn btn-lg btn-success btn-block">Next</button> 

</form>	

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
	



	
	
unset($_SESSION["pid"]); ?>

</div>

</body>
</html>