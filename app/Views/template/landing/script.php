<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>assets/js/main.js"></script>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
        // Fungsi untuk menginisialisasi peta
	function initMap() {
            var map = L.map('map').setView([-6.9806, 108.4858], 12); // Koordinat awal peta

            // Masukkan tautan ke tile layer (contoh: OpenStreetMap)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
        }

        // Panggil fungsi untuk menginisialisasi peta
        initMap();
    </script>