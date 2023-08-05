<?= $this->extend('template/auth/main'); ?>
<?= $this->section('content'); ?>
<div class="login-header box-shadow">
	<div class="container-fluid d-flex justify-content-between align-items-center">
		<div class="brand-logo">
			<a href="login.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" />
			</a>
		</div>
	</div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<img src="vendors/images/forgot-password.png" alt="" />
			</div>
			<div class="col-md-6">
				<div class="login-box bg-white box-shadow border-radius-10">
					<div class="login-title">
						<h2 class="text-center text-primary">Reset Password</h2>
					</div>
					<h6 class="mb-20">Masukkan password baru anda</h6>
					<?= $this->include('components/alerts') ?>
					<form action="<?= base_url('reset-password'); ?>" method="post">
						<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
						<input type="hidden" name="token" value="<?= $token ?>" />
						<div class="input-group custom">
							<input type="password" class="form-control form-control-lg" name="new_password" placeholder="New Password" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
						<div class="input-group custom">
							<input type="password" class="form-control form-control-lg" name="confirm_password" placeholder="Confirm New Password" />
							<div class="input-group-append custom">
								<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
							</div>
						</div>
						<div class="row align-items-center">
							<div class="col-5">
								<div class="input-group mb-0">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
