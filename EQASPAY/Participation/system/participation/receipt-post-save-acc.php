<?php
session_start();
$id =  $_POST["idd"];
$staff = $_SESSION["nameTH"]." ".$_SESSION["surnameTH"];
$time = date('Y-m-d H:i:s',time());
require "connection.php";	
$sqla = "SELECT * FROM payment_lists WHERE id = '$id';";
	$resulta = mysqli_query($link, $sqla);
	$dbrra = mysqli_fetch_array($resulta);

/////////////1

if($_POST["reBook1"]<>null)
{
	if($_POST["reDate1"] == null)
    {
        $c = 3;
    }
    else
    {
        $c = 4;
    }
    $reDate1 = $_POST["reDate1"];
	$reBook1 = $_POST["reBook1"];
	$reNo1 = $_POST["reNo1"];
	
}
else
{
	$c = $dbrra["eqac"];
	$reDate1 = $dbrra["reDate1"];
	$reBook1 = $dbrra["reBook1"];
	$reNo1 = $dbrra["reNo1"];

}

/////////////2

if($_POST["reBook2"]<>null)
{
    if($_POST["reDate2"] == null)
    {
        $h = 3;
    }
    else
    {
        $h = 4;
    }
	
	$reDate2 = $_POST["reDate2"];
	$reBook2 = $_POST["reBook2"];
	$reNo2 = $_POST["reNo2"];
	
}
else
{
	$h = $dbrra["eqah"];
	$reDate2 = $dbrra["reDate2"];
	$reBook2 = $dbrra["reBook2"];
	$reNo2 = $dbrra["reNo2"];

}

/////////////3

if($_POST["reBook3"]<>null)
{
    if($_POST["reDate3"] == null)
    {
        $t = 3;
    }
    else
    {
        $t = 4;
    }
	
	$reDate3 = $_POST["reDate3"];
	$reBook3 = $_POST["reBook3"];
	$reNo3 = $_POST["reNo3"];

}
else
{
	$t = $dbrra["eqat"];
	$reDate3 = $dbrra["reDate3"];
	$reBook3 = $dbrra["reBook3"];
	$reNo3 = $dbrra["reNo3"];
	
}

/////////////4


if($_POST["reBook4"]<>null)
{
    if($_POST["reDate4"] == null)
    {
        $p = 3;
    }
    else
    {
        $p = 4;
    }

	$reDate4 = $_POST["reDate4"];
	$reBook4 = $_POST["reBook4"];
	$reNo4 = $_POST["reNo4"];
	
}

else
{
	$p = $dbrra["eqap"];
	$reDate4 = $dbrra["reDate4"];
	$reBook4 = $dbrra["reBook4"];
	$reNo4 = $dbrra["reNo4"];

}

/////////////5

if($_POST["reBook5"]<>null)
{
    if($_POST["reDate5"] == null)
    {
        $bm = 3;
    }
    else
    {
        $bm = 4;
    }
	
	$reDate5 = $_POST["reDate5"];
	$reBook5 = $_POST["reBook5"];
	$reNo5 = $_POST["reNo5"];
	
}
else
{
	$bm = $dbrra["beqam"];
	$reDate5 = $dbrra["reDate5"];
	$reBook5 = $dbrra["reBook5"];
	$reNo5 = $dbrra["reNo5"];
	
}

/////////////6


if($_POST["reBook6"]<>null)
{
    if($_POST["reDate6"] == null)
    {
        $hm = 3;
    }
    else
    {
        $hm = 4;
    }
	
	$reDate6 = $_POST["reDate6"];
	$reBook6 = $_POST["reBook6"];
	$reNo6 = $_POST["reNo6"];

}
else
{
	$hm = $dbrra["heqam"];
	$reDate6 = $dbrra["reDate6"];
	$reBook6 = $dbrra["reBook6"];
	$reNo6 = $dbrra["reNo6"];
	
}


if($_POST["reBook7"]<>null)
{
    if($_POST["reDate7"] == null)
    {
        $um = 3;
    }
    else
    {
        $um = 4;
    }
	
	$reDate7 = $_POST["reDate7"];
	$reBook7 = $_POST["reBook7"];
	$reNo7 = $_POST["reNo7"];

}
else
{
	$um = $dbrra["uceqam"];
	$reDate7 = $dbrra["reDate7"];
	$reBook7 = $dbrra["reBook7"];
	$reNo7 = $dbrra["reNo7"];

}


if($_POST["reBook8"]<>null)
{
    if($_POST["reDate8"] == null)
    {
        $is = 3;
    }
    else
    {
        $is = 4;
    }
	
	
	$reDate8 = $_POST["reDate8"];
	$reBook8 = $_POST["reBook8"];
	$reNo8 = $_POST["reNo8"];

}
else
{
	$is = $dbrra["eqaisyp"];
	$reDate8 = $dbrra["reDate8"];
	$reBook8 = $dbrra["reBook8"];
	$reNo8 = $dbrra["reNo8"];

}

if($_POST["reBook9"]<>null)
{
     if($_POST["reDate9"] == null)
    {
        $ih = 3;
    }
    else
    {
        $ih = 4;
    }
	
	
	$reDate9 = $_POST["reDate9"];
	$reBook9 = $_POST["reBook9"];
	$reNo9 = $_POST["reNo9"];

}
else
{
	$ih = $dbrra["eqaihbv"];
	$reDate9 = $dbrra["reDate9"];
	$reBook9 = $dbrra["reBook9"];
	$reNo9 = $dbrra["reNo9"];
	
}

if($_POST["reBook10"]<>null)
{
    if($_POST["reDate10"] == null)
    {
        $bg = 3;
    }
    else
    {
        $bg = 4;
    }
	
	$reDate10 = $_POST["reDate10"];
	$reBook10 = $_POST["reBook10"];
	$reNo10 = $_POST["reNo10"];
	
}
else
{
	$bg = $dbrra["eqabgram"];
	$reDate10 = $dbrra["reDate10"];
	$reBook10 = $dbrra["reBook10"];
	$reNo10 = $dbrra["reNo10"];

}

if($_POST["reBook11"]<>null)
{
    if($_POST["reDate11"] == null)
    {
        $ba = 3;
    }
    else
    {
        $ba = 4;
    }
	
	$reDate11 = $_POST["reDate11"];
	$reBook11 = $_POST["reBook11"];
	$reNo11 = $_POST["reNo11"];

}
else
{
	$ba = $dbrra["eqabafb"];
	$reDate11 = $dbrra["reDate11"];
	$reBook11 = $dbrra["reBook11"];
	$reNo11 = $dbrra["reNo11"];

}
if($_POST["reBook12"]<>null)
{
    if($_POST["reDate12"] == null)
    {
        $bi = 3;
    }
    else
    {
        $bi = 4;
    }
	
	$reDate12 = $_POST["reDate12"];
	$reBook12 = $_POST["reBook12"];
	$reNo12 = $_POST["reNo12"];

}
else
{
	$bi = $dbrra["eqabiden"];
	$reDate12 = $dbrra["reDate12"];
	$reBook12 = $dbrra["reBook12"];
	$reNo12 = $dbrra["reNo12"];

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


reDate1='$reDate1',
reDate2='$reDate2',
reDate3='$reDate3',
reDate4='$reDate4',
reDate5='$reDate5',
reDate6='$reDate6',
reDate7='$reDate7',
reDate8='$reDate8',
reDate9='$reDate9',
reDate10='$reDate10',
reDate11='$reDate11',
reDate12='$reDate12',

reBook1='$reBook1',
reBook2='$reBook2',
reBook3='$reBook3',
reBook4='$reBook4',
reBook5='$reBook5',
reBook6='$reBook6',
reBook7='$reBook7',
reBook8='$reBook8',
reBook9='$reBook9',
reBook10='$reBook10',
reBook11='$reBook11',
reBook12='$reBook12',

reNo1='$reNo1',
reNo2='$reNo2',
reNo3='$reNo3',
reNo4='$reNo4',
reNo5='$reNo5',
reNo6='$reNo6',
reNo7='$reNo7',
reNo8='$reNo8',
reNo9='$reNo9',
reNo10='$reNo10',
reNo11='$reNo11',
reNo12='$reNo12',
paymentStaff='$staff',
issuedDate = '$time'



WHERE id = '$id'

";
	
mysqli_query($link, $sql);

$_SESSION["ide"] = $id;
header( "refresh: 0; url=status-staff-find.php?id=$id");
exit(0);

		

mysqli_close($link);
?>