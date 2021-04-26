<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	<?php echo $__env->yieldContent('title'); ?>
</title>

<?php echo $__env->make('layouts.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--[if lt IE 9]>
<script src="http://localhost/ass_php2/public/js/html5shiv.js"></script>
<script src="http://localhost/ass_php2/public/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><span>Qc</span>Store</a>
						<ul class="user-menu">
							<li class="dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Admin <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									
									<li><a href=" <?php echo e(BASE_URL.'logout'); ?> "><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div>
									
                </div>
                <!-- /.container-fluid -->
			</nav>
		
	<?php echo $__env->make('layouts.slibar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
	<?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH F:\xampp\htdocs\ass_php2\app\views/layouts/main.blade.php ENDPATH**/ ?>