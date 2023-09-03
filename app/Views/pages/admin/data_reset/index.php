<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-20px">
        <?= $this->include('components/sweetAlerts'); ?>
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Data Token Reset Password</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= base_url('admin/dashboard') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Data Token Reset Password
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
                <h4 class="text-blue h4">Data Token Reset Password</h4>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Token</th>
                        <th scope="col">Tgl Dibuat</th>
                        <th scope="col">Expired</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($reset as $item) : ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="table-plus"><?= $item['email'] ?></td>
                            <td class="text-center">
                                <span class="token-placeholder"></span>
                                <button class="btn btn-show-token btn-outline-primary btn-sm btn-circle" data-token="<?= $item['token'] ?>"><i class="bi bi-eye"></i></button>
                            </td>
                            <td><?= $item['created_at'] ?></td>
                            <td><?= $item['expires_at'] ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="bi bi-gear-fill"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#confirmation-modal-<?= $item['id_reset_pass'] ?>" data-delete-url="<?= base_url('admin/reset/delete/' . $item['id_reset_pass']) ?>"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php foreach ($reset as $key => $item) : ?>
        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmation-modal-<?= $item['id_reset_pass'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h3 class="mb-20">Apakah Anda yakin ingin menghapus token reset ini?</h3>
                        <div class="mb-30 text-center">
                            <img src="<?= base_url('assets/img/question.png') ?>" style="width: 90px; height: 90px;" />
                        </div>
                        <p class="mb-30">Data token reset yang dihapus tidak dapat dikembalikan.</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="<?= base_url('admin/reset/delete/' . $item['id_reset_pass']) ?>" class="btn btn-danger" id="confirm-delete-btn">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Tempatkan ini di bagian head atau sebelum penutup </body> -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const showTokenButtons = document.querySelectorAll(".btn-show-token");

            showTokenButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const tokenPlaceholder = this.parentNode.querySelector(".token-placeholder");
                    const tokenValue = this.getAttribute("data-token");

                    if (tokenPlaceholder.textContent === tokenValue) {
                    tokenPlaceholder.textContent = ""; // Sembunyikan token saat tombol diklik
                } else {
                    tokenPlaceholder.textContent = tokenValue; // Tampilkan token saat tombol diklik
                }
            });
            });
        });
    </script>

    <?= $this->endSection(); ?>