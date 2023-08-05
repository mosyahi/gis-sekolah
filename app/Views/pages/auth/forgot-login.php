<?= $this->extend('template/auth/main'); ?>
<?= $this->section('content'); ?>
<div class="login-header box-shadow">
	<div
	class="container-fluid d-flex justify-content-between align-items-center"
	>
	<div class="brand-logo">
		<a href="login.html">
			<img src="vendors/images/deskapp-logo.svg" alt="" />
		</a>
	</div>
</div>
</div>
<div
class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
>
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
				<h6 class="mb-20">
					Masukkan email anda untuk reset password
				</h6>
				<?= $this->include('components/alerts') ?>
				<form action="<?= base_url('forgot-password') ?>" method="post">
					<div class="input-group custom">
						<input
						type="text"
						class="form-control form-control-lg"
						placeholder="Email" name="email"
						/>
						<div class="input-group-append custom">
							<span class="input-group-text"
							><i class="fa fa-envelope-o" aria-hidden="true"></i
							></span>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-5">
							<div class="input-group mb-0">
								<button
								type="submit"
								class="btn btn-primary btn-lg btn-block"
								>
								Submit
							</button>
						</div>
					</div>
					<div class="col-2">
						<div
						class="font-16 weight-600 text-center"
						data-color="#707373"
						>
						OR
					</div>
				</div>
			</form>
			<div class="col-5">
				<div class="input-group mb-0">
					<a
					class="btn btn-outline-primary btn-lg btn-block"
					href="<?= base_url('login') ?>"
					>Login</a
					>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<?= $this->endSection(); ?>
