<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>payment</title>
<?php require("../../tools/css/scripts.php");
	session_start();?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
</head>

<body>
<form method="post" action="database-save.php" >
<?php require("headPanel.php");?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="fas fa-database"></i> DATABASE SAVING</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Database Saving</a></li> 
  </ol>
</nav>
<?php
	$id = $_POST["id"];
	require "connection.php";
	$sql1 = "SELECT * FROM participantRegister WHERE id = '$id';";
	$result1 = mysqli_query($link, $sql1);
	$dbrr = mysqli_fetch_array($result1);
	$_SESSION["pid"] = $dbrr["id"];
	$_SESSION["pname"] = $dbrr["instituteName"];
?>
<div class="form-row">
   <div class="form-group col-xl-2">
      <input type="text" class="form-control" value="<?php echo $dbrr["id"]; ?>" disabled>
    </div>
	<div class="form-group col-xl-10">
      <input type="text" class="form-control" value="<?php echo $dbrr["instituteName"]; ?>" disabled>
    </div>
	</div>

<div class="form-row">
   <div class="form-group col">	
<div class="form-check">
	<h2>รายการที่ตรวจสอบ</h2>
	
 <div class="form-check-inline col-12">
  	<label class="form-check-label form-control-lg col-5">
	<?php if($dbrr['eqac']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqac" value="2"> &nbsp;EQAC <?php echo "[".$dbrr["eqacs"]."]"; ?> <br>
		<?php ;} ?>
	<?php if($dbrr['eqah']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqah" value="2"> &nbsp;EQAH <?php echo "[".$dbrr["eqahs"]."]"; ?> <br>
		<?php ;} ?>
	<?php if($dbrr['eqat']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqat" value="2"> &nbsp;EQAT <?php echo "[".$dbrr["eqats"]."]"; ?> <br>
		<?php ;} ?>
		
	<?php if($dbrr['eqap']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqap" value="2"> &nbsp;EQAP <?php echo "[".$dbrr["eqaps"]."]"; ?> <br>
		<?php ;} ?>
	<?php if($dbrr['beqam']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="beqam" value="2" <?php if($dbrr["beqamc"]=="*รอยืนยันสิทธิ์") { echo "disabled";} ?>> &nbsp;B-EQAM <?php echo "[".$dbrr["beqams"]."]"; ?> 
		<?php 
		if($dbrr["beqamc"]=="*รอยืนยันสิทธิ์")
		{
			echo "<span class='btn btn-danger btn-sm'>".$dbrr["beqamc"]."</span>";
		}
		 else
		 {
			 echo "<span class='btn btn-success btn-sm'>".$dbrr["beqamc"]."</span>";
		 } 

		;} ?>
		<br>
		<?php if($dbrr['heqam']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="heqam" value="2" <?php if($dbrr["heqamc"]=="*รอยืนยันสิทธิ์") { echo "disabled";} ?>> &nbsp;H-EQAM <?php echo "[".$dbrr["heqams"]."]"; ?>
		<?php 
		if($dbrr["heqamc"]=="*รอยืนยันสิทธิ์")
		{
			echo "<span class='btn btn-danger btn-sm'>".$dbrr["heqamc"]."</span>";
		}
		 else
		 {
			 echo "<span class='btn btn-success btn-sm'>".$dbrr["heqamc"]."</span>";
		 } 

		;} ?>
		<br>
    	<?php if($dbrr['uceqam']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="uceqam" value="2"> &nbsp;UC-EQAM <?php echo "[".$dbrr["uceqams"]."]"; ?> <br>
		<?php ;} ?>
		<?php if($dbrr['eqaisyp']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqaisyp" value="2"> &nbsp;EQAI: SYP <?php echo "[".$dbrr["eqaisyps"]."]"; ?>  <br>
		<?php ;} ?>
		<?php if($dbrr['eqaihbv']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqaihbv" value="2"> &nbsp;EQAI: HBV <?php echo "[".$dbrr["eqaihbvs"]."]"; ?>  <br>
		<?php ;} ?>
		<?php if($dbrr['eqabgram']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqabgram" value="2"> &nbsp;EQAB: GRAM <?php echo "[".$dbrr["eqabgrams"]."]"; ?>  <br>
		<?php ;} ?>
		<?php if($dbrr['eqabafb']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqabafb" value="2"> &nbsp;EQAB: AFB <?php echo "[".$dbrr["eqabafbs"]."]"; ?>  <br>
		<?php ;} ?>
		<?php if($dbrr['eqabiden']==5)
		{ ?>
			<input type="checkbox" class="form-check-input" name="eqabiden" value="2"> &nbsp;EQAB: IDEN <?php echo "[".$dbrr["eqabidens"]."]"; ?>  <br>
		<?php ;} ?>
		
  	</label>
	
</div>
</div>
	   </div>
	</div>

<center><button class="btn btn-lg btn-success mt-3" style="width: 20%"> NEXT <i class="fas fa-chevron-circle-right"></i> </button></center>
	</form>

<?php mysqli_close($link); ?>
</body>
</html>