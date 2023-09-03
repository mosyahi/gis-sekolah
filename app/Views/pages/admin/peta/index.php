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
				<form id="addressForm">
					<div class="pull-right">
						<div class="input-group">
							<input type="text" id="inputAddress" class="form-control" name="address" placeholder="Alamat Anda" style="width: 180px; height: 40px;">
							<div class="input-group-append">
								<button class="btn btn-primary btn-sm" type="submit" id="mm" style="height: 40px; margin-right: 20px;"><i class="bi bi-search"></i></button>
							</div>
						</div>
					</div>
				</form>

				<div class="pull-right">
					<div class="input-group">
						<input type="text" id="searchInput" class="form-control" placeholder="Cari Sekolah..." style="width: 180px; height: 40px;">
						<div class="input-group-append">
							<button class="btn btn-primary btn-sm" type="button" id="searchButton" style="height: 40px; margin-right: 20px;"><i class="bi bi-search"></i></button>
						</div>
					</div>
				</div>
			</div>
			<div id="map"></div>
			<div id="rute"></div>
		</div>
	</div>

	<div class="pd-20 card-box mb-30" id="detail">
		<div class="clearfix mb-10">
			<div class="pull-left">
				<h4 class="text-blue h4">Informasi Sekolah</h4>
				<p class="font-14 ml-0">
					Untuk informasi lebih lanjut silahkan kunjungi link website sekolah yang sudah tertera.
				</p>
			</div>
		</div>
		<div class="pb-20">
			<table class="table table-bordered">
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
						<th>Jumlah PSB</th>
						<td><span id="detailJumlahPSB"></span></td>
					</tr>
					<tr>
						<th>PSB Jalur Zonasi</th>
						<td><span id="persentaseZonasi"></span></td>
					</tr>
					<tr>
						<th>Persentase Diterima</th>
						<td><span id="persentase"></span></td>
					</tr>
					<tr>
						<th>Keterangan</th>
						<td><span id="keterangan"></span></td>
					</tr>
					<tr>
						<th>Jarak Tempuh</th>
						<td><span id="detailJarak"></span></td>
					</tr>
					<tr>
						<th>Estimasi Waktu</th>
						<td><span id="detailWaktu"></span></td>
					</tr>
					<tr>
						<th>Hapus Rute</th>
						<td>
							<button type="button" class="btn btn-sm btn-danger" id="cancelRouteButton"><i class="bi bi-trash"></i> Hapus Rute</button>
							<button class="btn btn-sm btn-primary" id="cetakButton"><i class="bi bi-printer"></i> Cetak</button>
						</td>
					</tr>
				</tbody>	
			</table>
		</div>
	</div>
</div>

<?= $this->include('template/dashboard/script_maps'); ?>
<?= $this->endSection(); ?>