
<?php $__env->startSection('title', 'Cập nhật danh mục'); ?>

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
                <li><a href="">Quản lý danh mục</a></li>
                <li class="active">Cập nhật danh mục</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật danh mục</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            
                            <form id="edit-cate" role="form" method="post" action=" <?php echo e(BASE_URL . 'update-cate'); ?> ">
                                <input type="hidden" name="id" value = <?php echo e($model->id); ?>>
                                <div class="form-group">
                                    <label>Tên danh mục:</label>
                                    <input id="cate_name" type="text" name="cate_name" class="form-control"
                                        placeholder="Tên danh mục..." value="<?php echo e($model->cate_name); ?>" readonly>
                                        <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả:</label>
                                    <textarea name="desc" class="form-control" id="" cols="30" rows="5"><?php echo e($model->desc); ?></textarea>
                                    <script>CKEDITOR.replace('desc');</script>
                                </div>
                                <label>Show Menu:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="show_menu" value="1" 
                                    <?php if($model->show_menu==1): ?>
                                        checked
                                    <?php endif; ?>>
                                    <label class="form-check-label mr-4 inline-block">Có</label>
                                    <br>
                                    <input id="my-input" class="form-check-input" type="radio" name="show_menu" value=""
                                    <?php if($model->show_menu!==1): ?>
                                        checked
                                    <?php endif; ?>>
                                    <label class="form-check-label">Không</label>
                                </div>
                                <div class="pb-2">
                                    <button type="submit" name="sbm" class="btn btn-success">Cập nhật</button>
                                    <button type="reset" class="btn btn-primary">Làm mới</button>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!--/.main-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\app\views/categories/edit.blade.php ENDPATH**/ ?>