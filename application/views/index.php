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
                <a href="<?=base_url('detail/index').'/'.$row->id?>" class="portfolio-link">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?=base_url('assets')?>/img/pombensin/<?=$row->foto?>" class="img-responsive" alt="" height="300px" width="500px">
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
                <h2><?php if($this->session->userdata('user_username')=='') echo 'Sign Up!'; else echo 'Add Pom';?></h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="text-center col-lg-8 col-lg-offset-2">
                <?php if($this->session->userdata('user_username')==''){?>
                <p>Daftarkan diri anda untuk menambah informasi pom bensin yang anda ketahui.</p><br/><br/>
                <button class="btn btn-success" onclick="document.location.href='<?=base_url('auth')?>'">Sign Up</button>
                <br/>
                <p>Have account ? <a href="<?=base_url('auth/loginform')?>">Login</a></p>
                <?php }else{ ?>
                <p>Selamat datang <?=$this->session->userdata('user_nama')?>, Anda bisa menambah pombensin</p><br/>
                <button class="btn btn-success" onclick="document.location.href='<?=base_url('detail/addform')?>'">Add</button>
                <br/>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="dir">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Get Route</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="text-center col-lg-8 col-lg-offset-2">
                <p>Masukkan nama pombensin tujuan</p>
                <form method="POST" action="<?=base_url('detail/getroute')?>" name="form">
                    <div class="row">
                        <div class="col-xs-8 center-block" style="float:none">
                            <input class="form-control" type="text" size="3" required id="nama" name="dest"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
var able=[];
<?php
    foreach ($hasil as $result) {
?>
able.push("<?=$result->nama?>");
<?php
    }
?>
$(function(){
    $("#nama").autocomplete({
      source:able
    });
});
</script>