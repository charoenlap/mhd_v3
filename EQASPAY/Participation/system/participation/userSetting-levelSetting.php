<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../css/scripts.php") ?>
<title>User Setting</title>
</head>

<body style="background-color: lightgray">
	<?php require("headPanel.php") ?>	
	
<div style="padding-top: 130px" class="container-fluid pb-5">
<h2 class="h3"><a href="home.php">Home</a> / <a href="userSetting.php">User Setting</a> / User level Setting</h2>
  
<table width="30%" border="1" align="center">
  <tbody>
    <tr bgcolor="#C7C7C7" align="center" style="font-weight: bold">
      <td width="80%">User Level</td>
      <td colspan="2">Editing</td>
	  
    </tr>
    <tr>
      <td width="80%" align="center">Supervisor</td>
      <td width="5%">
		  <form>
		  	<button class="btn btn-sm btn-info">Edit</button>
		  </form>
		</td>
		<td width="5%">  
		<form>
		  	<button class="btn btn-sm btn-danger">Delete</button>
		  </form>
	</td>
    </tr>
  </tbody>
</table>
	<div align="center" style="margin-top: 2%; padding-left: 35%; padding-right: 35%">
	<form>
		<input class="form form-control text-center" type="text">
		  	<button class="btn btn-md btn-success m-3 p-2">Adding</button>
		  </form>
	</div>
	
	
	
	
	
	</div>

	

</body>
</html>