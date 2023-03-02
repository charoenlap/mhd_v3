<?php
    $no = $_GET["no"];
    $scheme = $_GET["scheme"];
    $scheme_assign = "a".$_GET["scheme"];

    require("connection.php");

    $sql_eqam ="SELECT * FROM payment_eqam WHERE $scheme = '1' AND id = '$no'";
    $result_eqam = mysqli_query($link, $sql_eqam);
    $dbrr_eqam = mysqli_fetch_assoc($result_eqam);
    $id = $dbrr_eqam["id"];

    if($id == $no)
    {
        $sql_no = "SELECT * FROM payment_eqam WHERE $scheme_assign > '0'";
        $result_no = mysqli_query($link, $sql_no);
        $row_no = mysqli_num_rows($result_no);
        $row = $row_no+1;

        $sql = "UPDATE payment_eqam SET 
        $scheme_assign = $row 
        WHERE id = '$no'";
        
        if ($link->query($sql) == TRUE) 
        {

            header("refresh: 0; url=register-find-participant.php?scheme=$scheme");
            exit(0);
        } 
        else 
        {
            echo "Error updating record: " . $link->error;
        }
    }


mysqli_close($link);
?>
