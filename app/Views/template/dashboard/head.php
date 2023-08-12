<!-- Basic Page Info -->
<meta charset="utf-8" />
<title><?= env('app.name') ?> <?= $title ?></title>

<!-- Site favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('vendors/images/apple-touch-icon.png') ?>" />
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('vendors/images/favicon-32x32.png') ?>" />
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('vendors/images/favicon-16x16.png') ?>" />

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- MAPS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<link rel="stylesheet" href="<?= base_url() ?>src/maps/Leaflet.AnimatedSearchBox.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
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