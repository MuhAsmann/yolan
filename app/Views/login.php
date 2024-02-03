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
<div class="bg-primary h-screen flex justify-center items-center">
    <div>
        <form action="/login" method="post" class="bg-slate-400 h-fix">
            <h2 class="">Admin Login</h2>
            <?php $message = session()->getFlashdata('message'); ?>
            <?php $message_type = session()->getFlashdata('message_type'); ?>

            <?php if ($message) : ?>
            <div class=" alert <?= strpos($message_type, 'success') !== false ? 'alert-success' : 'alert-danger' ?>">
                <?= $message ?>
            </div>
            <?php endif; ?>

            <div class="">
                <input type="text" class="" name="username" placeholder="Username" required="required">
            </div>
            <div class="">
                <input type="password" class="" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="">Sign in</button>
            </div>
        </form>
    </div>
</div>



</body>

</html>