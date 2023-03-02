<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?> 
<?php

$id =  $_POST["idd"];
require "connection.php";	
$sqla = "SELECT * FROM payment_lists WHERE id = '$id';";
	$resulta = mysqli_query($link, $sqla);
	$dbrra = mysqli_fetch_array($resulta);

/////////////1

if($_POST["reTrack1"]<>null)
{
	$c = 5;
	$reDate1 = $_POST["reDate1"];
	$reBook1 = $_POST["reBook1"];
	$reNo1 = $_POST["reNo1"];
	$reSent1 = $_POST["reSent1"];
	$reTrack1 = $_POST["reTrack1"];
}
else
{
	$c = $dbrra["eqac"];
	$reDate1 = $dbrra["reDate1"];
	$reBook1 = $dbrra["reBook1"];
	$reNo1 = $dbrra["reNo1"];
	$reSent1 = $dbrra["reSent1"];
	$reTrack1 = $dbrra["reTrack1"];
}

/////////////2

if($_POST["reTrack2"]<>null)
{
	$h = 5;
	$reDate2 = $_POST["reDate2"];
	$reBook2 = $_POST["reBook2"];
	$reNo2 = $_POST["reNo2"];
	$reSent2 = $_POST["reSent2"];
	$reTrack2 = $_POST["reTrack2"];
}
else
{
	$h = $dbrra["eqah"];
	$reDate2 = $dbrra["reDate2"];
	$reBook2 = $dbrra["reBook2"];
	$reNo2 = $dbrra["reNo2"];
	$reSent2 = $dbrra["reSent2"];
	$reTrack2 = $dbrra["reTrack2"];
}

/////////////3

if($_POST["reTrack3"]<>null)
{
	$t = 5;
	$reDate3 = $_POST["reDate3"];
	$reBook3 = $_POST["reBook3"];
	$reNo3 = $_POST["reNo3"];
	$reSent3 = $_POST["reSent3"];
	$reTrack3 = $_POST["reTrack3"];
}
else
{
	$t = $dbrra["eqat"];
	$reDate3 = $dbrra["reDate3"];
	$reBook3 = $dbrra["reBook3"];
	$reNo3 = $dbrra["reNo3"];
	$reSent3 = $dbrra["reSent3"];
	$reTrack3 = $dbrra["reTrack3"];
}

/////////////4


if($_POST["reTrack4"]<>null)
{
	$p = 5;
	$reDate4 = $_POST["reDate4"];
	$reBook4 = $_POST["reBook4"];
	$reNo4 = $_POST["reNo4"];
	$reSent4 = $_POST["reSent4"];
	$reTrack4 = $_POST["reTrack4"];
}

else
{
	$p = $dbrra["eqap"];
	$reDate4 = $dbrra["reDate4"];
	$reBook4 = $dbrra["reBook4"];
	$reNo4 = $dbrra["reNo4"];
	$reSent4 = $dbrra["reSent4"];
	$reTrack4 = $dbrra["reTrack4"];
}

/////////////5

if($_POST["reTrack5"]<>null)
{
	$bm = 5;
	$reDate5 = $_POST["reDate5"];
	$reBook5 = $_POST["reBook5"];
	$reNo5 = $_POST["reNo5"];
	$reSent5 = $_POST["reSent5"];
	$reTrack5 = $_POST["reTrack5"];
}
else
{
	$bm = $dbrra["beqam"];
	$reDate5 = $dbrra["reDate5"];
	$reBook5 = $dbrra["reBook5"];
	$reNo5 = $dbrra["reNo5"];
	$reSent5 = $dbrra["reSent5"];
	$reTrack5 = $dbrra["reTrack5"];
}

/////////////6


if($_POST["reTrack6"]<>null)
{
	$hm = 5;
	$reDate6 = $_POST["reDate6"];
	$reBook6 = $_POST["reBook6"];
	$reNo6 = $_POST["reNo6"];
	$reSent6 = $_POST["reSent6"];
	$reTrack6 = $_POST["reTrack6"];
}
else
{
	$hm = $dbrra["heqam"];
	$reDate6 = $dbrra["reDate6"];
	$reBook6 = $dbrra["reBook6"];
	$reNo6 = $dbrra["reNo6"];
	$reSent6 = $dbrra["reSent6"];
	$reTrack6 = $dbrra["reTrack6"];
}


if($_POST["reTrack7"]<>null)
{
	$um = 5;
	$reDate7 = $_POST["reDate7"];
	$reBook7 = $_POST["reBook7"];
	$reNo7 = $_POST["reNo7"];
	$reSent7 = $_POST["reSent7"];
	$reTrack7 = $_POST["reTrack7"];
}
else
{
	$um = $dbrra["uceqam"];
	$reDate7 = $dbrra["reDate7"];
	$reBook7 = $dbrra["reBook7"];
	$reNo7 = $dbrra["reNo7"];
	$reSent7 = $dbrra["reSent7"];
	$reTrack7 = $dbrra["reTrack7"];
}


if($_POST["reTrack8"]<>null)
{
	$is = 5;
	$reDate8 = $_POST["reDate8"];
	$reBook8 = $_POST["reBook8"];
	$reNo8 = $_POST["reNo8"];
	$reSent8 = $_POST["reSent8"];
	$reTrack8 = $_POST["reTrack8"];
}
else
{
	$is = $dbrra["eqaisyp"];
	$reDate8 = $dbrra["reDate8"];
	$reBook8 = $dbrra["reBook8"];
	$reNo8 = $dbrra["reNo8"];
	$reSent8 = $dbrra["reSent8"];
	$reTrack8 = $dbrra["reTrack8"];
}

if($_POST["reTrack9"]<>null)
{
	$ih = 5;
	$reDate9 = $_POST["reDate9"];
	$reBook9 = $_POST["reBook9"];
	$reNo9 = $_POST["reNo9"];
	$reSent9 = $_POST["reSent9"];
	$reTrack9 = $_POST["reTrack9"];
}
else
{
	$ih = $dbrra["eqaihbv"];
	$reDate9 = $dbrra["reDate9"];
	$reBook9 = $dbrra["reBook9"];
	$reNo9 = $dbrra["reNo9"];
	$reSent9 = $dbrra["reSent9"];
	$reTrack9 = $dbrra["reTrack9"];
}

if($_POST["reTrack10"]<>null)
{
	$bg = 5;
	$reDate10 = $_POST["reDate10"];
	$reBook10 = $_POST["reBook10"];
	$reNo10 = $_POST["reNo10"];
	$reSent10 = $_POST["reSent10"];
	$reTrack10 = $_POST["reTrack10"];
}
else
{
	$bg = $dbrra["eqabgram"];
	$reDate10 = $dbrra["reDate10"];
	$reBook10 = $dbrra["reBook10"];
	$reNo10 = $dbrra["reNo10"];
	$reSent10 = $dbrra["reSent10"];
	$reTrack10 = $dbrra["reTrack10"];
}

if($_POST["reTrack11"]<>null)
{
	$ba = 5;
	$reDate11 = $_POST["reDate11"];
	$reBook11 = $_POST["reBook11"];
	$reNo11 = $_POST["reNo11"];
	$reSent11 = $_POST["reSent11"];
	$reTrack11 = $_POST["reTrack11"];
}
else
{
	$ba = $dbrra["eqabafb"];
	$reDate11 = $dbrra["reDate11"];
	$reBook11 = $dbrra["reBook11"];
	$reNo11 = $dbrra["reNo11"];
	$reSent11 = $dbrra["reSent11"];
	$reTrack11 = $dbrra["reTrack11"];
}
if($_POST["reTrack12"]<>null)
{
	$bi = 5;
	$reDate12 = $_POST["reDate12"];
	$reBook12 = $_POST["reBook12"];
	$reNo12 = $_POST["reNo12"];
	$reSent12 = $_POST["reSent12"];
	$reTrack12 = $_POST["reTrack12"];
}
else
{
	$bi = $dbrra["eqabiden"];
	$reDate12 = $dbrra["reDate12"];
	$reBook12 = $dbrra["reBook12"];
	$reNo12 = $dbrra["reNo12"];
	$reSent12 = $dbrra["reSent12"];
	$reTrack12 = $dbrra["reTrack12"];
}


$sql = "UPDATE payment_lists
SET

eqac = '$c',
eqah = '$h',
eqat = '$t',
eqap = '$p',
beqam = '$bm',
heqam = '$hm',
uceqam = '$um',
eqaisyp = '$is',
eqaihbv = '$ih',
eqabgram = '$bg',
eqabafb = '$ba',
eqabiden = '$bi',


reSent1='$reSent1',
reSent2='$reSent2',
reSent3='$reSent3',
reSent4='$reSent4',
reSent5='$reSent5',
reSent6='$reSent6',
reSent7='$reSent7',
reSent8='$reSent8',
reSent9='$reSent9',
reSent10='$reSent10',
reSent11='$reSent11',
reSent12='$reSent12',

reTrack1='$reTrack1',
reTrack2='$reTrack2',
reTrack3='$reTrack3',
reTrack4='$reTrack4',
reTrack5='$reTrack5',
reTrack6='$reTrack6',
reTrack7='$reTrack7',
reTrack8='$reTrack8',
reTrack9='$reTrack9',
reTrack10='$reTrack10',
reTrack11='$reTrack11',
reTrack12='$reTrack12'

WHERE id = '$id'

";
	
if (mysqli_query($link, $sql)) 
{
session_start();

	

	if($_SESSION['group'] == "OPEN")
	{ 
	
	header( "refresh: 0; url=receipt-post-id-group.php" );
 	exit(0);
	
	}
	else
	{
		$_SESSION["ide"] = $id;
		header( "refresh: 0; url=receipt-send-id.php" );
 exit(0);

	}
	
	
 
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>