<?php
session_start();
$doc = $_SESSION["docNo"];
$date = date('d-m-y');
$fileName = "file";
$type = strrchr($_FILES[$fileName]['name'],".");
$slip= $doc."-".$date.$type;
move_uploaded_file($_FILES[$fileName]["tmp_name"],"account/".$slip);  
                                            
$time = date('Y-m-d H:i:s',time());                   
$staff = $_SESSION["nameTH"]." ".$_SESSION["surnameTH"];

require("connection.php");
$sql = "UPDATE payment_slip SET 
slipAccount = '$slip', 
issued = '1',
issueTime = '$time',
issuedBy = '$staff'

WHERE doc = '$doc'";

if ($link->query($sql) === TRUE) {
    
?>  
<script type="text/javascript">
          alert("อัปโหลดใบเบิกของท่านเรียบร้อยแล้ว");
          window.location.href="reciept-find-acc.php";
</script>


<?php
} else {
  echo "Error updating record: " . $link->error;
}

$link->close();
?>