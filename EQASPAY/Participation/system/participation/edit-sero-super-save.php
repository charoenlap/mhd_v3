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
	$eqabiden =$_POST["eqabiden"];
	$eqacp = $_POST["eqacp"];
	$eqahp = $_POST["eqahp"];
	$eqatp = $_POST["eqatp"];
	$eqapp = $_POST["eqapp"];
	$beqamp = $_POST["beqamp"];
	$heqamp = $_POST["heqamp"];
	$uceqamp = $_POST["uceqamp"];
	$eqaisypp = $_POST["eqaisypp"];
	$eqaihbvp = $_POST["eqaihbvp"];
	$eqabgramp = $_POST["eqabgramp"];
	$eqabafbp = $_POST["eqabafbp"];
	$eqabidenp = $_POST["eqabidenp"];
	
	$id = $_POST["id"];
	


require "connection.php";
	
$sql = "UPDATE participantRegister 
SET
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



WHERE id = '$id'

";
	
if (mysqli_query($link, $sql)) 
{
 header( "refresh: 2; url=register-sero-super-edit.php" );
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


