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
    <h1>ทะเบียนสมาชิก ประจำปี 2566</h1>
	<h2>โครงการ <?php echo strtoupper($scheme); ?></h2>
    <h2>ฉบับที่</h2>
    <h2>วันที่</h2>
	<table width="200%" border="0" cellpadding="10px">
  <tbody>
    <tr>
 
		<td rowspan="2" align="center" valign="top">
		
<?php
		$va = null;
		$sql = "SELECT * FROM mhd_register_program WHERE (program_id = $id) AND (year_id = '11') AND (del = '0') AND (member_id <> 20230000) ORDER BY date_added";
		$result = mysqli_query($link, $sql);
		$rowcount = mysqli_num_rows($result);
		
			 ?>
		    <h3 class="text-left">จำนวนสมาชิกทั้งหมด <?php echo $rowcount; ?> ห้องปฏิบัติการ</h3>
			<table width="100%" border="0" class="table table-sm table-hover">
			  <tbody>
				  <thead class="thead-dark">
				<tr>
				  <th align="center" >ลำดับที่</th>
				  <th align="center" >เลขสมาชิก</th>
				  <th align="center" >ชื่อหน่วยงาน</th>
                    <th align="center">ชื่อห้องปฏิบัติการ</th>
                <th>ผู้รับผิดชอบ</th>
                    <th>ที่อยู่ (เลขที่, หมู่, ถนน)</th>
                    <th>แขวง/ตำบล</th>
                    <th>เขต/อำเภอ</th>
                    <th>จังหวัด</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>โทรศัพท์</th>
                    <th>E-mail Account</th>
                    <th>ประเภท</th>
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
                    
    			?>
				<tr valign="middle">
					<td><?php echo $i; ?></td>
					<td
                               <?php 
                                    if($row["admin_approve"] == 0)
                                    {
                                        echo "class = 'text-danger'"; 
                                    }
                                    else
                                    {
                                        echo "class = 'text-success'"; 
                                    }
                ?>
                    >                
                        <?php echo $row["member_id"]+20230000; ?></td>
					<td><?php echo $dbrr["name"];?> </td>
					<td><?php echo $dbrr["room"]; $no = $row["no"];?> </td>
                    
                    
                    <?php
                    
                    $member_no = $row["member_id"];
                    
                    $sql_member = "SELECT * FROM mhd_member WHERE (id = '$member_no') AND (del = '0')";
		            $result_member = mysqli_query($link, $sql_member);
                    $dbrr_member = mysqli_fetch_assoc($result_member);
                    
                    ?>
                    
                <td><?php echo $dbrr_member["firstname"]." ".$dbrr_member["lastname"]; ?></td>
                <td><?php echo $dbrr["address_1"]." ".$dbrr["address_2"]; ?></td>
                <td><?php echo $dbrr["district"]; ?></td>
                <td><?php echo $dbrr["country"]; ?></td> 
                <td><?php echo $dbrr["province"]; ?></td>
                <td><?php echo $dbrr["postcode"]; ?></td>
                <td><?php echo $dbrr["telephone"]; ?></td>
                <td><?php echo $dbrr_member["email"]; ?></td>
                <td><?php echo $dbrr["type_hospital"]; ?></td>
                
            <!--    
                   <td>
                    <?php /*
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
                        } */
                    ?>
                  </td>  
                    
             -->       
                    
                    
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