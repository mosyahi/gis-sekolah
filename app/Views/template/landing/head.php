<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Map School</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?= base_url('vendors/images/school.png')?>" rel="icon">
<link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- MAPS CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- MAPS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link rel="stylesheet" href="<?= base_url() ?>src/maps/Leaflet.AnimatedSearchBox.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@1.14.0/dist/Control.Geocoder.css" /> -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.css"/>

<!-- Vendor CSS Files -->
<link href="<?= base_url() ?>assets/vendors/aos/aos.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendors/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendors/remixicon/remixicon.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

<!-- Import Css Dashboard -->
<!-- Open Gambar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

<!-- MAPS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link rel="stylesheet" href="<?= base_url() ?>src/maps/Leaflet.AnimatedSearchBox.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@1.14.0/dist/Control.Geocoder.css" /> -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder@1.13.0/dist/Control.Geocoder.css"/>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= base_url('vendors/styles/core.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('vendors/styles/icon-font.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('src/plugins/datatables/css/dataTables.bootstrap4.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('src/plugins/datatables/css/responsive.bootstrap4.min.css') ?>" />
<link rel="stylesheet" type="text/css" href="<?= base_url('vendors/styles/style.css') ?>" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag("js", new Date());

	gtag("config", "G-GBZ3SGGX85");
</script>
<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			"gtm.start": new Date().getTime(),
			event: "gtm.js"
		});
		var f = d.getElementsByTagName(s)[0],
		j = d.createElement(s),
		dl = l != "dataLayer" ? "&l=" + l : "";
		j.async = true;
		j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
</script>
<!-- End Google Tag Manager -->