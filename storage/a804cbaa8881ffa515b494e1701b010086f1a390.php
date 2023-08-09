
<?php $__env->startSection('title', 'Thêm danh mục'); ?>

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
                <li class="active">Thêm danh mục</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm danh mục</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            <?php if(isset($_SESSION['error_category_name'])): ?>
                                <div class="alert alert-danger"> <?php echo e($_SESSION['error_category_name']); ?> </div>
                            <?php endif; ?>
                            <form id="add-cate" role="form" method="post" action=" <?php echo e(BASE_URL . 'save-add-cate'); ?> ">

                                <div class="form-group">
                                    <label>Tên danh mục:</label>
                                    <input id="cate_name" type="text" name="cate_name" class="form-control"
                                        placeholder="Tên danh mục...">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả:</label>
                                    <textarea name="desc" class="form-control" id="" cols="30" rows="5"></textarea>
                                    <script>CKEDITOR.replace('desc');</script>
                                </div>
                                <div class="form-group">
                                    <label>Show Menu:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="show_menu" value="1">
                                        <label class="form-check-label mr-4 inline-block">Có</label>
                                        <br>
                                        <input id="my-input" class="form-check-input" type="radio" name="show_menu" value="">
                                        <label class="form-check-label">Không</label>
                                    </div>
                                    <span class="form-message"></span>
                                </div>
                                <div class="pb-2">
                                    <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
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
<?php if(isset($_SESSION['error_category_name'])): ?>
    <?php
        unset($_SESSION['error_category_name']);
    ?>
<?php endif; ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\app\views/categories/add.blade.php ENDPATH**/ ?>