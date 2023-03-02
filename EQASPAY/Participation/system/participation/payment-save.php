<?php
session_start();
require("connection.php");
if(isset($_POST["eqah"])<>null)
{
	$eqah = 2;
}
else
{
	$eqah = null;
}

$sql = "UPDATE participantRegister SET 
eqac='$_POST[eqac]',
eqah='$eqah',
eqat='$_POST[eqat]',
eqap='$_POST[eqap]',
beqam='$_POST[beqam]',
heqam='$_POST[heqam]',
uceqam='$_POST[uceqam]',
eqaisyp='$_POST[eqaisyp]',
eqaihbv='$_POST[eqaihbv]',
eqabgram='$_POST[eqabgram]',
eqabafb='$_POST[eqabafb]',
eqabiden='$_POST[eqabiden]',
reName1='$_POST[reName1]',
reName2='$_POST[reName2]',
reName3='$_POST[reName3]',
reName4='$_POST[reName4]',
reName5='$_POST[reName5]',
reName6='$_POST[reName6]',
reName7='$_POST[reName7]',
reName8='$_POST[reName8]',
reName9='$_POST[reName9]',
reName10='$_POST[reName10]',
reName11='$_POST[reName11]',
reName12='$_POST[reName12]',
adName1='$_POST[adName1]',
adName2='$_POST[adName2]',
adName3='$_POST[adName3]',
adName4='$_POST[adName4]',
adName5='$_POST[adName5]',
adName6='$_POST[adName6]',
adName7='$_POST[adName7]',
adName8='$_POST[adName8]',
adName9='$_POST[adName9]',
adName10='$_POST[adName10]',
adName11='$_POST[adName11]',
adName12='$_POST[adName12]',
paymentStaff='$_SESSION[mail]'

WHERE id = '$_SESSION[pid]'
";
mysqli_query($link, $sql);
mysqli_close($link);

header("refresh: 0; url=payment-form-id.php" );
exit(0);

?>