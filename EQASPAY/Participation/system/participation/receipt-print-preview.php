<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PDF</title>
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
<style>
body,h1,h2,h3,p {
    font-family: 'sarabun';
	font-size: 14pt;
	margin: 1cm;
	padding: 0cm;
}
table {
  width: 100%;
}

td, th {
  border:solid 1px #000000;
  text-align: left;
  padding: 5px;
	margin: 0;
}


</style>
<?php require("../../tools/css/scripts.php") ?>
</head>
<body>
<?php 
	session_start(); 
	$index = $_SESSION["index"]; ?>

<table class="ft-sarabun" width="100%">
	
	<tr class="table-borderless">
      <td class="table-borderless" colspan="5"><img src="../../tools/images/home/MT-TH-MU-H.png" height="50px"></td>
      <td class="table-borderless" colspan="12"><div style="text-align: right; font-size: 12pt">  Doc. No : <?php echo $index; ?><br>
		  Printed Date: <?php echo date("d-M-Y"); ?></div></td>
    </tr>
    <tr class="table-borderless">
      <td class="table-borderless" colspan="17"><h5 style="text-align: center" class="ft-sarabun">แบบบันทึกรายละเอียดสำหรับออกใบเสร็จรับเงิน [การสมัครสมาชิก EQAS ประจำปี 2564]</h5></td>
   
    </tr>
  
	
	 <tr>
      <td width="2%" rowspan="3" style="vertical-align: middle; text-align: center">No</td>
      <td width="5%" rowspan="3" style="vertical-align: middle; text-align: center">ID</td>
		<td rowspan="3" style="vertical-align: middle; text-align: center">Participant</td>
		 <td rowspan="2" style="vertical-align: middle; text-align: center">EQAC</td>
		   <td rowspan="2" style="vertical-align: middle; text-align: center">EQAH</td>
		  <td rowspan="2" style="vertical-align: middle; text-align: center">EQAT</td>
		  <td rowspan="2" style="vertical-align: middle; text-align: center">EQAP</td>
		 <td colspan="3" style="vertical-align: middle; text-align: center"><center>EQAM</center></td>
		 <td colspan="2" style="vertical-align: middle; text-align: center"><center>EQAI</center></td>
		 <td colspan="4" style="vertical-align: middle; text-align: center"><center>EQAB</center></td>
		 <td width="2%" rowspan="3" style="vertical-align: middle; text-align: center">Total</td>
    </tr>
	<tr>
		<td style="vertical-align: middle; text-align: center">B-<br>EQAM</td>
		<td style="vertical-align: middle; text-align: center">H-<br>EQAM</td>    
		<td style="vertical-align: middle; text-align: center">UC-<br>EQAM</td>  
		<td style="vertical-align: middle; text-align: center">EQAI:<br>SYP</td>
		<td style="vertical-align: middle; text-align: center">EQAI:<br>HBV</td>
		<td style="vertical-align: middle; text-align: center">EQAB:<br>GRAM</td>
		<td style="vertical-align: middle; text-align: center">EQAB:<br>AFB</td>
		<td style="vertical-align: middle; text-align: center">EQAB:<br>IDEN</td>
		<td rowspan="2" style="vertical-align: middle; text-align: center">EQAB-<br>PAY</td>
		
    </tr>
	<tr>
		<td style="vertical-align: middle; text-align: center">3,000</td>
		<td style="vertical-align: middle; text-align: center">4,500</td>
		<td style="vertical-align: middle; text-align: center">4,500</td>
		<td style="vertical-align: middle; text-align: center">2,000</td>
		<td style="vertical-align: middle; text-align: center">2,000</td>
		<td style="vertical-align: middle; text-align: center">1,500</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
		<td style="vertical-align: middle; text-align: center">2,200</td>	
		<td style="vertical-align: middle; text-align: center">2,200</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
		<td style="vertical-align: middle; text-align: center">1,000</td>
    </tr>

<?php 
	require "connection.php";
	$sql = "SELECT*FROM participantRegister WHERE 
	eqacp='$index' or 
	eqahp='$index' or 
	eqatp='$index' or
	eqapp='$index' or
	beqamp='$index' or
	heqamp='$index' or
	uceqamp='$index' or
	eqaisypp='$index' or
	eqaihbvp='$index' or
	eqabgramp='$index' or
	eqabafbp='$index' or
	eqabidenp='$index'
	";
	$result = mysqli_query($link, $sql); 
	$row = mysqli_num_rows($result);
	$dbrr = mysqli_fetch_array($result);

	$a=1;
	while ($dbrr = mysqli_fetch_array($result))
	{
	?>
	<tr align="center" style="text-align: center">
    <td width="5px" style="text-align: center"><?php echo $i; ?></td>
    <td width="5px" style="text-align: center"><?php echo $dbrr["id"]; ?></td>
    <td width="15px"><?php echo $dbrr["instituteName"]; ?></td>
	 <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqacp"]==$index){echo "<i class='fas fa-check-circle'></i>"; $c=3000;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqahp"]==$index){echo "<i class='fas fa-check-circle'></i>";$h=4500;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqatp"]==$index){echo "<i class='fas fa-check-circle'></i>";$t=4500;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqapp"]==$index){echo "<i class='fas fa-check-circle'></i>";$p=2000;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["beqamp"]==$index){echo "<i class='fas fa-check-circle'></i>";$mb=2000;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["heqamp"]==$index){echo "<i class='fas fa-check-circle'></i>";$mh=1500;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["uceqamp"]==$index){echo "<i class='fas fa-check-circle'></i>";$mu=2200;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqaisypp"]==$index){echo "<i class='fas fa-check-circle'></i>";$is=2200;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqaihbvp"]==$index){echo "<i class='fas fa-check-circle'></i>";$ih=2200;}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqabgramp"]==$index){echo "<i class='fas fa-check-circle'></i>";}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqabafbp"]==$index){echo "<i class='fas fa-check-circle'></i>";}?></td>
	   <td width="5px" align="center" style="text-align: center"><?php if($dbrr["eqabidenp"]==$index){echo "<i class='fas fa-check-circle'></i>";}?></td>
		<td width="5px" style="text-align: center">
	<?php	
			if($dbrr["eqabgramp"]==$index && $dbrr["eqabafbp"]==$index && $dbrr["eqabidenp"]==$index) 
		{ 
			echo number_format(2500);
			$bt = 2500;
		}
		else
		{
			if($dbrr["eqabgramp"]==$index && $dbrr["eqabafbp"]==$index)
			{
				echo number_format(1800);
				$bt = 1800;
			}
			else
			{
				if($dbrr["eqabgramp"]==$index && $dbrr["eqabidenp"]==$index)
				{
					echo number_format(2000);
					$bt = 2000;
				}
				else
				{
					if($dbrr["eqabafbp"]==$index && $dbrr["eqabidenp"]==$index)
					{
						echo number_format(2000);
						$bt = 2000;
					}
					else
					{
						if($dbrr["eqabgramp"]==$index)
						{
							echo number_format(1000);
							$bt = 1000;
						}
						else
						{
							if($dbrr["eqabafbp"]==$index)
							{
								echo number_format(1000);
								$bt = 1000;
							}
							else
							{
								if($dbrr["eqabidenp"]==$index)
								{
									echo number_format(1000);
									$bt = 1000;
								}
								else
								{
									echo'-';
									$bt = 0;
								}
							}
						}
					}
				}
			}
		}
		?>	
	
		</td>
	  <td width="10px" align="center" style="text-align: center">
		  <?php $fee = $c+$h+$t+$p+$mb+$mh+$mu+$is+$ih+$bt; 
		echo number_format($fee,2); 
		$_SESSION["fee".$a] = $fee;
		$a++;  
		  ?></td>
  </tr>
	
	<?php
		$i++;
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
	}
	
		
?>
</tr>	  
	  <tr>
	  <td colspan="16" style="text-align: right"><strong>GRAND TOTAL</strong> 
	
	<?php 
$gTotal = (
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
$_SESSION['fee400']
); ?>
		  
	<?php require("baht.php");
	$num = number_format($gTotal,2,'.',',');
	echo "[";
	echo  convert($num); 
	echo  "]"; 
		  
	?>	  
		  
		  </td>
	<td> 
<?php
		echo number_format($gTotal,2);
$z=1;
while($z <= 400)
{
	unset($_SESSION["fee".$z]);
	unset($_SESSION["index"]);
	$z++;
		
}
		  ?></td>
	  </tr>
	
</table>

<table width="100%" border="0" class="table table-borderless">
  <tbody>
    <tr>
      <td width="50%">Prepared By<br><br><center>........................................................................................................................................................................<br><br>
		(<?php echo ucwords($_SESSION["name"]." ".$_SESSION["surname"]); ?>)<br><br>
	    Date: <?php echo date("d/m/Y"); ?></center> </td>
		
      <td width="50%">Issued By<br><br><center>........................................................................................................................................................................<br><br>
(........................................................................................................................................................................)
		<br><br>
	    Date: ..........................................................................................................................................................</center></td>
    </tr>
  </tbody>
</table>

	
	
</div>
</body>
</html>
