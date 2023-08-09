
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>

<link href=" <?php echo e(BASE_URL.'public/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href=" <?php echo e(BASE_URL.'public/css/datepicker3.css'); ?> " rel="stylesheet">
<link href="<?php echo e(BASE_URL.'public/css/bootstrap-table.css'); ?>" rel="stylesheet">
<link href="<?php echo e(BASE_URL.'public/css/styles.css'); ?>" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					Login - Qcshop.vn
					
				</div>
				
				<div style="margin-left: 12px;margin-top: 6px;">
					<p>Tài khoản đăng nhập: quangchienxt2001@gmail.com</p>
					<p>Mật khẩu đăng nhập: 123456</p>
				</div>
				
				<div class="panel-body">
					<?php if(isset($_SESSION['error_login'])): ?>
						<div class="alert alert-danger"> <?php echo e($_SESSION['error_login']); ?> </div>
					<?php endif; ?>
					
					<form action="" role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
							</div>
							
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</body>

</html>
<?php
	unset($_SESSION['error_login']);
?><?php /**PATH C:\xampp\htdocs\php2\app\views/login/index.blade.php ENDPATH**/ ?>