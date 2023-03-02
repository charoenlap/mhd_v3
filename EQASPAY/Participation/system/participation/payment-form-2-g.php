<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php 
require("../../tools/css/scripts.php");

    ?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
</head>

<body>
<form action="payment-save-2-g.php" method="post">
<?php 
session_start();
require("headPanel.php");  ?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<div class="pb-5">
<h1 class="ft-prompt"><i class="fas fa-file-invoice-dollar"></i> RECEIPT ISSUING</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Payment Issuing</a></li> 
  </ol>
</nav>
<div class="form-row">
   <div class="form-group col-xl-2">
      <input type="text" class="form-control" value="<?php echo $_SESSION["pid"] ?>" disabled>
    </div>
	<div class="form-group col-xl-10">
      <input type="text" class="form-control" value="<?php echo $_SESSION["pname"] ?>" disabled>
    </div>
	</div>


<table width="100%" border="1" class="table table-bordered table-sm table-hover">
  <tbody>
    <thead class="thead-light">
		<tr>
      	<th><strong>Schemes</strong></th>
	
		<th width="40%"><strong>ออกใบเสร็จในนาม</strong></th>
		<th width="40%"><strong>ที่อยู่จัดส่งใบเสร็จ</strong></th>
		</tr>
	</thead> 
    </tr>
	
<?php if($_POST["eqac"]==2)
{ ?>
	 <tr>
		<td>EQAC</td><input type="hidden" value="2" name="eqac">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName1"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName1"><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
<?php ;} ?>
	
<?php if($_POST["eqah"]==2)
{ ?>
	 <tr>
		<td>EQAH</td><input type="hidden" value="2" name="eqah">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName2"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName2"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>

<?php if($_POST["eqat"]==2)
{ ?>
	 <tr>
		<td>EQAT</td><input type="hidden" value="2" name="eqat">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName3"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName3"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>

<?php if($_POST["eqap"]==2)
{ ?>
	 <tr>
		<td>EQAP</td><input type="hidden" value="2" name="eqap">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName4"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName4"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>

<?php if($_POST["beqam"]==2)
{ ?>
	 <tr>
		<td>B-EQAM</td><input type="hidden" value="2" name="beqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName5"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName5"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>
  
<?php if($_POST["heqam"]==2)
{ ?>
	 <tr>
		<td>H-EQAM</td><input type="hidden" value="2" name="heqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName6"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName6"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>	

<?php if($_POST["uceqam"]==2)
{ ?>
	 <tr>
		<td>UC-EQAM</td><input type="hidden" value="2" name="uceqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName7"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName7"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>

<?php if($_POST["eqaisyp"]==2)
{ ?>
	 <tr>
		<td>EQAI: SYP</td><input type="hidden" value="2" name="eqaisyp">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName8"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName8"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>
	
<?php if($_POST["eqaihbv"]==2)
{ ?>
	 <tr>
		<td>EQAI: HBV</td><input type="hidden" value="2" name="eqaihbv">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName9"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName9"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>

<?php if($_POST["eqabgram"]==2)
{ ?>
	 <tr>
		<td>EQAB: GRAM</td><input type="hidden" value="2" name="eqabgram">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName10"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName10"><?php echo $_SESSION["addressG"]; ?></textarea></td>
<?php ;} ?>
	
<?php if($_POST["eqabafb"]==2)
{ ?>
	 <tr>
		<td>EQAI: AFB</td><input type="hidden" value="2" name="eqabafb">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName11"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName11"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>	
	
<?php if($_POST["eqabiden"]==2)
{ ?>
	 <tr>
		<td>EQAB: IDEN</td><input type="hidden" value="2" name="eqabiden">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName12"><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName12"><?php echo $_SESSION["addressG"]; ?></textarea></td>
    </tr>
<?php ;} ?>
	 
  </tbody>
</table>
<center><button class="btn btn-lg btn-success mt-3" style="width: 20%"><i class="fas fa-save"></i> Save</button></center>
	</form>
</div>	
</body>
</html>