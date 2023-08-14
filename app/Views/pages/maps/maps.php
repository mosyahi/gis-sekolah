<?= $this->extend('template/landing/main'); ?>
<?= $this->section('content'); ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Gis Sekolah<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto active" href="#portfolio-details">Maps</a></li>
          <li><a class="nav-link scrollto" href="#footer">Informasi</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('/') ?>">Kembali</a></li>
</ul>
<i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Peta Sekolah Kabupaten Kuningan<span>.</span></h1>
          <h2>Silahkan klik tombol maps untuk melihat peta sekolah kabupaten kuningan</h2>
      </div>
  </div>

  <a href="#portfolio-details" class="get-started-btn scrollto mt-5"><i class="bi bi-geo-alt-fill"></i> Maps</a>
</section><!-- End Hero -->

  <main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>Maps</h2>
  <p>Peta Sekolah</p>
</div>

<div>
<div class="pd-ltr-20 customscroll-10-p height-100-p xs-pd-20-10">
<div class="min-height-200px">
    <div class="pd-20 card-box mb-30">
        
        <div class="container">
  <div class="clearfix mb-3" style="margin-left: 920px;">
            <div class="pull-right">
                <div class="input-group"  style="width: 350px;">
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari Sekolah...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="searchButton"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
            <div id="map"></div>
        </div>
        <div class="container">
            <code>
                <div id="rute"></div>
            </code>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
  
  <!-- Footer -->
<?= $this->include('template/landing/footer-maps'); ?>
	<!-- End Footer -->

  <?= $this->endSection(); ?>  