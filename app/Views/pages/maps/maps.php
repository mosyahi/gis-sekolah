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
<section id="hero" style='background-image: url("img/school.jpg");' class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Peta Sekolah Kab Kuningan<span>.</span></h1>
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
          <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Peta Sekolah</h4>
                            <p class="font-14 ml-0">
                                Silahkan klik titik sekolah atau search sekolah yang ingin dituju
                            </p>
                        </div>
                        <form id="addressForm">
                            <div class="pull-right">
                                <div class="input-group">
                                    <input type="text" id="inputAddress" class="form-control" name="address" placeholder="Alamat Anda" style="width: 180px; height: 40px;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm" type="submit" id="mm" style="height: 40px; margin-right: 20px;"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="pull-right">
                            <div class="input-group">
                                <input type="text" id="searchInput" class="form-control" placeholder="Cari Sekolah..." style="width: 180px; height: 40px;">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="button" id="searchButton" style="height: 40px; margin-right: 20px;"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="map"></div>
                    <div id="rute"></div>
                </div>
            </div>

            <div class="pd-20 card-box mb-30" id="detail">
                <div class="clearfix mb-10">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Informasi Sekolah</h4>
                        <p class="font-14 ml-0">
                            Untuk informasi lebih lanjut silahkan kunjungi link website sekolah yang sudah tertera.
                        </p>
                    </div>
                </div>
                <div class="pb-20">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Nama Sekolah</th>
                                <td><span id="detailNamaSekolah"></span></td>
                            </tr>
                            <tr>
                                <th>Akreditas</th>
                                <td><span id="detailAkreditas"></span></td>
                            </tr>
                            <tr>
                                <th>Alamat Sekolah</th>
                                <td><span id="detailAlamat"></span></td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td><span id="detailDeskripsi"></span></td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td><a type="button" class="text-primary" target="blank" id="detailWebsite"></a></td>
                            </tr>
                            <tr>
                                <th>Dokumentasi</th>
                                <td>
                                    <a id="detailGambarLink" data-lightbox="school-image">
                                        <i class="bi bi-eye eye-icon"></i> Lihat Gambar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>Jumlah PSB</th>
                                <td><span id="detailJumlahPSB"></span></td>
                            </tr>
                            <tr>
                                <th>PSB Jalur Zonasi</th>
                                <td><span id="persentaseZonasi"></span></td>
                            </tr>
                            <tr>
                                <th>Persentase Diterima</th>
                                <td><span id="persentase"></span></td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td><span id="keterangan"></span></td>
                            </tr>
                            <tr>
                                <th>Jarak Tempuh</th>
                                <td><span id="detailJarak"></span></td>
                            </tr>
                            <tr>
                                <th>Estimasi Waktu</th>
                                <td><span id="detailWaktu"></span></td>
                            </tr>
                            <tr>
                                <th>Hapus Rute</th>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" id="cancelRouteButton"><i class="bi bi-trash"></i> Hapus Rute</button>
                                    <!-- <button class="btn btn-sm btn-primary" id="cetakButton"><i class="bi bi-printer"></i> Cetak</button> -->
                                </td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?= $this->include('template/landing/footer-maps'); ?>
<!-- End Footer -->

<?= $this->endSection(); ?>  