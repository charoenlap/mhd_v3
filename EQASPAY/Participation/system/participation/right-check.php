<?php
$mail = $_POST["email"];
		$pass = $_POST["pass"];
	require("connection.php");
		$sql = "SELECT * FROM staff WHERE email ='$mail' ";
		$result = mysqli_query($link, $sql);
		$dbrr = mysqli_fetch_array($result);

		
		$mails = $dbrr["email"];
		$passs = $dbrr["pass"];
		$pos = $dbrr["position"];
		$nameTH = $dbrr["nameTH"];
		$surnameTH = $dbrr["surNameTH"];
		$userLevel = $dbrr["userLevel"];
		$depCode = $dbrr["depCode"];
		
if(($mail==$mails)&&($pass==$passs))
	{
	
	session_start();
	$_SESSION["mail"] = $dbrr["email"];
	$_SESSION["name"] = $dbrr["nameEN"];
	$_SESSION["surname"] = $dbrr["surNameEN"];
	$_SESSION["position"] = $pos;
	$_SESSION["nameTH"] = $nameTH;
	$_SESSION["surnameTH"] = $surnameTH;
	$_SESSION["userLevel"] = $userLevel;
	$_SESSION["depCode"] = $depCode;
	
	$sql2 = "INSERT INTO logbook (user,action) VALUES('$_SESSION[mail]','Sign in')";
	$result2 = mysqli_query($link, $sql2);
	mysqli_close($link);

  header( "refresh: 0; url=home.php" );
 	exit(0);
	
	 
}
else
{
?>
	<center><h2 class="h1 text-danger"><i class="fas fa-times-circle fa-3x mb-5"></i></i><br>ACCESS DENIED | ปฏิเสธการเข้าถึง</h2><br><h3>อีเมล์ หรือ รหัสผ่านของท่านไม่ถูกต้อง กรุณาตรวจสอบและเข้าสู่ระบบใหม่ใหม่อีกครั้ง</h3>
<?php	
	 header( "refresh: 5; url=index.php" );
 	exit(0);
	
}
?>