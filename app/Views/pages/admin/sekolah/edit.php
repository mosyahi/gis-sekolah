<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>
<?= $this->include('components/sweetAlerts'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Form Edit Data Sekolah</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Edit Sekolah
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
                <h4 class="text-blue h4">Form Edit Sekolah</h4>
                <p class="mb-30">Silakan edit data sekolah dengan benar.</p>
            </div>
        </div>
        <form action="<?= site_url('admin/sekolah/update/' . $sekolah['id_sekolah']) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control" name="id_kategori" type="text" required>
                        <?php foreach ($kategori_options as $key => $value): ?>
                            <option value="<?= $key ?>" <?= ($sekolah['id_kategori'] == $key) ? 'selected' : '' ?>><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Sekolah</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama_sekolah" type="text" placeholder="Nama Sekolah" value="<?= $sekolah['nama_sekolah'] ?>" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                <div class="col-sm-12 col-md-10">
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" type="text" required/><?= $sekolah['deskripsi'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                <div class="col-sm-12 col-md-10">
                    <input type="file" name="gambar" id="gambar" accept="image/jpeg, image/png" class="form-control-file form-control height-auto" onchange="previewImage(event)"/>
                    <img src="<?= base_url('uploads/' . $sekolah['gambar']) ?>" alt="Sekolah Image" id="gambarPreview" class="img-fluid mt-2" style="max-width: 300px;"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Website</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="website" value="<?= $sekolah['website'] ?>" type="url" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Kecamatan</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control" name="id_kecamatan" type="text" required>
                        <?php foreach ($kecamatan_options as $key => $value): ?>
                            <option value="<?= $key ?>" <?= ($sekolah['id_kecamatan'] == $key) ? 'selected' : '' ?>><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="alamat" type="text" placeholder="Alamat" value="<?= $sekolah['alamat'] ?>" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Akreditasi</label>
                <div class="col-sm-12 col-md-10">
                    <select class="form-control" name="akreditas" type="text" required>
                        <option value="A" <?= ($sekolah['akreditas'] == 'A') ? 'selected' : '' ?>>A</option>
                        <option value="B" <?= ($sekolah['akreditas'] == 'B') ? 'selected' : '' ?>>B</option>
                        <option value="C" <?= ($sekolah['akreditas'] == 'C') ? 'selected' : '' ?>>C</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Jumlah PSB</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="jml_psb" type="text" placeholder="Masukkan Jumlah PSB" value="<?= $sekolah['jml_psb'] ?>" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">PSB Jalur Zonasi</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="jml_psb_zonasi" type="text" placeholder="Masukkan Jumlah Jalur Zonasi" value="<?= $sekolah['jml_psb_zonasi'] ?>" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label"></label>
                <div class="col-sm-12 col-md-10">
                    <div id="map"></div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Latitude</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="latitude" id="latitude" type="text" placeholder="Latitude" value="<?= $sekolah['latitude'] ?>" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Longitude</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="longitude" id="longitude" type="text" placeholder="Longitude" value="<?= $sekolah['longitude'] ?>" required/>
                </div>
            </div>
            <div>
                <a href="<?= site_url('admin/sekolah') ?>" class="btn btn-secondary">
                    Close
                </a>
                <button type="submit" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        var preview = document.getElementById('gambarPreview');
        preview.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

<?= $this->include('template/dashboard/script_map_tambah'); ?>
<?= $this->endSection(); ?>
