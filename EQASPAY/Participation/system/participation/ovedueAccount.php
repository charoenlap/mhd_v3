<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>HOME</title>
</head>

<body>
<?php require("headPanel.php") ?>	
  
<div style="padding-top: 130px" class="container-fluid pb-5">
<h1 class="ft-prompt"><i class="fas fa-users"></i> REGISTER</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li> 
    <li class="breadcrumb-item active" aria-current="page">Register</li>
  </ol>
</nav>

	
	<table width="100%" border="0" cellpadding="10px">
  <tbody>
    <tr>
     <td rowspan="2" align="center" valign="top">
		
		<?php require("connection.php");
		$va = null;
		$sql = "SELECT * FROM participantRegister WHERE id <> '$va' AND (eqac = '1' OR eqah = '1' OR eqat = '1' OR eqap = '1' OR beqam = '1'  OR heqam = '1' OR uceqam = '1' OR eqaisyp = '1' OR eqaihbv = '1' OR eqabgram = '1'  OR eqabafb = '1' OR eqabiden = '1')  ORDER BY no DESC";
		$result = mysqli_query($link, $sql);
		$rowcount = mysqli_num_rows($result);
		
			 ?>
		
			
			<form method="post" action="edit-form.php">
			<table width="100%" class="mb-3 mt-3">
				<tbody>
				<tr>
				<td width="20%">
			<input type="text" class="form-control form-control-sm" name="id" placeholder="ID" autofocus required></td>
					
			<td width="20%"><button class="btn btn-lg btn-success ml-2"><i class="fas fa-user-plus"></i> 
			ENTER</button>
				</td>	
		</tr>
			</tbody>
			</table>
			</form>
			<table width="100%" border="0" class="table table-sm table-hover">
			  <tbody>
				  <thead class="thead-dark">
				<tr>
				  <th align="center" width="10%"><h>ID</h></th>
				  <th align="center" width="50%"><h>Participant</h></th>
					<th align="center"><h>Schemes</h></th>
				</tr>
				  </thead>

				<?php 
				if (mysqli_num_rows($result) > 0) {
  				while($row = mysqli_fetch_assoc($result)) {
    			?>
				<tr valign="middle">
					<td>
						<form action="edit-form.php" method="post">
							<button class="btn btn-outline-primary" style="width: 100%"><?php echo $row["id"]; ?></button>
							<input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
						</form>
					</td>
					<td><?php echo $row["instituteName"]; $no = $row["no"];?> </td>
					
				<?php $sql2 = "SELECT*FROM participantRegister WHERE no='$no'";
						$result2 = mysqli_query($link, $sql2); 
						$dbrr = mysqli_fetch_array($result2);
					?>
					<td valign="middle">
				<?php 
					
					if($dbrr["eqac"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: orange">C [<?php echo $dbrr["eqacs"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqac"]>1)	
					{ 
						?><button class="btn btn-sm mr-1" style="color: black; border-color:orange">C</button><?php }	
					}
					
					
					if($dbrr["eqah"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: orange">H [<?php echo $dbrr["eqahs"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqah"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: orange">H</button><?php }	
					}
					
					if($dbrr["eqat"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: orange">T [<?php echo $dbrr["eqats"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqat"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color:orange">T</button><?php }
					}
					

					if($dbrr["eqap"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: yellowgreen">P [<?php echo $dbrr["eqaps"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqap"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: yellowgreen">P</button><?php }	
					}
					
					if($dbrr["beqam"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: red">BM  [<?php echo $dbrr["beqams"]."]"; ?></button><?php }	
					else
					{
						if($dbrr["beqam"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: red">BM</button><?php }	
					}
					
					if($dbrr["heqam"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: red">HM  [<?php echo $dbrr["heqams"]."]"; ?></button><?php }
					else
					{
						if($dbrr["heqam"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: red">HM</button><?php }
					}
					
					if($dbrr["uceqam"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: red">UM  [<?php echo $dbrr["uceqams"]."]"; ?></button><?php }
					else
					{
					if($dbrr["uceqam"]>1)
					{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: red">UM</button><?php }
					}
					
					if($dbrr["eqaisyp"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: dodgerblue">SY  [<?php echo $dbrr["eqaisyps"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqaisyp"]>1)
					{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: dodgerblue">SY</button><?php }
					}
					if($dbrr["eqaihbv"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: dodgerblue">HB  [<?php echo $dbrr["eqaihbvs"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqaihbv"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: dodgerblue">HB</button><?php }
					}
					
					if($dbrr["eqabgram"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: blueviolet">BG  [<?php echo $dbrr["eqabgrams"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqabgram"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color:black; border-color: blueviolet">BG</button><?php }
					}
					if($dbrr["eqabafb"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: blueviolet">BA  [<?php echo $dbrr["eqabafbs"]."]"; ?></button><?php }
					else
					{
						if($dbrr["eqabafb"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: blueviolet">BA</button><?php }
					}
					if($dbrr["eqabiden"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: blueviolet">BI  [<?php echo $dbrr["eqabidens"]."]"; ?></button><?php }
					else
					{
					if($dbrr["eqabiden"]>1)
					{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: blueviolet">BI</button><?php }	
					}
					
						?></td>
				</tr>
				
				 <?php } 
			
				}
				  else
				  {
					  echo "<tr align='center'><td colspan ='3'><h3 class='p-5 text-danger'><i class='fas fa-exclamation'></i> ยังไม่มีข้อมูล</h3></td></tr>"; 
				  } 
				?>		
	
				
			  </tbody>
			</table>

			
			
			
			
		</td>
    </tr>
	
    
  </tbody>
</table>

	
	


</div>
<?php 
	mysqli_close($link);
	?>
	
</body>
</html>