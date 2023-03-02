<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Envelope DL size</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	
<style>
	@font-face {
		font-family: 'DBL';
		src: url("../../tools/font/DB Lim X v3.2.ttf");
	}
	@font-face {
		font-family: 'Sarabun';
		src: url("../../tools/font/THSarabun.ttf");
	}
	@font-face {
		font-family: "DBH";
		src: url("../../tools/font/DB Helvethaica X v3.2.ttf");
	}
	
	.h{
		font-family: 'DBL';
	}
	.btns {
		line-height: 24pt !important;
	}
	@media print   
	{ 
		
     #non-printable {display: none; }   
     #printable {display: block; }   
	  width: 100mm;
    height: 297mm;  
	} 
	
</style>
	<?php error_reporting(E_ALL);
 	ini_set('display_errors', 0);  ?>
	
</head>

<body style="line-height: 12pt">

	
	<?php
	session_start();
	$id = $_POST["id"];
	$scheme = $_POST["scheme"];
	require "connection.php";
	$sql = "SELECT * FROM payment_lists WHERE id = '$id';";
	$result = mysqli_query($link, $sql);
	$dbrr = mysqli_fetch_array($result);
	
	if($scheme == "adName1")
	{
		$no = 1;
	}
	else
	{
		if($scheme == "adName2")
		{
			$no = 2;
		}
		else
		{
			if($scheme == "adName3")
		{
			$no = 3;
		}
			else
			{
				if($scheme == "adName4")
				{
				$no = 4;
				}
				else
				{
					if($scheme == "adName5")
					{
					$no = 5;
					}
					else
					{
						if($scheme == "adName6")
						{
						$no = 6;
						}
						else
						{
							if($scheme == "adName7")
							{
								$no = 7;
							}
							else
							{
								if($scheme == "adName8")
								{
									$no = 8;
								}
								else
								{
									if($scheme == "adName9")
									{
										$no = 9;
									}
									else
									{
										if($scheme == "adName10")
										{
											$no = 10;
										}
										else
										{
											if($scheme == "adName11")
											{
												$no = 11;
											}
											else
											{
												if($scheme == "adName12")
												{
													$no = 12;
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
	
	?>

	
		<div class="container-fluid p-4" id="printable">
			<div class="row">
				<div class="col-7">
					<img src="../../tools/images/home/logo.jpg" height="100px" style="padding: 10px">
				</div>
				<div class="col-5">
					<div class="btn btn-outline-dark" style="width: 100%">
						<strong>
					  <span style="font-size: 16pt; font-family: Sarabun">ชำระค่าฝากส่งเป็นรายเดือน</span><br>
					   
                                                               <?php
                                                                      if ($_POST["postCode"] == 1)
                                                                      { ?>
                                                                                <span style="font-size: 16pt; font-family: Sarabun"> ใบอนุญาตที่ 9/2539</span><br> 
                                                                                <span style="font-size: 16pt; font-family: Sarabun">ไปรษณีย์ศิริราช</span><br>
                                                              <?php
                                                                      }
                                                               ?>
                                                               <?php
                                                                    if ($_POST["postCode"] == 2)
                                                                      { ?>
                                                                                <span style="font-size: 14pt; font-family: Sarabun"> ใบอนุญาตที่ 84/2564</span><br> 
                                                                                <span style="font-size: 14pt; font-family: Sarabun">ไปรษณีย์พุทธมณฑล</span><br>
                                                              <?php
                                                                      }
                                                               ?>
                                                              
					  
					</strong>
					</div> 
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
			
					 <span class="h" style="font-size: 18pt">โครงการประเมินคุณภาพห้องปฏิบัติการโดยองค์ภายนอก</span><br>
					 <span style="font-size: 16pt; font-family: DBH">คณะเทคนิคการแพทย์ มหาวิทยาลัยมหิดล <br> 999 ถนนพุทธมณฑลสาย 4 ศาลายา พุทธมณฑล นครปฐม 73170 <br>
					   <span style="font-size: 16pt; font-family: DBH">โทรศัพท์ 0 2441 4376 ต่อ 2512  มือถือ 06 3895 1287  Email: eqamtmu@gmail.com</span>
				</div>
			</div>
				
		
	
		<div class="row btns btn btn-outline-dark mt-3 mb-3" style="width: 100%">
			<div class="col-12">
				<p class="h h3" style="text-align: left">กรุณาส่ง</p>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-11">
						
							<textarea style="font-size: 30pt; font-family: Sarabun; font-weight:500; border: 0; height: 280px; width: 100%; resize: none;"><?php echo $dbrr[$scheme]; ?>
							</textarea>
						
					</div>
				</div>
				
			</div>
		</div>	
		<div class="row">
			<div class="col-12">
				<strong>
					<span style="font-size: 16pt; font-family: Sarabun">[ ใบเสร็จรับเงิน ] <?php echo "[ ".$dbrr['reTrack'.$no]." ]"; ?></span>
				</strong>
			</div>
		</div>		
		
	</div>

			<div id="non-printable">
				<center><button class="btn btn-lg btn-success p-3 h1" style="width: 50%" onClick="window.print();">Print</button></center>
				<div class="ms-3">
					<span>
						<u>วิธีตั้งค่าการพิมพ์</u>
						<br>1. เลือกเครื่องพิมพ์เป็น Xprinter XP-420B
						<br>2. Layout : Lanscape
						<br>3. Paper size : 4 x 4
						<br>4. Scale : Custom = 60
					</span>
				</div>
			</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	
<?php mysqli_close($link); session_unset($_SESSION["ide"]); ?>
	
</body>

</html>