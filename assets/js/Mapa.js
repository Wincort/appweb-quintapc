var map, myLatlng, Coordenadas = { lat: 21.2836660, lng: -89.3242490 },
    marker;

function muestraMapa() {
    myLatlng = new google.maps.LatLng(Coordenadas);
    var a = { zoom: 12, center: Coordenadas };
    map = new google.maps.Map(document.getElementById("map-canvas"), a);
    placeMarker(new google.maps.LatLng(Coordenadas));
    var b = new google.maps.InfoWindow({ content: '<div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading">Quintas Paraíso Campestre</h5><p></p></div></div>' });

    marker.addListener("click", function() {
        b.open(map, marker)
    })
}

function placeMarker(a) {
    marker = new google.maps.Marker({ position: a, map: map, title: "Quintas Paraíso Campestre" })
};