
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Payment Slip</title>
<?php require("../../tools/css/scripts.php");
	session_start();?>
<style>
	input[type="checkbox"] {
    -ms-transform: scale(2.0); /* IE 9 */
    -webkit-transform: scale(2.0); /* Chrome, Safari, Opera */
    transform: scale(2.0);
}        
   
        

          
</style>
</head>

<body>



<?php 
    require("headPanel.php"); 
    session_start();
    $id = $_POST["id"];
    $instituteName = $_POST["instituteName"];
    
    require "connection-mhd.php";
	$sql = "SELECT * FROM mhd_register_program WHERE member_id = '$id' AND year_id = '11' AND admin_approve = '0' AND del = '0'  ;";
	$result = mysqli_query($link, $sql);        
        
?>
    
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input type="hidden" value="<?php echo $_POST["instituteName"]; ?>" name="instituteName">
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<div class="pb-5">
<h1 class="ft-prompt"><i class="fas fa-file-invoice-dollar"></i> RECEIPT ISSUING</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
	<li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
    <li class="breadcrumb-item active" aria-current="page">Payment Issuing</a></li> 
  </ol>
</nav>
   <?php if($_SESSION["nameG"] <> null)
{
    
?>
<form method="post" action="session-unset-g.php" class="mt-3 mb-3">
<button type="submit" class="btn btn-lg btn-danger">ล้างข้อมูลออกใบเสร็จ <i class="fas fa-angle-double-right"></i></button>
</form>
        <?php
 }   
    ?> 
 <form action="payment-save-2.php" method="post" enctype="multipart/form-data">   
<div class="form-row">
   <div class="form-group col-xl-2">
      <input type="text" class="form-control" value="<?php echo $_POST["id"]; ?>" disabled>
    </div>
	<div class="form-group col-xl-10">
      <input type="text" class="form-control" value="<?php echo $instituteName; ?>" disabled>
    </div>
	</div>

 <input type="hidden" value="<?php echo $id; ?>" name="id">
    <input type="hidden" value="<?php echo $_POST["instituteName"]; ?>" name="instituteName">
<table width="100%" border="1" class="table table-bordered table-sm table-hover">
  <tbody>
    <thead class="thead-light">
		<tr>
      	          <th><strong>Schemes</strong></th>
		<th width="40%"><strong>ออกใบเสร็จในนาม</strong></th>
		<th width="40%"><strong>ที่อยู่จัดส่งใบเสร็จ</strong></th>
		</tr>
	</thead> 
    </tr>

<?php     
if($_POST["eqac"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAC</td><input type="hidden" value="2" name="eqac">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName1" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName1" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAC</td><input type="hidden" value="2" name="eqac">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName1" required><?php echo $_POST["bill_1"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName1" required><?php echo $_POST["bills_1"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>
    
<?php     
if($_POST["eqah"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAH</td><input type="hidden" value="2" name="eqah">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName2" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName2" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAH</td><input type="hidden" value="2" name="eqah">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName2" required><?php echo $_POST["bill_2"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName2" required><?php echo $_POST["bills_2"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>   
	
<?php     
if($_POST["eqat"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAT</td><input type="hidden" value="2" name="eqat">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName3" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName3" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAT</td><input type="hidden" value="2" name="eqat">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName3" required><?php echo $_POST["bill_3"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName3" required><?php echo $_POST["bills_3"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>  

<?php     
if($_POST["eqap"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAP</td><input type="hidden" value="2" name="eqap">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName4" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName4" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAP</td><input type="hidden" value="2" name="eqap">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName4" required><?php echo $_POST["bill_4"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName4" required><?php echo $_POST["bills_4"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>  
    
    
<?php     
if($_POST["beqam"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>B-EQAM</td><input type="hidden" value="2" name="beqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName5" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName5" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>B-EQAM</td><input type="hidden" value="2" name="beqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName5" required><?php echo $_POST["bill_5"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName5" required><?php echo $_POST["bills_5"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>  

<?php     
if($_POST["heqam"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>H-EQAM</td><input type="hidden" value="2" name="heqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName6" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName6" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>H-EQAM</td><input type="hidden" value="2" name="heqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName6" required><?php echo $_POST["bill_6"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName6" required><?php echo $_POST["bills_6"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>  
    
<?php     
if($_POST["uceqam"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>UC-EQAM</td><input type="hidden" value="2" name="uceqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName7" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName7" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>UC-EQAM</td><input type="hidden" value="2" name="uceqam">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName7" required><?php echo $_POST["bill_7"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName7" required><?php echo $_POST["bills_7"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>      

<?php     
if($_POST["eqaisyp"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAI:SYP</td><input type="hidden" value="2" name="eqaisyp">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName8" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName8" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAI:SYP</td><input type="hidden" value="2" name="eqaisyp">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName8" required><?php echo $_POST["bill_8"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName8" required><?php echo $_POST["bills_8"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>      

<?php     
if($_POST["eqaihbv"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAI:HBV</td><input type="hidden" value="2" name="eqaihbv">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName9" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName9" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAI:HBV</td><input type="hidden" value="2" name="eqaihbv">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName9" required><?php echo $_POST["bill_9"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName9" required><?php echo $_POST["bills_9"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>      

<?php     
if($_POST["eqabgram"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAB:GRAM</td><input type="hidden" value="2" name="eqabgram">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName10" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName10" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAB:GRAM</td><input type="hidden" value="2" name="eqabgram">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName10" required><?php echo $_POST["bill_10"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName10" required><?php echo $_POST["bills_10"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>    

<?php     
if($_POST["eqabafb"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAB:AFB</td><input type="hidden" value="2" name="eqabafb">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName11" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName11" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAB:AFB</td><input type="hidden" value="2" name="eqabafb">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName11" required><?php echo $_POST["bill_11"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName11" required><?php echo $_POST["bills_11"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>       
    
<?php     
if($_POST["eqabiden"]==2)
{ 
    if($_SESSION["nameG"] <> null)
    {
    ?>
    <tr>
		<td>EQAB:IDEN</td><input type="hidden" value="2" name="eqabiden">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName12" required><?php echo $_SESSION["nameG"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName12" required><?php echo $_SESSION["addressG"]; ?></textarea></td>
		
    </tr>
            
    <?php   
    }
    else
    {
    ?>
	 <tr>
		<td>EQAB:IDEN</td><input type="hidden" value="2" name="eqabiden">
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="reName12" required><?php echo $_POST["bill_12"]; ?></textarea></td>
		<td width="40%"><textarea wrap="virtual" rows="auto" style="width: 100%" name="adName12" required><?php echo $_POST["bills_12"]; ?></textarea></td>
		
    </tr>
<?php 
    }
} 
?>  

	

	 
  </tbody>
</table>
<span>แนบหลักฐานชำระเงิน</span><br> <input type="file" name="fileName" id="fileName" required >
<center><button class="btn btn-lg btn-success mt-3" style="width: 20%"><i class="fas fa-save"></i> Save</button></center>
	
</div>
</form>
</body>
</html> 