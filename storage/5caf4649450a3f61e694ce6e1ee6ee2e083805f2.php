
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
                <li class="active">Cập nhật tài khoản</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật tài khoản</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <?php if(isset($_SESSION['error_email'])): ?>
                                <div class="alert alert-danger"> <?php echo e($_SESSION['error_email']); ?> </div>
                            <?php endif; ?>

                            <form id="edit-user" action=" <?php echo e(BASE_URL.'update-user'); ?> " role="form" method="post" enctype="multipart/form-data">
                                <?php if(isset($_SESSION['error'])): ?>
                                    <div class="alert alert-danger"> <?php echo e($_SESSION['error']); ?> </div>
                                <?php endif; ?>
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
                                <div class="form-group">
                                    <label>Họ &amp; Tên</label>
                                    <input id="name" name="name" required="" class="form-control" placeholder="" value="<?php echo e($user->name); ?>">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" name="email" type="text" class="form-control" value="<?php echo e($user->email); ?>">
                                    <span class="form-message"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Ảnh đại diện</label> <br>
                                    <input id="avatar" name="avatar" type="file" accept="image/*" onchange="loadFile(event)">
                                    <span class="form-message"></span> <br>
                                    <img id="output" src=" <?php echo e(BASE_URL.'public/images/users/'.$user->avatar); ?> " width="200">
                                </div>

                                <span class="show_change_pass">Bạn muốn đổi mật khẩu?</span> <br>
                                <div class="change_pass">
                                    <div class="form-group">
                                        <label>Mật khẩu mới</label>
                                        <input id="password" name="password" type="password" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu mới</label>
                                        <input id="re_password" name="re_password" type="password" class="form-control">
                                        <span class="form-message"></span><br>
                                        <span class="hide_change_pass">Ẩn đổi mật khẩu?</span> 
                                    </div>
                                    
                                </div>
                                
                                <div style="margin-top: 20px" class="submit">
                                    <button name="sbm" type="submit" class="btn btn-success">Cập nhật</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>
                                </div>
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
<?php
    if(isset($_SESSION['error_email'])){
        unset($_SESSION['error_email']);
    }

?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\app\views/users/edit.blade.php ENDPATH**/ ?>