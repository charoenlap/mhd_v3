<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>RECEIPT ISSUING</title>
<?php 
    require("../../tools/css/scripts.php") ;
    session_start();
    ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
.divscroll
{
    width: 100%;
    height: 70vh;
    overflow-y: scroll;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
<?php require("headPanel.php"); ?>
<form class="form-inline" method="post" action="receipt-result-acc.php">

<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">

	<h1 class="ft-prompt"><i class="bi bi-app-indicator"></i> ออกใบเสร็จรับเงิน</h1>

	
	<?php
	
	require "connection.php";
	$sql = "SELECT * FROM payment_slip ORDER BY no  DESC;";
	$result = mysqli_query($link, $sql);
	?>
<!--
	<select class="form-control-lg" style="width: auto" name="doc">
	
	<?php 
	if (mysqli_num_rows($result) > 0) {
  	while($row = mysqli_fetch_assoc($result)) {	
	$doc = 	 $row["doc"];
	?>
	<option value="<?php echo $row["doc"]; ?>">66/<?php echo(str_pad($doc, 3, '0', STR_PAD_LEFT)) ." | ".$row["date"]; ?></option>
	<?php 
											 
	}
	} 
		
	?>
	
	</select>
  
  <button type="submit" class="btn btn-lg btn-primary">Submit <i class="fas fa-angle-double-right"></i></button>
-->
</form>
</div>
    
<div class="container-fluid">

<table class="table table-sm table-hover fixed-top" style="margin-top: 200px;">
    <thead>
    <tr>
      <th width="10%">เลขที่</th>
      <th width="15%">วันที่เตรียม</th>
      <th width="15%">ผู้เตรียม</th>
      <th width="15%">รายละเอียดออกใบเสร็จ</th>
      <th width="15%">วันที่ออกใบเสร็จ</th>
      <th width="10%">ผู้ออกใบเสร็จ</th>
      <th width="10%">เอกสารใบเบิก</th>
      <th>สถานะ</th>
    </tr>
    <thead>
</table>
       
<div class="divscroll" style="margin-top: 50px;">
<table class="table table-sm table-hover" >    
<tbody>
    <?php 
    
	require "connection.php";
	$sql_status = "SELECT * FROM payment_slip ORDER BY no  DESC;";
	$result_status = mysqli_query($link, $sql_status);
	
        if (mysqli_num_rows($result_status) > 0) 
        {
  	         while($row_status = mysqli_fetch_assoc($result_status)) 
             {	
	               $docs = 	 $row_status["doc"];
                   $email = $row_status["staff"];
                   
                   $sql_staff = "SELECT * FROM payment_admin WHERE email =  '$email';";
	               $result_staff = mysqli_query($link, $sql_staff);
                   $row_staff = mysqli_fetch_assoc($result_staff);
                       
                    $sql4 = "SELECT * FROM payment_lists WHERE (eqacp='$docs' OR eqahp='$docs' OR eqatp='$docs' OR eqapp='$docs' OR beqamp='$docs' OR heqamp='$docs' OR uceqamp='$docs' OR eqaisypp='$docs' OR eqaihbvp='$docs' OR eqabgramp='$docs' OR eqabafbp='$docs' OR eqabidenp='$docs') ORDER BY id ASC;";
                   $result4 = mysqli_query($link, $sql4);
                    $dbrr4 = mysqli_fetch_array($result4);
    ?>
        <tr 
            <?php
                  if($row_status["issued"] == 1)
                            {
                                echo " class='bg-success bg-opacity-25' ";
                            }
                             else
                             {
                                 if($row_status["status"] == 0)
                                 {
                                     echo " class='bg-primary bg-opacity-25' ";
                                 }
                                
                                 {
                                     echo " class='bg-danger bg-opacity-25' ";
                                 }
                                
                             }
                        
            ?>
        >
            
					<td width="10%">
                        <?php
                              if($_SESSION["mail"]=="pichayasini.jit@mahidol.ac.th")
                                {
                                  if($row_status["status"] == 0)
                                  {
                                ?> 
                                <a class="btn btn-sm btn-primary" href="receipt-result.php?doc=<?php echo $row_status["doc"]; ?>">
                                    66/<?php echo str_pad($row_status["doc"], 3, '0', STR_PAD_LEFT); ?> 
                                </a>
                               
                                <button class="btn btn-sm btn-warning" onClick="window.open('acc-update-printed.php?no=<?php echo $row_status["doc"]; ?>')"><i class="bi bi-printer"></i></button>  
               <?php
                                  }
                                        else
                                {
                                    ?> 
                        
                        <button type="button" class="btn btn-sm btn-success w-100" onClick="window.open('receipt-result.php?doc=<?php echo $row_status["doc"]; ?>')">
                           <span><i class='fas fa-check-circle'></i> &nbsp; 66/<?php echo str_pad($row_status["doc"], 3, '0', STR_PAD_LEFT); ?>  
                           </span>
                      
                        </button>
                        
                        <?php
                                
                            } }
                                else
                                {
                                    ?> 
                        
                        <button type="button" class="btn btn-sm btn-success w-100" onClick="window.open('receipt-result.php?doc=<?php echo $row_status["doc"]; ?>')">
                           <span><i class='fas fa-check-circle'></i> &nbsp; 66/<?php echo str_pad($row_status["doc"], 3, '0', STR_PAD_LEFT); ?>  
                           </span>
                      
                        </button>
                        <?php
                                
                                }
                            ?>
                    </td>
                    <td width="15%"><?php echo thai_date_fullmonth(strtotime($row_status["date"])); ?></td>
                    <td width="15%"><?php echo $row_staff["nameTH"]." ".$row_staff["surNameTH"]; ?></td>
                    <td width="15%" class="text-center">
                        <a href="receipt-result-acc.php?doc=<?php echo $row_status["doc"];?>" target="_blank">
                            <i class="bi bi-search h3"></i>
                        </a></td>
            <td><?php 
                 if($row_status["issued_receipt"] == null || $row_status["issued_receipt"] == "0000-00-00")
                 {
                     echo "";
                 }
                 else
                 {
                     echo thai_date_fullmonth(strtotime($row_status["issued_receipt"])); 
                 }
                 
                ?> </td>
                    <td width="10%"><?php 
                  if($row_status["issued"] == 1)
             {
                  echo $row_status["issuedBy"];  
                  }
                  ?></td>
                    <td width="10%"><a href="account/<?php echo $row_status["slipAccount"]; ?>" target="_blank">
                        <?php 
                            if($row_status["slipAccount"]<>null)
                            {
                                ?> <i class="bi bi-receipt h3"></i></a></td> <?php
                            }
                        ?>
                    <td>
                        <?php 
                            if($row_status["issued"] == 1)
                            {
                                ?> <span class="text-success"><i class='fas fa-check-circle'></i> Issued</span> <?php
                            }
                             else
                             {
                                 if($row_status["status"] == 0)
                                  {
                                 
                                ?> <span class="text-primary">Printing...</span> <?php
                                }
                                 else
                                 {
                                     ?> <span class="text-danger">Issuing...</span> <?php
                                 }
                             }
                        
                        ?>
                        
                    </td>
                       
        </tr>
    
    
    <?php
	           }
	   } 
		
	?>    
    
  </tbody>
</table>
</div> 
        
</div>	
<?php mysqli_close($link); ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
</body>
</html>