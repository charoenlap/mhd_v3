<!doctype html>
<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?>
<html>
<head>
<meta charset="utf-8">
<title>Preview</title>
<?php require("../../tools/css/scripts.php") ?>
</head>

<body style="padding: 100px">
<?php require("headPanel.php") ?>
<form>
<h3>ID |  <?php echo $_POST["id"];?></h1>
	<input type="hidden" value="<?php echo $_POST["id"];?>" name="id">
<h3>PARTICIPANT |<?php echo $_POST["instituteName"];</h1>
<h3>LABORATORY | <?php echo $_POST["laboratoryName"]; ?></h2>
<h3>Schemes</h3>
<div style="padding-left: 50px">
<?php	
if($_POST["eqac"]==1)
{
	$eqac = 3000;
	echo "EQAC ".number_format($eqac)." Baht [".$_POST["eqacs"]."]<br>";
}
	
if($_POST["eqah"]==1)
{
	$eqah = 4500;
	echo "EQAH ".number_format($eqah)." Baht <br>";
}
	
if($_POST["eqat"]==1)
{
	$eqat = 4500;
	echo "EQAT ".number_format($eqat)." Baht <br>";
}	
	
if($_POST["eqap"]==1)
{
	$eqap = 2000;
	echo "EQAP ".number_format($eqap)." Baht <br>";
}	

if($_POST["beqam"]==1)
{
	$beqam = 2000;
	echo "B-EQAM ".number_format($beqam)." Baht <br>";
}

if($_POST["heqam"]==1)
{
	$heqam = 1500;
	echo "H-EQAM ".number_format($heqam)." Baht <br>";
}
	
if($_POST["uceqam"]==1)
{
	$uceqam = 1000;
	echo "UC-EQAM ".number_format($uceqam)." Baht <br>";
}	

if($_POST["eqaisyp"]==1)
{
	$eqaisyp = 2200;
	echo "EQAI: Syphilis ".number_format($eqaisyp)." Baht <br>";
}
	
if($_POST["eqaihbv"]==1)
{
	$eqaihbv = 2200;
	echo "EQAI: HBV ".number_format($eqaihbv)." Baht <br>";
}	


	if(($_POST["eqabgram"]) && ($_POST["eqabafb"]) && ($_POST["eqabiden"]) == 1 )
{
	$eqab = 2500;
	echo "EQAB: ALL ".number_format($eqab)." Baht <br>";
}
else
{
	if(($_POST["eqabgram"]) && ($_POST["eqabafb"]) == 1 )
	{
	
	$eqab = 1800;
	echo "EQAB: GRAM&AFB ".number_format($eqab)." Baht <br>";
	}
	else
	{	
			if(($_POST["eqabgram"]) && ($_POST["eqabiden"]) == 1 )
			{
			$eqab = 2000;
			echo "EQAB: GRAM ".number_format($eqab-1000)." Baht <br>"."EQAB: IDEN ".number_format($eqab-1000)." Baht <br>";
			}
		else
			{
			if(($_POST["eqabafb"]) && ($_POST["eqabiden"]) == 1 )
			{
	
	$eqab = 2000;
	echo "EQAB: AFB ".number_format(1000)." Baht <br>"."EQAB: IDEN ".number_format(1000)." Baht <br>";
				
			}
			else
			{
				$eqab1 = "$_POST[eqabafb]";
				$eqab2 = "$_POST[eqabiden]";
				$eqab3 = "$_POST[eqabgram]";
				
				if(($_POST["eqabgram"]) == 1 )
				{
					$eqab = 1000;
					echo "EQAB:GRAM ".number_format($eqab)." Baht <br>";
				}
				else
				{
					if(($_POST["eqabafb"]) == 1 )
				{
					$eqab = 1000;
					echo "EQAB:AFB ".number_format($eqab)." Baht <br>";
				}
				else
				{
					if(($_POST["eqabiden"]) == 1 )
					{

					$eqab = 1000;
					echo "EQAB:IDEN ".number_format($eqab)." Baht <br>";
					}
				}
					
				}}}}}

	?></div>
<h2> <?php 
	$sum = ($eqac+$eqah+$eqat+$eqap+$beqam+$heqam+$uceqam+$eqaisyp+$eqaihbv+$eqab) ;?>
	<h1 class="btn btn-outline-danger btn-lg ft-prompt"><?php echo "TOTAL ".number_format($sum); ?></h1>
	
	</h2><br><br>
	<button class="btn btn-success">ENTER</button>
</form>
</body>
</html>


