
<?php $__env->startSection('title', 'Thêm tài khoản'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a>
                </li>
                <li><a href="">Quản lý tài khoản</a></li>
                <li class="active">Thêm tài khoản</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm tài khoản</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            
                            <form action=" <?php echo e(BASE_URL.'save-add-user'); ?> " role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Họ &amp; Tên</label>
                                    <input name="name" required="" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input name="password" required="" type="password" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Ảnh đại diện</label> <br>
                                    <input name="avatar" type="file">
                                </div>
                                
                                <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\ass_php2\app\views/users/create.blade.php ENDPATH**/ ?>