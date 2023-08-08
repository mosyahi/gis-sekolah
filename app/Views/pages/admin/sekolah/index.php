<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>
<?= $this->include('components/sweetAlerts'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Data Sekolah</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data Sekolah
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">Data Sekolah</h4>
            </div>
            <div class="pull-right">
                <a href="<?= base_url('admin/sekolah/tambah') ?>" class="btn btn-primary btn-sm scroll-click" rel="content-y" role="button"><i class="fa fa-plus"></i>&nbsp Tambah Sekolah</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table hover multiple-select-row data-table-export nowrap">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Website</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Akreditasi</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longtitude</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($sekolah as $item) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="table-plus"><?= $item['id_kategori'] ?></td>
                            <td><?= $item['nama_sekolah'] ?></td>
                            <td><?= $item['deskripsi'] ?></td>
                            <td><?= $item['gambar'] ?></td>
                            <td><?= $item['website'] ?></td>
                            <td><?= $item['alamat'] ?></td>
                            <td><?= $item['akreditas'] ?></td>
                            <td><?= $item['latitude'] ?></td>
                            <td><?= $item['longitude'] ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="bi bi-gear-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit-kategori-<?php echo $item['id_kategori']; ?>"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#confirmation-modal" data-delete-url="<?= base_url('admin/kategori/delete/' . $item['id_kategori']) ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>