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
        <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
        <li><a class="nav-link scrollto" href="#features">Informasi</a></li>
        <li><a class="nav-link scrollto" href="#footer">Kontak</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url('maps') ?>">Maps</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <a href="<?= base_url('login') ?>" class="get-started-btn scrollto">Login</a>

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" style='background-image: url("img/school.jpg");' class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-6 col-lg-8">
        <h1>Sistem Informasi GIS SEKOLAH<span>.</span></h1>
        <h2>Aplikasi pencarian lokasi sekolah menengah daerah kabupaten kuningan</h2>
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="bi bi-amd"></i>
          <h3><a href="#about">Tentang</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line"></i>
          <h3><a href="#features">Informasi</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="bi bi-geo-fill"></i>
          <h3><a href="<?= base_url('maps') ?>">Maps</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="bi bi-box-arrow-in-up-right"></i>
          <h3><a href="https://kuningan.demo.siap-ppdb.com/">PPDB SMP Sederajat</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4">
        <div class="icon-box">
          <i class="bi bi-arrow-up-right-square"></i>
          <h3><a href="https://ppdb.jabarprov.go.id/">PPDB SMA Sederajat</a></h3>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="img/maps2.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          <h3>Ini adalah JUDUL tentang aplikasi</h3>
          <p class="fst-italic">
            Kata pembuka tentang aplikasi
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Point 1</li>
            <li><i class="ri-check-double-line"></i> Point 2</li>
            <li><i class="ri-check-double-line"></i> Point 3</li>
          </ul>
          <p>
            Kesimpulan tentang aplikasi
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="image col-lg-6" style='background-image: url("img/maps1.png");' data-aos="fade-right"></div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
          <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-receipt"></i>
            <h4>Fitut Gis Sekolah 1</h4>
            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-cube-alt"></i>
            <h4>Fitur Gis Sekolah 2</h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-images"></i>
            <h4>Fitur Gis Sekolah 3</h4>
            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
          </div>
          <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            <i class="bx bx-shield"></i>
            <h4>Fitur Gis Sekolah 4</h4>
            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->
</main><!-- End #main -->

<!-- Footer -->
<?= $this->include('template/landing/footer'); ?>
<!-- End Footer -->

</main><!-- End #main -->
<?= $this->endSection(); ?>    