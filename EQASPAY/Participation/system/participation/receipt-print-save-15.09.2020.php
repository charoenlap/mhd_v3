<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	$Gtotal = $_SESSION["total"] ;
	$doc = $_POST["doc"];
	$mail = $_SESSION["mail"];
	$n = 2;
	
	require "connection.php";
	$sql = "SELECT * FROM participantRegister WHERE (paymentStaff='$mail') AND (eqac='$n' OR eqah='$n' OR eqat='$n' OR eqap='$n' OR beqam='$n' OR heqam='$n' OR uceqam='$n' OR eqaisyp='$n' OR eqaihbv='$n' OR eqabgram='$n' OR eqabafb='$n' OR eqabiden='$n')";
	$result = mysqli_query($link, $sql);
	$dbrr = mysqli_fetch_array($result);
	$rowcount1 = mysqli_num_rows($result);
	
	$sql22 = "SELECT * FROM paymentSlip";
	$result22 = mysqli_query($link, $sql22);
	$rowcount2 = mysqli_num_rows($result22);
	
	
if($dbrr["eqac"]==2)
{
	$eqac = 3;
	$eqacp = $doc;
}
else
{
	$eqac = $dbrr["eqac"];
	$eqacp = $dbrr["eqacp"];
}

if($dbrr["eqah"]==2)
{
	$eqah = 3;
	$eqahp = $doc;
}
else
{
	$eqah = $dbrr["eqah"];
	$eqahp = $dbrr["eqahp"];
}

if($dbrr["eqat"]==2)
{
	$eqat = 3;
	$eqatp = $doc;
}
else
{
	$eqat = $dbrr["eqat"];
	$eqatp = $dbrr["eqatp"];
}

if($dbrr["eqap"]==2)
{
	$eqap = 3;
	$eqapp = $doc;
}
else
{
	$eqap = $dbrr["eqap"];
	$eqapp = $dbrr["eqapp"];
}

if($dbrr["beqam"]==2)
{
	$beqam = 3;
	$beqamp = $doc;
}
else
{
	$beqam = $dbrr["beqam"];
	$beqamp = $dbrr["beqamp"];
}

if($dbrr["heqam"]==2)
{
	$heqam = 3;
	$heqamp = $doc;
}
else
{
	$heqam = $dbrr["heqam"];$heqamp = $dbrr["heqamp"];
}

if($dbrr["uceqam"]==2)
{
	$uceqam = 3;
	$uceqamp = $doc;
}
else
{
	$uceqam = $dbrr["uceqam"];$uceqamp = $dbrr["uceqamp"];
}

if($dbrr["eqaisyp"]==2)
{
	$eqaisyp = 3;
	$eqaisypp = $doc;
}
else
{
	$eqaisyp = $dbrr["eqaisyp"];$eqaisypp = $dbrr["eqaisypp"];
}

if($dbrr["eqaihbv"]==2)
{
	$eqaihbv = 3;
	$eqaihbvp = $doc;
}
else
{
	$eqaihbv = $dbrr["eqaihbv"];$eqaihbvp = $dbrr["eqaihbvp"];
}

if($dbrr["eqabgram"]==2)
{
	$eqabgram = 3;
	$eqabgramp = $doc;
}
else
{
	$eqabgram = $dbrr["eqabgram"];$eqabgramp = $dbrr["eqabgramp"];
}

if($dbrr["eqabafb"]==2)
{
	$eqabafb = 3;
	$eqabafbp = $doc;
}
else
{
	$eqabafb = $dbrr["eqabafb"];$eqabafbp = $dbrr["eqabafbp"];
}

if($dbrr["eqabiden"]==2)
{
	$eqabiden = 3;
	$eqabiden = $doc;
}
else
{
	$eqabiden = $dbrr["eqabiden"];
	$eqabidenp = $dbrr["eqabidenp"];
}	

$sqlc = "UPDATE participantRegister SET 
eqac='$eqac',
eqacp='$eqacp'
WHERE (paymentStaff='$mail') AND (eqac='$n')";
mysqli_query($link, $sqlc);	

$sqlh = "UPDATE participantRegister SET 
eqah='$eqah',
eqahp='$eqahp'
WHERE (paymentStaff='$mail') AND (eqah='$n')";
mysqli_query($link, $sqlh);	

$sqlt = "UPDATE participantRegister SET 
eqat='$eqat',
eqatp='$eqatp'
WHERE (paymentStaff='$mail') AND (eqat='$n')";
mysqli_query($link, $sqlt);	

$sqlp = "UPDATE participantRegister SET 
eqap='$eqap',
eqapp='$eqapp'
WHERE (paymentStaff='$mail') AND (eqap='$n')";
mysqli_query($link, $sqlp);	

$sqlbm = "UPDATE participantRegister SET 
beqam='$beqam',
beqamp='$beqamp'
WHERE (paymentStaff='$mail') AND (beqam='$n')";
mysqli_query($link, $sqlbm);	

	
$sqlhm = "UPDATE participantRegister SET 
heqam='$heqam',
heqamp='$heqamp'
WHERE (paymentStaff='$mail') AND (heqam='$n')";
mysqli_query($link, $sqlhm);	

$sqlum = "UPDATE participantRegister SET 
uceqam='$uceqam',
uceqamp='$uceqamp'
WHERE (paymentStaff='$mail') AND (uceqam='$n')";
mysqli_query($link, $sqlum);	

$sqlsy = "UPDATE participantRegister SET 
eqaisyp='$eqaisyp',
eqaisypp='$eqaisypp'
WHERE (paymentStaff='$mail') AND (eqaisyp='$n')";
mysqli_query($link, $sqlsy);	
	
$sqlhb = "UPDATE participantRegister SET 
eqaihbv='$eqaihbv',
eqaihbvp='$eqaihbvp'
WHERE (paymentStaff='$mail') AND (eqaihbv='$n')";
mysqli_query($link, $sqlhb);	

$sqlgr = "UPDATE participantRegister SET 
eqabgram='$eqabgram',
eqabgramp='$eqabgramp'
WHERE (paymentStaff='$mail') AND (eqabgram='$n')";
mysqli_query($link, $sqlgr);	
	
$sqlaf = "UPDATE participantRegister SET 
eqabafb='$eqabafb',
eqabafbp='$eqabafbp'
WHERE (paymentStaff='$mail') AND (eqabafb='$n')";
mysqli_query($link, $sqlaf);	

$sqlid = "UPDATE participantRegister SET 
eqabiden='$eqabiden',
eqabgidenp='$eqabidenp'
WHERE (paymentStaff='$mail') AND (eqabiden='$n')";
mysqli_query($link, $sqlid);	
	
	
$sql = "INSERT INTO paymentSlip (doc, Total) VALUES ($doc, $Gtotal)";
$result = mysqli_query($link, $sql);	
	
mysqli_close($link);	
unset($_SESSION["total"]);
	
header( "refresh: 0; url=participation.php" );
 exit(0);

	?>
</body>
</html>