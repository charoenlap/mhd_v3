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
<h2 class="h3"><a href="home.php">Home</a> / Setting</h2>
  <div class="row pl-3 pr-3">
    <div class="col-sm-2 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='userSetting-userAdding.php'">
				  <h2 class="h1 pt-3"><i class="fas fa-user-plus"></i><br>User Account Adding</h2><h4>เพิ่มบัญชีผู้ใช้งาน</h4>
				</button>
		 </div>
		<div class="col-sm-2 p-2">
				<button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='userSetting-levelSetting.php'">
				  <h2 class="h1 pt-3"><i class="fas fa-user-plus"></i><br>User level Setting</h2><h4>ตั้งค่าระดับผู้ใช้งาน</h4>
				</button>
    </div>
	 
	  
	 </div> 	
	</div>

	

</body>
</html>