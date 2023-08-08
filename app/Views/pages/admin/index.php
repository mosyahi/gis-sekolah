<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="xs-pd-20-10 pd-ltr-20">
    <div class="title pb-20">
        <h2 class="h3 mb-0">Hospital Overview</h2>
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
                        <div class="icon">
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
                        <div class="weight-700 font-24 text-dark">12</div>
                        <div class="font-14 text-secondary weight-500">Data Kecamatan</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#09cc06">
                            <i class="icon-copy bi bi-geo-alt-fill" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 mb-20">
    <div class="card-box height-100-p pd-20 min-height-200px">
        <div class="d-flex justify-content-between">
            <div class="h5 mb-0">Diseases Report</div>
            <div class="dropdown">
                <a
                class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                data-color="#1b3133"
                href="#"
                role="button"
                data-toggle="dropdown"
                >
                <i class="dw dw-more"></i>
            </a>
            <div
            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
            >
            <a class="dropdown-item" href="#"
            ><i class="dw dw-eye"></i> View</a
            >
            <a class="dropdown-item" href="#"
            ><i class="dw dw-edit2"></i> Edit</a
            >
            <a class="dropdown-item" href="#"
            ><i class="dw dw-delete-3"></i> Delete</a
            >
        </div>
    </div>
</div>

<div id="ekhem"></div>
</div>
</div>

<?php
$kategoriModel = new \App\Models\KategoriModel();
$dataFromDatabase = $kategoriModel->findAll();

$seriesData = [];
foreach ($dataFromDatabase as $row) {
    $seriesData[] = $row['tingkatan'];
}
?>
<script>
    var options4 = {
        series: <?php echo json_encode($seriesData); ?>,
        chart: {
            height: 350,
            type: 'radialBar',
        },
        colors: ['#003049', '#d62828', '#f77f00', '#fcbf49', '#e76f51'],
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: '22px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        label: 'Total',
                        formatter: function (w) {
                            return 260
                        }
                    }
                }
            }
        },
        labels: <?php echo json_encode($seriesData); ?>,
    };

    document.addEventListener("DOMContentLoaded", function() {
        var chart4 = new ApexCharts(document.querySelector("#ekhem"), options4);
        chart4.render();
    });
</script>
?>

<?= $this->endSection(); ?>