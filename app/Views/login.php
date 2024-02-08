<head>

    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="css/app.css">


</head>

<!-- [ auth-signin ] start -->
<div class="bg-primary h-screen flex justify-center items-center px-2 ">
    <div class="px-2">
        <form id="loginForm" action="/login" method="post" class="bg-[#F5FCFA] overflow-hidden h-auto w-auto p-6 md:min-h-[400px] md:w-[400px] rounded-[8px] flex flex-col items-center justify-center gap-y-12">
            <h2 class="text-emerald-400 text-4xl font-bold font-['Plus Jakarta Sans']">Login</h2>
            <?php $message = session()->getFlashdata('message'); ?>
            <?php $message_type = session()->getFlashdata('message_type'); ?>

            <?php if ($message) : ?>
                <div class=" alert <?= strpos($message_type, 'success') !== false ? 'alert-success' : 'text-customred' ?>">
                    <?= $message ?>
                </div>
            <?php endif; ?>

            <div class="flex gap-4">
                <img src="assets/user.svg" alt="">
                <div class="text-emerald-400 text-base font-bold font-['Plus Jakarta Sans']">
                    <input type="text" class="bg-transparent focus:outline-none border-b-2 border-primary py-4 placeholder:text-primary" name="username" placeholder="Masukkan Username" required="required">
                </div>
            </div>
            <div class="flex gap-4">
                <img src="assets/password.svg" alt="">
                <div class="text-emerald-400 text-base font-bold font-['Plus Jakarta Sans']">
                    <input type="password" class="bg-transparent focus:outline-none border-b-2 border-primary py-4 placeholder:text-primary" name="password" placeholder="Masukkan Password" required="required">
                </div>
            </div>
            <a href="/register" class="border-b border-b-emerald-400 capitalize text-primary">register</a>
            <button type="submit" id="login" class="w-40 h-12 relative hover:cursor-pointer">
                <div class="w-40 h-12 bg-emerald-400 rounded-lg flex justify-center items-center gap-x-4">
                    <div class=" text-white text-xl font-bold font-['Plus Jakarta Sans'] leading-3">
                        Login
                    </div>
                    <img src="assets/VectorSend.svg" alt="">
                </div>
            </button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $("#login").click(function(e) {
            var formData = $('#loginForm').serialize();
            $.ajax({
                type: "POST",
                url: "/login",
                data: formData,
                dataType: "JSON",
                success: function(response) {
                    localStorage.setItem('user_id',response.admin_user_id)
                    window.location.href = '/'
                }
            });
        });
    });
</script>
</body>

</html>