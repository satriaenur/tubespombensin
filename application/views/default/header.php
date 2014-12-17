<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?> - Pom Bensin Bandung</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?=base_url('assets')?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('assets')?>/css/freelancer.css" rel="stylesheet">
    <link href="<?=base_url('assets')?>/css/jquery-ui.min.css" rel="stylesheet">

    <script src="<?=base_url('assets')?>/js/jquery.min.js"></script>
    <style type="text/css">
      .maps { height: 500px;width:500px; margin: 0; padding: 0;}
    </style>

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChBLAzPFx7WS5xQ8HM1yjwBZYeZjSP5DQ&v=3.exp&libraries=places">
    </script>

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php if($title=='Home') echo '#page-top'; else echo base_url(); ?>">Bandung Pom Bensin</a>
            </div>
            <?php if($title=='Home'){ ?>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#global">Global</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#list">List</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about"><?php if($this->session->userdata('user_nama')=='') echo 'Sign Up'; else echo 'Add Pom'; ?></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#dir">Get Route</a>
                        </li>
                        <?php if($this->session->userdata('user_username')!=''){ ?>
                        <li class="page-scroll">
                            <a href="<?=base_url('auth/logout')?>">Logout</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            <?php } ?>
        </div>
        <!-- /.container-fluid -->
    </nav>