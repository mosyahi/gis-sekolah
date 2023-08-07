<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>


<form>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Nama Sekolah</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" placeholder="Johnny Brown" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" placeholder="Search Here" type="search" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
        <div class="col-sm-12 col-md-10">
            <input type="file" class="form-control-file form-control height-auto" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Website</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" value="https://getbootstrap.com" type="url" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" placeholder="Alamat" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Akreditasi</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" placeholder="Akreditasi" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Latitude</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" placeholder="Latitude" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-12 col-md-2 col-form-label">Longtitude</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" placeholder="Longtitude" />
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-secondary">
            Close
        </button>
        <button type="button" class="btn btn-primary">
            Save changes
        </button>
    </div>
</form>


<?= $this->endSection(); ?>