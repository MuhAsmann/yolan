<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
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

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
					<form action="/login" method="post">
			<div class="avatar">
				<li style="font-size:63px;color:white;margin-left:10px" class="fa fa-user text-center"></li>
			</div>
			<h2 class="text-center">Admin Login</h2>
							<?php $message = session()->getFlashdata('message'); ?>
							<?php $message_type = session()->getFlashdata('message_type'); ?>

							<?php if ($message) : ?>
								<div class="alert <?= strpos($message_type, 'success') !== false ? 'alert-success' : 'alert-danger' ?>">
									<?= $message ?>
								</div>
							<?php endif; ?>
					
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="required">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-danger btn-lg btn-block">Sign in</button>
			</div>
		</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
