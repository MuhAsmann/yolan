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
            "title" => "duduk",
            "image" => ""
        ],
        [
            "value" => 147,
            "title" => "berdiri",
            "image" => ""
        ],
        [
            "value" => 118,
            "title" => "mengemudi",
            "image" => ""
        ],
        [
            "value" => 34,
            "title" => "mengetik",
            "image" => ""
        ],
        [
            "value" => 117,
            "title" => "menyapu",
            "image" => ""
        ],
        [
            "value" => 147.1,
            "title" => "memasak",
            "image" => ""
        ],
        [
            "value" => 184,
            "title" => "bersikan rumah",
            "image" => ""
        ],
        [
            "value" => 169,
            "title" => "berbelanja",
            "image" => ""
        ],
        [
            "value" => 220,
            "title" => "menyetrika",
            "image" => ""
        ],
        [
            "value" => 225,
            "title" => "jalan kaki",
            "image" => ""
        ],
        [
            "value" => 147.2,
            "title" => "mengajar",
            "image" => ""
        ],
        [
            "value" => 300,
            "title" => "bersepeda",
            "image" => ""
        ],
        [
            "value" => 450,
            "title" => "mendaki",
            "image" => ""
        ],
        [
            "value" => 330,
            "title" => "berkebun",
            "image" => ""
        ],
        [
            "value" => 350,
            "title" => "kerja kontruksi",
            "image" => ""
        ],
    ]
    ?>

    <div class="min-h-screen bg-secondary">
        <div class="h-[186px] bg-primary px-2 lg:px-16">
            <div class="w-full flex justify-between pt-[54px] pb-[26px] items-center">
                <h1 class="text-3xl lg:text-5xl font-bold text-white"> Calculator BMI</h1>
                <nav>
                    <ul class="flex items-center font-bold gap-8">
                        <li><a class="text-white" href="/">Home</a></li>
                        <li><a class="text-white" href="/rekomendasi">Rekomendasi Kalori</a></li>


                        <form action="/logout" method="post" class="mb-0" title="Logout">
                            <button class="flex bg-red-500 text-white px-5 rounded-lg py-3 items-center gap-1">
                                Logout
                                <img class="w-6 h-6" src="assets/logoutIcon.svg" alt="logout" type="submit">
                            </button>
                        </form>
                    </ul>
                </nav>
            </div>

            <form action="<?= base_url('/save') ?>" method="post" id="form" class="w-full bg-white drop-shadow-lg py-6 lg:py-[69px] px-6 flex flex-col rounded-lg lg:gap-x-[27px] gap-y-6 justify-center">
                <div class="col-lg-4 col-md-4 absolute top-3 left-10">
                    <?php
                    $message = session()->getFlashdata('message');
                    $message_type = session()->getFlashdata('message_type');

                    if ($message) :
                    ?>
                        <div class="max-w-fit max-h-fit text-white px-10 py-2 rounded-lg <?= strpos($message_type, 'success') !== false ? 'bg-primary' : 'bg-customred' ?>">
                            <?= $message ?>
                        </div>

                    <?php
                    endif;
                    ?>
                </div>
                <?php if ($_SESSION['admin_username']) : ?>
                    <h2 class="text-2xl text-neutral-700 font-bold">Halo <?= $_SESSION['admin_username']; ?></h2>
                <?php endif ?>
                <!-- <div class="col-span-1 lg:col-span-4">
                    <input type="text" class="w-full bg-secondary text-neutral-700 font-bold outline-none placeholder:font-normal placeholder:text-neutral-400 px-6 pt-[26px] pb-[24px] drop-shadow-lg rounded-lg" placeholder="Nama" value="" name="name" id="name" required>
                </div> -->
                <div class="col-span-1 lg:col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
                    <input type="number" class="w-full bg-transparent text-neutral-700 font-bold outline-none placeholder:font-normal placeholder:text-neutral-400" placeholder="Umur" value="" name="umur" id="umur" required>
                    <p class="text-xs text-third font-bold">Tahun</p>
                </div>
                <div class="col-span-1 lg:col-span-4 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
                    <input type="number" class="w-full bg-transparent text-neutral-700 font-bold outline-none placeholder:font-normal placeholder:text-neutral-400" placeholder="Tinggi Badan" value="" name="tinggi_badan" id="tinggi_badan" required>
                    <p class="text-xs text-third font-bold">Cm</p>
                </div>
                <div class="col-span-1 lg:col-span-6 flex items-center gap-x-2 drop-shadow-lg px-6 pt-[26px] pb-[24px] rounded-lg w-full bg-secondary">
                    <input type="number" class="w-full bg-transparent text-neutral-700 font-bold outline-none placeholder:font-normal placeholder:text-neutral-400" placeholder="Berat Badan" value="" name="berat_badan" id="berat_badan" required>
                    <p class="text-xs text-third font-bold">Kg</p>
                </div>
                <div class="flex w-full col-span-1 lg:col-span-6 items-center drop-shadow-lg bg-secondary rounded-md px-6">
                    <select class="w-full outline-none pt-[26px] pb-[24px] rounded-lg bg-transparent text-neutral-700 font-bold appearance-none" name="gender" id="gender">
                        <option value="" class="hidden">Jenis Kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                    <img src="assets/iconDropdown.svg" alt="icon-dropdown">
                </div>
                <h3 class="font-bold text-xl text-primary">Aktivitas yang Dilakukan</h3>
                <div class="col-span-1 lg:col-span-12 grid grid-cols-1 lg:grid-cols-8 bg-secondary px-[23px] py-[25px] rounded-lg drop-shadow-lg gap-y-8">

                    <?php foreach ($checkBoxs as $key => $value) : ?>
                        <div class="flex items-center col-span-2 gap-2">
                            <input type="checkbox" name="aktifitas_fisik[]" class=" accent-primary cursor-pointer border-emerald-500 activity" value="<?php echo $value["value"] ?>" id="<?php echo "label-" . $value["value"] ?>">
                            <label for="<?php echo "label-" . $value["value"] ?>" class="text-neutral-700 font-semibold capitalize cursor-pointer"><?php echo $value["title"] ?> (<?= $value["value"] ?> Kalori)</label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-span-1 lg:col-span-12 flex justify-center" id="submit">
                    <button type="submit" class="py-3 px-[32px] bg-primary rounded-lg flex items-center gap-[11px]" id="btnSubmit">
                        <p class="capitalize text-white font-bold text">submit</p>
                        <img src="assets/VectorSend.svg" alt="icon-send">
                    </button>
                </div>
            </form>

            <!-- my_view.php -->
            <form action="<?= base_url('/search') ?>" method="post" class="mt-4 mb-8">
                <div class="px-4 py-2 rounded-md drop-shadow-lg bg-secondary flex gap-4">
                    <input type="text" name="keyword" placeholder="Cari..." class="p-2 bg-transparent w-full focus:outline-none">
                    <button type="submit" class=" text-primary rounded-md">Cari</button>
                </div>
            </form>

            <h3 class="font-bold text-xl text-primary mb-3">Histori Perhitungan</h3>
            <table class="table-auto w-full border-collapse border border-primary mb-10">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="p-3">Tanggal</th>
                        <th class="p-3">BB</th>
                        <th class="p-3">TB</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Maintenance</th>
                        <th class="p-3">Defisit</th>
                        <th class="p-3">Menaikkan Berat Badan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($pasien) && count($pasien) > 0) : ?>
                        <?php foreach ($pasien as $row) : ?>
                            <tr>
                                <td class="border p-3"><?= date("d F Y", strtotime($row['tanggal'])) ?></td>
                                <td class="border p-3"><?= $row['berat_badan']; ?> kg</td>
                                <td class="border p-3"><?= $row['tinggi_badan']; ?> cm</td>
                                <td class="border p-3"><?= $row['status']; ?></td>
                                <td class="border p-3"><?= $row['kalori']; ?> kkal</td>
                                <td class="border p-3"><?= $row['defisit']; ?> kkal</td>
                                <td class="border p-3"><?= $row['surplus']; ?> kkal</td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class="mt-4">Tidak ada data pasien.</p>
                    <?php endif; ?>
                </tbody>
            </table>
            <!-- <div class="grid grid-cols-1 md:grid-cols-12 gap-5 w-full mt-[62px]">
                <?php if (isset($pasien) && count($pasien) > 0) : ?>
                    <?php $nomor_urut = 1;
                    foreach ($pasien as $row) : ?>


                        <div class="col-span-1 md:col-span-4 rounded-lg w-full py-[50px] px-[54px] flex flex-col drop-shadow-lg  bg-white relative">
                            <button onclick="edit(<?php echo $row['id'] ?>)" class="w-[40px] h-[40px] flex justify-center items-center rounded-lg absolute top-4 right-4 bg-customyellow">
                                <img src="assets/pencil.svg" alt="">
                            </button>
                            <?php
                            if ($row['status'] == 'Normal') {
                                $class = 'bg-customgreen';
                            } elseif ($row['status'] == 'Berlebihan') {
                                $class = 'bg-customyellow';
                            } elseif ($row['status'] == 'Obesitas') {
                                $class = 'bg-customred';
                            } elseif ($row['status'] == 'Kurus') {
                                $class = 'bg-customred';
                            } else {
                                $class = 'bg-customred';
                            }
                            ?>

                            <div class="h-[39px] min-w-[40%] rounded-b-lg absolute top-0 left-[30%] <?= $class ?> flex justify-center items-center">
                                <p class="text-white font-bold"><?= $row['status']; ?></p>
                            </div>

                            <h1 class="text-primary font-bold text-2xl text-center mb-[30px]"><?= $row['nama']; ?></h1>
                            <div class="flex gap-4 items-center justify-center w-full mb-[35px]">
                                <div class="w-[70px] h-[70px] rounded-lg <?= $row['gender'] == "pria" ? "bg-customblue" : "bg-custompink" ?> flex justify-center items-center">
                                    <img src="<?= $row['gender'] == "pria" ? "assets/man.svg" : "assets/woman.svg" ?>" alt="">
                                </div>
                                <div class="w-[70px] h-[70px] rounded-lg bg-customgreen flex justify-center items-center">
                                    <p class="text-5xl text-white font-extrabold"><?= $row['umur']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4 mb-[28px]">
                                <div class="col-span-2 bg-secondary py-[10px] w-full rounded-lg flex flex-col items-center justify-center">
                                    <p class="text-primary font-bold text-xs">Tinggi Badan</p>
                                    <p class="text-primary font-bold text-base"><?= $row['tinggi_badan']; ?> cm</p>
                                </div>
                                <div class="col-span-2 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                                    <p class="text-primary font-bold text-xs">Berat Badan</p>
                                    <p class="text-primary font-bold text-base"><?= $row['berat_badan']; ?> kg</p>
                                </div>
                                <div class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                                    <p class="text-primary font-bold text-xs">Maintenance</p>
                                    <p class="text-primary font-bold text-base"><?= $row['kalori']; ?> kkal</p>
                                </div>
                                <div class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                                    <p class="text-primary font-bold text-xs">Defisit</p>
                                    <p class="text-primary font-bold text-base"><?= $row['defisit']; ?> kkal</p>
                                </div>
                                <div class="col-span-4 bg-secondary w-full py-[10px] rounded-lg flex flex-col items-center justify-center">
                                    <p class="text-primary font-bold text-xs">Menaikkan Berat Badan</p>
                                    <p class="text-primary font-bold text-base"><?= $row['surplus']; ?> kkal</p>
                                </div>


                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-neutral-500"><?= date("d F Y", strtotime($row['tanggal'])) ?></p>
                                <a href="/hapus/<?= $row['id']; ?>" class="w-[161px] h-[50px] bg-customred rounded-lg flex gap--2 justify-center items-center" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <p class=" text-white font-bold text">Delete</p>
                                    <img class="w-5 h-5" src="assets/trash.svg" alt="">
                                </a>

                            </div>
                        </div>
                    <?php $nomor_urut++;
                    endforeach; ?>
                <?php else : ?>
                    <p class="mt-4">Tidak ada data pasien.</p>
                <?php endif; ?>
            </div> -->
        </div>
    </div>
</body>

<script>
    // const nameEl = document.getElementById('name');
    const umurEl = document.getElementById('umur');
    const beratEl = document.getElementById('berat_badan');
    const tinggiEl = document.getElementById('tinggi_badan');
    const genderEl = document.getElementById('gender');
    const idSubmit = document.getElementById('submit');
    const btnSubmit = document.getElementById('btnSubmit');
    const form = document.getElementById('form');

    function edit(id) {
        fetch('/put/' + id)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                // nameEl.value = data.edit.nama
                umurEl.value = data.edit.umur
                beratEl.value = data.edit.berat_badan
                tinggiEl.value = data.edit.tinggi_badan
                genderEl.value = data.edit.nama

                const fetchedGender = data.edit.gender;
                const selectedOption = genderEl.querySelector(`option[value="${fetchedGender}"]`);
                if (selectedOption) {
                    selectedOption.selected = true;
                }

                const stringActivitys = data.edit.aktifitas.split(',');

                const activitys = stringActivitys.map(str => parseInt(str, 10));

                const checkboxes = document.querySelectorAll('input[name="aktifitas_fisik[]"]');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = activitys.includes(parseInt(checkbox.value));
                });

                form.action = `/update/${id}`;
                btnSubmit.classList.add('hidden');
                idSubmit.innerHTML = `
                    <button type="submit" class="py-5 px-[32px] bg-primary rounded-lg flex items-center gap-[11px]" id="btnSubmit">
                        <p class="capitalize text-white font-bold text-xl">update</p>
                        <img src="assets/VectorSend.svg" alt="icon-send">
                    </button>
                `;

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            })
            .catch(error => console.error('Error:', error));
    }
</script>

</html>