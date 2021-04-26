

<?php $__env->startSection('title', 'Danh sách ảnh sản phẩm'); ?>
    
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
                <li class="active">Quản lý ảnh sản phẩm</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý ảnh sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="bars pull-left">
                                    <div id="toolbar" class="btn-group">
                                        <a href=" <?php echo e(BASE_URL.'add-cate'); ?> " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm ảnh
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fixed-table-container">
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <div style="height: 50px; background: #f1f1f1; font-size: 16px; padding: 12px;">
                                                        <?php echo e($product->name); ?> </div>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <pre></pre>
                                                        <?php var_dump($product->galleries); die(); ?>
                                                        <td><img width="300" src=" <?php echo e($gallary_prd->id); ?> "></td>
                                                        <td><img width="300" src=" <?php echo e(BASE_URL.'public/images/products/nike_max_97.jpg'); ?> "></td>
                                                        <td><img width="300" src=" <?php echo e(BASE_URL.'public/images/products/nike_max_97.jpg'); ?> "></td>
                                                    </tr>
                                                </tbody>
                                            </table> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <div class="fixed-table-pagination"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\ass_php2\app\views/gallary/index.blade.php ENDPATH**/ ?>