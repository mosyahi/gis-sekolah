<?= $this->extend('template/dashboard/main'); ?>
<?= $this->section('content'); ?>

<div class="pd-ltr-20 xs-pd-20-10">
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

	<div class="pd-20 card-box mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue h4">Informasi Sekolah</h4>
				<p class="font-14 ml-0">
					Silahkan klik gambar agar bisa dilihat dengan jelas.
				</p>
			</div>
		</div>
		<div class="pb-20">
			<table class="table table-bordered" id="detail" >
				<tbody>
					<tr>
						<th>Nama Sekolah</th>
						<td><span id="detailNamaSekolah"></span></td>
					</tr>
					<tr>
						<th>Akreditas</th>
						<td><span id="detailAkreditas"></span></td>
					</tr>
					<tr>
						<th>Alamat Sekolah</th>
						<td><span id="detailAlamat"></span></td>
					</tr>
					<tr>
						<th>Deskripsi</th>
						<td><span id="detailDeskripsi"></span></td>
					</tr>
					<tr>
						<th>Website</th>
						<td><span id="detailWebsite"></span></td>
					</tr>
					<tr>
						<th>Dokumentasi</th>
						<td>
							<a id="detailGambarLink" data-lightbox="school-image">
								<i class="bi bi-eye eye-icon"></i> Lihat Gambar
							</a>
						</td>
					</tr>
					<tr>
						<th>Jarak Tempuh</th>
						<td><span id="detailJarak"></span></td>
					</tr>
					<tr>
						<th>Estimasi Waktu</th>
						<td><span id="detailWaktu"></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?= $this->include('template/dashboard/script_maps'); ?>
<?= $this->endSection(); ?>