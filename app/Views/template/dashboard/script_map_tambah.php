<style>
    #map {
        height: 200px;
        border-radius: 10px;
    }
    .route-instructions {
        margin-top: 20px;
        padding: 10px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        color: black;
    }
    .results-container {
        margin-top: 20px;
        padding: 10px;
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        color: black;
    }
</style>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>
<script>
    var map = L.map('map').setView([-6.994106, 108.485021], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

 // Inisialisasi kontrol geocoder
    var geocoder = L.Control.geocoder({
        defaultMarkGeocode: false,
        placeholder: "Cari lokasi...",
    }).on("markgeocode", function (e) {
        var latlng = e.geocode.center;

        // Tambahkan marker pada lokasi yang dicari
        var searchMarker = L.marker(latlng).addTo(map);
        searchMarker.bindPopup(e.geocode.html).openPopup();

        // Geser peta ke lokasi yang dicari
        map.setView(latlng, 12);

    }).addTo(map);
    
    var marker;
    map.on('click', function(e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker(e.latlng).addTo(map);

        var latitude = e.latlng.lat.toFixed(7);
        var longitude = e.latlng.lng.toFixed(7);

        marker.bindPopup('Latitude: ' + latitude + '<br>Longitude: ' + longitude +
            '<br><br><a type="button" class="btn btn-info btn-xs" onclick="tambahData(' + latitude + ', ' +
            longitude +
            ')"><i class="fas fa-plus-circle"> &nbsp; Tambah Data</i></a>');


        document.querySelector("#latitude").value = latitude ;
        document.querySelector("#longitude").value = longitude;
    });

</script>
