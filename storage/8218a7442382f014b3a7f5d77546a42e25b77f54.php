

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
                                        <a style="display: inline-block; margin-right: 8px" href=" <?php echo e(BASE_URL.'add-gallery&prd_id='.$product->id); ?> " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm ảnh
                                        </a>
                                        <a href=" <?php echo e(BASE_URL.'edit-gallery&prd_id='.$product->id); ?> " class="btn btn-primary">
                                            <i class="glyphicon"></i> Sửa ảnh
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
                                            <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover">
                                                <h4 style="padding: 16px" class="text-center p-4">Ảnh của sản phẩm: <b><?php echo e($product->name); ?> </b></span></h4>
                                                <div class="row d-flex" style="margin-bottom: 12px;">
                                                    <?php if(count($product->galleries)==0): ?>
                                                        <p style="margin-left: 30px;">Không có ảnh nào đâu!</p>
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $product->galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-md-4" style="padding: 12px; max-height: 360px; overflow: hidden; postion: relative">
                                                                
                                                                <img style="border: 2px solid #ccc; border-radius: 4px" src=" <?php if (strlen(strstr($gallery->img_url, 'https')) > 0) {echo $gallery->img_url;} 
                                                                else {echo './public/images/products/'.$gallery->img_url;} ?> " width="100%">
                                                                <a id="delete" href=" <?php echo e(BASE_URL.'del-gallery?prd_id='.$product->id.'&gallery_id='.$gallery->id); ?>">x</a>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </table> 
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\app\views/gallery/index.blade.php ENDPATH**/ ?>