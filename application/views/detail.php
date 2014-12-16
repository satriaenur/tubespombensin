<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pom Bensin Bandung</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?=base_url('assets')?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('assets')?>/css/freelancer.css" rel="stylesheet">

    <style type="text/css">
      .maps { height: 500px;width:500px; margin: 0; padding: 0;}
    </style>

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChBLAzPFx7WS5xQ8HM1yjwBZYeZjSP5DQ">
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>">Bandung Pom Bensin</a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
            <?php
                $a=0;
                foreach ($hasil as $row) {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3><?=$row->nama?></h3>
                        <hr class="star-primary">
                        <center><div class="maps" id="googleMap<?=$a?>"></div></center>
                        <script>
                            var locations = [
                              ['<?=$row->nama;?>',<?=$row->latitude;?>, <?=$row->longitude;?>]
                            ];

                            var map = new google.maps.Map(document.getElementById('googleMap<?=$a?>'), {
                              zoom: 13,
                              panControl:false,
                              zoomControl:false,
                              mapTypeControl:false,
                              streetViewControl:false,
                              center: new google.maps.LatLng(<?=$row->latitude;?>,<?=$row->longitude;?>),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                            });
                            var infowindow = new google.maps.InfoWindow();

                            for (i = 0; i < locations.length; i++) {  
                              marker = new google.maps.Marker({
                                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                map: map,
                              });
                              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                  infowindow.setContent(locations[i][0]);
                                  infowindow.open(map, marker);
                                }
                              })(marker, i));
                            }
                              console.log('lalala');
                      </script>
                        <p><?=$row->alamat?></p>
                        <button type="button" class="btn btn-default" onclick="document.location.href='<?=base_url()?>'"><i class="fa fa-times"></i> Back</button>
                </div>
            </div>  
        </div>
        <?php
            }
        ?>
    </header>

    <!-- jQuery -->
    <script src="<?=base_url('assets')?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets')?>/js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?=base_url('assets')?>/js/classie.js"></script>
    <script src="<?=base_url('assets')?>/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?=base_url('assets')?>/js/jqBootstrapValidation.js"></script>
    <script src="<?=base_url('assets')?>/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url('assets')?>/js/freelancer.js"></script>

</body>

</html>
