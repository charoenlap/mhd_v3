<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">
</head>

<body class="position-relative">
    <style>
        .sidenav {
            position: fixed;
            overflow-x: hidden;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1;
            padding: 0;
        }

        .sidebar {
            min-height: 0;
            text-align: center;

        }

        .img-index {
            text-align: center;
        }

        .bg-content {
            width: 100% !important;
        }

        .navbar {
            width: fit-content;
        }
        .menu-index>.btn-primary:hover {
           background-color: white !important;
           color: blue !important;
           border-color: blue !important;
        }
        #nav-menubar>a.nav-link:hover, #nav-menubar>.collapse>a.btn:hover{
            background-color: rgb(51, 51, 204) !important;
            color: white !important;
            border-color: white !important;
        }
        @media screen and (max-width:767px) {
            .navbar-brand {
                width: 90px !important;
                padding: 0;
                margin-top: 10px !important;
                margin-bottom: 10px !important;
                margin-left: 10px !important;
            }

            .sidenav {
                position: static;
                padding-right: 10px !important;
                height: fit-content;
            }

            .menu-index {
                text-align: center;
            }

            /* page content cat contact */
            .extra-menu {
                text-align: left;
                margin-top: 20px;
                padding: 50px;

            }

            .navbar-toggler {
                float: right;
                margin-top: 15px;
                margin-right: 10px;
            }

            .sidebar {
                margin: auto;
                width: 100%;
                margin-bottom: 10px;
            }

            #nav-menubar {
                text-align: center !important;
                width: fit-content !important;
            }

            .menu-index {
                margin-top: 50px !important;
            }

            .navbar-row {
                display: block;
            }

            .nav-link {
                display: flex;
                margin-right: 20px !important;
                margin-left: 20px !important;
            }

            .nav-about {
                display: none;
            }

            .footer-area {
                position: relative !important;
                margin-top: 40px;
                bottom: 0;
            }

            .img-index {
                text-align: center;
                margin: auto;
            }

            .navbar {
                width: 100%;
            }
            .about-schemes {
                margin-bottom: 0 !important;
            }
        }
    </style>