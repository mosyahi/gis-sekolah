<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <?= $this->include('components/sweetAlerts'); ?>
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Data Kategori</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data Kategori
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
                <h4 class="text-blue h4">Data Kategori</h4>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="modal" data-target="#Medium-modal" role="button"><i class="fa fa-plus"></i>&nbsp Tambah Kategori</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tingkat Sekolah</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($kategori as $item) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="table-plus"><?= $item['jenis_sekolah'] ?></td>
                            <td><?= $item['tingkatan'] ?></td>
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
                        Form Tambah Kategori Sekolah
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/kategori/add') ?>" method="post">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Sekolah</label>
                            <div class="col-sm-12 col-md-9">
                                <select class="form-control" name="jenis_sekolah" type="text" placeholder="Isi Tingkatan Sekolah">
                                    <option selected> Pilih Sekolah</option>
                                    <option>SMA</option>
                                    <option>SMK</option>
                                    <option>MA</option>
                                    <option>SMP</option>
                                    <option>MTS</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-12 col-md-3">Tingkatan</label>
                            <div class="custom-control custom-radio col-md-2 col-sm-12" style="margin-left: 10px;">
                                <input type="radio" id="customRadio4" name="tingkatan" class="custom-control-input" value="Negeri">
                                <label class="custom-control-label" for="customRadio4">Negeri</label>
                            </div>
                            <div class="custom-control custom-radio col-md-2 col-sm-12">
                                <input type="radio" id="customRadio5" name="tingkatan" class="custom-control-input" value="Swasta">
                                <label class="custom-control-label" for="customRadio5">Swasta</label>
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

    <?php foreach ($kategori as $key => $item) : ?>
        <div class="modal fade" id="edit-kategori-<?php echo $item['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Form Edit Kategori Sekolah
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/kategori/update/' . $item['id_kategori']) ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Sekolah</label>
                                <div class="col-sm-12 col-md-9">
                                    <select class="form-control" name="jenis_sekolah" placeholder="Isi Tingkatan Sekolah">
                                        <!-- Jika ada data $item['jenis_sekolah'] dari database, tambahkan atribut selected pada opsi terkait -->
                                        <option <?= $item['jenis_sekolah'] === 'SMA' ? 'selected' : '' ?>>SMA</option>
                                        <option <?= $item['jenis_sekolah'] === 'SMK' ? 'selected' : '' ?>>SMK</option>
                                        <option <?= $item['jenis_sekolah'] === 'MA' ? 'selected' : '' ?>>MA</option>
                                        <option <?= $item['jenis_sekolah'] === 'SMP' ? 'selected' : '' ?>>SMP</option>
                                        <option <?= $item['jenis_sekolah'] === 'MTS' ? 'selected' : '' ?>>MTS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3">Tingkatan</label>
                                <div class="custom-control custom-radio col-md-2 col-sm-12" style="margin-left: 10px;">
                                    <input type="radio" id="customRadio4" name="tingkatan" class="custom-control-input" value="Negeri" <?= $item['tingkatan'] === 'Negeri' ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="customRadio4">Negeri</label>
                                </div>
                                <div class="custom-control custom-radio col-md-2 col-sm-12">
                                    <input type="radio" id="customRadio5" name="tingkatan" class="custom-control-input" value="Swasta" <?= $item['tingkatan'] === 'Swasta' ? 'checked' : '' ?>>
                                    <label class="custom-control-label" for="customRadio5">Swasta</label>
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
        <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h3 class="mb-20">Apakah Anda yakin ingin menghapus kategori ini?</h3>
                        <div class="mb-30 text-center">
                            <img src="<?= base_url('assets/img/question.png') ?>" style="width: 90px; height: 90px;" />
                        </div>
                        <p class="mb-30">Kategori yang dihapus tidak dapat dikembalikan.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="<?= base_url('admin/kategori/delete/' . $item['id_kategori']) ?>" class="btn btn-danger" id="confirm-delete-btn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $this->endSection(); ?>