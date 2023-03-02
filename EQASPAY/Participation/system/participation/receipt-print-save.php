	<?php
	session_start();
	$Gtotal =  $_SESSION["total"];
	$mail = $_SESSION["mail"];

	require "connection.php";
	$n = 2;
	$sqlm = "SELECT*FROM payment_lists WHERE ((staff='$mail') AND (eqac='$n' OR eqah='$n' OR eqat='$n' OR eqap='$n' OR beqam='$n' OR heqam='$n' OR uceqam='$n' OR eqaisyp='$n' OR eqaihbv='$n' OR eqabgram='$n' OR eqabafb='$n' OR eqabiden='$n') AND (eqacp='' OR eqahp='' OR eqatp='' OR eqapp='' OR beqamp='' OR heqamp='' OR uceqamp='' OR eqaisypp='' OR eqaihbvp='' OR eqabgramp='' OR eqabafbp='' OR eqabidenp='')) ";
	$resultm = mysqli_query($link, $sqlm);
	$rowcount = mysqli_num_rows($resultm);
	

	$sql2 = "SELECT * FROM payment_slip";
	$result2 = mysqli_query($link, $sql2);
	$rowcount2 = mysqli_num_rows($result2)+1;


	$i = 1;
	while($i <= $rowcount) {
	$sql = "SELECT * FROM payment_lists WHERE ((staff='$mail') AND (eqac='$n' OR eqah='$n' OR eqat='$n' OR eqap='$n' OR beqam='$n' OR heqam='$n' OR uceqam='$n' OR eqaisyp='$n' OR eqaihbv='$n' OR eqabgram='$n' OR eqabafb='$n' OR eqabiden='$n') AND (eqacp='' OR eqahp='' OR eqatp='' OR eqapp='' OR beqamp='' OR heqamp='' OR uceqamp='' OR eqaisypp='' OR eqaihbvp='' OR eqabgramp='' OR eqabafbp='' OR eqabidenp='')) ";
	$result = mysqli_query($link, $sql);	
  	$dbrr = mysqli_fetch_assoc($result);

		$id = $dbrr["id"];
		
		
		if($dbrr["eqac"]==2)
		{
			$eqac = 3;
			$doc1 = $rowcount2;
		}
		else
		{
			$eqac = $dbrr["eqac"];
			$doc1 = $dbrr["eqacp"];
		}
		
		if($dbrr["eqah"]==2)
		{
			$eqah = 3;
			$doc2 = $rowcount2;
		}
		else
		{
			$eqah = $dbrr["eqah"];
			$doc2 = $dbrr["eqahp"];
		}
		
		if($dbrr["eqat"]==2)
		{
			$eqat = 3;
			$doc3 = $rowcount2;
		}
		else
		{
			$eqat = $dbrr["eqat"];
			$doc3 = $dbrr["eqatp"];
		}
		
		if($dbrr["eqap"]==2)
		{
			$eqap = 3;
			$doc4 = $rowcount2;
		}
		else
		{
			$eqap = $dbrr["eqap"];
			$doc4 = $dbrr["eqapp"];
		}
		
		if($dbrr["beqam"]==2)
		{
			$beqam = 3;
			$doc5 = $rowcount2;
		}
		else
		{
			$beqam = $dbrr["beqam"];
			$doc5 = $dbrr["beqamp"];
		}
		
		if($dbrr["heqam"]==2)
		{
			$heqam = 3;
			$doc6 = $rowcount2;
		}
		else
		{
			$heqam = $dbrr["heqam"];
			$doc6 = $dbrr["heqamp"];
		}
		
		if($dbrr["uceqam"]==2)
		{
			$uceqam = 3;
			$doc7 = $rowcount2;
		}
		else
		{
			$uceqam = $dbrr["uceqam"];
			$doc7 = $dbrr["uceqamp"];
		}
		
		if($dbrr["eqaisyp"]==2)
		{
			$eqaisyp = 3;
			$doc8 = $rowcount2;
		}
		else
		{
			$eqaisyp = $dbrr["eqaisyp"];
			$doc8 = $dbrr["eqaisypp"];
		}
		
		if($dbrr["eqaihbv"]==2)
		{
			$eqaihbv = 3;
			$doc9 = $rowcount2;
		}
		else
		{
			$eqaihbv = $dbrr["eqaihbv"];
			$doc9 = $dbrr["eqaihbvp"];
		}
		
		if($dbrr["eqabgram"]==2)
		{
			$eqabgram = 3;
			$doc10 = $rowcount2;
		}
		else
		{
			$eqabgram = $dbrr["eqabgram"];
			$doc10 = $dbrr["eqabgramp"];
		}
		
		if($dbrr["eqabafb"]==2)
		{
			$eqabafb = 3;
			$doc11 = $rowcount2;
		}
		else
		{
			$eqabafb = $dbrr["eqabafb"];
			$doc11 = $dbrr["eqabafbp"];
		}
		
		if($dbrr["eqabiden"]==2)
		{
			$eqabiden = 3;
			$doc12 = $rowcount2;
		}
		else
		{
			$eqabiden = $dbrr["eqabiden"];
			$doc12 = $dbrr["eqabidenp"];
		}
	

		$sql3 = "UPDATE payment_lists SET 
		eqac = '$eqac',
		eqah = '$eqah',
		eqat = '$eqat',
		eqap = '$eqap',
		beqam = '$beqam',
		heqam = '$heqam',
		uceqam = '$uceqam',
		eqaisyp = '$eqaisyp',
		eqaihbv = '$eqaihbv',
		eqabgram = '$eqabgram',
		eqabafb = '$eqabafb',
		eqabiden = '$eqabiden',
		
		eqacp = '$doc1',
		eqahp = '$doc2',
		eqatp = '$doc3',
		eqapp = '$doc4',
		beqamp = '$doc5',
		heqamp = '$doc6',
		uceqamp ='$doc7',
		eqaisypp = '$doc8',
		eqaihbvp = '$doc9',
		eqabgramp = '$doc10',
		eqabafbp = '$doc11',
		eqabidenp = '$doc12'
		
		WHERE (id='$id')";
		
		$link->query($sql3);
/*
		
		
		echo "eqac=".$eqac."<br>";
		echo "eqah=".$eqah."<br>";
		echo "eqat=".$eqat."<br>";
		echo "eqap=".$eqap."<br>";
		echo "beqam=".$beqam."<br>";
		echo "heqam=".$heqam."<br>";
		echo "uceqam=".$uceqam."<br>";
		echo "eqaisyp=".$eqaisyp."<br>";
		echo "eqaihbv=".$eqaihbv."<br>";
		echo "eqabgram=".$eqabgram."<br>";
		echo "eqabafb=".$eqabafb."<br>";
		echo "eqabiden=".$eqabiden."<br>";
		
	
		
		echo $doc1."<br>";
		echo $doc2."<br>";
		echo $doc3."<br>";
		echo $doc4."<br>";
		echo $doc5."<br>";
		echo $doc6."<br>";
		echo $doc7."<br>";
		echo $doc8."<br>";
		echo $doc9."<br>";
		echo $doc10."<br>";
		echo $doc11."<br>";
		echo $doc12."<br>";
		*/
		$i++;

		}
		$_SESSION["ind"] = $rowcount2;
        $date = date("Y-m-d");
		$sql4 = "INSERT INTO payment_slip (doc, Total, staff, date) VALUES ('$rowcount2', '$Gtotal', '$mail','$date')";
		$result = mysqli_query($link, $sql4);	
		mysqli_close($link);

		unset($_SESSION["total"]);
		
		

		header( "refresh: 0; url=receipt-result.php" );
		exit(0);
		

	/*
	session_start();
	$Gtotal = $_SESSION["total"] ;
	$doc = $_POST["doc"];
	$mail = $_SESSION["mail"];
	$n = 2;
	
	
	
	require "connection.php";
	$sql = "SELECT * FROM participantRegister WHERE (paymentStaff='$mail') AND (eqac='$n' OR eqah='$n' OR eqat='$n' OR eqap='$n' OR beqam='$n' OR heqam='$n' OR uceqam='$n' OR eqaisyp='$n' OR eqaihbv='$n' OR eqabgram='$n' OR eqabafb='$n' OR eqabiden='$n')";
	$result = mysqli_query($link, $sql);
	$dbrr = mysqli_fetch_array($result);
	$rowcount1 = mysqli_num_rows($result);
	
	$sql22 = "SELECT * FROM paymentSlip";
	$result22 = mysqli_query($link, $sql22);
	$rowcount2 = mysqli_num_rows($result22);
	
	
if($dbrr["eqac"]==2)
{
	$eqac = 3;
	$eqacp = $doc;
}
else
{
	$eqac = $dbrr["eqac"];
	$eqacp = $dbrr["eqacp"];
}

if($dbrr["eqah"]==2)
{
	$eqah = 3;
	$eqahp = $doc;
}
else
{
	$eqah = $dbrr["eqah"];
	$eqahp = $dbrr["eqahp"];
}

if($dbrr["eqat"]==2)
{
	$eqat = 3;
	$eqatp = $doc;
}
else
{
	$eqat = $dbrr["eqat"];
	$eqatp = $dbrr["eqatp"];
}

if($dbrr["eqap"]==2)
{
	$eqap = 3;
	$eqapp = $doc;
}
else
{
	$eqap = $dbrr["eqap"];
	$eqapp = $dbrr["eqapp"];
}

if($dbrr["beqam"]==2)
{
	$beqam = 3;
	$beqamp = $doc;
}
else
{
	$beqam = $dbrr["beqam"];
	$beqamp = $dbrr["beqamp"];
}

if($dbrr["heqam"]==2)
{
	$heqam = 3;
	$heqamp = $doc;
}
else
{
	$heqam = $dbrr["heqam"];$heqamp = $dbrr["heqamp"];
}

if($dbrr["uceqam"]==2)
{
	$uceqam = 3;
	$uceqamp = $doc;
}
else
{
	$uceqam = $dbrr["uceqam"];$uceqamp = $dbrr["uceqamp"];
}

if($dbrr["eqaisyp"]==2)
{
	$eqaisyp = 3;
	$eqaisypp = $doc;
}
else
{
	$eqaisyp = $dbrr["eqaisyp"];$eqaisypp = $dbrr["eqaisypp"];
}

if($dbrr["eqaihbv"]==2)
{
	$eqaihbv = 3;
	$eqaihbvp = $doc;
}
else
{
	$eqaihbv = $dbrr["eqaihbv"];$eqaihbvp = $dbrr["eqaihbvp"];
}

if($dbrr["eqabgram"]==2)
{
	$eqabgram = 3;
	$eqabgramp = $doc;
}
else
{
	$eqabgram = $dbrr["eqabgram"];$eqabgramp = $dbrr["eqabgramp"];
}

if($dbrr["eqabafb"]==2)
{
	$eqabafb = 3;
	$eqabafbp = $doc;
}
else
{
	$eqabafb = $dbrr["eqabafb"];$eqabafbp = $dbrr["eqabafbp"];
}

if($dbrr["eqabiden"]==2)
{
	$eqabiden = 3;
	$eqabiden = $doc;
}
else
{
	$eqabiden = $dbrr["eqabiden"];
	$eqabidenp = $dbrr["eqabidenp"];
}	

$sqlc = "UPDATE participantRegister SET 
eqac='$eqac',
eqacp='$eqacp'
WHERE (paymentStaff='$mail') AND (eqac='$n')";
mysqli_query($link, $sqlc);	

$sqlh = "UPDATE participantRegister SET 
eqah='$eqah',
eqahp='$eqahp'
WHERE (paymentStaff='$mail') AND (eqah='$n')";
mysqli_query($link, $sqlh);	

$sqlt = "UPDATE participantRegister SET 
eqat='$eqat',
eqatp='$eqatp'
WHERE (paymentStaff='$mail') AND (eqat='$n')";
mysqli_query($link, $sqlt);	

$sqlp = "UPDATE participantRegister SET 
eqap='$eqap',
eqapp='$eqapp'
WHERE (paymentStaff='$mail') AND (eqap='$n')";
mysqli_query($link, $sqlp);	

$sqlbm = "UPDATE participantRegister SET 
beqam='$beqam',
beqamp='$beqamp'
WHERE (paymentStaff='$mail') AND (beqam='$n')";
mysqli_query($link, $sqlbm);	

	
$sqlhm = "UPDATE participantRegister SET 
heqam='$heqam',
heqamp='$heqamp'
WHERE (paymentStaff='$mail') AND (heqam='$n')";
mysqli_query($link, $sqlhm);	

$sqlum = "UPDATE participantRegister SET 
uceqam='$uceqam',
uceqamp='$uceqamp'
WHERE (paymentStaff='$mail') AND (uceqam='$n')";
mysqli_query($link, $sqlum);	

$sqlsy = "UPDATE participantRegister SET 
eqaisyp='$eqaisyp',
eqaisypp='$eqaisypp'
WHERE (paymentStaff='$mail') AND (eqaisyp='$n')";
mysqli_query($link, $sqlsy);	
	
$sqlhb = "UPDATE participantRegister SET 
eqaihbv='$eqaihbv',
eqaihbvp='$eqaihbvp'
WHERE (paymentStaff='$mail') AND (eqaihbv='$n')";
mysqli_query($link, $sqlhb);	

$sqlgr = "UPDATE participantRegister SET 
eqabgram='$eqabgram',
eqabgramp='$eqabgramp'
WHERE (paymentStaff='$mail') AND (eqabgram='$n')";
mysqli_query($link, $sqlgr);	
	
$sqlaf = "UPDATE participantRegister SET 
eqabafb='$eqabafb',
eqabafbp='$eqabafbp'
WHERE (paymentStaff='$mail') AND (eqabafb='$n')";
mysqli_query($link, $sqlaf);	

$sqlid = "UPDATE participantRegister SET 
eqabiden='$eqabiden',
eqabgidenp='$eqabidenp'
WHERE (paymentStaff='$mail') AND (eqabiden='$n')";
mysqli_query($link, $sqlid);	
	
	
$sql = "INSERT INTO paymentSlip (doc, Total) VALUES ($doc, $Gtotal)";
$result = mysqli_query($link, $sql);	
	
mysqli_close($link);	
unset($_SESSION["total"]);
	
header( "refresh: 0; url=participation.php" );
 exit(0);
*/
	?>
