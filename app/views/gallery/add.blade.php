@extends('layouts.main')
@section('title', 'Thêm ảnh sản phẩm')

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
            <li><a href="">Quản lý ảnh sản phẩm</a></li>
            <li class="active">Thêm ảnh sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm ảnh sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post" action=" {{BASE_URL.'save-add-gallery'}} " enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Chọn ảnh cần thêm</label>
                                <input id="img_url" type="file" name="img_url" class="form-control" accept="image/*" onchange="loadFile(event)">
                                <span class="form-message"></span> <br>
                                <img id="output" src="" width="300" >
                            </div>
                            <input name = "product_id" type="hidden" value="{{$product->id}}">
                            <div class="pb-2">
                                <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
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
@endsection