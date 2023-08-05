<?php if (session()->has('success')): ?>
<div class="alert alert-success" role="alert" id="successAlert">
	<?= session('success') ?>
</div>
<script>
	setTimeout(function() {
		$('#successAlert').fadeOut('slow');
	}, 6000);
</script>
<?php endif; ?>

<?php if (session()->has('gagal')): ?>
<div class="alert alert-danger" role="alert" id="gagalAlert">
	<?= session('gagal') ?>
</div>
<script>
	setTimeout(function() {
		$('#gagalAlert').fadeOut('slow');
	}, 6000);
</script>
<?php endif; ?>

<?php if (session()->has('NoEdit')): ?>
<div class="alert alert-warning" role="alert" id="updateAlert">
	<?= session('NoEdit') ?>
</div>
<script>
	setTimeout(function() {
		$('#updateAlert').fadeOut('slow');
	}, 6000);
</script>
<?php endif; ?>