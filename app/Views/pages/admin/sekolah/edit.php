<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>
<?= $this->include('components/sweetAlerts'); ?>

<!-- <div class="main-container"> -->
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Form Edit Data Kategori</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Basic
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="pd-20 card-box mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Form Edit Kategori</h4>
                <p class="mb-30">Silahkan input data kategori dengan benar.</p>
            </div>
        </div>
        <form action="<?= site_url('admin/sekolah/edit') ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control" name="id_kategori" type="text" placeholder="Isi Tingkatan Sekolah">
                        <option selected disabled>Pilih Jenis Sekolah</option>
                        option
                        <?php foreach ($kategori_options as $key => $value) : ?>
                            <option value="<?= $key ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Sekolah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama_sekolah" type="text" placeholder="Nama Sekolah" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="deskripsi" placeholder="Search Here" type="search" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                <div class="col-sm-12 col-md-10">
                    <input type="file" name="gambar" class="form-control-file form-control height-auto" enctype="multipart/form-data" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Website</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="website" value="https://getbootstrap.com" type="url" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="alamat" type="text" placeholder="Alamat" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Akreditasi</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="akreditas" type="text" placeholder="Akreditasi" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Latitude</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="latitude" type="text" placeholder="Latitude" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Longtitude</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="longitude" type="text" placeholder="Longtitude" />
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-secondary">
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
<!-- </div> -->
<?= $this->endSection(); ?>