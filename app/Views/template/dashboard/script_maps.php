<style>
    #map {
        height: 300px;
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
<script src="https://cdn.jsdelivr.net/npm/fuse.js@5.0.10-beta/dist/fuse.min.js"></script>
<script src="<?= base_url() ?>src/maps/Leaflet.AnimatedSearchBox.js"></script>

<script src="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>

<script>
    var map = L.map('map').setView([-6.2088, 106.8456], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var baseMaps = {
        "Jalan": L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }),
        "Satelit": L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: '&copy; <a href="https://www.google.com/maps">Google Maps</a>'
        })
    };

    var overlayMaps = {

    };

    L.control.layers(baseMaps, overlayMaps).addTo(map);

    var sekolahData = <?= $sekolahJson ?>;
    var yourLocation;
    var routeControl;
    var lastClickedMarker;
    var resultsContainer = document.getElementById('rute');
    var searchInput = document.getElementById('searchInput');

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {
            yourLocation = L.latLng(position.coords.latitude, position.coords.longitude);
            var yourMarker = L.marker(yourLocation)
            .addTo(map)
            .bindPopup('Lokasi Anda')
            .openPopup();

            map.setView(yourLocation, 12);

        // Create and associate markers with schools
            sekolahData.forEach(function (sekolah) {
                var sekolahLocation = L.latLng(sekolah.latitude, sekolah.longitude);
                sekolah.marker = L.marker(sekolahLocation)
                .addTo(map)
                .on('click', function () {
                    if (lastClickedMarker && lastClickedMarker !== sekolah.marker) {
                        map.removeControl(routeControl);
                        lastClickedMarker.closePopup();
                    }

                    if (lastClickedMarker !== sekolah.marker) {
                        lastClickedMarker = sekolah.marker;
                        showRoute(sekolahLocation);
                    } else {
                        lastClickedMarker = null;
                    }
                })
                .bindPopup('<b>Keterangan</b><br>Nama Sekolah: ' + sekolah.nama_sekolah +
                    '<br>Alamat: ' + sekolah.alamat +
                    '<br>Deskripsi: ' + sekolah.deskripsi +
                    '<br>Website: <a href="' + sekolah.website + '" target="_blank">' + sekolah.website + '</a>' +
                    '<br>Akreditas: ' + sekolah.akreditas +
                    '<br><br><b>Rute Jalan</b>');
            });
        });
    }

    function searchMarkers(query) {
        var lowercaseQuery = query.toLowerCase();
        var foundLocation = false;

        sekolahData.forEach(function (sekolah) {
            var sekolahName = sekolah.nama_sekolah.toLowerCase();
            var sekolahAddress = sekolah.alamat.toLowerCase();

            if (sekolahName.includes(lowercaseQuery) || sekolahAddress.includes(lowercaseQuery)) {
                sekolah.marker.addTo(map);
                if (!foundLocation) {
                    map.setView(sekolah.marker.getLatLng(), 12);
                    foundLocation = true;
                }
            } else {
                map.removeLayer(sekolah.marker);
            }
        });
    }

    // Search input
    searchInput.addEventListener('input', function (event) {
        var query = event.target.value;
        searchMarkers(query);
    });



    function showRoute(destination) {
        if (routeControl) {
            map.removeControl(routeControl);
        }

        var waypoints = [yourLocation, destination];
        routeControl = L.Routing.control({
            waypoints: waypoints,
            routeWhileDragging: true,
            show: false
        }).addTo(map);

        routeControl.on('routesfound', function (e) {
            var routes = e.routes;
            if (routes.length > 0) {
                var route = routes[0];
                var distance = route.summary.totalDistance;
                var time = route.summary.totalTime;
                var routeInfo = '<br>Jarak: ' + formatDistance(distance) +
                '<br>Waktu Tempuh: ' + formatTime(time);

                lastClickedMarker.bindPopup(lastClickedMarker.getPopup().getContent() + routeInfo).openPopup();

                var routeInstructions = route.instructions;
                var instructionsHtml = '<div class="route-instructions"><h3>Keterangan Rute:</h3><ol>';
                routeInstructions.forEach(function (instruction) {
                    instructionsHtml += '<li>' + instruction.text.replace('Continue', 'Lanjutkan')
                    .replace('Head', 'Menuju')
                    .replace('Turn', 'Belok')
                    .replace('left', 'Kiri')
                    .replace('right', 'Kanan')
                    .replace('onto', 'Ke')
                    .replace('You have arrived at your destination, on the right', 'Anda telah tiba di tujuan, silahkan belok kanan')
                    + '</li>';
                });
                instructionsHtml += '</ol></div>';

                resultsContainer.innerHTML = instructionsHtml;
            }
        });
    }

    function formatDistance(distance) {
        if (distance >= 1000) {
            return (distance / 1000).toFixed(2) + ' Km';
        } else {
            return distance.toFixed(2) + ' meter';
        }
    }

    function formatTime(time) {
        var hours = Math.floor(time / 3600);
        var minutes = Math.floor((time % 3600) / 60);
        var seconds = time % 60;

        var formattedTime = hours + ' jam ' + minutes + ' menit';

        if (seconds > 0) {
            formattedTime += ' ' + seconds.toFixed(0).padStart(2, '0') + ' detik';
        }

        return formattedTime;
    }
</script>