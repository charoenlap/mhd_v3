<?php
defined('BASEPATH') or exit('No direct script access allowed');
print_r($_POST);
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Preview-<?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/JQL.min.js"></script>
    <script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.css">
    <script src="<?php echo base_Url(); ?>assets/vendor/jquery.Thailand.js-master/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">
</head>

 <div class="container-fuild">
        <div class="container container-UC_EQAM" id="UC_EQAM">
            <div class="card border border-dark">
                <form action="">
                    <div class="card-title text-center text-white" style="padding:20px; background-color:rgba(0, 0, 255, 0.7);">
                        <h5 class="font-weight-bold"><?php echo $title; ?></h5>
                    </div>
                    <div class="card-body" style="background-color:white;">
                        <div class="container-left">
                            <h6 class="font-weight-bold" style="margin-top: 5px;">??????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????? (Test Account) ??????????????????????????????????????????????????????</h6>
                            <h6 class="font-weight-bold" style="margin-top: 5px;">????????????????????????????????????????????????????????????</h6>
                            <span>Trial 185-186 ( November 2020 )</span>
                            <h6 class="font-weight-bold" style="margin-top: 5px;">??????????????????????????????????????????????????????????????????????????? *</h6>
                            <span><?php echo $datepick; ?></span>
                            <h6 class="font-weight-bold" style="margin-top: 5px;">?????????????????????????????????????????????????????????????????????????????????</h6>
                            <span><?php echo $received_status; ?></span>
                            <hr>
                            <div class="container-left">
                                
                            </div>
                            <div class="container-fluid">
                            <caption class="font-weight-bold">???????????????????????????</caption>
                            <table class="table text-center table-hover">
                                <thead class="bg-primary text-white" >
                                    <tr>
                                        <th></th>
                                        <th>????????????</th>
                                        <th>???????????????????????????????????????</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">
                                    <tr>
                                        <td class="bg-primary text-white font-weight-bold" style="width: 350px;">Trial : 185</td>
                                        <td class="text-center">
                                            23
                                        </td>
                                        <td class="text-center">
                                            Lymphoblast
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-primary text-white font-weight-bold" style="width: 350px;">Trial : 186</td>
                                        <td class="text-center">
                                            45
                                        </td>
                                        <td class="text-center"> 
                                            Lymphoblast
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <table class="table text-center table-hover">
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <th>????????????</th>
                                                        <th>???????????????????????????????????????</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $x=1;?>
                                                <?php while($x<=20):?>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td>Red blood cell</td>   
                                                </tr>
                                                <?php $x++;?>
                                                <?php endwhile; ?>
                                                </tbody>
                                            </table>            
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <table class="table text-center table-hover">
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <th>????????????</th>
                                                        <th>???????????????????????????????????????</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $x=21;?>
                                                <?php while($x<=40):?>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td>Bacterial cast</td>   
                                                </tr>
                                                <?php $x++;?>
                                                <?php endwhile; ?>
                                                </tbody>
                                            </table>            
                                        </div>
                                    </div>
                                    <caption>File upload</caption>
                                    <table class="table text-center table-hover">
                                        <tbody class="text-left">
                                            <tr>
                                                <td class="bg-primary text-white font-weight-bold" style="width: 350px;">File 1</td>
                                                <td class="text-center">
                                                    uu.jpg
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="bg-primary text-white font-weight-bold" style="width: 350px;">File 2</td>
                                                <td class="text-center">
                                                    45.png
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                <caption>????????????????????????????????????</caption>
                                <table class="table text-center table-hover">
                                    <tbody class="text-left">
                                        <tr>
                                            <td class="bg-primary text-white" style="width: 350px;">????????????</td>
                                            <td><?php echo $name; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white" style="width: 350px;">?????????????????????????????????????????????</td>
                                            <td><?php echo $tel; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white" style="width: 350px;">?????????????????????</td>
                                            <td><?php echo $position; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white" style="width: 350px;">??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</td>
                                            <td><?php echo $comment; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white" style="width: 350px;">????????????????????????????????????????????????</td>
                                            <td><?php echo $datereport; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit" name="submit">??????????????????????????????????????????????????????</button>
                        </div>
                </form>
            </div>
 
        </div>

    </div>
    <style>
        select
        {
            width: auto; 
            text-align-last:center;
            border: none !important;
            pointer-events: none;
            background: none !important;
            appearance: none;
        }
    </style>