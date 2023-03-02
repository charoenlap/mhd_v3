<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php require("../../tools/css/scripts.php");
	session_start();?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}
</style>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
</head>

<body>
<form action="session-group.php" method="post" onSubmit="return other()">
<?php require("headPanel.php");  ?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
	
<div class="pb-5">
<h1 class="ft-prompt"><i class="fas fa-file-invoice-dollar"></i> จัดส่งใบเสร็จให้กับผู้สนับสนุน</h1>
</div>


<table width="100%" border="1" class="table table-bordered table-sm table-hover">
  <tbody>
    <thead class="thead-light">
		<tr align="center">
      	<th width="15%"><strong>Schemes</strong></th>
		<th width="20%"><strong>วันที่ออกใบเสร็จ</strong></th>
		<th width="10%"><strong>เล่มที่</strong></th>
		<th width="10%"><strong>เลขที่</strong></th>
		<th width="20%"><strong>วันที่ส่งใบเสร็จ</strong></th>
		<th width="25%"><strong>Post Tracking</strong></th>
		</tr>
	</thead>
     
    </tr>
	
	<tr>
      <td><strong>EQAC</strong></td>
		<?php $sc = "1" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAH</strong></td>
		<?php $sc = "2" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAT</strong></td>
		<?php $sc = "3" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>

	<tr>
      <td><strong>EQAP</strong></td>
		<?php $sc = "4" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>B-EQAM</strong></td>
		<?php $sc = "5" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>H-EQAM</strong></td>
		<?php $sc = "6" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>UC-EQAM</strong></td>
		<?php $sc = "7" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAI: SYP</strong></td>
		<?php $sc = "8" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAI: HBV</strong></td>
		<?php $sc = "9" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAB: GRAM</strong></td>
		<?php $sc = "10" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAB: AFB</strong></td>
		<?php $sc = "11" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
	<tr>
      <td><strong>EQAB: IDEN</strong></td>
		<?php $sc = "12" ?>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reDate".$sc ; ?>" ></strong></td>
		<td><strong><input type=number style="width: 100%" name="<?php echo "reBook".$sc ; ?>" ></strong></td>
		<td><strong><input type="number" style="width: 100%" name="<?php echo "reNo".$sc ; ?>" ></strong></td>
		<td><strong><input type="date" style="width: 100%" name="<?php echo "reSent".$sc ; ?>" ></strong></td>
		<td><strong><input type="text" maxlength="13" style="width: 100%; font-size: 12pt" name="<?php echo "reTrack".$sc ; ?>" ></strong></td>
    </tr>
	
  </tbody>
</table>
	
<center>
	<button type="submit" class="btn btn-lg btn-success mt-3" style="width: 20%"><i class="fas fa-chevron-circle-right"></i> Next</button>
</center>
	</form>
</div>	
</body>
</html>