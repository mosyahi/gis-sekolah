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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const provinsiSelect = $('#provinsi');
    const kabupatenSelect = $('#kabupaten');

    // Mengisi form select provinsi
    $.getJSON('/json/provinsi.json', function(data) {
        $.each(data, function(index, provinsi) {
            provinsiSelect.append($('<option>').val(provinsi.id).text(provinsi.nama));
        });
    });

    // Mengisi form select kabupaten berdasarkan provinsi terpilih
    provinsiSelect.on('change', function() {
        const selectedProvinsi = $(this).val();
        kabupatenSelect.empty().append($('<option>').val('').text('Pilih Kabupaten/Kota'));

        if (selectedProvinsi) {
            $.getJSON('/json/kabupaten.json', function(data) {
                $.each(data, function(index, kabupaten) {
                    if (kabupaten.id_provinsi === selectedProvinsi) {
                        kabupatenSelect.append($('<option>').val(kabupaten.id).text(kabupaten.nama));
                    }
                });
            });
        }
    });
</script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Initialize the map
    var map = L.map('map').setView([YOUR_LATITUDE, YOUR_LONGITUDE], YOUR_ZOOM_LEVEL);

    // Add the tile layer (you can choose the tile provider, e.g., OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
</script>