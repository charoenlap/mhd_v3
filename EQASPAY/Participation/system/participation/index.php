<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EQASS Sign In</title>
<?php require("../../tools/css/scripts.php") ?>
<link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
<body 
	  style="
			 background-image:linear-gradient(to right, navy,white), 
			 
			 <?php 
					$d = date('d');
					
									if($d<=4)
									{
										echo 'url(../../tools/images/index/bg-sw/1.jpg)';
									}
									else
									{
										if($d<=8)
										{
											echo 'url(../../tools/images/index/bg-sw/2.jpg)';
										}
										else
										{
											if($d<=12)
											{
												echo 'url(../../tools/images/index/bg-sw/3.jpg)';
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
														echo 'url(../../tools/images/index/bg-sw/5.jpg)';
													}
													else
													{
														if($d<=24)
														{
															echo 'url(../../tools/images/index/bg-sw/6.jpg)';
														}
														else
														{
															if($d>24)
															{
																echo 'url(../../tools/images/index/bg-sw/7.jpg)';
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
			 padding: 5%;
			 background-blend-mode: multiply;
			">

<table width="100%" border="0" height="100%">
  <tbody>
    <tr>
		<!--ช่องทางซ้าย logo+text-->
      		<td width="60%" valign="top"> 
				<images src="../../tools/images/index/MT-TH-RGB-H-white.png" alt="MT-LOGO" height="80px">
					<br><br>
				<h1 class="display-3 text-light">STAFF</h1>
                                        <h2 class="text-light">EQAS MUMT 2022</h2>
				
			</td>
		
		<!--ช่องทางขวา login textbox-->
      		<td width="40%" style="font-family: arial">
				
			<form method="post" action="right-check.php">
				
				<div style="margin-top: 30%; margin-right: 20%">
					<center>
					<img src="../../tools/images/4305394-user-interface/svg/000-service.svg" width="50%">
						<br>

					
				<!-- E-mail input -->
					<div class="input-group mb-3" style="font-family: arial">
  						<div class="input-group-prepend">
    						<span class="input-group-text">&nbsp;&nbsp;&nbsp;E-mail&nbsp;&nbsp;</span>
  						</div>
  						<input type="email" class="form-control " style="text-align: center" name="email" required>
					</div>
				
				<!-- Pass input -->
					<div class="input-group mb-3">
  						<div class="input-group-prepend">
    						<span class="input-group-text">Password</span>
  						</div>
  						<input type="password" class="form-control" style="text-align: center" name="pass" required>
		
						</div>
				<!-- login button -->			
						<div>
							<button class="btn btn-block btn-lg btn-success" type="submit">Sign In</button>
						
						</div>	
					</center>
				</div>
				
			</form>
				
		</td>
    </tr>
  </tbody>
</table>

	
</body>
</html>