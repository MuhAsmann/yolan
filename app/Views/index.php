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
	<?php 
		$checkBoxs = [
			[
				"value" => 200,
				"title" => "duduk"
			],
			[
				"value" => 147,
				"title" => "berdiri"
			],
			[
				"value" => 118,
				"title" => "mengemudi"
			],
			[
				"value" => 34,
				"title" => "mengetik"
			],
			[
				"value" => 117,
				"title" => "menyapu"
			],
			[
				"value" => 147,
				"title" => "memasak"
			],
			[
				"value" => 184,
				"title" => "bersikan rumah"
			],
			[
				"value" => 169,
				"title" => "berbelanja"
			],
			[
				"value" => 220,
				"title" => "menyetrika"
			],
			[
				"value" => 225,
				"title" => "jalan kaki"
			],
			[
				"value" => 147,
				"title" => "mengajar"
			],
			[
				"value" => 300,
				"title" => "bersepeda"
			],
			[
				"value" => 450,
				"title" => "mendaki"
			],
			[
				"value" => 330,
				"title" => "berkebun"
			],
			[
				"value" => 350,
				"title" => "kerja kontruksi"
			],
		]
	?>
	<div class="min-h-screen bg-secondary">
		<div class="h-[186px] bg-primary px-2 lg:px-16">
			<div class="w-full flex justify-between pt-[54px] pb-[26px]">
				<h1 class="text-3xl lg:text-5xl font-bold text-white">Sistem Pakar yaitu</h1>
				<button><img src="assets/logoutIcon.svg" alt="logout"></button>
			</div>
			<form action="<?= base_url('/save') ?>" method="post" class="w-full bg-white drop-shadow-lg py-6 lg:py-[69px] px-6 lg:px-[42px] grid grid-cols-1 lg:grid-cols-12 rounded-lg lg:gap-x-[27px] gap-y-6 lg:gap-y-16 justify-center">
				<div class="col-span-1 lg:col-span-4">
					<input type="text" class="w-full bg-secondary text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary px-6 pt-[26px] pb-[24px] drop-shadow-lg rounded-lg" placeholder="Nama" value="" name="name" required>
				</div>
				<div class="col-span-1 lg:col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
					<input type="number" class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary" placeholder="Umur" value="" name="umur" required>
					<p class="text-xs text-third font-bold">Tahun</p>
				</div>
				<div class="col-span-1 lg:col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
					<input type="number" class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary" placeholder="Tinggi Badan" value="" name="tinggi_badan" required>
					<p class="text-xs text-third font-bold">Cm</p>
				</div>
				<div class="col-span-1 lg:col-span-6 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
					<input type="number" class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary" placeholder="Berat Badan" value="" name="berat_badan" required>
					<p class="text-xs text-third font-bold">Kg</p>
				</div>
				<div class="flex w-full col-span-1 lg:col-span-6 items-center drop-shadow-lg bg-secondary rounded-md px-6">
					<select class="w-full outline-none pt-[26px] pb-[24px] rounded-lg bg-transparent text-primary font-bold appearance-none" name="gender">
						<option value="" class="hidden">Gender</option>
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option>
					</select>
					<img src="assets/iconDropdown.svg" alt="icon-dropdown">
				</div>
				<div class="col-span-1 lg:col-span-12 grid grid-cols-1 lg:grid-cols-12 bg-secondary px-[23px] py-[25px] rounded-lg drop-shadow-lg gap-y-8">
					<?php foreach($checkBoxs as $key => $value) : ?>
					<div class="flex col-span-2 gap-2">
						<input type="checkbox" name="aktifitas_fisik[]" class=" accent-primary cursor-pointer border-emerald-500" value="<?php echo $value["value"] ?>" id="<?php echo "label-".$value["value"]?>">
						<label for="<?php echo "label-".$value["value"]?>" class="text-xl text-primary font-bold capitalize cursor-pointer"><?php echo $value["title"]?></label>
					</div>
					<?php endforeach;?>
				</div>
				<div class="col-span-1 lg:col-span-12 flex justify-center">
					<button type="submit" class="py-5 px-[32px] bg-primary rounded-lg flex items-center gap-[11px]">
						<p class="capitalize text-white font-bold text-xl">submit</p>
						<img src="assets/VectorSend.svg" alt="icon-send">
					</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>