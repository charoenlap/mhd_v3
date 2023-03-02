<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>HOME</title>
</head>

<body>
<?php 
    require("headPanel.php");
    
    if($_POST["scheme"] <> null)
    {
        $scheme = $_POST["scheme"]; 
    }
    else
    {
        $scheme = $_GET["scheme"]; 
    }
    
    $scheme_assign = "a".$scheme;

            
		if($_POST["scheme"]=="eqac" || $_GET["scheme"]=="eqac")
        {
            $id = 1;
        } 
        else 
        {
            if($_POST["scheme"]=="eqah" || $_GET["scheme"]=="eqah")
            {
                $id = 2;
            }
            else
            {
                if($_POST["scheme"]=="eqat" || $_GET["scheme"]=="eqat")
                {
                    $id = 3;
                }
                else
                {
                    if($_POST["scheme"]=="eqap" || $_GET["scheme"]=="eqap")
                    {
                        $id = 4;
                    }
                    else
                    {
                        if($_POST["scheme"]=="beqam" || $_GET["scheme"]=="beqam")
                        {
                            $id = 5;
                        }
                        else
                        {
                            if($_POST["scheme"]=="heqam" || $_GET["scheme"]=="heqam")
                            {
                                $id = 6;
                            }
                            else
                            {
                                if($_POST["scheme"]=="uceqam" || $_GET["scheme"]=="uceqam")
                                {
                                    $id = 7;
                                }
                                else
                                {
                                    if($_POST["scheme"]=="eqaisyp" || $_GET["scheme"]=="eqaisyp")
                                    {
                                        $id = 8;
                                    }
                                    else
                                    {
                                        if($_POST["scheme"]=="eqaihbv" || $_GET["scheme"]=="eqaihbv")
                                        {
                                            $id = 9;
                                        }
                                        else
                                        {
                                            if($_POST["scheme"]=="eqabgram" || $_GET["scheme"]=="eqabgram")
                                            {
                                                $id = 10;
                                            }
                                            else
                                            {
                                                if($_POST["scheme"]=="eqabafb" || $_GET["scheme"]=="eqabafb")
                                                {
                                                    $id = 12;
                                                }
                                                else
                                                {
                                                    if($_POST["scheme"]=="eqabiden" || $_GET["scheme"]=="eqabiden")
                                                    {
                                                        $id = 13;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
?>
    
<div style="padding-top: 130px" class="container-fluid pb-5">

<?php
        require("connection.php");
        $sql_eqam_row = "SELECT * FROM payment_eqam WHERE $scheme_assign > '0'";
        $result_eqam_row = mysqli_query($link, $sql_eqam_row);
        $row_eqam = mysqli_num_rows($result_eqam_row);
    
        $sql_eqam_wait = "SELECT * FROM mhd_register_program WHERE (program_id = $id) AND (year_id = '11') AND (del = '0') ORDER BY date_added";
        $result_eqam_wait = mysqli_query($link, $sql_eqam_wait);
        $row_eqam_wait = mysqli_num_rows($result_eqam_wait);
        $row_wait = $row_eqam_wait - $row_eqam ;
    
    
?>
    
	<h1><?php echo strtoupper($scheme); ?></h1>
    <div class="border rounded border-secondary p-3">
                <?php
                    if($scheme == "beqam" || $scheme == "heqam")
                    {
                ?>
                    <p class="h3">
                        จำนวนรับ :
                        <?php
                            if($scheme == "beqam")
                            {
                                $quantity = 450;
                            }
                        
                            if($scheme == "heqam")
                            {
                                $quantity = 220;    
                            }
                        echo $quantity;
                        ?>
                     ห้องปฏิบัติการ
                    </p>
                    <button class="btn btn-lg btn-success">รับสิทธิ์แล้ว : <?php echo $row_eqam; ?> ห้องปฏิบัติการ</button>
                    <button class="ps-3 btn btn-lg btn-primary text-white">รอสิทธิ์: <?php echo $row_wait; ?> ห้องปฏิบัติการ</button>
                    <button class="ps-3 btn btn-lg btn-danger text-white">คงเหลือ: <?php echo $quantity - $row_eqam; ?> สิทธิ์</button>
				
                <?php
                    } 
                ?> 
    </div>
	<table width="100%" border="0" cellpadding="10px">
  <tbody>
    <tr>
 
		<td rowspan="2" align="center" valign="top">
		
<?php
		$va = null;
		$sql = "SELECT * FROM mhd_register_program WHERE (program_id = $id) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000) ORDER BY date_added";
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
                    <th align="center"><h>Payment</h></th>
                <?php
                    if($scheme == "beqam" || $scheme == "heqam")
                    {
                ?>
                    <th align="center"><h>EQAM</h></th>
                    <th>Assign</th>
				
                <?php
                    } 
                ?> 
                   </tr>
				  </thead> 
                     
				<?php 
				 $i = 1;
				if (mysqli_num_rows($result) > 0) {
  				while($row = mysqli_fetch_assoc($result)) {
                    
                    $member_id = $row["member_id"];
                    $sql_participant_name = "SELECT * FROM mhd_company WHERE (member_id = $member_id) AND (del = 0);";
		            $result_participant_name = mysqli_query($link, $sql_participant_name);
                    $dbrr = mysqli_fetch_assoc($result_participant_name);
                    
                    $eqam_id = $member_id+20220000;
                    
                    $sql_eqam ="SELECT * FROM payment_eqam WHERE (($scheme = '1') AND (id = '$eqam_id'))";
                    $result_eqam = mysqli_query($link, $sql_eqam);
                    $dbrr_eqam = mysqli_fetch_assoc($result_eqam);
    			?>
				<tr valign="middle">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["member_id"]+20230000; ?></td>
					<td><?php echo $dbrr["name"];?> </td>
					<td><?php echo $dbrr["room"]; $no = $row["no"];?> </td>
                    <?php
                    if($scheme == "beqam" || $scheme == "heqam")
                    {
                ?>
                    <td>
                        <?php
                            if($dbrr_eqam[$scheme]==1)
                            {
                                echo "สมาชิกเดิม" ;
                                if($dbrr_eqam["c".$scheme]==1)
                                {
                                echo "ยืนยันสิทธิ์" ;
                                }
                            }
                        ?>
                    </td>
				<td>
                    <?php
                        if($dbrr_eqam["a".$scheme] > 0)
                        {
                    ?>
                            <span class="text-success">ให้สิทธิ์แล้ว</span>
                    <?php
                        }
                        else
                        {
                            if($dbrr_eqam["$scheme"] == 1)
                            {
                    ?>
                            <button class="btn btn-success" onClick="window.location.href='eqam_right_assign.php?no=<?php echo $eqam_id; ?>&scheme=<?php echo $scheme; ?>'">ให้สิทธิ์</button>
                    <?php
                            }
                        }
                    }
                    ?>
                  </td>  
                   
                   <td>
                    <?php
                        if($row["admin_approve"] == 1)
                        {
                    ?>
                            <span class="text-success">ชำระเงินแล้ว</span>
                    <?php
                        }
                        else
                        {
                    ?>
                           <span class="text-danger">รอชำระเงิน</span>
                    <?php
                        }
                    ?>
                  </td>  
                    
                    
                    
                    
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