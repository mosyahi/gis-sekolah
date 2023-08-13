<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 customscroll-10-p height-100-p xs-pd-20-10">
	<div class="min-height-200px">
		<div class="pd-20 card-box mb-30">
			<div class="clearfix mb-20">
				<div class="pull-left">
					<h4 class="text-blue h4">Peta Sekolah</h4>
					<p class="font-14 ml-0">
						Silahkan klik titik sekolah atau search sekolah yang ingin dituju
					</p>
				</div>
				<div class="pull-right">
					<div class="input-group">
						<input type="text" id="searchInput" class="form-control" placeholder="Cari Sekolah..." style="width: 180px; height: 30px;">
						<div class="input-group-append">
							<button class="btn btn-primary btn-sm" type="button" id="searchButton" style="height: 30px; margin-right: 20px;"><i class="bi bi-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div id="map"></div>
			</div>
			<div class="container">
				<code>
					<div id="rute"></div>
				</code>
			</div>
		</div>
	</div>
</div>


<?= $this->include('template/dashboard/script_maps'); ?>
<?= $this->endSection(); ?>