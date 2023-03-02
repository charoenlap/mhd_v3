<?php 
error_reporting(E_ALL); ini_set('display_errors', 0); 
session_start();
$id = $_POST["id"];
$instituteName = $_POST["instituteName"];
$staff = $_SESSION["mail"];

$date = date('d-m-y-Gis');
$fileName = "fileName";
$type = strrchr($_FILES[$fileName]['name'],".");
$slipp = $id."-".$date.$type;
move_uploaded_file($_FILES[$fileName]["tmp_name"],"slip/".$slipp);                                                   
 
$time = date('Y-m-d H:i:s',time());
             
require("connection.php");
$sql = "SELECT*FROM payment_lists WHERE id = '$id' ";
$result = mysqli_query($link, $sql);
$dbrr = mysqli_fetch_array($result);
$confirmID = $dbrr["id"];



if(isset($_POST["eqac"])<>null)
{
	$eqac = '2';
          $slip1 = $slipp;
}
else
{
	$eqac = $dbrr["eqac"];
          $slip1 = $dbrr["slip1"];
}

if(isset($_POST["eqah"])<>null)
{
	$eqah = '2';
          $slip2 = $slipp;
}
else
{
	$eqah = $dbrr["eqah"];
           $slip2 = $dbrr["slip2"];
}

if(isset($_POST["eqat"])<>null)
{
	$eqat = '2';
          $slip3 = $slipp;
}
else
{
	$eqat = $dbrr["eqat"];
           $slip3 = $dbrr["slip3"];
}

if(isset($_POST["eqap"])<>null)
{
	$eqap = '2';
          $slip4 = $slipp;
}
else
{
	$eqap = $dbrr["eqap"];
           $slip4 = $dbrr["slip4"];
}

if(isset($_POST["beqam"])<>null)
{
	$beqam = '2';
          $slip5 = $slipp;
}
else
{
	$beqam = $dbrr["beqam"];
           $slip5 = $dbrr["slip5"];
}

if(isset($_POST["heqam"])<>null)
{
	$heqam = '2';
          $slip6 =$slipp;
}
else
{
	$heqam = $dbrr["heqam"];
           $slip6 = $dbrr["slip6"];
}

if(isset($_POST["uceqam"])<>null)
{
	$uceqam = '2';
          $slip7 = $slipp;
}
else
{
	$uceqam = $dbrr["uceqam"];
           $slip7 = $dbrr["slip7"];
}

if(isset($_POST["eqaisyp"])<>null)
{
	$eqaisyp = '2';
          $slip8 = $slipp;
}
else
{
	$eqaisyp = $dbrr["eqaisyp"];
           $slip8 = $dbrr["slip8"];
}

if(isset($_POST["eqaihbv"])<>null)
{
	$eqaihbv = '2';
          $slip9 = $slipp;
}
else
{
	$eqaihbv = $dbrr["eqaihbv"];
           $slip9 = $dbrr["slip9"];
}

if(isset($_POST["eqabgram"])<>null)
{
	$eqabgram = '2';
          $slip10 = $slipp;
}
else
{
	$eqabgram = $dbrr["eqabgram"];
           $slip10 = $dbrr["slip10"];
}

if(isset($_POST["eqabafb"])<>null)
{
	$eqabafb = '2';
          $slip11 = $slipp;
}
else
{
	$eqabafb = $dbrr["eqabafb"];
           $slip11 = $dbrr["slip11"];
}

if(isset($_POST["eqabiden"])<>null)
{
	$eqabiden = '2';
          $slip12 =$slipp;
}
else
{
	$eqabiden = $dbrr["eqabiden"];
           $slip12 = $dbrr["slip12"];
}
/////////////////// eqac

if(isset($_POST["reName1"])<>null)
{
	$reName1 = $_POST["reName1"];
}
else
{
	$reName1 = $dbrr["reName1"];
}

/////////////////// eqah

if(isset($_POST["reName2"])<>null)
{
	$reName2 = $_POST["reName2"];
}
else
{
	$reName2 = $dbrr["reName2"];
}

/////////////////// eqat

if(isset($_POST["reName3"])<>null)
{
	$reName3 = $_POST["reName3"];
}
else
{
	$reName3 = $dbrr["reName3"];
}

/////////////////// eqap

if(isset($_POST["reName4"])<>null)
{
	$reName4 = $_POST["reName4"];
}
else
{
	$reName4 = $dbrr["reName4"];
}

/////////////////// beqam

if(isset($_POST["reName5"])<>null)
{
	$reName5 = $_POST["reName5"];
}
else
{
	$reName5 = $dbrr["reName5"];
}

/////////////////// 

if(isset($_POST["reName6"])<>null)
{
	$reName6 = $_POST["reName6"];
}
else
{
	$reName6 = $dbrr["reName6"];
}

/////////////////// 

if(isset($_POST["reName7"])<>null)
{
	$reName7 = $_POST["reName7"];
}
else
{
	$reName7 = $dbrr["reName7"];
}

/////////////////// 

if(isset($_POST["reName8"])<>null)
{
	$reName8 = $_POST["reName8"];
}
else
{
	$reName8 = $dbrr["reName8"];
}

/////////////////// 

if(isset($_POST["reName9"])<>null)
{
	$reName9 = $_POST["reName9"];
}
else
{
	$reName9 = $dbrr["reName9"];
}

/////////////////// 

if(isset($_POST["reName10"])<>null)
{
	$reName10 = $_POST["reName10"];
}
else
{
	$reName10 = $dbrr["reName10"];
}

/////////////////// 

if(isset($_POST["reName11"])<>null)
{
	$reName11 = $_POST["reName11"];
}
else
{
	$reName11 = $dbrr["reName11"];
}

/////////////////// 

if(isset($_POST["reName12"])<>null)
{
	$reName12 = $_POST["reName12"];
}
else
{
	$reName12 = $dbrr["reName12"];
}


/////////////////// eqac

if(isset($_POST["adName1"])<>null)
{
	$adName1 = $_POST["adName1"];
}
else
{
	$adName1 = $dbrr["adName1"];
}

/////////////////// eqah

if(isset($_POST["adName2"])<>null)
{
	$adName2 = $_POST["adName2"];
}
else
{
	$adName2 = $dbrr["adName2"];
}

/////////////////// eqat

if(isset($_POST["adName3"])<>null)
{
	$adName3 = $_POST["adName3"];
}
else
{
	$adName3 = $dbrr["adName3"];
}

/////////////////// eqap

if(isset($_POST["adName4"])<>null)
{
	$adName4 = $_POST["adName4"];
}
else
{
	$adName4 = $dbrr["adName4"];
}

/////////////////// beqam

if(isset($_POST["adName5"])<>null)
{
	$adName5 = $_POST["adName5"];
}
else
{
	$adName5 = $dbrr["adName5"];
}

/////////////////// 

if(isset($_POST["adName6"])<>null)
{
	$adName6 = $_POST["adName6"];
}
else
{
	$adName6 = $dbrr["adName6"];
}

/////////////////// 

if(isset($_POST["adName7"])<>null)
{
	$adName7 = $_POST["adName7"];
}
else
{
	$adName7 = $dbrr["adName7"];
}

/////////////////// 

if(isset($_POST["adName8"])<>null)
{
	$adName8 = $_POST["adName8"];
}
else
{
	$adName8 = $dbrr["adName8"];
}

/////////////////// 

if(isset($_POST["adName9"])<>null)
{
	$adName9 = $_POST["adName9"];
}
else
{
	$adName9 = $dbrr["adName9"];
}

/////////////////// 

if(isset($_POST["adName10"])<>null)
{
	$adName10 = $_POST["adName10"];
}
else
{
	$adName10 = $dbrr["adName10"];
}

/////////////////// 

if(isset($_POST["adName11"])<>null)
{
	$adName11 = $_POST["adName11"];
}
else
{
	$adName11 = $dbrr["adName11"];
}

/////////////////// 

if(isset($_POST["adName12"])<>null)
{
	$adName12 = $_POST["adName12"];
}
else
{
	$adName12 = $dbrr["adName12"];
}


if($confirmID <> null)
{
    
$sql3 = "UPDATE payment_lists SET 
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
eqabiden='$eqabiden',
reName1='$reName1',
reName2='$reName2',
reName3='$reName3',
reName4='$reName4',
reName5='$reName5',
reName6='$reName6',
reName7='$reName7',
reName8='$reName8',
reName9='$reName9',
reName10='$reName10',
reName11='$reName11',
reName12='$reName12',
adName1='$adName1',
adName2='$adName2',
adName3='$adName3',
adName4='$adName4',
adName5='$adName5',
adName6='$adName6',
adName7='$adName7',
adName8='$adName8',
adName9='$adName9',
adName10='$adName10',
adName11='$adName11',
adName12='$adName12',
orderTime='$time',
slip1 = '$slip1',
slip2 = '$slip2',
slip3 = '$slip3',
slip4 = '$slip4',
slip5 = '$slip5',
slip6 = '$slip6',
slip7 = '$slip7',
slip8 = '$slip8',
slip9 = '$slip9',
slip10 = '$slip10',
slip11 = '$slip11',
slip12 = '$slip12'

WHERE id = '$id'
";
mysqli_query($link, $sql3);   
header( "refresh: 0; url=register.php" );
 exit(0);
}

else
{

$sql2 = "INSERT INTO payment_lists (
id,
instituteName,
eqac,
eqah,
eqat,
eqap,
beqam,
heqam,
uceqam,
eqaisyp,
eqaihbv,
eqabgram,
eqabafb,
eqabiden,
staff,
reName1,
reName2,
reName3,
reName4,
reName5,
reName6,
reName7,
reName8,
reName9,
reName10,
reName11,
reName12,
adName1,
adName2,
adName3,
adName4,
adName5,
adName6,
adName7,
adName8,
adName9,
adName10,
adName11,
adName12,
orderTime,
slip1,
slip2,
slip3,
slip4,
slip5,
slip6,
slip7,
slip8,
slip9,
slip10,
slip11,
slip12
)

VALUES (
'$id',
'$instituteName',
'$eqac',
'$eqah',
'$eqat',
'$eqap',
'$beqam',
'$heqam',
'$uceqam',
'$eqaisyp',
'$eqaihbv',
'$eqabgram',
'$eqabafb',
'$eqabiden',
'$staff',
'$reName1',
'$reName2',
'$reName3',
'$reName4',
'$reName5',
'$reName6',
'$reName7',
'$reName8',
'$reName9',
'$reName10',
'$reName11',
'$reName12',
'$adName1',
'$adName2',
'$adName3',
'$adName4',
'$adName5',
'$adName6',
'$adName7',
'$adName8',
'$adName9',
'$adName10',
'$adName11',
'$adName12',
'$time',
'$slip1',
'$slip2',
'$slip3',
'$slip4',
'$slip5',
'$slip6',
'$slip7',
'$slip8',
'$slip9',
'$slip10',
'$slip11',
'$slip12'

);";
}

if (mysqli_query($link, $sql2)) 
{

header( "refresh: 0; url=register.php" );
exit(0);

} 
else 
{
  echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
}

mysqli_close($link); 
?>

*/