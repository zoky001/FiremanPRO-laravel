var map = "";
var firemans_markers = [];
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
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(mapCanvas, mapOptions);

}

function setMarker(long, lat) {
   console.log("set marker:  "+long + " " + lat);
    var myCenter = new google.maps.LatLng(long, lat);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE,
        //icon: "pinkball.png"
    });
    marker.setMap(map);

    return marker;

}
function setFiremanMarker(long, lat) {
    console.log("set marker:  "+long + " " + lat);
    var myCenter = new google.maps.LatLng(long, lat);
    var marker = new google.maps.Marker({
        position: myCenter,
       // animation: google.maps.Animation.BOUNCE,
        icon: "https://firebasestorage.googleapis.com/v0/b/firemanpro-3c4cb.appspot.com/o/icon%2Fmale.svg?alt=media&token=a3e6c2a6-80ea-475f-a2bd-4614bd803044"
    });
    marker.setMap(map);

    return marker;

}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
    for (var i = 0; i < firemans_markers.length; i++) {
        firemans_markers[i].setMap(map);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
    setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    clearMarkers();
    firemans_markers = [];
}

