<?php
          //POST Value from index.php
        $mail = $_POST["email"];
		$pass = $_POST["code"];
	
          //Connecting to Database 
          require("connection.php");
          $sql = "SELECT * FROM payment_admin WHERE email ='$mail' ";
          $result = mysqli_query($link, $sql);
          $dbrr = mysqli_fetch_array($result);

		
		$mails = $dbrr["email"];
		$passs = $dbrr["pass"];
		$pos = $dbrr["position"];
		$nameTH = $dbrr["nameTH"];
		$surnameTH = $dbrr["surNameTH"];
		$userLevel = $dbrr["userLevel"];
		$depCode = $dbrr["depCode"];
                    $deparment = $dbrr["department"];
		
if(($mail==$mails) && ($pass==$passs))
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
          $_SESSION["department"] = $deparment;
	
	
  header( "refresh: 0; url=home.php" );
 	exit(0);
	
	 
}
else
{
	
	 header( "refresh: 0; url=index.html" );
 	exit(0);
	
}
?>