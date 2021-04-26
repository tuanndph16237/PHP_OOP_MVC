
<?php $__env->startSection('title', 'Trang chủ - QcStore'); ?>
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
                <li class="active">Trang chủ quản trị</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Trang chủ quản trị</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked bag">
                                <use xlink:href="#stroked-bag"></use>
                            </svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"> <?php echo e(count($products)); ?> </div>
                            <div class="text-muted">Sản Phẩm</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-orange panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked open folder">
                                <use xlink:href="#stroked-open-folder" />
                            </svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo e(count($categories)); ?></div>
                            <div class="text-muted">Danh mục</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo e(count($users)); ?></div>
                            <div class="text-muted">Tài khoản</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                <div class="panel panel-red panel-widget">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-5 widget-left">
                            <svg class="glyph stroked app-window-with-content">
                                <use xlink:href="#stroked-app-window-with-content"></use>
                            </svg>
                        </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large"><?php echo e(count($galleries)); ?></div>
                            <div class="text-muted">Gallery</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\ass_php2\app\views/home/index.blade.php ENDPATH**/ ?>