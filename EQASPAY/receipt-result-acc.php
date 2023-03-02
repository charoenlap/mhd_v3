<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?> 
<?php
	session_start();
	require "connection.php";
	if($_SESSION["ind"]==null)
	{
		if($_POST["doc"]<> null)
        {
            $doc = $_POST["doc"];
        }
        else
        {
            $doc = $_GET["doc"];
        }	
	}
	
	else
	{
		$doc = $_SESSION["ind"];
	}
	
	$sql = "SELECT * FROM payment_lists WHERE (eqacp='$doc' OR eqahp='$doc' OR eqatp='$doc' OR eqapp='$doc' OR beqamp='$doc' OR heqamp='$doc' OR uceqamp='$doc' OR eqaisypp='$doc' OR eqaihbvp='$doc' OR eqabgramp='$doc' OR eqabafbp='$doc' OR eqabidenp='$doc') ORDER BY id ASC;";
	
	$result = mysqli_query($link, $sql);
	$rowcount = mysqli_num_rows($result);
    
	
	$sql2 = "SELECT * FROM payment_slip WHERE doc = '$doc'";
	$result2 = mysqli_query($link, $sql2);
	$dbrr2 = mysqli_fetch_array($result2);
	$mail = $dbrr2["staff"];
	
	
	$sql3 = "SELECT * FROM payment_admin WHERE email = '$mail'";
	$result3 = mysqli_query($link, $sql3);
	$dbrr3 = mysqli_fetch_array($result3);
	
$_SESSION["docNo"] = $doc;

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php");
	session_start();?>
	<title>DOC NO-65.<?php echo(str_pad($doc, 3, '0', STR_PAD_LEFT));  ?></title>
<style type="text/css">
          .fas
          {
                    font-size: 15pt;
          }
          td, th {
                    font-size: 15pt;
                    font-family: Sarabun;
          }
</style>
</head>

<body>
<div id="non-printable">   
<?php require("headPanel.php") ?>	
<div style="padding-top: 130px" class="container-fluid pb-5">
<h1 class="ft-prompt"> RECEIPT REVIEW</h1>

</div></div>
<div class="container-fluid pb-5">

<div class="page-break">
<table width="100%" border="0" >
  <tbody>
    <tr>
      <td width="20%"></td>
      <td style="text-align:right" ><button class="btn btn-lg btn-success rounded-pill p-2 pl-3 pr-3 h1">DOC NO: 66/<?php echo(str_pad($doc, 3, '0', STR_PAD_LEFT));  ?></button></td>
    </tr>
  </tbody>
</table> <br>

<center><h1 class="ft-sarabun">แบบสรุปรายการออกใบเสร็จรับเงินค่าธรรมเนียมการสมัครสมาชิก ประจำปี 2566</h1></center>

<table width="100%" border="1" style="font-size:8pt" cellpadding="5px">
  <tbody>
<thead style="vertical-align: middle">
	 <tr>
      <th width="2%" rowspan="3" style="vertical-align: middle; text-align: center">No</th>
      <th width="5%" rowspan="3" style="vertical-align: middle; text-align: center">ID</th>
		<th rowspan="3" style="vertical-align: middle; text-align: center">Participant</th>
		 <th rowspan="2" style="vertical-align: middle; text-align: center">EQAC</th>
		   <th rowspan="2" style="vertical-align: middle; text-align: center">EQAH</th>
		  <th rowspan="2" style="vertical-align: middle; text-align: center">EQAT</th>
		  <th rowspan="2" style="vertical-align: middle; text-align: center">EQAP</th>
		 <th colspan="3" style="vertical-align: middle; text-align: center"><center>EQAM</center></th>
		 <th colspan="2" style="vertical-align: middle; text-align: center"><center>EQAI</center></th>
		 <th colspan="4" style="vertical-align: middle; text-align: center"><center>EQAB</center></th>
		 <th width="2%" rowspan="3" style="vertical-align: middle; text-align: center">Total</th>
    </tr>
	<tr>
		<td style="vertical-align: middle; text-align: center">B-EQAM</td>
		<td style="vertical-align: middle; text-align: center">H-EQAM</td>    
		<td style="vertical-align: middle; text-align: center">UC-EQAM</td>  
		<td style="vertical-align: middle; text-align: center">EQAI:SYP</td>
		<td style="vertical-align: middle; text-align: center">EQAI:HBV</td>
		<td style="vertical-align: middle; text-align: center">EQAB:GRAM</td>
		<td style="vertical-align: middle; text-align: center">EQAB:AFB</td>
		<td style="vertical-align: middle; text-align: center">EQAB:IDEN</td>
		<td rowspan="2" style="vertical-align: middle; text-align: center">EQAB-FEE</td>
		
    </tr>
	<tr>
		<td style="vertical-align: middle; text-align: center">3,000</td>
		<td style="vertical-align: middle; text-align: center">4,500</td>
		<td style="vertical-align: middle; text-align: center">4,500</td>
		<td style="vertical-align: middle; text-align: center">2,000</td>
		<td style="vertical-align: middle; text-align: center">2,500</td>
		<td style="vertical-align: middle; text-align: center">1,500</td>
		<td style="vertical-align: middle; text-align: center">1,200</td>
		<td style="vertical-align: middle; text-align: center">2,200</td>	
		<td style="vertical-align: middle; text-align: center">2,200</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
    </tr>
	</thead>
	  
<?php	
	$i = 1;
	$a = 1;
  	while($row = mysqli_fetch_array($result)) {
	?>
	
	  <tr align="center">
		 <td><?php echo $i; ?></td>
	  <td align="left"><?php echo $row["id"];?><input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $row["id"];?>"</th></td>
	<td align="left"><a href="participationPrint-find-acc.php?id=<?php echo $row["id"];?>" target="_blank"><?php echo $row["instituteName"];?></a></td>
	<td><?php  if($row["slip1"] <> null) { ?> <a href="./slip/<?php echo $row["slip1"];?>" target="_blank"><?php ;} if($row["eqacp"]==$doc) { echo "<i 
    class='fas fa-check-circle'></i>";$c = 3000;}?></a></td>
	<td><?php if($row["slip2"] <> null) { ?> <a href="./slip/<?php echo  $row["slip2"]; ?>" target="_blank"><?php ;} if($row["eqahp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$h = 4500;}?></a></td>
	<td><?php if($row["slip3"] <> null) { ?> <a href="./slip/<?php echo  $row["slip3"]; ?>" target="_blank"><?php ;} if($row["eqatp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$t = 4500;}?></a></td>
	<td><?php if($row["slip4"] <> null) { ?> <a href="./slip/<?php echo  $row["slip4"]; ?>" target="_blank"><?php ;} if($row["eqapp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$p = 2000;}?></a></td>
	<td><?php if($row["slip5"] <> null) { ?> <a href="./slip/<?php echo  $row["slip5"]; ?>" target="_blank"><?php ;} if($row["beqamp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$mb = 2500;}?></a></td>
	<td><?php if($row["slip6"] <> null) { ?> <a href="./slip/<?php echo  $row["slip6"]; ?>" target="_blank"><?php ;} if($row["heqamp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$mh = 1500;}?></a></td>
	<td><?php if($row["slip7"] <> null) { ?> <a href="./slip/<?php echo  $row["slip7"]; ?>" target="_blank"><?php ;} if($row["uceqamp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$mu = 1200;}?></a></td>
	<td><?php if($row["slip8"] <> null) { ?> <a href="./slip/<?php echo  $row["slip8"]; ?>" target="_blank"><?php ;} if($row["eqaisypp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$is = 2200;}?></a></td>
	<td><?php if($row["slip9"] <> null) { ?> <a href="./slip/<?php echo  $row["slip9"]; ?>" target="_blank"><?php ;} if($row["eqaihbvp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";$ih = 2200;}?></a></td>
	<td><?php if($row["slip10"] <> null) { ?> <a href="./slip/<?php echo  $row["slip10"]; ?>" target="_blank"><?php ;} if($row["eqabgramp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";}?></a></td>
	<td><?php if($row["slip11"] <> null) { ?> <a href="./slip/<?php echo  $row["slip11"]; ?>" target="_blank"><?php ;} if($row["eqabafbp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";}?></a></td>
	<td><?php if($row["slip12"] <> null) { ?> <a href="./slip/<?php echo  $row["slip12"]; ?>" target="_blank"><?php ;} if($row["eqabidenp"]==$doc) { echo "<i class='fas fa-check-circle'></i>";}?></a></td>
	<td><?php 
		if($row["eqabgramp"]==$doc && $row["eqabafbp"]==$doc && $row["eqabidenp"]==$doc) 
		{ 
			echo number_format(2500);
			$bt = 2500;
		}
		else
		{
			if($row["eqabgramp"]==$doc && $row["eqabafbp"]==$doc)
			{
				echo number_format(1800);
				$bt = 1800;
			}
			else
			{
				if($row["eqabgramp"]==$doc && $row["eqabidenp"]==$doc)
				{
					echo number_format(2000);
					$bt = 2000;
				}
				else
				{
					if($row["eqabafbp"]==$doc && $row["eqabidenp"]==$doc)
					{
						echo number_format(2000);
						$bt = 2000;
					}
					else
					{
						if($row["eqabgramp"]==$doc)
						{
							echo number_format(1000);
							$bt = 1000;
						}
						else
						{
							if($row["eqabafbp"]==$doc)
							{
								echo number_format(1000);
								$bt = 1000;
							}
							else
							{
								if($row["eqabidenp"]==$doc)
								{
									echo number_format(1000);
									$bt = 1000;
								}
								else
								{
									echo "-";
									$bt = 0;
								}
							}
						}
					}
				}
			}
		}
		
		?></td>
	<td><?php  $fee = $c+$h+$t+$p+$mb+$mh+$mu+$is+$ih+$bt;
				$_SESSION["fee".$a] = $fee;
			echo number_format($fee,2);
		$a++;
		?></td>
	  
	  <?php
		$c = 0;
		$h = 0;
		$t = 0;
		$p = 0;
		$mb = 0;
		$mh = 0;
		$mu = 0;
		$is = 0;
		$ih = 0;
		$bt = 0;
		$i++;
	}	

?>
	</tr>	  
	  <tr bgcolor="#C9E9F4">
	  <td colspan="12" class="h6">GRAND TOTAL</td>
		 
	<td colspan="5" align="right" class="h6"><?php 
	
$Gtotal = (
$_SESSION['fee1']+
$_SESSION['fee2']+
$_SESSION['fee3']+
$_SESSION['fee4']+
$_SESSION['fee5']+
$_SESSION['fee6']+
$_SESSION['fee7']+
$_SESSION['fee8']+
$_SESSION['fee9']+
$_SESSION['fee10']+
$_SESSION['fee11']+
$_SESSION['fee12']+
$_SESSION['fee13']+
$_SESSION['fee14']+
$_SESSION['fee15']+
$_SESSION['fee16']+
$_SESSION['fee17']+
$_SESSION['fee18']+
$_SESSION['fee19']+
$_SESSION['fee20']+
$_SESSION['fee21']+
$_SESSION['fee22']+
$_SESSION['fee23']+
$_SESSION['fee24']+
$_SESSION['fee25']+
$_SESSION['fee26']+
$_SESSION['fee27']+
$_SESSION['fee28']+
$_SESSION['fee29']+
$_SESSION['fee30']+
$_SESSION['fee31']+
$_SESSION['fee32']+
$_SESSION['fee33']+
$_SESSION['fee34']+
$_SESSION['fee35']+
$_SESSION['fee36']+
$_SESSION['fee37']+
$_SESSION['fee38']+
$_SESSION['fee39']+
$_SESSION['fee40']+
$_SESSION['fee41']+
$_SESSION['fee42']+
$_SESSION['fee43']+
$_SESSION['fee44']+
$_SESSION['fee45']+
$_SESSION['fee46']+
$_SESSION['fee47']+
$_SESSION['fee48']+
$_SESSION['fee49']+
$_SESSION['fee50']+
$_SESSION['fee51']+
$_SESSION['fee52']+
$_SESSION['fee53']+
$_SESSION['fee54']+
$_SESSION['fee55']+
$_SESSION['fee56']+
$_SESSION['fee57']+
$_SESSION['fee58']+
$_SESSION['fee59']+
$_SESSION['fee60']+
$_SESSION['fee61']+
$_SESSION['fee62']+
$_SESSION['fee63']+
$_SESSION['fee64']+
$_SESSION['fee65']+
$_SESSION['fee66']+
$_SESSION['fee67']+
$_SESSION['fee68']+
$_SESSION['fee69']+
$_SESSION['fee70']+
$_SESSION['fee71']+
$_SESSION['fee72']+
$_SESSION['fee73']+
$_SESSION['fee74']+
$_SESSION['fee75']+
$_SESSION['fee76']+
$_SESSION['fee77']+
$_SESSION['fee78']+
$_SESSION['fee79']+
$_SESSION['fee80']+
$_SESSION['fee81']+
$_SESSION['fee82']+
$_SESSION['fee83']+
$_SESSION['fee84']+
$_SESSION['fee85']+
$_SESSION['fee86']+
$_SESSION['fee87']+
$_SESSION['fee88']+
$_SESSION['fee89']+
$_SESSION['fee90']+
$_SESSION['fee91']+
$_SESSION['fee92']+
$_SESSION['fee93']+
$_SESSION['fee94']+
$_SESSION['fee95']+
$_SESSION['fee96']+
$_SESSION['fee97']+
$_SESSION['fee98']+
$_SESSION['fee99']+
$_SESSION['fee100']+
$_SESSION['fee101']+
$_SESSION['fee102']+
$_SESSION['fee103']+
$_SESSION['fee104']+
$_SESSION['fee105']+
$_SESSION['fee106']+
$_SESSION['fee107']+
$_SESSION['fee108']+
$_SESSION['fee109']+
$_SESSION['fee110']+
$_SESSION['fee111']+
$_SESSION['fee112']+
$_SESSION['fee113']+
$_SESSION['fee114']+
$_SESSION['fee115']+
$_SESSION['fee116']+
$_SESSION['fee117']+
$_SESSION['fee118']+
$_SESSION['fee119']+
$_SESSION['fee120']+
$_SESSION['fee121']+
$_SESSION['fee122']+
$_SESSION['fee123']+
$_SESSION['fee124']+
$_SESSION['fee125']+
$_SESSION['fee126']+
$_SESSION['fee127']+
$_SESSION['fee128']+
$_SESSION['fee129']+
$_SESSION['fee130']+
$_SESSION['fee131']+
$_SESSION['fee132']+
$_SESSION['fee133']+
$_SESSION['fee134']+
$_SESSION['fee135']+
$_SESSION['fee136']+
$_SESSION['fee137']+
$_SESSION['fee138']+
$_SESSION['fee139']+
$_SESSION['fee140']+
$_SESSION['fee141']+
$_SESSION['fee142']+
$_SESSION['fee143']+
$_SESSION['fee144']+
$_SESSION['fee145']+
$_SESSION['fee146']+
$_SESSION['fee147']+
$_SESSION['fee148']+
$_SESSION['fee149']+
$_SESSION['fee150']+
$_SESSION['fee151']+
$_SESSION['fee152']+
$_SESSION['fee153']+
$_SESSION['fee154']+
$_SESSION['fee155']+
$_SESSION['fee156']+
$_SESSION['fee157']+
$_SESSION['fee158']+
$_SESSION['fee159']+
$_SESSION['fee160']+
$_SESSION['fee161']+
$_SESSION['fee162']+
$_SESSION['fee163']+
$_SESSION['fee164']+
$_SESSION['fee165']+
$_SESSION['fee166']+
$_SESSION['fee167']+
$_SESSION['fee168']+
$_SESSION['fee169']+
$_SESSION['fee170']+
$_SESSION['fee171']+
$_SESSION['fee172']+
$_SESSION['fee173']+
$_SESSION['fee174']+
$_SESSION['fee175']+
$_SESSION['fee176']+
$_SESSION['fee177']+
$_SESSION['fee178']+
$_SESSION['fee179']+
$_SESSION['fee180']+
$_SESSION['fee181']+
$_SESSION['fee182']+
$_SESSION['fee183']+
$_SESSION['fee184']+
$_SESSION['fee185']+
$_SESSION['fee186']+
$_SESSION['fee187']+
$_SESSION['fee188']+
$_SESSION['fee189']+
$_SESSION['fee190']+
$_SESSION['fee191']+
$_SESSION['fee192']+
$_SESSION['fee193']+
$_SESSION['fee194']+
$_SESSION['fee195']+
$_SESSION['fee196']+
$_SESSION['fee197']+
$_SESSION['fee198']+
$_SESSION['fee199']+
$_SESSION['fee200']+
$_SESSION['fee201']+
$_SESSION['fee202']+
$_SESSION['fee203']+
$_SESSION['fee204']+
$_SESSION['fee205']+
$_SESSION['fee206']+
$_SESSION['fee207']+
$_SESSION['fee208']+
$_SESSION['fee209']+
$_SESSION['fee210']+
$_SESSION['fee211']+
$_SESSION['fee212']+
$_SESSION['fee213']+
$_SESSION['fee214']+
$_SESSION['fee215']+
$_SESSION['fee216']+
$_SESSION['fee217']+
$_SESSION['fee218']+
$_SESSION['fee219']+
$_SESSION['fee220']+
$_SESSION['fee221']+
$_SESSION['fee222']+
$_SESSION['fee223']+
$_SESSION['fee224']+
$_SESSION['fee225']+
$_SESSION['fee226']+
$_SESSION['fee227']+
$_SESSION['fee228']+
$_SESSION['fee229']+
$_SESSION['fee230']+
$_SESSION['fee231']+
$_SESSION['fee232']+
$_SESSION['fee233']+
$_SESSION['fee234']+
$_SESSION['fee235']+
$_SESSION['fee236']+
$_SESSION['fee237']+
$_SESSION['fee238']+
$_SESSION['fee239']+
$_SESSION['fee240']+
$_SESSION['fee241']+
$_SESSION['fee242']+
$_SESSION['fee243']+
$_SESSION['fee244']+
$_SESSION['fee245']+
$_SESSION['fee246']+
$_SESSION['fee247']+
$_SESSION['fee248']+
$_SESSION['fee249']+
$_SESSION['fee250']+
$_SESSION['fee251']+
$_SESSION['fee252']+
$_SESSION['fee253']+
$_SESSION['fee254']+
$_SESSION['fee255']+
$_SESSION['fee256']+
$_SESSION['fee257']+
$_SESSION['fee258']+
$_SESSION['fee259']+
$_SESSION['fee260']+
$_SESSION['fee261']+
$_SESSION['fee262']+
$_SESSION['fee263']+
$_SESSION['fee264']+
$_SESSION['fee265']+
$_SESSION['fee266']+
$_SESSION['fee267']+
$_SESSION['fee268']+
$_SESSION['fee269']+
$_SESSION['fee270']+
$_SESSION['fee271']+
$_SESSION['fee272']+
$_SESSION['fee273']+
$_SESSION['fee274']+
$_SESSION['fee275']+
$_SESSION['fee276']+
$_SESSION['fee277']+
$_SESSION['fee278']+
$_SESSION['fee279']+
$_SESSION['fee280']+
$_SESSION['fee281']+
$_SESSION['fee282']+
$_SESSION['fee283']+
$_SESSION['fee284']+
$_SESSION['fee285']+
$_SESSION['fee286']+
$_SESSION['fee287']+
$_SESSION['fee288']+
$_SESSION['fee289']+
$_SESSION['fee290']+
$_SESSION['fee291']+
$_SESSION['fee292']+
$_SESSION['fee293']+
$_SESSION['fee294']+
$_SESSION['fee295']+
$_SESSION['fee296']+
$_SESSION['fee297']+
$_SESSION['fee298']+
$_SESSION['fee299']+
$_SESSION['fee300']+
$_SESSION['fee301']+
$_SESSION['fee302']+
$_SESSION['fee303']+
$_SESSION['fee304']+
$_SESSION['fee305']+
$_SESSION['fee306']+
$_SESSION['fee307']+
$_SESSION['fee308']+
$_SESSION['fee309']+
$_SESSION['fee310']+
$_SESSION['fee311']+
$_SESSION['fee312']+
$_SESSION['fee313']+
$_SESSION['fee314']+
$_SESSION['fee315']+
$_SESSION['fee316']+
$_SESSION['fee317']+
$_SESSION['fee318']+
$_SESSION['fee319']+
$_SESSION['fee320']+
$_SESSION['fee321']+
$_SESSION['fee322']+
$_SESSION['fee323']+
$_SESSION['fee324']+
$_SESSION['fee325']+
$_SESSION['fee326']+
$_SESSION['fee327']+
$_SESSION['fee328']+
$_SESSION['fee329']+
$_SESSION['fee330']+
$_SESSION['fee331']+
$_SESSION['fee332']+
$_SESSION['fee333']+
$_SESSION['fee334']+
$_SESSION['fee335']+
$_SESSION['fee336']+
$_SESSION['fee337']+
$_SESSION['fee338']+
$_SESSION['fee339']+
$_SESSION['fee340']+
$_SESSION['fee341']+
$_SESSION['fee342']+
$_SESSION['fee343']+
$_SESSION['fee344']+
$_SESSION['fee345']+
$_SESSION['fee346']+
$_SESSION['fee347']+
$_SESSION['fee348']+
$_SESSION['fee349']+
$_SESSION['fee350']+
$_SESSION['fee351']+
$_SESSION['fee352']+
$_SESSION['fee353']+
$_SESSION['fee354']+
$_SESSION['fee355']+
$_SESSION['fee356']+
$_SESSION['fee357']+
$_SESSION['fee358']+
$_SESSION['fee359']+
$_SESSION['fee360']+
$_SESSION['fee361']+
$_SESSION['fee362']+
$_SESSION['fee363']+
$_SESSION['fee364']+
$_SESSION['fee365']+
$_SESSION['fee366']+
$_SESSION['fee367']+
$_SESSION['fee368']+
$_SESSION['fee369']+
$_SESSION['fee370']+
$_SESSION['fee371']+
$_SESSION['fee372']+
$_SESSION['fee373']+
$_SESSION['fee374']+
$_SESSION['fee375']+
$_SESSION['fee376']+
$_SESSION['fee377']+
$_SESSION['fee378']+
$_SESSION['fee379']+
$_SESSION['fee380']+
$_SESSION['fee381']+
$_SESSION['fee382']+
$_SESSION['fee383']+
$_SESSION['fee384']+
$_SESSION['fee385']+
$_SESSION['fee386']+
$_SESSION['fee387']+
$_SESSION['fee388']+
$_SESSION['fee389']+
$_SESSION['fee390']+
$_SESSION['fee391']+
$_SESSION['fee392']+
$_SESSION['fee393']+
$_SESSION['fee394']+
$_SESSION['fee395']+
$_SESSION['fee396']+
$_SESSION['fee397']+
$_SESSION['fee398']+
$_SESSION['fee399']+
$_SESSION['fee400']);
echo number_format($Gtotal,2);
$z=1;
while($z <= 400)
{
	unset($_SESSION["fee".$z]);
	$z++;
		
}
		  ?></td>
	  </tr>
<tr><td colspan="17" align="right" class="h6"> <?php require("baht.php");
	echo "[";
	echo  convert($Gtotal); 
	echo  "]"; 
$_SESSION["total"] = $Gtotal;		  
	?>	
	</td></tr>	  
	
  </tbody>
</table>
</div>

<?php
          if($dbrr2["slipAccount"]<>null)
          {
                    $linkk = "account/". $dbrr2["slipAccount"] ;
 ?>
         
<div class="row mt-2">
          <div class="col-11"></div>   
          <div class="col-1">
                     <button class="btn btn-outline-primary mt-1" style="width: 100%" onClick="window.open('<?php echo $linkk; ?>')"></strong><i class="far fa-eye"></i> ดูใบเบิก</strong></button>
          </div>
</div>
</form> 
          
 <?php                   
          }
          else
          {
?>
          
<form method="post" action="receipt-upload-acc.php" enctype="multipart/form-data">
<div class="row mt-2">
          <div class="col-10"></div>   
          <div class="col-2">
                    <span class="text-danger">*ยังไม่ได้อัปโหลดใบเบิก</span>
                     <input type="file" name="file" id="file" required ><button class="btn btn-outline-danger mt-1" style="width: 100%"><strong><i class="fas fa-upload"></i> อัปโหลดใบเบิก</strong></button>
          </div>
</div>
</form>

<?php
        ;  }
 ?>

<div id="non-printable">       
<?php unset($_SESSION["ind"]); ?>
</div>	
          </div>	
</body>
</html>