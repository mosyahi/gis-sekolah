<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <?= $this->include('components/sweetAlerts'); ?>
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Data Kecamatan</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data Kecamatan
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
                <h4 class="text-blue h4">Data Kecamatan</h4>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="modal" data-target="#Medium-modal" role="button"><i class="fa fa-plus"></i>&nbsp Tambah Kecamatan</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Kecamatan</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($kecamatan as $item) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="table-plus"><?= $item['kode_kecamatan'] ?></td>
                            <td><?= $item['nama_kecamatan'] ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="bi bi-gear-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit-kecamatan-<?php echo $item['id_kecamatan']; ?>"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#confirmation-modal-<?= $item['id_kecamatan'] ?>" data-delete-url="<?= base_url('admin/kecamatan/delete/' . $item['id_kecamatan']) ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">
                        Form Tambah Kecamatan
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/kecamatan/add') ?>" method="post">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Kode Kecamatan</label>
                            <div class="col-sm-12 col-md-8">
                                <select class="form-control" name="kode_kecamatan" type="text" placeholder="Isi nama_kecamatan Sekolah">
                                    <option selected disabled> Pilih Kode</option>
                                    <option>K01</option>
                                    <option>K02</option>
                                    <option>K03</option>
                                    <option>K04</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-4 col-form-label">Nama Kecamatan</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" name="nama_kecamatan" type="text" placeholder="Nama Kecamatan" required/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php foreach ($kecamatan as $key => $item) : ?>
        <div class="modal fade" id="edit-kecamatan-<?php echo $item['id_kecamatan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Form Edit kecamatan Sekolah
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/kecamatan/update/' . $item['id_kecamatan']) ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-4 col-form-label">Kode Kecamatan</label>
                                <div class="col-sm-12 col-md-8">
                                    <select class="form-control" name="kode_kecamatan" placeholder="Isi Kode Kecamatan">
                                        <option <?= $item['kode_kecamatan'] === 'K01' ? 'selected' : '' ?>>K01</option>
                                        <option <?= $item['kode_kecamatan'] === 'K02' ? 'selected' : '' ?>>K02</option>
                                        <option <?= $item['kode_kecamatan'] === 'K03' ? 'selected' : '' ?>>K03</option>
                                        <option <?= $item['kode_kecamatan'] === 'K04' ? 'selected' : '' ?>>K04</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-4 col-form-label">Nama Kecamatan</label>
                                <div class="col-sm-12 col-md-8">
                                    <input class="form-control" name="nama_kecamatan" type="text" placeholder="Nama Kecamatan" value="<?= $item['nama_kecamatan'] ?>" required/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmation-modal-<?= $item['id_kecamatan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h3 class="mb-20">Apakah Anda yakin ingin menghapus kecamatan ini?</h3>
                        <div class="mb-30 text-center">
                            <img src="<?= base_url('assets/img/question.png') ?>" style="width: 90px; height: 90px;" />
                        </div>
                        <p class="mb-30">kecamatan yang dihapus tidak dapat dikembalikan.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="<?= base_url('admin/kecamatan/delete/' . $item['id_kecamatan']) ?>" class="btn btn-danger" id="confirm-delete-btn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $this->endSection(); ?>