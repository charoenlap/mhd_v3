

<?php
	require("connection.php");
		$sql = "SELECT * FROM staff";
		$result = mysqli_query($link, $sql);
		$dbrr = mysqli_fetch_array($result);

		$mail = $_POST["email"];
		$pass = $_POST["pass"];
		$mails = $dbrr["email"];
		$passs = $dbrr["pass"];

if(($mail==$mails)&&($pass==$passs))
	{

?>
<table width="100%" border="0" class="fixed-top">
  <tbody>
    <tr bgcolor="#0035AD">
      	<td width="60%" class="pl-3 pt-2 pb-2">
			
				<img src="../../tools/images/home/MT-TH-RGB-H-white.png" alt="logo" style="width:150px;">
  				&nbsp;&nbsp;<h class="h3 text-light text-right">EQAS MUMT Service System</h>
		</td>
      	<td align="right" class="pr-5">
			<span class="text-light" style="color: white;font-family: arial; font-size: 12pt;">
				<input type="image" src="../../tools/images/staff/parkbhum.jpg" height="50px" style="border-radius: 75px; border:solid; border-color: white;vertical-align: middle; margin:10px" onClick="location.href='www.mt.mahidol.ac.th'"> PARKBHUM KUMJAD | </span>
			<span class="text-light" style="color: white;font-family: arial; font-size: 12pt"><?php echo (date("d M Y |")) ?></span>
			<span id="theTime"  style="font-family: arial; font-size: 12pt; color: white"></span>
			&nbsp;&nbsp;<button class="btn btn-danger btn-sm" onclick="location.href='signOut.php'">ออกจากระบบ</button>
		</td>
	 </tr>
	
    
	</tbody> 
	</table>
<?php
		header( "refresh: 0; url=home.php" );
 	exit(0);
		
	}
else
{
?> 
	<center><h2 class="h1 text-danger"><i class="fas fa-times-circle fa-3x mb-5"></i></i><br>ACCESS DENIED | ปฏิเสธการเข้าถึง</h2><br><h3>อีเมล์ หรือ รหัสผ่านของท่านไม่ถูกต้อง กรุณาตรวจสอบและเข้าสู่ระบบใหม่ใหม่อีกครั้ง</h3>
	<?php	
	 header( "refresh: 5; url=index.php" );
 	exit(0);
		
}
?>


	<!--<div style="padding-top: 50px"
	</div>	
	
	<table bgcolor="#0035ad" width="100%" border="0" style="font-family: arial" class="position-fixed" >
	<tbody>
	  <tr>
      	<td width="10%" align="center" valign="middle" class="pl-3 pt-3 pb-3 ">
			<div>
				<input type="image" src="../../tools/images/staff/parkbhum.jpg" height="80px" style="border-radius: 75px; border:solid; border-color: white">
			</div>
		</td>
      	<td width="60%" style="line-height: 1pt">
			<h3 class="text-light">PARKBHUM KUMJAD</h3>
			<p class="h7 text-light">
				Medical Scientist | Quality Manager Assistant <br>
			
			
			</p>
		</td>
		  
		  <td width="30%" align="right" class="pr-5">
			<p class="h7 text-light">
				User level : Administration <br>
				Center for Standardization and Product Validation</p>
		</td>
		
    </tr>
  </tbody>
</table> 
</html>-->
  
	<!--<div style="padding-top: 50px"
	</div>	
	
	<table bgcolor="#0035ad" width="100%" border="0" style="font-family: arial" class="position-fixed" >
	<tbody>
	  <tr>
      	<td width="10%" align="center" valign="middle" class="pl-3 pt-3 pb-3 ">
			<div>
				<input type="image" src="../../tools/images/staff/parkbhum.jpg" height="80px" style="border-radius: 75px; border:solid; border-color: white">
			</div>
		</td>
      	<td width="60%" style="line-height: 1pt">
			<h3 class="text-light">PARKBHUM KUMJAD</h3>
			<p class="h7 text-light">
				Medical Scientist | Quality Manager Assistant <br>
			
			
			</p>
		</td>
		  
		  <td width="30%" align="right" class="pr-5">
			<p class="h7 text-light">
				User level : Administration <br>
				Center for Standardization and Product Validation</p>
		</td>
		
    </tr>
  </tbody>
</table> 
</html>-->
  