<!doctype html>
<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?>
<html>
<head>
<meta charset="utf-8">
<title>Saving</title>
<?php require("../../tools/css/scripts.php") ?>
</head>

<body style="padding: 100px">

<?php 
require "connection.php";	
$sql1 = "SELECT*FROM participantRegister WHERE id = '$_POST[id]' ";
$result1 = mysqli_query($link, $sql1);
$dbrr = mysqli_fetch_array($result1);
	
if(isset($_POST["eqac"])<>null)
{
	$eqac = $_POST["eqac"];
}
else
{
	$eqac = $dbrr["eqac"];
}

if(isset($_POST["eqah"])<>null)
{
	$eqah = $_POST["eqah"];
}
else
{
	$eqah = $dbrr["eqah"];
}

if(isset($_POST["eqat"])<>null)
{
	$eqat = $_POST["eqat"];
}
else
{
	$eqat = $dbrr["eqat"];
}

if(isset($_POST["eqap"])<>null)
{
	$eqap = $_POST["eqap"];
}
else
{
	$eqap = $dbrr["eqap"];
}

if(isset($_POST["beqam"])<>null)
{
	$beqam = $_POST["beqam"];
}
else
{
	$beqam = $dbrr["beqam"];
}

if(isset($_POST["heqam"])<>null)
{
	$heqam = $_POST["heqam"];
}
else
{
	$heqam = $dbrr["heqam"];
}

if(isset($_POST["uceqam"])<>null)
{
	$uceqam = $_POST["uceqam"];
}
else
{
	$uceqam = $dbrr["uceqam"];
}

if(isset($_POST["eqaisyp"])<>null)
{
	$eqaisyp = $_POST["eqaisyp"];
}
else
{
	$eqaisyp = $dbrr["eqaisyp"];
}

if(isset($_POST["eqaihbv"])<>null)
{
	$eqaihbv = $_POST["eqaihbv"];
}
else
{
	$eqaihbv = $dbrr["eqaihbv"];
}

if(isset($_POST["eqabgram"])<>null)
{
	$eqabgram = $_POST["eqabgram"];
}
else
{
	$eqabgram = $dbrr["eqabgram"];
}

if(isset($_POST["eqabafb"])<>null)
{
	$eqabafb = $_POST["eqabafb"];
}
else
{
	$eqabafb = $dbrr["eqabafb"];
}

if(isset($_POST["eqabiden"])<>null)
{
	$eqabiden = $_POST["eqabiden"];
}
else
{
	$eqabiden = $dbrr["eqabiden"];
}	
	
if(isset($_POST["eqacs"])<>null)
{
	$eqacs = $_POST["eqacs"];
}
else
{
	$eqacs = $dbrr["eqacs"];
}

if(isset($_POST["eqahs"])<>null)
{
	$eqahs = $_POST["eqahs"];
}
else
{
	$eqahs = $dbrr["eqahs"];
}

if(isset($_POST["eqats"])<>null)
{
	$eqats = $_POST["eqats"];
}
else
{
	$eqats = $dbrr["eqats"];
}

if(isset($_POST["eqaps"])<>null)
{
	$eqaps = $_POST["eqaps"];
}
else
{
	$eqaps = $dbrr["eqaps"];
}

if(isset($_POST["beqams"])<>null)
{
	$beqams = $_POST["beqams"];
}
else
{
	$beqams = $dbrr["beqams"];
}

if(isset($_POST["heqams"])<>null)
{
	$heqams = $_POST["heqams"];
}
else
{
	$heqams = $dbrr["heqams"];
}

if(isset($_POST["uceqams"])<>null)
{
	$uceqams = $_POST["uceqams"];
}
else
{
	$uceqams = $dbrr["uceqams"];
}

if(isset($_POST["eqaisyps"])<>null)
{
	$eqaisyps = $_POST["eqaisyps"];
}
else
{
	$eqaisyps = $dbrr["eqaisyps"];
}

if(isset($_POST["eqaihbvs"])<>null)
{
	$eqaihbvs = $_POST["eqaihbvs"];
}
else
{
	$eqaihbvs = $dbrr["eqaihbvs"];
}

if(isset($_POST["eqabgrams"])<>null)
{
	$eqabgrams = $_POST["eqabgrams"];
}
else
{
	$eqabgrams = $dbrr["eqabgrams"];
}

if(isset($_POST["eqabafbs"])<>null)
{
	$eqabafbs = $_POST["eqabafbs"];
}
else
{
	$eqabafbs = $dbrr["eqabafbs"];
}

if(isset($_POST["eqabidens"])<>null)
{
	$eqabidens = $_POST["eqabidens"];
}
else
{
	$eqabidens = $dbrr["eqabidens"];
}
	
if(isset($_POST["beqamc"])<>null)
{
	$beqamc = $_POST["beqamc"];
}
else
{
	$beqamc = $dbrr["beqamc"];

}
	
if(isset($_POST["heqamc"])<>null)
{
	$heqamc = $_POST["heqamc"];
}
else
{
	$heqamc = $dbrr["heqamc"];

}
	
	

	$id = $_POST["id"];
	$ins = $_POST["instituteName"];
	$lab = $_POST["laboratoryName"];
	$pMail = $_POST["pMail"];
	$no = $_POST["no"];


require "connection.php";
date_default_timezone_set("Asia/Bangkok");
	
$sql = "UPDATE participantRegister 
SET
id='$id',
instituteName='$ins',
labName='$lab',
pMail='$pMail',
eqac='$eqac',
eqah='$eqah',
eqat='$eqat',
eqap='$eqap',
beqam='$beqam',
beqamc='$beqamc',
heqam='$heqam',
heqamc='$heqamc',
uceqam='$uceqam',
eqaisyp='$eqaisyp',
eqaihbv='$eqaihbv',
eqabgram='$eqabgram',
eqabafb='$eqabafb',
eqabiden='$eqabiden',
eqacs='$eqacs',
eqahs='$eqahs',
eqats='$eqats',
eqaps='$eqaps',
beqams='$beqams',
heqams='$heqams',
uceqams='$uceqams',
eqaisyps='$eqaisyps',
eqaihbvs='$eqaihbvs',
eqabgrams='$eqabgrams',
eqabafbs='$eqabafbs',
eqabidens='$eqabidens'

WHERE no = '$no'

";
	
if (mysqli_query($link, $sql)) 
{
 header( "refresh: 2; url=register.php" );
 exit(0);

} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}


mysqli_close($link);
		

?>
	


</body>
</html>


