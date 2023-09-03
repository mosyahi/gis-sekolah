<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendors/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url() ?>assets/vendors/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/php-email-form/validate.js"></script>

<!-- Import Script Dashboard -->
<!-- js -->
<script src="<?= base_url('vendors/scripts/core.js') ?>"></script>
<script src="<?= base_url('vendors/scripts/script.min.js') ?>"></script>
<script src="<?= base_url('vendors/scripts/process.js') ?>"></script>
<script src="<?= base_url('vendors/scripts/layout-settings.js') ?>"></script>
<script src="<?= base_url('src/plugins/apexcharts/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('vendors/scripts/dashboard3.js') ?>"></script>

<!-- Open Gambar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<!-- buttons for Export datatable -->
<script src="<?= base_url('src/plugins/datatables/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/buttons.flash.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('src/plugins/datatables/js/vfs_fonts.js') ?>"></script>

<!-- Datatable Setting js -->
<script src="<?= base_url('vendors/scripts/datatable-setting.js') ?>"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/js/main.js"></script>

<style>
	#map {
		height: 500px;
		z-index: 1;
	}

	#header {
		z-index: 999;
	}

	#rute {
		display: none;
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

	.eye-icon {
		font-size: 15px;
		color: #007bff;
		text-decoration: none;
		transition: transform 0.2s;
		margin-left: 5px;
		margin-top: 8px;
	}

	.eye-icon:hover {
		transform: scale(1.2);
	}

	.popup-content {
		max-width: 300px;
	}

	.popup-content h4 {
		margin: 0;
		padding: 0;
		font-size: 18px;
		color: #333;
	}

	.popup-content p {
		margin: 0;
		padding: 5px 0;
		font-size: 14px;
		color: #777;
	}

	/* CSS Kustom untuk Popup */
	.popup-custom {
		width: 370px;
		height: 200px;
	}

	.select2-results__option {
		font-size: 12px; 
	}

	.select2-container {
		width: 200px; 
	}

	.form-control {
		width: 150pxpx;
	}

	.route-info {
		font-size: 14px;
		color: #555;
		margin-top: 10px;
	}

	.distance,
	.time {
		font-weight: bold;
		margin-left: 5px;
		color: #eb6652;
	}

	.bi {
		font-size: 16px;
		vertical-align: middle;
		margin-right: 3px;
	}
	#detail {
		display: none;
	}
</style>

<!-- Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

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
		}),
		"Maps 2": L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
			maxZoom: 17,
			attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
		})
	};

	var newLocation = null; 
	var destinationLocation = null; 

	map.on('dblclick', function(event) {
		if (newLocation === null) {
			newLocation = event.latlng;
			var newMarker = L.marker(newLocation)
			.addTo(map)
			.bindPopup('<b>Titik Baru Anda</b><br><a href="#" id="removeMarkerButton">Hapus</a><br><select id="schoolSelect"></select><br><button id="createRouteButton">Buat Rute</button>')
			.openPopup();

			var removeMarkerButton = document.getElementById('removeMarkerButton');
			removeMarkerButton.addEventListener('click', function() {
				map.removeLayer(newMarker);
				newLocation = null;
				destinationLocation = null;
			});

			var schoolSelect = document.getElementById('schoolSelect');
			sekolahData.forEach(function(sekolah) {
				var option = document.createElement('option');
				option.value = sekolah.nama_sekolah;
				option.text = sekolah.nama_sekolah;
				schoolSelect.appendChild(option);
			});

			var createRouteButton = document.getElementById('createRouteButton');
			createRouteButton.addEventListener('click', function() {
				var selectedSchoolName = schoolSelect.value;
				var selectedSchool = sekolahData.find(function(sekolah) {
					return sekolah.nama_sekolah === selectedSchoolName;
				});

				if (selectedSchool) {
					destinationLocation = L.latLng(selectedSchool.latitude, selectedSchool.longitude);
					showRoute(newLocation, destinationLocation);
				}
			});
		} else if (destinationLocation === null) {
			destinationLocation = findNearestSchoolMarker(event.latlng);

			if (destinationLocation) {
				showRoute(newLocation, destinationLocation);
			}

			newLocation = null;
		}
	});

	function findSchoolByName(schoolName) {
		var lowercaseQuery = schoolName.toLowerCase();

		for (var i = 0; i < sekolahData.length; i++) {
			var sekolah = sekolahData[i];
			if (sekolah.nama_sekolah.toLowerCase().includes(lowercaseQuery)) {
				return sekolah;
			}
		}

		return null;
	}

	function findNearestSchoolMarker(targetLatLng) {
		var nearestDistance = Infinity;
		var nearestLatLng = null;

		sekolahData.forEach(function(sekolah) {
			var schoolLatLng = L.latLng(sekolah.latitude, sekolah.longitude);
			var distance = targetLatLng.distanceTo(schoolLatLng);

			if (distance < nearestDistance) {
				nearestDistance = distance;
				nearestLatLng = schoolLatLng;
			}
		});

		return nearestLatLng;
	}

	var overlayMaps = {

	};

	L.control.layers(baseMaps, overlayMaps).addTo(map);

	var sekolahData = <?= $sekolahJson ?>;
	var yourLocation;
	var routeControl;
	var lastClickedMarker;
	var resultsContainer = document.getElementById('rute');
	var searchInput = document.getElementById('searchInput');
	var isPopupOpen = false;

	if ("geolocation" in navigator) {

		var options = {
			enableHighAccuracy: true,
			timeout: 10000,
			maximumAge: 0
		};

		navigator.geolocation.getCurrentPosition(function(position) {
			yourLocation = L.latLng(position.coords.latitude, position.coords.longitude);
			var yourMarker = L.marker(yourLocation)
			.addTo(map)
			.bindPopup('Lokasi Saya')
			.openPopup();

			map.setView(yourLocation, 12);

			sekolahData.forEach(function(sekolah) {
				var sekolahLocation = L.latLng(sekolah.latitude, sekolah.longitude);
				var distance = yourLocation.distanceTo(sekolahLocation); 

                // Menetapkan persentase berdasarkan jarak
				var persentase = 0;
				if (distance >= 0 && distance < 500) {
					persentase = 100;
				} else if (distance >= 500 && distance < 1000) {
					persentase = 80;
				} else if (distance >= 1000 && distance < 2000) {
					persentase = 60;
				} else if (distance >= 2000 && distance < 3000) {
					persentase = 40;
				} else if (distance >= 3000 && distance < 4000) {
					persentase = 20;
				} else if (distance >= 4000 && distance <= 10000) {
					persentase = 5;
				}
				sekolah.marker = L.marker(sekolahLocation)
				.addTo(map)
				.on('click', function() {
					if (lastClickedMarker && lastClickedMarker !== sekolah.marker) {
						map.removeControl(routeControl);
						lastClickedMarker.closePopup();
					}

					if (lastClickedMarker !== sekolah.marker) {
						lastClickedMarker = sekolah.marker;
						showRoute(sekolahLocation);

						var jmlPsbZonasi = sekolah.jml_psb_zonasi;
						var jmlPsb = sekolah.jml_psb;

                        // Menghitung persentase zonasi berdasarkan jml_psb_zonasi dan jml_psb
						var persentaseZonasi = (jmlPsbZonasi / jmlPsb) * 100;

                        // Memastikan persentase tidak melebihi 100%
						if (persentaseZonasi > 100) {
							persentaseZonasi = 100;
						}

						console.log("Persentase Zonasi:", persentaseZonasi);

                        // Menetapkan persentase zonasi ke elemen HTML "persentaseZonasi"
						document.getElementById('persentaseZonasi').innerHTML = "<strong>" + persentaseZonasi.toFixed(2) + "%</strong> (Menerima <strong>" + sekolah.jml_psb_zonasi + " Siswa </strong> Jalur Zonasi)";

                        // Menetapkan persentase zonasi ke elemen HTML "persentaseZonasi"
						document.getElementById('keterangan').innerHTML = "Sekolah yang anda pilih membuka penerimaan siswa baru sejumlah <strong>" + sekolah.jml_psb + " siswa</strong>, dari jumlah tersebut <strong>" + sekolah.nama_sekolah + "</strong> hanya menerima siswa jalur zonasi sejumlah <strong>" + sekolah.jml_psb_zonasi + "</strong> siswa. Maka berdasarkan jumlah tersebut persentase sekolah menerima siswa jalur zonasi sebesar <strong>" + persentaseZonasi.toFixed(2) + "%.</strong>";

						document.getElementById('detailNamaSekolah').textContent = sekolah.nama_sekolah;
						document.getElementById('detailAlamat').textContent = sekolah.alamat;
						document.getElementById('detailDeskripsi').textContent = sekolah.deskripsi;
						document.getElementById('detailWebsite').textContent = sekolah.website;
						document.getElementById('detailWebsite').href = sekolah.website;
						document.getElementById('detailAkreditas').textContent = sekolah.akreditas;
						document.getElementById('detailGambarLink').href = 'uploads/' + sekolah.gambar;
						document.getElementById('detailJumlahPSB').textContent = sekolah.jml_psb + " Siswa";
						document.getElementById('persentase').textContent = persentase + "%";
						var detailTable = document.getElementById('detail');
						detailTable.style.display = 'block';
					} else {
						lastClickedMarker = null;
					}
				})
				.bindPopup('<b>Keterangan</b><div><b>Nama Sekolah: </b>' + sekolah.nama_sekolah +
					'<br>Website: <a href="' + sekolah.website + '" target="_blank">' + sekolah.website + '</a>' +
					'<br>Akreditas: ' + sekolah.akreditas +
					'<br>Gambar: <a href="uploads/' + sekolah.gambar + '" data-lightbox="school-image"><i class="bi bi-eye"></i>Lihat</a>' + '</div>',
					{ className: 'popup-custom' }
					);
			});
			sekolahData.forEach(function(sekolah) {
				var createRouteButton = sekolah.marker._popup.getContent().querySelector('#createRouteButton');
				createRouteButton.addEventListener('click', function() {
					showRoute(yourLocation, sekolah.marker.getLatLng());
				});
			});
		});
}

var cancelRouteButton = document.getElementById('cancelRouteButton');

cancelRouteButton.addEventListener('click', function() {
	if (routeControl) {
		map.removeControl(routeControl);
	}

	var detailTable = document.getElementById('detail');
	detailTable.style.display = 'none';

	lastClickedMarker = null;

	resultsContainer.innerHTML = '';
});

var newMarker = null; 
var addressForm = document.getElementById('addressForm');

addressForm.addEventListener('submit', function(event) {
	event.preventDefault(); 

	var inputAddress = document.getElementById('inputAddress').value;

	var geocodingUrl = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(inputAddress);

	fetch(geocodingUrl)
	.then(function(response) {
		return response.json();
	})
	.then(function(data) {
		if (data.length > 0) {
			var latitude = parseFloat(data[0].lat);
			var longitude = parseFloat(data[0].lon);

			if (newMarker) {
				map.removeLayer(newMarker);
			}

			newMarker = L.marker([latitude, longitude]).addTo(map);

			var popupContent = '<b>Lokasi Baru : </b> ' + inputAddress +
			'<br><br><select class="form-control select2" id="schoolSelect"></select>' +
			'<br><br><button type="button" class="btn btn-primary btn-sm" id="createRouteButton">Buat Rute</button>' +
			'<button type="button" class="btn btn-danger mx-2 btn-sm" id="hapusTitik">Hapus Titik</button>';

			newMarker.bindPopup(popupContent, { className: 'popup-custom', closeButton: false }).openPopup();

			$('#schoolSelect').select2();

			var schoolSelect = document.getElementById('schoolSelect');
			sekolahData.forEach(function(sekolah) {
				var option = document.createElement('option');
				option.value = sekolah.nama_sekolah;
				option.textContent = sekolah.nama_sekolah;
				schoolSelect.appendChild(option);
			});

			map.setView([latitude, longitude], 12);

			var hapusTitik = document.getElementById('hapusTitik');
			hapusTitik.addEventListener('click', function() {
				if (newMarker) {
					map.removeLayer(newMarker); 
					if (yourLocation) {
						map.removeControl(routeControl);
					}
				}
			});

			var createRouteButton = document.getElementById('createRouteButton');

			createRouteButton.addEventListener('click', function () {
				console.log("Tombol Buat Rute diklik");
				var selectedSchoolName = schoolSelect.value;
				console.log("Nama Sekolah yang Dipilih: " + selectedSchoolName);

				if (yourLocation) {
					map.removeControl(routeControl);
				}

				if (newMarker) {
					var newLocation = newMarker.getLatLng();
					console.log("Lokasi Baru: " + newLocation);

					var selectedSchool = sekolahData.find(function (sekolah) {
						return sekolah.nama_sekolah === selectedSchoolName;
					});

        // Hapus konten popup sebelum menambahkan konten baru
					newMarker.getPopup().setContent('');

					var jmlPsbZonasi = selectedSchool.jml_psb_zonasi;
					var jmlPsb = selectedSchool.jml_psb;

                        // Menghitung persentase zonasi berdasarkan jml_psb_zonasi dan jml_psb
					var persentaseZonasi = (jmlPsbZonasi / jmlPsb) * 100;

                        // Memastikan persentase tidak melebihi 100%
					if (persentaseZonasi > 100) {
						persentaseZonasi = 100;
					}

					console.log("Persentase Zonasi:", persentaseZonasi);

                        // Menetapkan persentase zonasi ke elemen HTML "persentaseZonasi"
					document.getElementById('persentaseZonasi').innerHTML = "<strong>" + persentaseZonasi.toFixed(2) + "%</strong> (Menerima <strong>" + selectedSchool.jml_psb_zonasi + " Siswa </strong> Jalur Zonasi)";

                        // Menetapkan persentase zonasi ke elemen HTML "persentaseZonasi"
					document.getElementById('keterangan').innerHTML = "Sekolah yang anda pilih membuka penerimaan siswa baru sejumlah <strong>" + selectedSchool.jml_psb + " siswa</strong>, dari jumlah tersebut <strong>" + selectedSchool.nama_sekolah + "</strong> hanya menerima siswa jalur zonasi sejumlah <strong>" + selectedSchool.jml_psb_zonasi + "</strong> siswa. Maka berdasarkan jumlah tersebut persentase sekolah menerima siswa jalur zonasi sebesar <strong>" + persentaseZonasi.toFixed(2) + "%.</strong>";

                        // Mengisi konten popup dengan informasi sekolah
					newMarker._popup.setContent(
						'<div><b>Nama Sekolah:</b> ' + selectedSchool.nama_sekolah +
						'<br><b>Website:</b> <a href="' + selectedSchool.website + '" target="_blank">' + selectedSchool.website + '</a>' +
						'<br>Gambar: <a href="uploads/' + selectedSchool.gambar + '" data-lightbox="school-image"><i class="bi bi-eye"></i>Lihat</a>' +
						'<br><b>Akreditas:</b> ' + selectedSchool.akreditas + '</div>'
						);

					document.getElementById('detailNamaSekolah').textContent = selectedSchool.nama_sekolah;
					document.getElementById('detailAlamat').textContent = selectedSchool.alamat;
					document.getElementById('detailDeskripsi').textContent = selectedSchool.deskripsi;
					document.getElementById('detailWebsite').textContent = selectedSchool.website;
					document.getElementById('detailWebsite').href = selectedSchool.website;
					document.getElementById('detailAkreditas').textContent = selectedSchool.akreditas;
					document.getElementById('detailJumlahPSB').textContent = selectedSchool.jml_psb + " Siswa";
					document.getElementById('detailGambarLink').href = 'uploads/' + selectedSchool.gambar;

					buatRuteDariLokasiBaruKeSekolah(selectedSchoolName, newLocation);
				}
			});

			function buatRuteDariLokasiBaruKeSekolah(selectedSchoolName, newLocation) {
				console.log("Memuat rute dari lokasi baru ke sekolah yang dipilih");
				var selectedSchool = sekolahData.find(function (sekolah) {
					return sekolah.nama_sekolah === selectedSchoolName;
				});

				if (selectedSchool) {
					var startingLocation = L.latLng(selectedSchool.latitude, selectedSchool.longitude);

					var distance = newLocation.distanceTo(startingLocation);

					var persentase = 0;
					if (distance >= 0 && distance < 500) {
						persentase = 100;
					} else if (distance >= 501 && distance < 1000) {
						persentase = 80;
					} else if (distance >= 1001 && distance < 2000) {
						persentase = 60;
					} else if (distance >= 2001 && distance < 3000) {
						persentase = 40;
					} else if (distance >= 3001 && distance < 4000) {
						persentase = 20;
					} else if (distance >= 4001 && distance <= 10000) {
						persentase = 0 - 5;
					}

					document.getElementById('persentase').innerHTML = "<strong>" + persentase + "%</strong> (Berdasarkan Jarak Lokasi Anda Ke <strong>" + selectedSchool.nama_sekolah + ").</strong>";

					tampilRuteTitikBaru(startingLocation, newLocation);
				} else {
					console.log("Sekolah dengan nama yang dipilih tidak ditemukan.");
				}
			}
		} else {
			console.log('Tidak dapat menemukan koordinat untuk alamat tersebut.');
		}
	})
.catch(function(error) {
	console.error('Terjadi kesalahan saat mengambil data geocoding:', error);
});
});

function searchMarkers(query) {
	var lowercaseQuery = query.toLowerCase();
	var foundLocation = false;

	sekolahData.forEach(function(sekolah) {
		var sekolahName = sekolah.nama_sekolah.toLowerCase();
		var sekolahAddress = sekolah.alamat.toLowerCase();
		var sekolahKecamatan = sekolah.id_kecamatan.toLowerCase();

		if (sekolahName.includes(lowercaseQuery) || sekolahAddress.includes(lowercaseQuery) || sekolahKecamatan.includes(lowercaseQuery)) {
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
searchInput.addEventListener('input', function(event) {
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

	routeControl.on('routesfound', function(e) {
		var routes = e.routes;
		if (routes.length > 0) {
			var route = routes[0];
			var distance = route.summary.totalDistance;
			var time = route.summary.totalTime;

                // Update jarak dan waktu dengan nilai yang dihitung
			document.getElementById('detailJarak').textContent = formatDistance(distance);
			document.getElementById('detailWaktu').textContent = formatTime(time);

			var routeInfo = '<div class="route-info">' +
			'<strong>Rute Jalan:</strong><br>' +
			'<strong>Jarak:</strong> <span class="distance"> ' + formatDistance(distance) + '</span>' +
			'<br><strong>Waktu Tempuh:</strong> <span class="time"> ' + formatTime(time) + '</span>' +
			'</div>';

			lastClickedMarker.bindPopup(lastClickedMarker.getPopup().getContent() + routeInfo).openPopup();

			var routeInstructions = route.instructions;
			var instructionsHtml = '<div class="route-instructions"><h3>Keterangan Rute:</h3><ol>';
			routeInstructions.forEach(function(instruction) {
				instructionsHtml += '<li>' + instruction.text.replace('Continue', 'Lanjutkan')
				.replace('Head', 'Menuju')
				.replace('Turn', 'Belok')
				.replace('left', 'Kiri')
				.replace('right', 'Kanan')
				.replace('onto', 'Ke')
				.replace('You have arrived at your destination, on the right', 'Anda telah tiba di tujuan, silahkan belok kanan') +
				'</li>';
			});
			instructionsHtml += '</ol></div>';

			resultsContainer.innerHTML = instructionsHtml;
		}
	});
}

function tampilRuteTitikBaru(startLocation, destination) {
	if (routeControl) {
		map.removeControl(routeControl);
	}

	var waypoints = [startLocation, destination];
	routeControl = L.Routing.control({
		waypoints: waypoints,
		routeWhileDragging: true,
		show: false
	}).addTo(map);

	routeControl.on('routesfound', function(e) {
		var routes = e.routes;
		if (routes.length > 0) {
			var route = routes[0];
			var distance = route.summary.totalDistance;
			var time = route.summary.totalTime;

            // Update jarak dan waktu dengan nilai yang dihitung
			document.getElementById('detailJarak').textContent = formatDistance(distance);
			document.getElementById('detailWaktu').textContent = formatTime(time);

			var routeInfo = '<div class="route-info">' +
			'<strong>Rute Jalan:</strong><br>' +
			'<strong>Jarak:</strong> <span class="distance"> ' + formatDistance(distance) + '</span>' +
			'<br><strong>Waktu Tempuh:</strong> <span class="time"> ' + formatTime(time) + '</span>' +
			'</div>';

			newMarker.bindPopup(newMarker.getPopup().getContent() + routeInfo).openPopup();

			var routeInstructions = route.instructions;
			var instructionsHtml = '<div class="route-instructions"><h3>Keterangan Rute:</h3><ol>';
			routeInstructions.forEach(function(instruction) {
				instructionsHtml += '<li>' + instruction.text.replace('Continue', 'Lanjutkan')
				.replace('Head', 'Menuju')
				.replace('Turn', 'Belok')
				.replace('left', 'Kiri')
				.replace('right', 'Kanan')
				.replace('onto', 'Ke')
				.replace('You have arrived at your destination, on the right', 'Anda telah tiba di tujuan, silahkan belok kanan') +
				'</li>';
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