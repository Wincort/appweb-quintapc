const Latitud = 21.2836660;
const Longitud = -89.3242490;
var map, myLatlng, Coordenadas = { lat: Latitud, lng: Longitud },
    marker;

function muestraMapa() {
    myLatlng = new google.maps.LatLng(Coordenadas);
    var a = { zoom: 12, center: Coordenadas };
    map = new google.maps.Map(document.getElementById("map-canvas"), a);
    placeMarker(new google.maps.LatLng(Coordenadas));
    var b = new google.maps.InfoWindow({ content: '<div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading">Quintas Paraíso Campestre</h5><p>Dzemul, Yucatán<br>México<br><a onclick="AbirMapaNativamente();" class=""><span style="cursor: pointer;">Ver en Google Maps</span></a></p></div></div>' });

    marker.addListener("click", function() {
        b.open(map, marker)
    })

    map.addListener("click", function() {
        AbirMapaNativamente();
    })
}

function placeMarker(a) {
    marker = new google.maps.Marker({
        position: a,
        map: map,
        title: "Quintas Paraíso Campestre"
    })

};

function AbirMapaNativamente() {
    const dispositivo = navigator.userAgent;
    const ubicacion = `${Latitud},${Longitud}`;
    var url = `https://www.google.com/maps/search/?api=1&query=${ubicacion}`;
    if (dispositivo.match(/Iphone/i) || dispositivo.match(/iPhone|iPad|iPod/i)) {
        url = `https://maps.apple.com/maps?saddr=Current%20Location&daddr=${ubicacion}`;
    } else if (dispositivo.match(/Android/i)) {
        url = `geo:0,0?q=${ubicacion}`;
    } else if (dispositivo.match(/Windows Phone/i)) {
        url = `maps:${ubicacion}`;
    }
    window.open(url);
}