<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php date_default_timezone_set('Asia/Bangkok'); ?>
<link href="../css/MU-logo.png" rel="shortcut icon" type="image/png"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/b90e8921ff.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Maitree&display=swap" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

<script language="JavaScript" type="text/javascript">
function signOut(){
    return confirm('คุณต้องการ "ออกจากระบบ"ใช่หรือไม่?');
}
</script>

<script language="JavaScript" type="text/javascript">
function Delete(){
    return confirm('คุณต้องการ "ลบข้อมูล"ใช่หรือไม่?');
}
	function confirmed(){
    return confirm('คุณต้องการ "ยืนยันข้อมูล"ใช่หรือไม่?');
}
	function other(){
    return confirm('กรอกข้อมูล "ครบถ้วน" แล้วใช่หรือไม่?');
}

</script>

<style>
	
@font-face {
  font-family: Noto;
  src: url("../font/NotoSansThai-hinted/NotoSansThai-Regular.ttf");
}

@font-face {
  font-family: 'DBH';
  src: url("../font/DB Helvethaica X v3.2.ttf");
}

@font-face {
  font-family: 'DBL';
  src: url("../font/DB Lim X v3.2.ttf");
}
	h1{
		font-family: 'DBL';
	}
	}
	h2,h3
	{
		font-family: 'DBH';
	}
	h4,h5,h6,h7
	{
		font-family: 'Prompt';
	}
	
body{
		font-family: 'Prompt';
	}
	
input[type=text] {
	
	font-size: 16pt;
}
	button{
	
		font-size: auto;
	}
	textarea{
		font-family: prompt;
	}
.ft-sarabun
	{
		font-family: sarabun;
	}
.ft-prompt
	{
		font-family: Prompt;
	}
.ft-muh
	{
		font-family: 'DBH';
	}
.ft-mul
	{
		font-family: 'DBL';
	}
	.dis
	{
		cursor:context-menu;
	}
	.cor
	{
		border-color: none;
		color: #0035AD;
		background-color: white;
	}
	.cor:hover{
		background-color: #FFC726;
	}
</style>


<?php
 
$dayTH = ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'];
$monthTH = [null,'มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
$monthTH_brev = [null,'ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'];
function thai_date_and_time($time){   // 19 ธันวาคม 2556 เวลา 10:10:43
    global $dayTH,$monthTH;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " เวลา ".date("H:i:s",$time);
    return $thai_date_return;   
} 
function thai_date_and_time_short($time){   // 19  ธ.ค. 2556 10:10:4
    global $dayTH,$monthTH_brev;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    $thai_date_return.= " ".date("H:i:s",$time);
    return $thai_date_return;   
} 
function thai_date_short($time){   // 19  ธ.ค. 2556a
    global $dayTH,$monthTH_brev;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH_brev[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
function thai_date_fullmonth($time){   // 19 ธันวาคม 2556
    global $dayTH,$monthTH;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$monthTH[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
function thai_date_short_number($time){   // 19-12-56
    global $dayTH,$monthTH;   
    $thai_date_return = date("d",$time);   
    $thai_date_return.="-".date("m",$time);   
    $thai_date_return.= "-".substr((date("Y",$time)+543),-2);   
    return $thai_date_return;   
} 
?>

<!--
<br /> 
<?//=time()?><br />
<?//=thai_date_and_time(time())?><br />
<?//=thai_date_and_time_short(time())?><br />
<?//=thai_date_short(time())?><br />
<?//=thai_date_fullmonth(time())?><br />
<?//=thai_date_short_number(time())?><br />   
-->


