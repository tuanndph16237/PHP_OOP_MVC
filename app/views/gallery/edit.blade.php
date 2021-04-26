@extends('layouts.main')
@section('title', 'Sửa ảnh sản phẩm')
    
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
                        <form role="form" method="post" action=" {{BASE_URL.'update-gallery'}} " enctype="multipart/form-data">
                            @php
                                $i = 1;
                                $a = 1;
                                
                            @endphp
                            @foreach ($galleries as $gallery)
                                <div class="form-group">
                                    <input type="hidden" name="prd_id" value=" {{$_GET['prd_id']}} ">
                                    <input type="hidden" name="id" value=" {{$gallery->id}} ">
                                    <label>Ảnh {{$i++}} </label>
                                    <input type="file" name="img_url{{$a++}}">
                                    <br>
                
                                    <img src=" @php if (strlen(strstr($gallery->img_url, 'https')) > 0) {echo $gallery->img_url;} 
                                    else {echo './public/images/products/'.$gallery->img_url;} @endphp " width="250">
                                </div>
                                <br><br>
                            @endforeach
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
@endsection