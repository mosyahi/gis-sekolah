<style>
    #map {
        height: 500px;
    }
</style>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
<script>
    var map = L.map('map'); // Hapus setView dari sini
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var geocoder = L.Control.Geocoder.nominatim();
    L.Control.geocoder({ geocoder: geocoder }).addTo(map);

// Menggunakan API geolokasi bawaan browser
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var yourLocation = L.latLng(position.coords.latitude, position.coords.longitude);
            L.marker(yourLocation)
            .addTo(map)
            .bindPopup('Lokasi Anda')
            .openPopup();

            // Tambahkan perintah setView di sini
            map.setView(yourLocation, 14);

            // Setelah melakukan setView, tambahkan marker sekolah dan rute di sini
            var sekolahData = <?= $sekolahJson ?>;

            sekolahData.forEach(function(sekolah) {
                var sekolahLocation = L.latLng(sekolah.latitude, sekolah.longitude);
                L.marker(sekolahLocation)
                .addTo(map)
                .bindPopup(sekolah.name);
            });

            var schoolA = L.latLng(-6.700, 108.500);
            var schoolB = L.latLng(-6.710, 108.523);

            L.Routing.control({
                waypoints: [schoolA, schoolB],
                routeWhileDragging: true
            }).addTo(map);
        });
    }
</script>
