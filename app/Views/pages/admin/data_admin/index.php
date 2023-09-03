<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <?= $this->include('components/sweetAlerts'); ?>
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Data Administrator</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/administrator') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data Administrator
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
                <h4 class="text-blue h4">Data Administrator</h4>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="modal" data-target="#Medium-modal" role="button"><i class="fa fa-plus"></i>&nbsp Tambah Admin</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($dataUser as $item) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="table-plus"><?= $item['nama'] ?></td>
                            <td class="table-plus"><?= $item['email'] ?></td>
                            <td><?= str_repeat('*', min(strlen($item['password']), 10)) ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="bi bi-gear-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#edit-kategori-<?php echo $item['id_admin']; ?>"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#confirmation-modal-<?= $item['id_admin'] ?>" data-delete-url="<?= base_url('admin/administrator/delete/' . $item['id_admin']) ?>"><i class="dw dw-delete-3"></i> Delete</a>
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
                        Form Tambah Admin
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/administrator/add') ?>" method="post">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="nama" type="text" placeholder="Nama Lengkap" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="email" type="email" placeholder="contoh@gmail.com" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="password" type="text" placeholder="********" />
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

    <?php foreach ($dataUser as $key => $item) : ?>
        <div class="modal fade" id="edit-kategori-<?php echo $item['id_admin']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Form Edit Administator
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/administrator/update/' . $item['id_admin']) ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="nama" type="text" placeholder="Nama Lengkap" value="<?= $item['nama'] ?>" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" value="<?= $item['email'] ?>" name="email" type="email" placeholder="contoh@gmail.com" />
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
        <div class="modal fade" id="confirmation-modal-<?= $item['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h3 class="mb-20">Apakah Anda yakin ingin menghapus data admin ini?</h3>
                        <div class="mb-30 text-center">
                            <img src="<?= base_url('assets/img/question.png') ?>" style="width: 90px; height: 90px;" />
                        </div>
                        <p class="mb-30">Data admin yang dihapus tidak dapat dikembalikan.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="<?= base_url('admin/administrator/delete/' . $item['id_admin']) ?>" class="btn btn-danger" id="confirm-delete-btn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?= $this->endSection(); ?>