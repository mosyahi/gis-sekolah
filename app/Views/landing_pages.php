<?= $this->extend('template/landing/main'); ?>
<?= $this->section('content'); ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">MAP SCHOOL<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="<?= base_url() ?>assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#peta">Peta Sekolah</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="<?= base_url('login') ?>" class="get-started-btn scrollto">Login</a>

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
                <h2>We are team of talented digital marketers</h2>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line"></i>
                    <h3><a href="">Sedare Perspiciatis</a></h3>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Hero -->

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="peta" class="peta">
        <div class="container" data-aos="fade-up">

            <div class="section-title text-center">
                <h2>Peta Sekolah</h2>
                <p>Peta Sekolah</p>
            </div>
            <div class="card">
                <div id="map" style="height: 500px;"></div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>    