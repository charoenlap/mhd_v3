<?php
require("connection.php");
$deSc = $_POST["deleteScheme"];
$deId = $_POST["deleteId"];
$sql = "UPDATE participantRegister SET $deSc='0' WHERE id='$deId'";
mysqli_query($link, $sql);
mysqli_close($link);
header( "refresh: 0; url=register.php" );
exit(0);
?>