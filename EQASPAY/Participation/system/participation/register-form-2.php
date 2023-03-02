<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php require("../css/scripts.php");
	session_start();?>
</head>

<body>
<?php require("headPanel.php") ?>
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h2 class="h3"><a href="home.php">Home</a> / <a href="participation.php">Participation</a> / <a href="register.php">Register</a></h2>
<table width="100%" border="1" class="table tablr-sm table-hover">
  <tbody>
    <tr>
      	<td width="20%">ออกใบเสร็จในนาม</td>
		<td width="20%">ที่อยู่จัดส่งใบเสร็จ</td>
		
	</td>
     
    </tr>
    <tr>
      <td width="20%">ออกใบเสร็จในนาม</td>
      <td><textarea wrap="virtual" rows="auto" style="width: 100%" name="slpName"></textarea></td>
    </tr>
	 <tr>
      <td width="20%">ที่อยู่จัดส่งใบเสร็จ</td>
      <td><textarea wrap="virtual" rows="auto" style="width: 100%" name="slpAdd"></textarea></td>
    </tr> 
  </tbody>
</table>
<center><button class="btn btn-lg btn-success mt-3" style="width: 20%"><i class="fas fa-save"></i> Save</button></center>	
</div>	
</body>
</html>