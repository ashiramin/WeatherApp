<?php
/**
 * Created by PhpStorm.
 * User: Ashir amin
 * Date: 4/21/15
 * Time: 6:36 PM
 */
?>

<?php
$pagename = 'Addcity';
include('includes/header.php');


?>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<script>

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {HTMLInputElement} */(document.getElementById('inputEmail')),
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


        // Get each component of the address from the place details
        // and fill the corresponding field on the form.

        var values = place.address_components[0]['long_name'];
        document.getElementById('city').value = values;
         var values = place.address_components[2]['short_name'];

        document.getElementById('state').value = values;


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
    // [END region_geolocation]

</script>



<div class="container">
    <br/>

    <form class="form-signin" action="process.php" method="post">
        <h2 class="form-signin-heading">Add a city</h2>
        <label for="inputEmail" class="sr-only">City</label>
        <input type="text" id="inputEmail" onFocus="geolocate()" autocomplete="false" class="form-control" name="location" placeholder="Add A City" required autofocus>
        <input type="hidden" name="city" id="city">
        <input type="hidden" name="state" id="state">

            <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </form>






</div> <!-- /container -->

<script>
    // self executing function here
    (function() {
        initialize();



    })();
</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>