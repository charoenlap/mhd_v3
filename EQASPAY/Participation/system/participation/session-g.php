<?php
session_start();
$_SESSION["nameG"] = $_POST["receiptName"];  
$_SESSION["addressG"] = $_POST["receiptAddress"];
header("Location: register.php");
exit();
?>