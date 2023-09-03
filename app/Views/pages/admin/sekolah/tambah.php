<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>
<?= $this->include('components/sweetAlerts'); ?>

<style>
    #gambar-preview {
        display: flex;
        flex-wrap: wrap;
    }

    .gambar-item {
        width: 150px;
        height: 150px;
        margin: 10px;
        overflow: hidden;
        border: 1px solid #ccc;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .gambar-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<!-- <div class="main-container"> -->
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-20px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form Tambah Data Sekolah</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Form Tambah Data Sekolah
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
                    <h4 class="text-blue h4">Form Tambah Sekolah</h4>
                    <p class="mb-30">Silahkan input data Sekolah dengan benar.</p>
                </div>
            </div>
            <form action="<?= site_url('admin/sekolah/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Sekolah</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="id_kategori" type="text" placeholder="Isi Tingkatan Sekolah" required>
                            <option selected disabled>Pilih Jenis Sekolah</option>}
                            option
                            <?php foreach ($kategori_options as $key => $value): ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="nama_sekolah" type="text" placeholder="Nama Sekolah" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-12 col-md-10">
                        <textarea class="form-control" rows="2" name="deskripsi" placeholder="Deskripsi Sekolah" type="search" required/></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                    <div class="col-sm-12 col-md-10">
                        <input type="file" name="gambar" id="gambar" accept="image/jpeg, image/png" class="form-control-file form-control height-auto" multiple required/>
                        <div id="gambar-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Website</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="website" value="https://getbootstrap.com" type="url" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="id_kecamatan" type="text" placeholder="Isi Kecamatan" required>
                            <option selected disabled>Pilih Kecamatan</option>}
                            option
                            <?php foreach ($kecamatan_options as $key => $value): ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="alamat" type="text" placeholder="Alamat" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Akreditasi</label>
                    <div class="col-sm-12 col-md-10">
                        <select class="form-control" name="akreditas" type="text" placeholder="Isi Tingkatan Sekolah" required>
                            <option selected disabled>Pilih Akreditas</option>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Jumlah PSB</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="jml_psb" type="number" placeholder="Masukkan Jumlah Penerimaan Siswa Baru" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">PSB Jalur Zonasi</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="jml_psb_zonasi" type="number" placeholder="Masukkan Jumlah Penerimaan Siswa Baru Jalur Zonasi" required/>
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
                        <input class="form-control" name="latitude" id="latitude" type="text" placeholder="Latitude" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Longtitude</label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" name="longitude" id="longitude" type="text" placeholder="Longtitude" required/>
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

<script>
    const gambarInput = document.getElementById('gambar');
    const previewContainer = document.getElementById('gambar-preview');

    gambarInput.addEventListener('change', function() {
        previewContainer.innerHTML = ''; // Bersihkan tampilan sebelumnya

        const files = Array.from(this.files);

        files.forEach(file => {
            const reader = new FileReader();

            reader.onload = function(event) {
                const gambarItem = document.createElement('div');
                gambarItem.className = 'gambar-item';

                const imgElement = document.createElement('img');
                imgElement.src = event.target.result;

                gambarItem.appendChild(imgElement);
                previewContainer.appendChild(gambarItem);
            }

            reader.readAsDataURL(file);
        });
    });
</script>

<?= $this->include('template/dashboard/script_map_tambah'); ?>
<?= $this->endSection(); ?>