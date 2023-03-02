<?php
session_start();
$_SESSION["nameG"] = null;
$_SESSION["addressG"] = null;
header("Location: register.php");
exit();
?>