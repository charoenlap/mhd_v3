<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php");
	session_start();
	?>
<title>HOME</title>

</head>

<body 
	  style="
			 background-image:linear-gradient(to right,black,gray), 
			 <?php
                $_SESSION["year"] = $_GET["year"];
             ?>
			 <?php 
					$d = date('d');
					
									if($d<=4)
									{
										echo 'url(../../tools/images/index/bg-sw/7.jpg)';
									}
									else
									{
										if($d<=8)
										{
											echo 'url(../../tools/images/index/bg-sw/6.jpg)';
										}
										else
										{
											if($d<=12)
											{
												echo 'url(../../tools/images/index/bg-sw/5.jpg)';
											}
											else
											{
												if($d<=16)
												{
													echo 'url(../../tools/images/index/bg-sw/4.jpg)';
												}
												else
												{
													if($d<=20)
													{
														echo 'url(../../tools/images/index/bg-sw/3.jpg)';
													}
													else
													{
														if($d<=24)
														{
															echo 'url(../../tools/images/index/bg-sw/2.jpg)';
														}
														else
														{
															if($d>24)
															{
																echo 'url(../../tools/images/index/bg-sw/1.jpg)';
															}
															else
															{
																echo "navy";
															}
														}
													}
												}
											}
											
										}
									}
			 ?>;
			 background-size: cover;
			 padding: 100px;
			 background-blend-mode: multiply;
			">
<?php require("headPanel.php"); ?>	

<center><h1 class="display-4 ft-prompt" style="color: white">WELCOME</h1></center>	
<?php 
	if($_SESSION["depCode"] == 00)
{
	?>
<h2 class="pt-3" style="color: #FFC726"> Systems</h2>
		
  <div class="row pl-3 pr-3">
    <div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn cor" onClick="location.href='participation.php'">
				  <h2 class="h4 p-3"><img src="../../tools/images/3456270-ecommerce/svg/030-register.svg" width="50%">
                                                    <br>Participation</h2>
				</button>
    </div>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn cor" onclick=" window.open('https://fsoftprodev.xyz/mhd/admin', '_blank'); return false;">
				  <h2 class="h4 p-3"><img src="../../tools/images/3456270-ecommerce/svg/018-internet security.svg" width="50%">
                                                    <br>EQAS Admin</h2>
				</button>
    </div>
	
</div> 	
	

	

<?php } ?>

<?php
	if(($_SESSION["depCode"] == 88) || $_SESSION["userLevel"]=="Administrator")
	{ ?>
	<div class="row pl-3 pr-3">
    <div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn cor" onClick="location.href='registerExport.php'">
				  <h2 class="h4 p-3"><img src="../../tools/images/3456270-ecommerce/svg/010-online payment.svg" width="50%">
                                                    <br>EQAS 2022 Payment</h2>
				</button>
    </div>
	
</div>
<?php
	}
?>
	

</body>
</html>