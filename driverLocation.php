'<!DOCTYPE html>
<html>


<body>

 

<button onclick="getLocation()">Try It</button>

 

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function getPosition(position) {
    x.inner = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;	
}
</script>






</body>
</html>
