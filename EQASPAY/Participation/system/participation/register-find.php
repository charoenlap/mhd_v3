<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>HOME</title>
</head>

<body>
<?php require("headPanel.php");
 $scheme = $_POST["scheme"];  ?>	
<div style="padding-top: 130px" class="container-fluid pb-5">
<h1 class="ft-prompt"><i class="fas fa-users"></i> REGISTER</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li> 
	<li class="breadcrumb-item"><a href="scheme-find.php">Select Scheme</a></li>   
    <li class="breadcrumb-item active" aria-current="page">Register</li>
  </ol>
</nav>
	<h1><?php echo strtoupper($scheme); ?></h1>
	<table width="100%" border="0" cellpadding="10px">
  <tbody>
    <tr>
 
		<td rowspan="2" align="center" valign="top">
		
		<?php require("connection.php");
		
		$va = null;
		$sql = "SELECT * FROM payment_lists WHERE (id <> '$va') AND ($scheme > '0') ORDER BY id ASC";
		$result = mysqli_query($link, $sql);
		$rowcount = mysqli_num_rows($result);
		
			 ?>
		
			<h3 class="ft-prompt" style="text-align: left"><i class="fas fa-hospital-user fa-2x">&nbsp; </i><?php echo  $rowcount; ?> Laboratories </h3>
			<table width="100%" border="0" class="table table-sm table-hover">
			  <tbody>
				  <thead class="thead-dark">
				<tr>
				  <th align="center" width="2%"><h>No</h></th>
				  <th align="center" width="10%"><h>ID</h></th>
				  <th align="center" width="50%"><h>Participant</h></th>
					<th align="center"><h>Laboratory</h></th>
				</tr>
				  </thead>

				<?php 
				 $i = 1;
				if (mysqli_num_rows($result) > 0) {
  				while($row = mysqli_fetch_assoc($result)) {
    			?>
				<tr valign="middle">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["instituteName"]; $no = $row["no"];?> </td>
					<td><?php echo $row["labName"]; $no = $row["no"];?> </td>
				
				</tr>
				
				 <?php $i++; } 
			
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