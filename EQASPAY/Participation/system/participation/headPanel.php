<?php session_start(); ?>
<html>
<script language="JavaScript" type="text/javascript">
function sivamtime() {
  now=new Date();
  hour=now.getHours();
  min=now.getMinutes();
  sec=now.getSeconds();

if (min<=9) { min="0"+min; }
if (sec<=9) { sec="0"+sec; }
if (hour>12) { hour=hour-12; add="pm"; }
else { hour=hour; add="am"; }
if (hour==12) { add="pm"; }

time = ((hour<=9) ? "0"+hour : hour) + ":" + min + ":" + sec + " " + add;

if (document.getElementById) { theTime.innerHTML = time; }
else if (document.layers) {
 document.layers.theTime.document.write(time);
 document.layers.theTime.document.close(); }

setTimeout("sivamtime()", 1000);
}
window.onload = sivamtime;

// -->

</script>
<?php

$name = ucfirst($_SESSION["name"])." ".ucfirst($_SESSION["surname"]);
$pic = $_SESSION["name"].".jpg";
?>
<table width="100%" border="0" class="fixed-top">
  <tbody>
    <tr bgcolor="#009C6B">
      	<td width="30%" class="pl-3 pt-2 pb-2">
			
				<img src="../../tools/images/home/MT-TH-RGB-H-white.png" alt="logo" style="width:150px;">
  				&nbsp;&nbsp;<h class="h3 text-light text-right">EQAS MUMT <?php echo $_GET["year"]; ?> </h>
		</td>
      	<td align="right" class="pr-5">
			<span class="text-light" style="color: white;font-family: arial; font-size: 12pt;">
				<input type="image" src="../../tools/images/staff/<?php echo $pic; ?>" height="50px" style="border-radius: 75px; border:solid; border-color: white; vertical-align:middle; margin:10px"> <?php echo $name; ?> | </span>
			<span class="text-light" style="color: white;font-family: arial; font-size: 12pt"><?php echo (date("d M Y |")) ?></span>
			<span id="theTime"  style="font-family: arial; font-size: 12pt; color: white"></span>
			&nbsp;&nbsp;<button class="btn btn-warning btn-sm" onclick="location.href='../../../home.php'">กลับหน้าหลัก</button>
		</td>
	 </tr>
</tbody> 
</table> 
</html>