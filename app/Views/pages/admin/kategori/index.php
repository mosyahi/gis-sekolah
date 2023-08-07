<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
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
                <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="modal" data-target="#Medium-modal" role="button"><i class="fa fa-plus"></i>&nbsp Tambah Kategori</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>SMA</td>
                        <td>Sekolah Menengah Ke Atas</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    <i class="bi bi-gear-fill"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" data-toggle="modal" data-target="#edit-kategori"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
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
                <form>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-3 col-form-label">Sekolah</label>
                        <div class="col-sm-12 col-md-9">
                            <select class="form-control" type="text" placeholder="Isi Tingkatan Sekolah">
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
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Negeri</label>
                        </div>
                        <div class="custom-control custom-radio col-md-2 col-sm-12">
                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">Swasta</label>
                        </div>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-kategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                <form>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-3 col-form-label">Sekolah</label>
                        <div class="col-sm-12 col-md-9">
                            <select class="form-control" type="text" placeholder="Isi Tingkatan Sekolah">
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
                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Negeri</label>
                        </div>
                        <div class="custom-control custom-radio col-md-2 col-sm-12">
                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio5">Swasta</label>
                        </div>
                    </div>

                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>