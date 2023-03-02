<?php
    $no = $_GET["no"];
    require "connection.php";
    $sql = "UPDATE payment_slip SET status = '1'
    WHERE doc = $no";

     if ($link->query($sql) == TRUE) {
        header("refresh: 0; url=reciept-find-acc.php");
            exit(0);
        } else {
            echo "Error updating record: " . $link->error;
        }

?>

