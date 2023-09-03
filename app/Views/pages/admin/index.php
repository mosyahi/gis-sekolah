<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="title pb-20">
        <h2 class="h3 mb-0">Dashboard Admin</h2>
    </div>

    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark"><?= count($countAdmin) ?></div>
                        <div class="font-14 text-secondary weight-500">
                            Data Admin
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#00eccf">
                            <i class="icon-copy dw dw-user"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark"><?= count($countKategori) ?></div>
                        <div class="font-14 text-secondary weight-500">
                            Data Kategori
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#ff5b5b">
                            <span class="icon-copy bi bi-journals"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark"><?= count($countSekolah) ?></div>
                        <div class="font-14 text-secondary weight-500">
                            Data Sekolah
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#f6ff00">
                            <i class="icon-copy bi bi-easel2-fill" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark"><?= count($countKecamatan) ?></div>
                        <div class="font-14 text-secondary weight-500">
                            Data Kecamatan
                        </div>
                    </div>
                    <div class="widget-icon" data-color="#ff6600">
                        <div class="icon">
                            <i class="icon-copy bi bi-journal-text" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>