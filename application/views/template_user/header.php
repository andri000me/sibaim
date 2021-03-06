<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Utama</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

	<!-- style css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">
</head>

<body>

	<!-- runing text -->
	<!-- masih belum dibuat -->
	<!-- end running text -->

	<div class="container-md-fluid">

		<!-- navigasi -->
		<div class="row bg-white pt-2 pb-2">

			<div class="col-md-2 text-center">
				<img src="<?= base_url('assets/images/logoBaim.png'); ?>" class="img-fluid" id="logo" alt="Responsive image">
			</div>

			<div class="col-md-5">
				<h1>MASJID BAITUL ILMI</h1>
				<img src="<?= base_url('assets/images/logoItera.png'); ?>" class="float-left" alt="">
				<h4>INSITITUT TEKNOLOGI SUMATERA</h4>
			</div>

			<div class="col-md-5">
				<div>
					<ul class="nav">
						<li class="nav-item">
							<a href="<?= base_url(); ?>" class="nav-link">BERANDA</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toogle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG</a>
							<div class="dropdown-menu">
								<a href="<?= base_url('sejarah'); ?>" class="dropdown-item">Sejarah</a>
								<a href="<?= base_url('organisasi'); ?>" class="dropdown-item">Organisasi</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toogle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PELAYANAN</a>
							<div class="dropdown-menu">
								<a href="<?= base_url('Peminjaman_barang_user'); ?>" class="dropdown-item">Peminjaman Barang</a>
								<a href="#" class="dropdown-item">Info Barang Hilang</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="#kontak" class="nav-link">KONTAK</a>
						</li>
					</ul>
				</div>
			</div>

		</div>

		<!-- end navigasi -->

	</div>