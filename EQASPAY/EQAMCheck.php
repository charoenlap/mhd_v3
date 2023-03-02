<?php //error_reporting(E_ALL); ini_set('display_errors', 0); ?> 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Find</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap');
          body, h1, span
          {
                    font-family: Sarabun !important;
          }
           .box-form {
                  border: solid; 
                    border-color: black; 
                    padding: 50px; 
                    margin: 50px; 
                    border-radius: 10px;
                     background-color: white;
</style>
</head>

<body style="background-color: lightgray">
          <?php
         $schemes =  $_POST["scheme"];
          $id = $_POST["idNumber"];
          $mail = $_POST["mail"];
         
          if($schemes == 'h')
          {
                     require "connection-M.php";
	                   $sql = "SELECT*FROM eqamright WHERE id='$id' AND mail ='$mail' ";
	                   $result = mysqli_query($link, $sql); 
	                   $dbrr = mysqli_fetch_array($result); 
                             $row = mysqli_num_rows($result);
                   
                    if($row > 0)
                    {
                               ?>
                              <div class="box-form">
                                        <h1><strong>สถานะการสมัคร H-EQAM ประจำปี 2565</strong></h1>
                                        <hr>
                                        <h1>รหัสสมาชิก: <span style="color: navy"><?php echo $dbrr["id"]; ?></span></h1> 
                                        <h1>ชื่อโรงพยาบาล/หน่วยงาน: <span style="color: navy"><?php echo $dbrr["name"]; ?></span></h1> 
                                        <h1>สถานะการสมัคร: <span style="color: green">ได้รับสิทธิ์การสมัคร</span></h1> 
                              </div>
                              <?php
                              
                    }
                    else
                    {
                         ?>
                              <div class="box-form">
                                         <h1><strong>สถานะการสมัคร H-EQAM ประจำปี 2565</strong></h1>
                                        <hr>
                                        <h1>รหัสสมาชิก: <span style="color: navy"><?php echo $id; ?></span></h1> 
                                        <h1>สถานะการสมัคร: <span style="color: red">ไม่ได้รับสิทธิ์การสมัคร<br></h1> 
                                                  กรณีที่ไม่แน่ใจว่ารหัสสมาชิก หรือ อีเมล์ของท่านถูกต้องหรือไม่ โปรดติดต่อ LINE Official @eqasmumt</span>
                              </div>
                              <?php     
                    }
                             
                            
          }
          else
          {
                   if($schemes == 'b')
                   {
                        
                   }
                    else
                    {
                              ?>
                             <div style="color: white; text-align: center; vertical-align: middle; background-color: red; padding: 100px;">
                                        <h1>Error !!!</h1> 
                                        <h2>Please, try again later.</h2>
                              </div>
          
                              <?php
                    }
          }
          ?>
</body>
</html>