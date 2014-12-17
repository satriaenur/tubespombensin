<header>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
          <h3>Route</h3>
          <hr class="star-primary">
          <center><div class="maps" id="googleMap"></div></center>
          <button type="button" class="btn btn-default" onclick="document.location.href='<?=base_url()?>'"><i class="fa fa-times"></i> Back</button>
      </div>
    </div>
  </div>  
</header>

<script>
  <?php
    foreach ($hasil as $result) {
  ?>
    var lat="<?=$result->latitude?>";
    var longi="<?=$result->longitude?>";
    var nama="<?=$result->nama?>";
  <?php
    }
  ?>
  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(initialize);
      } else {
          $("#googleMap").html("Geolocation is not supported by this browser.");
      }
  }
  function initialize(position) {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapOptions = {
      zoom:7,
      center: new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
    };
    map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
    directionsDisplay.setMap(map);
    navigator.geolocation.getCurrentPosition(calcRoute);
  }

  function calcRoute(position) {
    var request = {
        origin:new google.maps.LatLng(position.coords.latitude, position.coords.longitude),
        destination:new google.maps.LatLng(lat, longi),
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        google.maps.InfoWindow().setContent(nama);
      }
    });
  }

  google.maps.event.addDomListener(window, 'load', getLocation);
</script>