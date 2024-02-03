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

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

	<!-- vendor css -->
	<link rel="stylesheet" href="css/app.css">



</head>

<body class="font-jakarta">
	<div class="min-h-screen bg-secondary">
		<div class="h-[149px] bg-primary px-16">
			<div class="w-full flex justify-between pt-[54px] pb-[26px]">
				<h1 class="text-5xl font-bold text-white">Sistem Pakar yaitu</h1>
				<button>logout</button>
			</div>
			<form class="w-full bg-white drop-shadow-lg py-[69px] px-[42px] grid grid-cols-12 rounded-lg gap-x-[27px] gap-y-16">
				<div class="col-span-4">
					<input type="text" class="w-full bg-secondary text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary px-6 pt-[26px] pb-[24px] drop-shadow-lg rounded-lg" placeholder="Nama" value="" name="name" required>
				</div>
				<div class="col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
					<input type="number" class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary" placeholder="Umur" value="" name="umur" required>
					<p class="text-xs text-third font-bold">Tahun</p>
				</div>
				<div class="col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
					<input type="number" class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary" placeholder="Tinggi Badan" value="" name="tinggi_badan" required>
					<p class="text-xs text-third font-bold">Cm</p>
				</div>
				<div class="col-span-6 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
					<input type="number" class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary" placeholder="Berat Badan" value="" name="berat_badan" required>
					<p class="text-xs text-third font-bold">Kg</p>
				</div>
				<select class="col-span-6 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg bg-secondary w-full">
					<option value="" disabled class="text-primary font-bold" default="true">Gender</option>
				</select>
			</form>
		</div>
	</div>
</body>

</html>