<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>HOME</title>
</head>

<body>
  

		
		<?php require("connection.php");
		$va = null;
		$sql = "SELECT * FROM participantRegister WHERE id <> '$va' ORDER BY no DESC";
		$result = mysqli_query($link, $sql);
		$rowcount = mysqli_num_rows($result);
		
			 ?>
		
			<h3 class="ft-prompt" style="text-align: left"><i class="fas fa-hospital-user fa-2x">&nbsp; </i>จำนวนสมาชิก <?php echo $rowcount; ?> ห้องปฏิบัติการ </h3>
			<form method="post" action="edit-form.php">
	
			</form>
			<table width="100%" border="0" class="table table-sm table-hover">
			  <tbody>
				  <thead class="thead-dark">
				<tr>
				  <th align="center" width="5%"><h>ID</h></th>
				  <th align="center" width="31%"><h>Participant</h></th>
					<th align="center" width="3%"><h>C</h></th>
					<th align="center" width="3%"><h>H</h></th>
					<th align="center" width="3%"><h>T</h></th>
					<th align="center" width="3%"><h>P</h></th>
					<th align="center" width="3%"><h>BM</h></th>
					<th align="center" width="3%"><h>HM</h></th>
					<th align="center" width="3%"><h>UM</h></th>
					<th align="center" width="3%"><h>SY</h></th>
					<th align="center" width="3%"><h>HB</h></th>
					<th align="center" width="3%"><h>BG</h></th>
					<th align="center" width="3%"><h>BA</h></th>
					<th align="center" width="3%"><h>BI</h></th>
					<th align="center" width="10%"><h>Total</h></th>
					<th align="center" width="10%"><h>Paid</h></th>
					<th align="center" width="10%"><h>Outstanding</h></th>
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
					<td>
				<?php 
					
					if($dbrr["eqac"]==1)
					{ 	
						$c = 3000;
						$cp = 0;
						?><button class="btn btn-sm mr-1" style="color: white; background-color: orange">C</button><?php 
					}
					else
					{
						
						if($dbrr["eqac"]>1)	
					{ 
							$c = 3000;
							$cp = 3000;
						?><button class="btn btn-sm mr-1" style="color: black; border-color:orange">CP</button><?php }	
					}
					?>
					
					</td>
					<td>
					<?php
					
					if($dbrr["eqah"]==1)
					{ 
						$h = 3000;
						$hp = 0;
						?><button class="btn btn-sm mr-1" style="color: white; background-color: orange">H</button><?php }
					else
					{
						$h = 0;
						if($dbrr["eqah"]>1)
						{ 
							$h = 3000;
							$hp = 3000;
						
						?><button class="btn btn-sm mr-1" style="color: black; border-color: orange">HP</button><?php }	
					}
					
					?> </td><td> <?php 
						
					if($dbrr["eqat"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: orange">T</button><?php }
					else
					{
						if($dbrr["eqat"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color:orange">TP</button><?php }
					}
					?> </td><td> <?php 

					if($dbrr["eqap"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: yellowgreen">P</button><?php }
					else
					{
						if($dbrr["eqap"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: yellowgreen">PP</button><?php }	
					}
					?> </td><td> <?php 
					
					if($dbrr["beqam"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: red">BM</button><?php }	
					else
					{
						if($dbrr["beqam"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: red">BMP</button><?php }	
					}
					?> </td><td> <?php 
					
					if($dbrr["heqam"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: red">HM</button><?php }
					else
					{
						if($dbrr["heqam"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: red">HMP</button><?php }
					}
					?> </td><td> <?php 
					
					if($dbrr["uceqam"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: red">UM</button><?php }
					else
					{
					if($dbrr["uceqam"]>1)
					{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: red">UMP</button><?php }
					}
					?> </td><td> <?php 
					
					if($dbrr["eqaisyp"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: dodgerblue">SY</button><?php }
					else
					{
						if($dbrr["eqaisyp"]>1)
					{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: dodgerblue">SYP</button><?php }
					}
					?> </td><td> <?php 
					if($dbrr["eqaihbv"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: dodgerblue">HB</button><?php }
					else
					{
						if($dbrr["eqaihbv"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: dodgerblue">HBP</button><?php }
					}
					
					?> </td><td> <?php 
					if($dbrr["eqabgram"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: blueviolet">BG</button><?php }
					else
					{
						if($dbrr["eqabgram"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color:black; border-color: blueviolet">BGP</button><?php }
						
					}
					?> </td><td> <?php 
					if($dbrr["eqabafb"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: blueviolet">BA</button><?php }
					else
					{
						if($dbrr["eqabafb"]>1)
						{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: blueviolet">BAP</button><?php }
						
					}
					?> </td><td> <?php 
					if($dbrr["eqabiden"]==1)
					{ ?><button class="btn btn-sm mr-1" style="color: white; background-color: blueviolet">BI</button><?php }

					else
					{
					if($dbrr["eqabiden"]>1)
					{ ?><button class="btn btn-sm mr-1" style="color: black; border-color: blueviolet">BIP</button><?php }	
					}
					?> </td>
					<td><?php $total = $c+$h; echo number_format($total,2); ?></td>
					<td><?php $paid = $cp+$hp; echo number_format($paid,2); ?></td>
					<td><?php $out = $total-$paid; echo number_format($out,2); ?></td>
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

			
			
			
			


	
	


</div>
<?php 
	mysqli_close($link);
	?>
	
</body>
</html>