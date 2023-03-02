<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php");
	session_start();?>
<title>Edit</title>

</head>

<body class="m-5 p-5">

<?php require("headPanel.php"); ?>     

<h1 class="ft-prompt">ENROLLED</h1> 	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
	<li class="breadcrumb-item"><a href="register.php">Register</a></li>  
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<?php
    if($_POST["id"]<>null)
    {
        $id = $_POST["id"];
    }
    else
    {
        $id = $_GET["id"];
    }
	
	require "connection-mhd.php";
    $idDB = $id-20230000;
	$sql = "SELECT * FROM mhd_register_program WHERE member_id = '$idDB' AND year_id = '11' AND del = '0'  ;";
	$result = mysqli_query($link, $sql);
	

    
    $sqlCompany = "SELECT * FROM mhd_company WHERE member_id = '$idDB' AND del = '0';";
	$resultCompany = mysqli_query($link, $sqlCompany);
	$dbrrCompany = mysqli_fetch_array($resultCompany);
    
    $sqlList =  "SELECT * FROM payment_lists WHERE id = '$id' ;";
    $resultList =  mysqli_query($link, $sqlList);
    $dbrrList = mysqli_fetch_array($resultList);

	?>	
<form method="post" action="payment-form-2.php">
<div class="row form-group" >
    <div class="col-12 form-group">
      <input type="text" class="form-control form-control-sm border-0 bg-white head-1" name="participantID" value="<?php echo $id; ?>" disabled>
        <input type="hidden" value="<?php echo $id; ?>" name="id"><br>
      <input type="text" class="form-control form-control-sm border-0 bg-white head-2" name="laboratoryName" value="<?php echo $dbrrCompany["room"]; ?>" disabled>
        <input type="hidden" value="<?php echo $dbrrCompany["name"]; ?>" name="instituteName">
    <input type="text" class="form-control form-control-sm border-0 bg-white head-2" value="<?php echo $dbrrCompany["name"]; ?>">
      <input type="text" class="form-control form-control-sm border-0 bg-white" name="address" value="<?php echo $dbrrCompany["address_1"]." ".$dbrrCompany["address_2"]." ".$dbrrCompany["district"]." ".$dbrrCompany["country"]." ".$dbrrCompany["province"]." ".$dbrrCompany["postcode"]; ?>" disabled>
    </div>
    
</div>

<div class="container-fluid rounded p-5" style="background-color: #DCEEFF">
    
<?php
         
    while($dbrr = mysqli_fetch_assoc($result))
            {
       
            if($dbrr["program_id"] == 1)
                { 
                ?> 
                    <div class="row m-3">
                        <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqac" 
                                                  <?php if($dbrrList["eqac"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>
                                                  ></div>
                        <div class="col-2"><span class="form-control">EQAC</span></div>
                        <div class="col-8"><span class="form-control"><?php echo $dbrr["bill_company"]; ?></span></div>
                        <input type="hidden" name="bill_1" value="<?php echo $dbrr["bill_name"]; ?>">
                        <input type="hidden" name="bills_1" value="<?php echo $dbrr["bill_address"]; ?>">
                    </div>
                <?php
                } 
            else
                {
                    if($dbrr["program_id"] == 2)
                    { 
                    ?> 
                        <div class="row m-3">
                            <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqah"
                                                      <?php if($dbrrList["eqah"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>></div>
                            <div class="col-2"><span class="form-control ">EQAH</span></div>
                            <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                            <input type="hidden" name="bill_2" value="<?php echo $dbrr["bill_name"]; ?>">
                            <input type="hidden" name="bills_2" value="<?php echo $dbrr["bill_address"]; ?>">
                        </div>
                    <?php
                    }
                    else
                    {
                        if($dbrr["program_id"] == 3)
                        { 
                        ?> 
                            <div class="row m-3">
                                <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqat"
                                                          <?php if($dbrrList["eqat"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>
                                                          > </div>
                                <div class="col-2"><span class="form-control ">EQAT</span></div>
                                <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                <input type="hidden" name="bill_3" value="<?php echo $dbrr["bill_name"]; ?>">
                                <input type="hidden" name="bills_3" value="<?php echo $dbrr["bill_address"]; ?>">
                            </div>
                        <?php
                        }
                        else
                        {
                            if($dbrr["program_id"] == 4)
                            { 
                            ?> 
                                <div class="row m-3">
                                    <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqap"
                                                        <?php if($dbrrList["eqap"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>      
                                                    > </div>
                                    <div class="col-2"><span class="form-control ">EQAP</span></div>
                                    <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                    <input type="hidden" name="bill_4" value="<?php echo $dbrr["bill_name"]; ?>">
                                    <input type="hidden" name="bills_4" value="<?php echo $dbrr["bill_address"]; ?>">
                                </div>
                            <?php
                            }
                            else
                            {
                                if($dbrr["program_id"] == 5)
                                { 
                                ?> 
                                    <div class="row m-3">
                                        <div class="col-1"><input class="form-control" type="checkbox" value="2" name="beqam"
                                                                  <?php if($dbrrList["beqam"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>
                                                                  > </div>
                                        <div class="col-2"><span class="form-control ">B-EQAM</span></div>
                                        <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                        <input type="hidden" name="bill_5" value="<?php echo $dbrr["bill_name"]; ?>">
                                        <input type="hidden" name="bills_5" value="<?php echo $dbrr["bill_address"]; ?>">
                                    </div>
                                <?php
                                }
                                else
                                {
                                    if($dbrr["program_id"] == 6)
                                    { 
                                    ?> 
                                        <div class="row m-3">
                                            <div class="col-1"><input class="form-control" type="checkbox" value="2" name="heqam"
                                                            <?php if($dbrrList["heqam"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>          
                                                                      > </div>
                                            <div class="col-2"><span class="form-control ">H-EQAM</span></div>
                                            <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                            <input type="hidden" name="bill_6" value="<?php echo $dbrr["bill_name"]; ?>">
                                            <input type="hidden" name="bills_6" value="<?php echo $dbrr["bill_address"]; ?>">
                                        </div>
                                    <?php
                                    }
                                    else
                                    {
                                        if($dbrr["program_id"] == 7)
                                        { 
                                        ?> 
                                            <div class="row m-3">
                                                <div class="col-1"><input class="form-control" type="checkbox" value="2" name="uceqam"
                                                                   <?php if($dbrrList["uceqam"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>       
                                                                          
                                                                          
                                                                          > </div>
                                                <div class="col-2"><span class="form-control ">UC-EQAM</span></div>
                                                <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                                <input type="hidden" name="bill_7" value="<?php echo $dbrr["bill_name"]; ?>">
                                                <input type="hidden" name="bills_7" value="<?php echo $dbrr["bill_address"]; ?>">
                                            </div>
                                        <?php
                                        }
                                        else
                                        {
                                            if($dbrr["program_id"] == 8)
                                            { 
                                            ?> 
                                                <div class="row m-3">
                                                    <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqaisyp"
                                                        <?php if($dbrrList["eqaisyp"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>                      
                                                                              
                                                                              > </div>
                                                    <div class="col-2"><span class="form-control ">EQAI:Syphilis</span></div>
                                                    <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                                    <input type="hidden" name="bill_8" value="<?php echo $dbrr["bill_name"]; ?>">
                                                    <input type="hidden" name="bills_8" value="<?php echo $dbrr["bill_address"]; ?>">
                                                </div>
                                            <?php
                                            }
                                            else
                                            {
                                                if($dbrr["program_id"] == 9)
                                                { 
                                                ?> 
                                                    <div class="row m-3">
                                                        <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqaihbv"
                                                               <?php if($dbrrList["eqaihbv"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>                   
                                                                                  
                                                                                  > </div>
                                                        <div class="col-2"><span class="form-control ">EQAI:HBV</span></div>
                                                        <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                                        <input type="hidden" name="bill_9" value="<?php echo $dbrr["bill_name"]; ?>">
                                                        <input type="hidden" name="bills_9" value="<?php echo $dbrr["bill_address"]; ?>">
                                                    </div>
                                                <?php
                                                }
                                                else
                                                {
                                                    if($dbrr["program_id"] == 10)
                                                    { 
                                                    ?> 
                                                        <div class="row m-3">
                                                            <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqabgram"
                                                                                      <?php if($dbrrList["eqabgram"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>
                                                                                      > </div>
                                                            <div class="col-2"><span class="form-control ">EQAB:GRAM</span></div>
                                                            <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                                            <input type="hidden" name="bill_10" value="<?php echo $dbrr["bill_name"]; ?>">
                                                            <input type="hidden" name="bills_10" value="<?php echo $dbrr["bill_address"]; ?>">
                                                        </div>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                        if($dbrr["program_id"] == 12)
                                                        { 
                                                        ?> 
                                                            <div class="row m-3">
                                                                <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqabafb"
                                                                                    <?php if($dbrrList["eqabafb"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>      
                                                                                          > </div>
                                                                <div class="col-2"><span class="form-control ">EQAB:AFB</span></div>
                                                                <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                                                <input type="hidden" name="bill_11" value="<?php echo $dbrr["bill_name"]; ?>">
                                                                <input type="hidden" name="bills_11" value="<?php echo $dbrr["bill_address"]; ?>">
                                                            </div>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                            if($dbrr["program_id"] == 13)
                                                            { 
                                                            ?> 
                                                                <div class="row m-3">
                                                                    <div class="col-1"><input class="form-control" type="checkbox" value="2" name="eqabiden"
                                                                                          <?php if($dbrrList["eqabiden"] > 1)
                                                        {
                                                            echo "disabled";
                                                        }
                                                  ?>    
                                                                                              
                                                                                              > </div>
                                                                    <div class="col-2"><span class="form-control ">EQAI:IDEN</span></div>
                                                                    <div class="col-8"><span class="form-control "><?php echo $dbrr["bill_company"]; ?></span></div>
                                                                    <input type="hidden" name="bill_12" value="<?php echo $dbrr["bill_name"]; ?>">
                                                                    <input type="hidden" name="bills_12" value="<?php echo $dbrr["bill_address"]; ?>">
                                                                </div>
                                                            <?php
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
            
            }
            
            
            
    
?> 
    
</div>    
    
	<button type="submit" class="btn btn-lg btn-success mt-3 mb-5" style="width: 100%; height: 100px;"> <span class="display-3">PAYMENT</span></button>	
</form>	  



	

</body>
</html>