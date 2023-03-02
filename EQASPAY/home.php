   <?php 
          session_start();
          error_reporting(E_ALL); ini_set('display_errors', 0); 
	if($_SESSION["depCode"] <> null)
          {
	?>   

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php require("link.php");
	
	?>

<title>HOME</title>

<style>
          @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@500&display=swap');
          body
          {
                    font-family: Sarabun !important;
                    padding-bottom: 100px;
          }
          .btn-outline-dark {
                    border: none;
                    background-color: white;
                    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
          }  
          img {
                    width: 40%;
                    padding: 10px;
          }
</style>
</head>

<body style="background-color: lightgrey">
          <div class="container-fluid">
                    <div class="row pt-3 pb-3" style="background-color: #0035ad;">
                              <div class="col-xl-4 align-self-center">
                                        <img src="images/MT-TH-RGB-H-white.png" alt="mu" width="100%">
                              </div>
                              <div class="col-xl-7 align-self-center" style="text-align: end;">
                                        <span class="h4 text-white "><?php echo $_SESSION["nameTH"]." ".$_SESSION["surnameTH"]." | ".$_SESSION["position"]; ?></span><br>
                                        <span class="text-white"><?php echo $_SESSION["department"] ; ?></span>
                              </div>
                              <div class="col-xl-1 align-self-center d-flex justify-content-center">
                                        <button class="btn btn-danger" onClick="location.href='signOut.php'" >Sign Out</button>
                              </div>
                    </div>
           </div>
  


<div class="container pt-5">
 <center><h1>Welcome</h1></center>         
  <div class="row">
   
<!-- Participation Menu -->
<?php 
	if($_SESSION["depCode"] == 00)
          {
	?> 
            <div style="height: 50px;"></div>
             <h3 class="pb-3">EQAS Participation system</h3>           
            <div class="col-xl-3 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='Participation/system/participation/home.php?year=2023'">
                                <img src="images/icon/administrator.svg"><h2 class="h6">EQAS 2023</h2>
                      </button>
              </div>
          <div class="col-xl-3 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('https://mumtconnect.com/EQASMUMT/')">
                                <img src="images/icon/administrator.svg"><h2 class="h6">EQAS 2022</h2>
                      </button>
              </div>
           
 
    <?php } ?>   
            


<!-- SP  Menu -->
<?php 
	if($_SESSION["depCode"] == 00)
          {
	?> 
            <div style="height: 50px;"></div>
             <h3 class="pb-3">Center for Standardization and Method Validation</h3>           
            <div class="col-xl-3 p-2 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('https://mumtconnect.com/sarabun')">
                                <img src="images/icon/contract.svg"><h2 class="h6">ออกรหัสส่งหนังสือ</h2>
                      </button>
              </div>
      
              <div class="col-xl-3 p-2 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="window.open('https://forms.gle/J8dyiSd5quAgbthn9')">
                                <img src="images/icon/money.png"><h2 class="h6">ใบยืมเงินสดย่อย</h2>
                      </button>
              </div>
            
 
    <?php } ?>  
            

<!-- Financial Menu -->
<?php 
	if($_SESSION["depCode"] == 88 || $_SESSION["userLevel"] <> "")
          {
	?> 
            <div style="height: 50px;"></div>
             <h3 class="pb-3">Finance and Accounting System </h3>           
            <div class="col-xl-3 p-2 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='Participation/system/participation/reciept-find-acc.php'">
                                <img src="images/icon/029-payment.svg"><h2 class="h6">แบบสรุปรายการออกใบเสร็จรับเงิน</h2>
                      </button>
              </div>
<div class="col-xl-3 p-2 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='./Participation/system/participation/status-staff.php'">
                                <img src="https://mumtconnect.com/EQASMUMT/Participation/tools/images/4305394-user-interface/svg/011-notification.svg"><h2 class="h6">สถานะการชำระเงิน</h2>
                      </button>
              </div>
          
          <div class="col-xl-3 p-2 p-2">
                      <button style="width: 100%;" class="btn btn-outline-dark" onClick="location.href='Participation/system/participation/registerExport.php'">
                                <img src="images/icon/030-register.svg"><h2 class="h6">บัญชีชำระล่วงหน้า</h2>
                      </button>
              </div>
            
 
    <?php } ?>  
  </div>          
</div>
<div class="fixed-bottom bg-dark container-fluid" style=" margin-top: 100px;">
          <div class="row">
                    <div class="col-xl-10">
                              <span class="text-white">Version BetA 060721</span>
                    </div>
                    <div class="col-xl-2 d-flex justify-content-end">
                              <span class="text-white">Developed by Parkbhum K.</span>
                    </div>
          </div>
       
          </div>
</body>
</html>
 <?php }
else
{ 
         header( "refresh: 0; url=index.php" );
 	exit(0);
 }
?>   