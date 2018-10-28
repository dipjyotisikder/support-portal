<?php include("./global/header.php"); ?>
<?php

$emailUser = $_SESSION['login_email'];
$passUser = $_SESSION['login_pass'];

?>


    <section class=" text-center card card-lg container-fluid" id="about-about">
        <h1 class="text-xxxl m-b-sm m-t-sm text-xxs-center" style="color: #7ec80d;">- Manage Account -</h1>

        <h4 class="d-inline-block"> Your Email: <?php echo $emailUser; ?> </h4>
        <h4> Your Password: <?php echo $passUser; ?> </h4>
    </section>


<style>
    #map{
        height: 800px;
        width: 100%;
    }
</style>
<br/>
<section class="text-center card card-lg container-fluid" id="about-about">
    <h1 class="text-xxxl m-b-sm m-t-sm text-xxs-center" style="color: #7ec80d;">- Your Current Location -</h1>
</section>



    <div id="map" style="border-radius: 20px;"></div>
    <script>

        var map, infoWindow, marker;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                /*center: {lat: -34.397, lng: 150.644},*/
                zoom: 18
            });

            infoWindow = new google.maps.InfoWindow;

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }

        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZpRj3xfbngi4Me8TSBX4Ar2oaMIqTqjY&callback=initMap">
    </script>









<?php include "./global/footer.php"; ?>