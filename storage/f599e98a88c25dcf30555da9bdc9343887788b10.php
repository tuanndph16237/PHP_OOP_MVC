
<?php $__env->startSection('title', 'Thêm sản phẩm'); ?>

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
                <li><a href="">Quản lý sản phẩm</a></li>
                <li class="active">Thêm sản phẩm</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-10">
                            <form id="add-prd" action=" <?php echo e(BASE_URL.'save-add-product'); ?> " method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label >Tên sản phẩm: </label>
                                    <input id="name" class="form-control" type="text" name="name">
                                    <span class="form-message"></span>
                                </div>
    
                                <div class="form-group">
                                    <label >Giá bán: </label>
                                    <input id="price" class="form-control" type="number" name="price">
                                    <span class="form-message"></span>
                                </div>
    
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select id="cate_id" name="cate_id" class="form-control">
                                        <option value="">Chọn danh mục</option>
                                        <?php
                                            foreach ($categories as $key => $category) { ?>
                                                <option value=" <?php echo e($category->id); ?> "> <?php echo e($category->cate_name); ?> </option>
                                            <?php } ?>
                                    
                                    </select>
                                    <span class="form-message"></span>
                                </div>
    
                                <div class="form-group">
                                    <label >Mô tả ngắn: </label>
                                    <textarea style="width: 100%;" name="short_desc" cols="148" rows="4"></textarea>
                                    <script>CKEDITOR.replace('short_desc');</script>
                                </div>
    
                                <div class="form-group">
                                    <label >Chi tiết: </label>
                                    <textarea style="width: 100%;" name="detail" cols="148" rows="6"></textarea>
                                    <script>CKEDITOR.replace('detail');</script>
                                </div>
    
                                
    
                                <div class="mb-4 form-group">
                                    <label>Xếp hạng sao: </label> <br>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="1">
                                        <label class="" for="inlineRadio1">1</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="2">
                                        <label class="" for="inlineRadio2">2</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="3">
                                        <label class="" for="inlineRadio2">3</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="4">
                                        <label class="" for="inlineRadio2">4</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="5">
                                        <label class="" for="inlineRadio2">5</label>
                                    </div>
                                    <br>
                                    <span class="form-message"></span>
    
                                </div>
    
                                <div class="form-group">
                                    <label>Ảnh: </label> <br>
                                    <input id="image" type="file" name="image" accept="image/*" onchange="loadFile(event)">
                                    <span class="form-message"></span>
                                    <br>
                                    <img id="output" width="400">
                                </div>
                                <button name="btn" class="btn btn-success">Thêm mới</button>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\app\views/products/add.blade.php ENDPATH**/ ?>