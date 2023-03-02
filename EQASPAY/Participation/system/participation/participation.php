<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php");
	session_start(); 
	?>
<title>HOME</title>
<style>
          .btn-outline-dark {
                    border: none;
                    background-color: white;
                    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
          }   
</style>
</head>

<body style="background-color: lightgrey">
	<?php require("headPanel.php"); 
	
	?>	
	
<div style="padding-top: 130px" class="container-fluid pb-5">
<h1 class="ft-prompt pb-3"><img src="../../tools/images/3456270-ecommerce/svg/012-factory.svg" width="5%"> PARTICIPATION</h1>
<!--<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-light">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Participation</a></li> 
  </ol>
</nav> -->
	<h3 class="mt-3">Process</h3>
	<hr>
  <div class="row pl-3 pr-3">
	   <?php if(($_SESSION["depCode"]=="00")) { ?>
    <div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='register.php'">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/030-register.svg" width="20%">
                                                    <br>Register</h2><h4>รับเข้าระบบ</h4>
				</button>
   </div><?php } ?> 
 <!--	  
	    <?php //if(($_SESSION["depCode"]=="00")) {  ?>

	 <div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark " onClick="window.open('payment-form-id.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/010-online payment.svg" width="20%">
                                                    <br>Payment slips</h2><h4>บันทึกการชำระเงิน</h4>
				</button>
    </div><?php // } ?> 
	  
-->	 
	  
	   <?php if(($_SESSION["depCode"]=="00")) { ?> 
	 <div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='receipt-print.php'">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/025-online shop.svg" width="20%"><br>Receipt Issuing</h2><h4>ส่งการเงิน</h4>
				</button>
    </div><?php } ?>  
	 
	  <?php if(($_SESSION["depCode"]=="00")) { ?>
	  <div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('reciept-post-find.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/004-delivery.svg" width="20%">
                                                    <br>Receipt Sending</h2><h4>จัดส่งใบเสร็จรับเงิน</h4>
				</button>
    </div><?php } ?> 
	
	<?php// if(($_SESSION["userLevel"]=="Administrator")&&($_SESSION["depCode"]=="00")) { ?>
<!--	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='database-find.php'">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/003-data collection.svg" width="20%">
                                                    <br>Database Saving</h2><h4>จัดเก็บทะเบียนสมาชิก</h4>
				</button>
    </div><?php// } ?> -->
	  
	<?php if(($_SESSION["depCode"]=="00")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('scheme-find-participation.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/008-electronic signature.svg" width="20%">
                                                    <br>Participant Statistic</h2><h4>สรุปรายการสมัคร</h4>
				</button>
    </div><?php } ?>
      
    <?php if(($_SESSION["depCode"]=="00")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('scheme-find.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/008-electronic signature.svg" width="20%">
                                                    <br>Participant Statistic</h2><h4>สรุปรายการชำระเงิน</h4>
				</button>
    </div><?php } ?>
            
            	<?php if($_SESSION["depCode"]=="00") { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('status-staff.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/011-notification.svg" width="20%">
                                                    <br>PART. STATUS</h2><h4>สถานะการสมัครสมาชิก</h4>
				</button>
    </div><?php } ?>

	  
	</div> 	 
	
	
	
	
	  <h3 class="mt-3">Others</h3>
	<hr>
	
	<div class="row pl-3 pr-3">
<!--	 
	<?php /* if(($_SESSION["depCode"]=="00")) { ?>	
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('participationPrint.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/030-print.svg" width="20%">
                                                    <br>Receipt Sending</h2><h4>พิมพ์รายการสมัครสมาชิก</h4>
				</button>
    </div> <?php }  ?> 

	
	 <?php if($_SESSION["depCode"]=="00") { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('dataRec-find.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/034-server.svg" width="20%">
                                                    <br>DATABASE</h2><h4>ทะเบียนสมาชิก</h4>
				</button>
    </div><?php } */ ?>
	--> 
	 <?php if($_SESSION["depCode"]=="00") { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('reciept-find.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/032-briefcase.svg" width="20%">
                                                    <br>RECEIPT DATA</h2><h4>ทะเบียนคุมใบเสร็จรับเงิน</h4>
				</button>
    </div><?php } ?>
	
	
	<?php /*if($_SESSION["depCode"]=="00") { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('#');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/046-user.svg" width="20%"><br>REPRESENTATIVE</h2><h4>ผู้สนับสนุนสมาชิก</h4>
				</button>
    </div><?php } */?>
	
		<?php if(($_SESSION["userLevel"]=="Administrator")&&($_SESSION["depCode"]=="00")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('register-edit.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/013-bookmark.svg" width="20%"><br>CODE EDIT</h2><h4>แก้ไขรหัสการทำรายการ</h4>
				</button>
    </div><?php } ?>		
		
	<?php if(($_SESSION["userLevel"]=="Administrator")&&($_SESSION["depCode"]=="00")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('right-find.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/4305394-user-interface/svg/035-flag.svg" width="20%"><br>EQAM Right</h2><h4>สิทธิ์การสมัคร EQAM</h4>
				</button>
    </div><?php } ?>		
		
	<?php if(($_SESSION["userLevel"]=="Administrator") || ($_SESSION["depCode"]=="00")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('receipt-post-form-group.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/032-social networks.svg" width="20%"><br>Group Payment</h2><h4>จัดส่งใบเสร็จแบบกลุ่ม</h4>
				</button>
    </div><?php } ?>		
		
	<?php if(($_SESSION["userLevel"]=="Administrator") || ($_SESSION["depCode"]=="00")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('payment-method-group-form.html');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/007-data transfer.svg" width="20%">
                                                    <br>Group Payment</h2><h4>บันทึกออกใบเสร็จแบบกลุ่ม</h4>
				</button>
    </div><?php } ?>	
		
		
	<?php if(($_SESSION["userLevel"]=="Administrator")) { ?>
	<div class="col-sm-3 p-2">
		      	<button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('ovedueAccount.php');">
				  <h2 class="h4 pt-3"><img src="../../tools/images/3456270-ecommerce/svg/034-consultant.svg" width="20%">
                                                    <br>Overdue Account</h2><h4>บัญชีลูกหนี้ - ค้างชำระ</h4>
				</button>
    </div><?php } ?>		
		
	  
	    </div> 

	</div>



</body>
</html>