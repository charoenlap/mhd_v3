<?php
session_start();
require("connection.php");
$sql = "INSERT INTO logbook (user,action) VALUES('$_SESSION[mail]','Sign out')";
$result = mysqli_query($link, $sql);
mysqli_close($link);
session_destroy();

?>
<script>
window.location.href = "index.html"
</script>