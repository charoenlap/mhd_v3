<?php
    $date = $_POST["issued_date"];
    $no = $_POST["no"];
    
require "connection.php";
    
$sql = "UPDATE payment_slip
    SET
    issued_receipt = '$date'
    WHERE no = '$no'

    ";

if (mysqli_query($link, $sql)) 
    {
	
	header( "refresh: 0; url=reciept-find-acc.php?doc=$no" );
 	exit(0);

 
} 
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>