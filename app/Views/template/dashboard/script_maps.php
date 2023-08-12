<style>
    #map {
        height: 500px;
    }
</style>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fuse.js@5.0.10-beta/dist/fuse.min.js"></script>
<script src="<?= base_url() ?>src/maps/Leaflet.AnimatedSearchBox.js"></script>

<!-- <script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script> -->
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
<script>
    var map = L.map('map'); 
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // var geocoder = L.Control.Geocoder.nominatim();
    // L.Control.geocoder({ geocoder: geocoder }).addTo(map);

    var searchbox = L.control.searchbox({
        position: 'topright',
        expand: 'left'
    }).addTo(map);

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
                .bindPopup('<p><?= $sekolahJson ?></p>');
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

<!-- Script Search Box -->
<script>
    var map = L.map('map', {
        zoomControl: false
    }).setView([51.505, -0.09], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var searchbox = L.control.searchbox({
        position: 'topright',
        expand: 'left',
        width: '450px',
        autocompleteFeatures: ['setValueOnClick']
    }).addTo(map);

    var countries = <?= $sekolahJson ?>;

    var fuse = new Fuse(countries, {
        shouldSort: true,
        threshold: 0.6,
        location: 0,
        distance: 100,
        minMatchCharLength: 1
    });

    searchbox.onInput("keyup", function (e) {
        if (e.keyCode == 13) {
            search();
        } else {
            var value = searchbox.getValue();
            if (value != "") {
                var results = fuse.search(value);
                searchbox.setItems(results.map(res => res.item).slice(0, 5));
            } else {
                searchbox.clearItems();
            }
        }
    });


    searchbox.onButton("click", search);

    function search() {
        var value = searchbox.getValue();
        if (value != "") {
            var results = fuse.search(value);
            $('#results').text(JSON.stringify(results, null, 2));
            $('html, body').animate({
                    // scrollTop: $(".results-container").offset().top
            }, 1000);
        }

        setTimeout(function () {
            searchbox.hide();
            searchbox.clear();
        }, 600);
    }
</script>