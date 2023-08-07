<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="pd-20 card-box mb-30 col-md-6 mx-auto mt-4">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Tambah Data Kategori</h4>

            </div>
        </div>
        <form>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Sekolah</label>
                <div class="col-sm-12 col-md-10">
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
                <label class="col-sm-12 col-md-2">Tingkatan</label>
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
    </div>
</div>

<div class="col-md-4 col-sm-12 mb-30">
    <div class="pd-20 card-box height-100-p">
        <h5 class="h4">Medium modal</h5>
        <a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">
            <img src="vendors/images/modal-img2.jpg" alt="modal" />
        </a>
        <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Large modal
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.
                        </p>
                    </div>
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
</div>

<?= $this->endSection(); ?>