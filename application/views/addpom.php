<section>
  <div class="container">
      <div class="row">
          <div class="col-lg-12 text-center">
          <br/><br/>
              <h2>Add Pom</h2>
              <hr class="star-primary">
          </div>
      </div>
      <div class="row">
          <form method="POST" action="<?=base_url('detail/add')?>" name="form" enctype="multipart/form-data">
            <div class="center-block col-xs-4 text-center" style="float:none">
              <div class="control-group">
                <span class="text-group">Nama Pom</span>
                <div class="form-group">
                <?php
                  $data = array('name' => 'nama', 'maxlength' => 20, 'class' => 'form-control');
                  echo form_input($data);
                ?>
                </div>
              </div>
              <div class="control-group">
                <span class="text-group">Alamat</span>
                <div class="form-group">
                <?php
                  $data = array('name' => 'alamat','id'=>'alamat','type'=>'text','onfocus'=>'geolocate()', 'maxlength' => 20, 'class' => 'form-control');
                  $data2 = array('type' => 'hidden','name' => 'location','id'=>'location');
                  echo form_input($data);
                  echo form_input($data2);
                ?>
                </div>
              </div>
              <div class="control-group">
                <span class="text-group">Upload Foto</span>
                <div class="form-group">
                <input type='file' name='foto' required/>
                <br/>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group">
                <?php
                  $data = array('name' => 'submit', 'value'=>'Login', 'class'=>'btn btn-success');
                  echo form_submit($data);
                ?>
                </div>
              </div>
            </div>
          </form>
      </div>
  </div>
</section>
    <script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.
$(function(){
  $(document).load(initialize());
});
var placeSearch, autocomplete;
var componentForm = {
  location: 'long_name'
};

function initialize() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */(document.getElementById('alamat')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  // populate the address fields in the form.
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    fillInAddress();
  });
}

// [START region_fillform]
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();
  console.log('lala');
  for (var component in componentForm) {
    document.getElementById(component).value = '';
  }
  document.getElementById('location').value = place.geometry.location;

}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
</script>