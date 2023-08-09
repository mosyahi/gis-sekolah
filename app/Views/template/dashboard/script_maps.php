<style>
    #map {
        height: 500px;
    }
</style>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
<script>
    var map = L.map('map').setView([-6.7102963, 108.5342717], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var geocoder = L.Control.Geocoder.nominatim();
    L.Control.geocoder({ geocoder: geocoder }).addTo(map);

    function changeMapLayer(layerURL) {
        map.eachLayer(function(layer) {
            if (layer instanceof L.TileLayer) {
                map.removeLayer(layer);
            }
        });
        var newLayer = L.tileLayer(layerURL, {
            attribution: 'Your new attribution here'
        }).addTo(map);
    }

    // Menggunakan API geolokasi bawaan browser
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var yourLocation = L.latLng(position.coords.latitude, position.coords.longitude);
            L.marker(yourLocation)
            .addTo(map)
            .bindPopup('Lokasi Anda')
            .openPopup();

            // Wajib nyalain maps laptop + perizinan location browser bree
            map.setView(yourLocation, 14);
        });
    }

    var schools = [
        { name: 'Sekolah A', latlng: [-6.700, 108.500] },
        { name: 'Sekolah B', latlng: [-6.710, 108.520] },
        ];

    schools.forEach(function(school) {
        L.marker(school.latlng)
        .addTo(map)
        .bindPopup(school.name);
    });

    var schoolA = L.latLng(-6.700, 108.500);
    var schoolB = L.latLng(-6.710, 108.520);

    L.Routing.control({
        waypoints: [schoolA, schoolB],
        routeWhileDragging: true
    }).addTo(map);
</script>
