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
                        <th scope="col">Akreditasi</th>
                        <th scope="col">Website</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longtitude</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($sekolah as $item) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="table-plus"><?= $item['jenis_sekolah'] . ' - ' . $item['tingkatan'] ?></td>
                            <td><?= $item['nama_sekolah'] ?></td>
                            <td><?= $item['akreditas'] ?></td>
                            <td><?= $item['website'] ?></td>
                            <td><?= $item['deskripsi'] ?></td>
                            <td class="table-plus"><?= $item['kode_kecamatan'] . ' - ' . $item['nama_kecamatan'] ?></td>
                            <td><?= $item['alamat'] ?></td>
                            <td><?= $item['latitude'] ?></td>
                            <td><?= $item['longitude'] ?></td>
                            <td>
                                <a href="<?= base_url('uploads/' . $item['gambar']) ?>" data-lightbox="gallery">
                                    <img src="<?= base_url('uploads/' . $item['gambar']) ?>" alt="Gambar Sekolah" width="100">
                                </a>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="bi bi-gear-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="<?= site_url('admin/sekolah/edit/' . $item['id_sekolah']) ?>">
                                            <i class="dw dw-edit2"></i> Edit
                                        </a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#confirmation-modal-<?= $item['id_sekolah'] ?>" data-delete-url="<?= base_url('admin/sekolah/delete/' . $item['id_sekolah']) ?>"><i class="dw dw-delete-3"></i> Delete</a>
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

<?php foreach ($sekolah as $key => $item) : ?>
    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmation-modal-<?= $item['id_sekolah'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h4 class="mb-20">Apakah Anda yakin ingin menghapus data sekolah ini?</h4>
                    <div class="mb-30 text-center">
                        <img src="<?= base_url('assets/img/question.png') ?>" style="width: 90px; height: 90px;" />
                    </div>
                    <p class="mb-30">Data sekolah yang dihapus tidak dapat dikembalikan.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/sekolah/delete/' . $item['id_sekolah']) ?>" class="btn btn-danger" id="confirm-delete-btn">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection(); ?>