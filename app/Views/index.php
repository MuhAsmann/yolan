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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <!-- vendor css -->
    <link rel="stylesheet" href="css/app.css">



</head>

<body class="font-jakarta  bg-secondary">
    <div class="">
        <div class="h-[149px] bg-primary px-16">
            <div class="w-full flex justify-between pt-[54px] pb-[26px]">
                <h1 class="text-5xl font-bold text-white">Sistem Pakar yaitu</h1>
                <button>logout</button>
            </div>
            <form
                class="w-full bg-white drop-shadow-lg py-[69px] px-[42px] grid grid-cols-12 rounded-lg gap-x-[27px] gap-y-16">
                <div class="col-span-4">
                    <input type="text"
                        class="w-full bg-secondary text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary px-6 pt-[26px] pb-[24px] drop-shadow-lg rounded-lg"
                        placeholder="Nama" value="" name="name" required>
                </div>
                <div
                    class="col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
                    <input type="number"
                        class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary"
                        placeholder="Umur" value="" name="umur" required>
                    <p class="text-xs text-third font-bold">Tahun</p>
                </div>
                <div
                    class="col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
                    <input type="number"
                        class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary"
                        placeholder="Tinggi Badan" value="" name="tinggi_badan" required>
                    <p class="text-xs text-third font-bold">Cm</p>
                </div>
                <div
                    class="col-span-6 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
                    <input type="number"
                        class="w-full bg-transparent text-primary font-bold outline-none placeholder:font-bold placeholder:text-primary"
                        placeholder="Berat Badan" value="" name="berat_badan" required>
                    <p class="text-xs text-third font-bold">Kg</p>
                </div>
                <select
                    class="col-span-6 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg bg-secondary w-full">
                    <option value="" disabled class="text-primary font-bold" default="true">Gender</option>
                </select>
            </form>
            <!-- search -->

            <?php if (isset($pasien) && count($pasien) > 0) : ?>
            <table class="table mt-2">
                <tbody>
                    <?php $nomor_urut = 1;
foreach ($pasien as $row) : ?>

                    <?php $nomor_urut++;
endforeach; ?>
                </tbody>
            </table>
            <?php else : ?>
            <p class="mt-4">Tidak ada data pasien.</p>
            <?php endif; ?>

            <!-- list data  -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 w-full">
                <?php if (isset($pasien) && count($pasien) > 0) : ?>
                <?php $nomor_urut = 1;
foreach ($pasien as $row) : ?>


                <div
                    class="col-span-1 md:col-span-4 rounded-lg w-full py-[63px] px-[54px] flex flex-col drop-shadow-lg  bg-white relative">
                    <button
                        class="w-[40px] h-[40px] flex justify-center items-center rounded-lg absolute top-4 right-4 bg-customyellow">
                        <img src="assets/pencil.svg" alt="">
                    </button>
                    <div class="h-[39px] min-w-[40%] rounded-b-lg  absolute top-0 left-[30%] bg-customgreen">

                    </div>
                    <h1 class="text-primary font-bold text-5xl text-center mb-[59px]"><?= $row['nama']; ?></h1>
                    <div class="flex gap-4 items-center justify-center w-full mb-[35px]">
                        <div class="w-[100px] h-[100px] rounded-lg bg-customblue flex justify-center items-center">
                            <img src="assets/man.svg" alt="">
                        </div>
                        <div class="w-[100px] h-[100px] rounded-lg bg-customgreen flex justify-center items-center">
                            <p class="text-5xl text-white font-extrabold"><?= $row['umur']; ?></p>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 mb-[48px]">
                        <div
                            class="col-span-2 bg-secondary py-[10px] w-full rounded-lg flex flex-col items-center justify-center">
                            <p class="text-primary font-bold text-xs">Tinggi Badan</p>
                            <p class="text-primary font-bold text-base"><?= $row['tinggi_badan']; ?> cm</p>
                        </div>
                        <div
                            class="col-span-2 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                            <p class="text-primary font-bold text-xs">Berat Badan</p>
                            <p class="text-primary font-bold text-base"><?= $row['berat_badan']; ?> kg</p>
                        </div>
                        <div
                            class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                            <p class="text-primary font-bold text-xs">Maintenance</p>
                            <p class="text-primary font-bold text-base"><?= $row['kalori']; ?> kkal</p>
                        </div>
                        <div
                            class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                            <p class="text-primary font-bold text-xs">Defisit</p>
                            <p class="text-primary font-bold text-base"><?= $row['defisit']; ?> kkal</p>
                        </div>
                        <div
                            class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                            <p class="text-primary font-bold text-xs">Surplus</p>
                            <p class="text-primary font-bold text-base"><?= $row['surplus']; ?> kkal</p>
                        </div>

                        <div
                            class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center gap-x-6">
                            <?php
                            $aktifitas = explode(",", $row['aktifitas']);
                            sort($aktifitas);
                            foreach ($aktifitas as $aktifitas_item) {
                            echo ' <div class="flex gap-4 items-center justify-center">
                            <div class="w-[20px] h-[20px] bg-primary rounded-md  flex justify-center items-center">
                                <img src="assets/checklist.svg" alt="">
                            </div>
                            <p class="font-bold text-xl text-primary">' . trim($aktifitas_item) . '</p>
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <a href="/hapus/<?= $row['id']; ?>"
                            class="w-[161px] h-[50px] bg-customred rounded-lg flex gap--2 justify-center items-center"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            <p class=" text-white font-bold text-xl">Delete</p>
                            <img src="assets/trash.svg" alt="">
                        </a>

                    </div>
                </div>
                <?php $nomor_urut++;
                endforeach; ?>
                <?php else : ?>
                <p class="mt-4">Tidak ada data pasien.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>