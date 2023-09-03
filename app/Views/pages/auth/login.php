<?= $this->extend('template/auth/main'); ?>
<?= $this->section('content'); ?>
<div
class="login-wrap d-flex align-items-center flex-wrap justify-content-center mx-auto"
>
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-12 col-lg-12">
            <div class="login-box bg-white box-shadow border-radius-10">
                <div class="login-title">
                    <h2 class="text-center text-primary">Selamat Datang Admin!</h2>
                </div>
                <?= $this->include('components/alerts') ?>
                <form action="<?= base_url('login') ?>" method="post">
                    <div class="input-group custom">
                        <input
                        type="email"
                        class="form-control form-control-lg" name="email"
                        placeholder="Email"
                        />
                        <div class="input-group-append custom">
                            <span class="input-group-text"
                            ><i class="icon-copy dw dw-user1"></i
                            ></span>
                        </div>
                    </div>
                    <div class="input-group custom">
                        <input
                        type="password" name="password"
                        class="form-control form-control-lg"
                        placeholder="**********"
                        />
                        <div class="input-group-append custom">
                            <span class="input-group-text"
                            ><i class="dw dw-padlock1"></i
                            ></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group mb-0">
                                <a type="button" href="<?= base_url('/') ?>"
                                    class="btn btn-warning btn-lg btn-block"
                                    >kembali</a
                                    >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mb-0">
                                    <button type="submit" 
                                    class="btn btn-primary btn-lg btn-block"
                                    >Sign In</button
                                    >
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row pb-30 mt-3">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox">
                                <input
                                type="checkbox"
                                class="custom-control-input"
                                id="customCheck1"
                                />
                                <label class="custom-control-label" for="customCheck1"
                                >Remember</label
                                >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="forgot-password">
                                <a href="<?= base_url('forgot-password') ?>">Lupa Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>