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