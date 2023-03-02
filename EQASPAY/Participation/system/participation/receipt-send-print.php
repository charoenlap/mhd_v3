<?php
$id = "20210000";//$_POST["id"]; 

$i = 1;
$reDate1 = $_POST["reDate1"];
echo $reDate1;
$reBook1 = "20";
$reNo1 = "3";
$reSent1 = date_format(date_create("15-03-2020"),"Y-m-d");
$reTrack1 = "1234567890TH" ;



/*
require "connection.php";
if(isset($redate1=="1"))
{	
$sql = "UPDATE participantRegister 
SET 
eqac = '4', 
reDate1 = '$reDate1', 
reBook1 = '$reBook1',
reNo1 = '$reNo1',
reSent1 = '$reSent1',
reTrack1 = '$reTrack1'
WHERE 
id ='$id' ;
";
$result = mysqli_query($link, $sql);
}
*/
?>









<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php require("../../tools/css/scripts.php");
			 session_start(); ?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
</head>

<body>
<form action="#">
<?php //require("headPanel.php") ;?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Reciept Sending</a></li> 
  </ol>
</nav>
<div class="form-row">
   <div class="form-group col-xl-2">
      <input type="text" class="form-control" value="<?php echo $id; ?>" disabled>
    </div>
	<div class="form-group col-xl-10">
      <input type="text" class="form-control" value="โรงพยาบาลศิริราช" disabled>
    </div>
	</div>

<table width="100%" border="1" class="table table-bordered table-sm table-hover">
  <tbody>
    <thead class="thead-light">
		<tr align="center">
      	<th width="10%"><strong>Schemes</strong></th>
		<th width="80%"><strong>ที่อยู่จัดส่ง</strong></th>
		<th width="10%"><strong>Print</strong></th>	
		</tr>
	</thead>
     
    </tr>
    <tr>
      <td width="15%" align="center"><strong><h2>EQAC</h2></strong></td>
		<td width="10%"><strong><textarea style="width: 100%"></textarea></strong></td>
		<td width="5%" align="center"><a href="envelope.php" target="_blank"><i class="fas fa-print fa-2x text-primary"></i></a></td>
    </tr>
	 
  </tbody>
</table>
	

<center><button class="btn btn-lg btn-success mt-3" style="width: 20%">ดำเนินการเสร็จสิ้น <i class="far fa-check-circle"></i> </button></center>
	</form>
</div>	
<?php mysqli_close($link); ?>
</body>
</html>