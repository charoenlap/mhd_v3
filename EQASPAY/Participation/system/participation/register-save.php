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
session_start();
	$beqamc = $_POST["beqamc"];
	$heqamc = $_POST["heqamc"];
	$id = $_POST["id"];
	$ins = $_POST["instituteName"];
	$lab = $_POST["laboratoryName"];
	$eqac = $_POST["eqac"];
	$eqah = $_POST["eqah"];
	$eqat = $_POST["eqat"];
	$eqap = $_POST["eqap"];
	$beqam = $_POST["beqam"];
	$heqam = $_POST["heqam"];
	$uceqam = $_POST["uceqam"];
	$eqaisyp = $_POST["eqaisyp"];
	$eqaihbv = $_POST["eqaihbv"];
	$eqabgram = $_POST["eqabgram"];
	$eqabafb = $_POST["eqabafb"];
	$eqabiden = $_POST["eqabiden"];
	$eqacs = $_POST["eqacs"];
	$eqahs = $_POST["eqahs"];
	$eqats = $_POST["eqats"];
	$eqaps = $_POST["eqaps"];
	$beqams = $_POST["beqams"];
	$heqams = $_POST["heqams"];
	$uceqams = $_POST["uceqams"];
	$eqaisyps = $_POST["eqaisyps"];
	$eqaihbvs = $_POST["eqaihbvs"];
	$eqabgrams = $_POST["eqabgrams"];
	$eqabafbs = $_POST["eqabafbs"];
	$eqabidens = $_POST["eqabidens"];

require "connection.php";
date_default_timezone_set("Asia/Bangkok");
$sql1 = "SELECT * FROM participantRegister WHERE id = '$id';";
$result1 = mysqli_query($link, $sql1);
$dbrr = mysqli_fetch_array($result1);
$idc = $dbrr['id'];


	
if($idc == $id)
{
	?> 
	<center><h2 class="h1 text-danger"><i class="fas fa-user-shield fa-3x mb-5"></i><br>ID นี้ ลงทะเบียนไว้แล้ว</h2><br>
	<button class="btn btn-secondary btn-lg" onClick="window.history.back()"><i class="fas fa-undo"></i> กลับไปหน้าเดิม</button>
	</center>
	<?php
}
	else
	{
		if(($eqac||$eqah||$eqat||$eqap||$beqam||$heqam||$uceqam||$eqaisyp||$eqaihbv||$eqabgram||$eqabafb||$eqabiden) == null)
		{
			?> 
			<center><h2 class="h1 text-danger"><i class="far fa-times-circle fa-3x mb-5"></i><br>กรุณาเลือกโครงการที่ต้องการลงทะเบียน</h2><br>
			<button class="btn btn-secondary btn-lg" onClick="window.history.back()"><i class="fas fa-undo"></i> กลับไปหน้าเดิม</button>
			</center>
			<?php	
		}
		else
		{
			
		
	
	
$sql = "INSERT INTO participantRegister (
id,
instituteName,
labName,
pMail,
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
eqacs,
eqahs,
eqats,
eqaps,
beqams,
heqams,
uceqams,
eqaisyps,
eqaihbvs,
eqabgrams,
eqabafbs,
eqabidens,
staff,
beqamc,
heqamc
)

VALUES (
'$id',
'$ins',
'$lab',
'$pMail',
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
'$eqacs',
'$eqahs',
'$eqats',
'$eqaps',
'$beqams',
'$heqams',
'$uceqams',
'$eqaisyps',
'$eqaihbvs',
'$eqabgrams',
'$eqabafbs',
'$eqabidens',
'$_SESSION[mail]',
'$beqamc',
'$heqamc'
)";
	
if (mysqli_query($link, $sql)) 
{
 header( "refresh: 0; url=register.php" );
 exit(0);

} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}


mysqli_close($link);
		}
}
?>
	


</body>
</html>


