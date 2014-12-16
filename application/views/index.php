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
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Bandung Pom Bensin</a>
            </div>

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
                        <a href="#about">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="<?=base_url('assets')?>/img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Bandung Pom Bensin</span>
                        <hr class="star-light">
                        <span class="skills">Dayuh Kolot - Telkom University - Bandung</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="global">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Global</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <center><div class="maps" id="googleMap"></div>
                    <script>
                        var locations = [
                        <?php 

                            foreach($hasil as $row){
                        ?>
                          ['<?=$row->nama;?>',<?=$row->latitude;?>, <?=$row->longitude;?>],
                          <?php
                            }
                          ?>
                        ];

                        var map = new google.maps.Map(document.getElementById('googleMap'), {
                          zoom: 13,
                          panControl:false,
                          zoomControl:false,
                          mapTypeControl:false,
                          streetViewControl:false,
                          center: new google.maps.LatLng(-6.9745448,107.6303129),
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
                </div></center>
            </div>
        </div>
    </section>
    

    <!-- About Section -->
   <section class="success" id="list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>List</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php
                    $a=0;
                    foreach ($hasil as $row) {
                    $a++;
                ?>
                <div class="col-sm-4 portfolio-item">
                    <a href="<?=base_url('index.php/welcome/detail/').'/'.$row->id?>" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=base_url('assets')?>/img/pombensin/<?=$row->foto?>" class="img-responsive" alt="">
                    </a>
                </div>
                <?php if($a==6)break;}
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
     <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Ini adalah sebuah website yang menampilkan pom bensin di daerah sekitar Bandung. Untuk informasi lebih lanjut silahkan hubungi contact person kami. Terima kasih atas kunjungan anda dalam website ini.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Jln. Telekomunikasi No.1 Bandung</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Pom Bensin</h3>
                        <p>Pom bensin adalah sarana yang digunakan untuk mengisi ulang bahan bakar kendaraan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Bandung Pom Bensin
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

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
