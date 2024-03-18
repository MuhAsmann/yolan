<head>
    <title>Rekomendasi - Program Diet</title>
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

            <div class="w-full bg-white drop-shadow-lg py-6 lg:py-[69px] px-6 flex flex-col rounded-lg lg:gap-x-[27px] gap-y-6 justify-center">
                <a class="flex items-center font-bold" href="/"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 12H6M12 5l-7 7 7 7"></path>
                    </svg>
                    Kembali</a>
                <h2 class="text-2xl font-bold text-center my-3">Rekomendasi Kalori</h2>
                <table class="w-full my-3 table-auto border border-gray-300">
                    <thead>
                        <tr>
                            <th class="border bg-gray-100 p-3">Nama</th>
                            <th class="border bg-gray-100 p-3">Jumlah</th>
                            <th class="border bg-gray-100 p-3">Kalori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-3">Nasi Putih</td>
                            <td class="border p-3">100 gram</td>
                            <td class="border p-3">270 kal</td>
                        </tr>
                        <tr>
                            <td class="border p-3">Nasi Putih</td>
                            <td class="border p-3">100 gram</td>
                            <td class="border p-3">270 kal</td>
                        </tr>
                        <tr>
                            <td class="border p-3">Nasi Putih</td>
                            <td class="border p-3">100 gram</td>
                            <td class="border p-3">270 kal</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</body>


</html>