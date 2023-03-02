<?php
session_start();
require("connection.php");
$sql = "SELECT*FROM participantRegister WHERE id = '$_SESSION[pid]' ";
$result = mysqli_query($link, $sql);
$dbrr = mysqli_fetch_array($result);

if(isset($_POST["eqac"])<>null)
{
	$eqac = '6';
}
else
{
	$eqac = $dbrr["eqac"];
}

if(isset($_POST["eqah"])<>null)
{
	$eqah = '6';
}
else
{
	$eqah = $dbrr["eqah"];
}

if(isset($_POST["eqat"])<>null)
{
	$eqat = '6';
}
else
{
	$eqat = $dbrr["eqat"];
}

if(isset($_POST["eqap"])<>null)
{
	$eqap = '6';
}
else
{
	$eqap = $dbrr["eqap"];
}

if(isset($_POST["beqam"])<>null)
{
	$beqam = '6';
}
else
{
	$beqam = $dbrr["beqam"];
}

if(isset($_POST["heqam"])<>null)
{
	$heqam = '6';
}
else
{
	$heqam = $dbrr["heqam"];
}

if(isset($_POST["uceqam"])<>null)
{
	$uceqam = '6';
}
else
{
	$uceqam = $dbrr["uceqam"];
}

if(isset($_POST["eqaisyp"])<>null)
{
	$eqaisyp = '6';
}
else
{
	$eqaisyp = $dbrr["eqaisyp"];
}

if(isset($_POST["eqaihbv"])<>null)
{
	$eqaihbv = '6';
}
else
{
	$eqaihbv = $dbrr["eqaihbv"];
}

if(isset($_POST["eqabgram"])<>null)
{
	$eqabgram = '6';
}
else
{
	$eqabgram = $dbrr["eqabgram"];
}

if(isset($_POST["eqabafb"])<>null)
{
	$eqabafb = '6';
}
else
{
	$eqabafb = $dbrr["eqabafb"];
}

if(isset($_POST["eqabiden"])<>null)
{
	$eqabiden = '6';
}
else
{
	$eqabiden = $dbrr["eqabiden"];
}


$sql2 = "UPDATE participantRegister SET 
eqac='$eqac',
eqah='$eqah',
eqat='$eqat',
eqap='$eqap',
beqam='$beqam',
heqam='$heqam',
uceqam='$uceqam',
eqaisyp='$eqaisyp',
eqaihbv='$eqaihbv',
eqabgram='$eqabgram',
eqabafb='$eqabafb',
eqabiden='$eqabiden'

WHERE id = '$_SESSION[pid]'
";
mysqli_query($link, $sql2);
mysqli_close($link);

unset($_SESSION["pid"]);

header("refresh: 0; url=database-find.php" );
exit(0);

?>