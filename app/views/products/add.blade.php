@extends('layouts.main')
@section('title', 'Thêm sản phẩm')

@section('content')
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
                            <form id="add-prd" action=" {{BASE_URL.'save-add-product'}} " method="POST" enctype="multipart/form-data">
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
                                                <option value=" {{$category->id}} "> {{$category->cate_name}} </option>
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
    
                                {{-- <div class="form-group">
                                    <label>Lượt xem: </label>
                                    <input class="form-control" type="number" name="views">
                                </div> --}}
    
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
                        {{-- <div class="col-md-6">
                            
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="cat_id" class="form-control">
                                    <option value="1">iPhone</option>
                                    <option value="2">Samsung</option>
                                    <option value="3">Nokia</option>
                                    <option value="4">LG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="prd_status" class="form-control">
                                    <option value="1" selected="">Còn hàng</option>
                                    <option value="0">Hết hàng</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm nổi bật</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="prd_featured" type="checkbox" value="1">Nổi bật
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea required="" name="prd_details" class="form-control" rows="3"></textarea>
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row -->
    </div>
@endsection
