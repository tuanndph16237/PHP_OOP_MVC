
<?php $__env->startSection('title', 'Quản lý danh mục'); ?>

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
                <li class="active">Quản lý danh mục</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý danh mục</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="bars pull-left" style="display: flex;">
                                    <div id="toolbar" class="btn-group" style="margin-right: 74px">
                                        <a href=" <?php echo e(BASE_URL.'add-cate'); ?> " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm danh mục
                                        </a>
                                    </div>
                                    <form method="post" action="" class="form-inline">
                                        <input class="form-control" type="search" placeholder="Nhập tên danh mục" name="keyword">
                                        <button name="btn" class="btn btn-warning" type="submit">Tìm</button>
                                    </form> 
                                </div>
                            </div>
                            <div style="clear: both; margin: 10px 0;" class="text-success">
                                <?php if(isset($_POST['keyword'])): ?>
                                    <p style="font-size: 16px">Tìm thấy <?php echo e(count($categories)); ?> danh mục</p>
                                <?php endif; ?>
                            </div>
                            <div class="fixed-table-container">
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                    <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="">
                                                    <div class="th-inner sortable">ID</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Tên danh mục</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Tổng sản phẩm</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Show Menu</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Hành động</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr data-index="0">
                                                    <td style=""> <?php echo e($category->id); ?> </td>
                                                    <td style=""><?php echo e($category->cate_name); ?></td>
                                                    <td style=""><?php echo e(count($category->products)); ?></td>
                                                    <td style="">
                                                        <?php if($category->show_menu == 1): ?>
                                                            <span class="label label-success">
                                                                có
                                                            </span>
                                                        <?php else: ?>
                                                            <span class="label label-danger">
                                                                không
                                                            </span>
                                                        <?php endif; ?>
                                                        
                                                    </td>
                                                    <td class="form-group" style="">
                                                        <a href=" <?php echo e(BASE_URL.'edit-cate&id='.$category->id); ?> " class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                                        <a onclick="return del( '<?php echo e($category->cate_name); ?>' );" href="<?php echo e(BASE_URL.'del-cate&id='.$category->id); ?>" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fixed-table-pagination"></div>
                            </div>
                            <?php if(isset($_POST['keyword'])): ?>
                                <a style="display: inline-block; margin-top: 12px" class="btn btn-primary" href="<?php echo e(BASE_URL.'category'); ?> ">Tất cả danh mục</a>
                                
                            <?php endif; ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php if(!isset($_POST['keyword'])): ?>
                        <div class="panel-footer">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="<?php echo e(BASE_URL.'category?page='.$pagePrev); ?>">«</a></li>

                                    <li class="page-item <?php if($_GET['page'] == 1 || !isset($_GET['page'])): ?>
                                    active
                                    <?php endif; ?>"><a class="page-link" href="<?php echo e(BASE_URL.'category?page=1'); ?>">1</a></li>
                                    <?php for($i = 2; $i <= $totalPage; $i++): ?>
                                        <li class="page-item <?php if($_GET['page']==$i): ?>
                                            active
                                        <?php endif; ?>"><a class="page-link" href="<?php echo e(BASE_URL.'category?page='.$i); ?> "><?php echo e($i); ?> </a></li>
                                    <?php endfor; ?>
                                    
                                    <li class="page-item"><a class="page-link" href="<?php echo e(BASE_URL.'category?page='.$pageNext); ?>">»</a></li>
                                </ul>
                            </nav>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\ass_php2\app\views/categories/index.blade.php ENDPATH**/ ?>