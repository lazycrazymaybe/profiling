<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/font-awesome/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/linearicons/style.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/toastr/toastr.min.css'?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assets/img/favicon.png'?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box overiding">
					<div class="left">
						<div class="content">
							<div class="header">
								<?php $text = ''; if($success != 1){ ?>
									<?php $success == 0 ? $text = 'Invalid Username or Password' : $text = 'This Account Is Already Login To Other Device'?>
								<div class="alert alert-danger alert-dismissible" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<i class="fa fa-info-circle"></i> <?= $text ?>
								</div>
								<?php }?>
								<div class="logo text-center"><img src="<?php echo base_url().'assets/img/camlogo.png'?>" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" method="post" action="<?= base_url().'Logins/index'?>">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="inpur" class="form-control" id="username" name="username" placeholder="Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">People Monitoring System</h1>
							<p>I Dunno what to put in here yet.</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
	<script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/vendor/toastr/toastr.min.js'?>"></script>
	<script src="<?php echo base_url().'assets/scripts/klorofil-common.js'?>"></script>
</body>

</html>
