var map = "";

function myMap() {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(46, 16),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(mapCanvas, mapOptions);



   /* google.maps.event.addListener(marker, 'click', function () {
        // Zoom to 9 when clicking on marker
        // map.setZoom(9);
        // map.setCenter(marker.getPosition());

        var infowindow = new google.maps.InfoWindow({
            content: "Hello World!"
        });
        infowindow.open(map, marker);


    });*/

}

function initMapAtHouse(long, lat) {
    var mapCanvas = document.getElementById("map");
    var mapOptions = {
        center: new google.maps.LatLng(long, lat),
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(mapCanvas, mapOptions);

}

function setMarker(long, lat) {
   console.log(long + " " + lat);
    var myCenter = new google.maps.LatLng(long, lat);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE,
        //icon: "pinkball.png"
    });
    marker.setMap(map);

}

