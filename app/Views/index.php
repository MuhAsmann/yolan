<head>
	<title>Program Diet</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">



</head>

<body class="">

	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">Admin <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.html"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->
				<img src="assets/images/logo.png" alt="" class="logo">
				<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
					<div class="search-bar">
						<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
						<button type="button" class="close" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li>
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
						<div class="dropdown-menu dropdown-menu-right notification">
							<div class="noti-head">
								<h6 class="d-inline-block m-b-0">Notifications</h6>
								<div class="float-right">
									<a href="#!" class="m-r-10">mark as read</a>
									<a href="#!">clear all</a>
								</div>
							</div>
							<ul class="noti-body">
								<li class="n-title">
									<p class="m-b-0">NEW</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
											<p>New ticket Added</p>
										</div>
									</div>
								</li>
								<li class="n-title">
									<p class="m-b-0">EARLIER</p>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
											<p>currently login</p>
										</div>
									</div>
								</li>
								<li class="notification">
									<div class="media">
										<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
										<div class="media-body">
											<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
											<p>Prchace New Theme and make payment</p>
										</div>
									</div>
								</li>
							</ul>
							<div class="noti-footer">
								<a href="#!">show all</a>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="feather icon-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
								<span>John Doe</span>
								<a href="auth-signin.html" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>
							<ul class="pro-body">
								<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
								<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
								<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>


	</header>
	<!-- [ Header ] end -->



	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-content">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h1 class="m-b-10 text-white">Insert Data</h1>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="container card">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<?php $message = session()->getFlashdata('message'); ?>
							<?php $message_type = session()->getFlashdata('message_type'); ?>

							<?php if ($message) : ?>
								<div class="alert <?= strpos($message_type, 'success') !== false ? 'alert-success' : 'alert-danger' ?>">
									<?= $message ?>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<form action="<?= base_url('/save') ?>" method="post" class="card-body">
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>

						<div class="form-group">
							<label for="umur">Umur:</label>
							<input type="number" class="form-control" id="umur" name="umur" required>
						</div>

						<div class="form-group">
							<label for="tinggi_badan">Tinggi Badan (cm):</label>
							<input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
						</div>

						<div class="form-group">
							<label for="berat_badan">Berat Badan (kg):</label>
							<input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
						</div>

						<div class="form-group">
							<label for="gender">Gender:</label>
							<select class="form-control" id="gender" name="gender" required>
								<option value="pria">Pria</option>
								<option value="wanita">Wanita</option>
							</select>
						</div>

						<div class="form-group">
							<label for="aktifitas">Aktifitas:</label><br>

							<label class="form-check">
								<input type="checkbox" id="jalan_kaki" name="aktifitas_fisik[]" value="jalan_kaki"> Jalan Kaki
							</label>

							<label class="form-check">
								<input type="checkbox" id="mencuci" name="aktifitas_fisik[]" value="mencuci"> Mencuci
							</label>

							<label class="form-check">
								<input type="checkbox" id="membersihkan_rumah" name="aktifitas_fisik[]" value="membersihkan_rumah"> Membersihkan rumah
							</label>

							<label class="form-check">
								<input type="checkbox" id="mengendarai_kendaraan" name="aktifitas_fisik[]" value="mengendarai_kendaraan"> Mengendarai Kendaraan
							</label>

							<label class="form-check">
								<input type="checkbox" id="berbelanja" name="aktifitas_fisik[]" value="berbelanja"> Berbelanja
							</label>

							<label class="form-check">
								<input type="checkbox" id="aktivitas_dalam_ruangan" name="aktifitas_fisik[]" value="aktivitas_dalam_ruangan"> Aktivitas Dalam Duangan
							</label>

							<label class="form-check">
								<input type="checkbox" id="traveling" name="aktifitas_fisik[]" value="traveling"> Traveling
							</label>

							<label class="form-check">
								<input type="checkbox" id="mengetik" name="aktifitas_fisik[]" value="mengetik"> Mengetik
							</label>

							<label class="form-check">
								<input type="checkbox" id="menggunakan_komputer" name="aktifitas_fisik[]" value="menggunakan_komputer"> Menggunakan Komputer
							</label>

							<label class="form-check">
								<input type="checkbox" id="mengajar" name="aktifitas_fisik[]" value="mengajar"> Mengajar
							</label>

							<label class="form-check">
								<input type="checkbox" id="aktivitas_diluar_ruangan" name="aktifitas_fisik[]" value="aktivitas_diluar_ruangan"> Aktifitas diluar Ruangan
							</label>

							<label class="form-check">
								<input type="checkbox" id="mengangkat_beban" name="aktifitas_fisik[]" value="mengangkat_beban"> Mengangkat Beban
							</label>

							<label class="form-check">
								<input type="checkbox" id="melakukan_pekerjaan_konstruksi" name="aktifitas_fisik[]" value="melakukan_pekerjaan_konstruksi"> melakukan Pekerjaan Kontruksi
							</label>

							<label class="form-check">
								<input type="checkbox" id="berkebun" name="aktifitas_fisik[]" value="berkebun"> Berkebun
							</label>

							<label class="form-check">
								<input type="checkbox" id="bertani" name="aktifitas_fisik[]" value="bertani"> Bertani
							</label>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>

					<?php if (isset($pasien) && count($pasien) > 0) : ?>
						<table class="table mt-4 overflow-scroll">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Umur</th>
									<th>Tinggi Badan (cm)</th>
									<th>Berat Badan (kg)</th>
									<th>Gender</th>
									<th>Aktifitas</th>
									<th>Maintenance</th>
									<th>Defisit</th>
									<th>Surplus</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $nomor_urut = 1;
								foreach ($pasien as $row) : ?>
									<tr style="border-bottom: 1px solid #ccc;">
										<td style="padding: 10px;"><?= $nomor_urut; ?></td>
										<td style="padding: 10px;"><?= $row['nama']; ?></td>
										<td style="padding: 10px;"><?= $row['umur']; ?></td>
										<td style="padding: 10px;"><?= $row['tinggi_badan']; ?></td>
										<td style="padding: 10px;"><?= $row['berat_badan']; ?></td>
										<td style="padding: 10px;"><?= strtoupper($row['gender']); ?></td>
										<td style="padding: 10px; font-size: 12px;">
											<?php
											$aktifitas = explode(",", $row['aktifitas']);
											sort($aktifitas);
											foreach ($aktifitas as $aktifitas_item) {
												echo '<div style="background-color: #f0f0f0; color: #333; text-transform: uppercase; padding: 5px; margin-bottom: 3px;">' . trim($aktifitas_item) . '</div>';
											}
											?>
										</td>

										<td style="padding: 10px;"><?= $row['kalori']; ?></td>
										<td style="padding: 10px;"><?= $row['defisit']; ?></td>
										<td style="padding: 10px;"><?= $row['surplus']; ?></td>
										<td style="padding: 10px;">
											<button class="btn-primary rounded">Edit</button>
											<a href="/hapus/<?= $row['id']; ?>" class="btn-danger rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
										</td>
									</tr>
								<?php $nomor_urut++;
								endforeach; ?>
							</tbody>
						</table>
					<?php else : ?>
						<p class="mt-4">Tidak ada data pasien.</p>
					<?php endif; ?>
				</div>
			</div>

			<!-- Required Js -->
			<script src="assets/js/vendor-all.min.js"></script>
			<script src="assets/js/plugins/bootstrap.min.js"></script>
			<script src="assets/js/ripple.js"></script>
			<script src="assets/js/pcoded.min.js"></script>

			<!-- Apex Chart -->
			<!-- <script src="assets/js/plugins/apexcharts.min.js"></script> -->


			<!-- custom-chart js -->
			<!-- <script src="assets/js/pages/dashboard-main.js"></script> -->
</body>

</html>