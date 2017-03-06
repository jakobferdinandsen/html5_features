<?php include("html/layout.html"); ?>
    <div class="text-center">
        <button class="btn btn-primary" onclick="getLocation()">Show my location</button>
    </div>
        <div style="width: 100%;" id="mapholder"></div>
    <script src="https://maps.google.com/maps/api/js?key=<INSERT API KEY>"></script>

    <script src="js/geolocation.js"></script>
<?php include("html/close.html"); ?>