
<?php $__env->startSection('title', 'Sửa ảnh sản phẩm'); ?>
    
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
            <li><a href="">Quản lý ảnh sản phẩm</a></li>
            <li class="active">Sửa ảnh sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa ảnh sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post" action=" <?php echo e(BASE_URL.'update-gallery'); ?> " enctype="multipart/form-data">
                            <?php
                                $i = 1;
                                $a = 1;
                                
                            ?>
                            <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                    <input type="hidden" name="prd_id" value=" <?php echo e($_GET['prd_id']); ?> ">
                                    <input type="hidden" name="id" value=" <?php echo e($gallery->id); ?> ">
                                    <label>Ảnh <?php echo e($i++); ?> </label>
                                    <input type="file" name="img_url<?php echo e($a++); ?>">
                                    <br>
                
                                    <img src=" <?php if (strlen(strstr($gallery->img_url, 'https')) > 0) {echo $gallery->img_url;} 
                                    else {echo './public/images/products/'.$gallery->img_url;} ?> " width="250">
                                </div>
                                <br><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <input name="product_id" type="hidden" value="1">
                            <div class="pb-2">
                                <button type="submit" name="sbm" class="btn btn-success">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\app\views/gallery/edit.blade.php ENDPATH**/ ?>