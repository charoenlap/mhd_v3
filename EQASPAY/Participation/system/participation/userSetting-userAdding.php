<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../css/scripts.php") ?>
<title>User Setting</title>
</head>

<body style="background-color: lightgray">
	<?php require("headPanel.php") ?>	
<div style="padding-top: 150px" class="container-fluid pb-5">	
	<h2>เพิ่มบัญชีผู้ใช้งาน (User Account Adding)</h2>
	
	<form method="post" action="userSetting-userAdding-save.php">
  <div class="form-row">
    <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="ชื่อ" name="nameTH">
    </div>
    <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="นามสกุล" name="surNameTH">
    </div>

    <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="Name" name="nameEN">
    </div>
    <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="Surname" name="surNameEN">
    </div>
	 <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="ภาควิชา/ศูนย์" name="department">
    </div>
	  
	  <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="ตำแหน่ง" name="position">
    </div>
	  <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="E-mail" name="email">
    </div>
	  <div class="col-6 p-3">
      <input type="text" class="form-control" placeholder="Password" name="pass">
    </div>
	  <div class="col-6 p-3">
      สิทธิ์ผู้ใช้งาน
	<select class="form-control" name="level"> 
		  <option value="User">User</option>
		  <option value="Administration">Administrator</option>
		  <option value="Supervisor">Supervisor</option>
		  <option value="Developer">Developer</option>
		  
		</select></div>
	  </div>
	  <div class="col p-3"><br>
	<button type="submit" class="btn btn-lg btn-success mt-1">Account Generating</button>	  
    
	  </div>  
			
		
</form>
	
</div>
</body>
</html>