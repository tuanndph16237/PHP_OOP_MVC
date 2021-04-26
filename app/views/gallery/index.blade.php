
@extends('layouts.main')
@section('title', 'Danh sách ảnh sản phẩm')
    
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
                                        <a style="display: inline-block; margin-right: 8px" href=" {{BASE_URL.'add-gallery&prd_id='.$product->id}} " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm ảnh
                                        </a>
                                        <a href=" {{BASE_URL.'edit-gallery&prd_id='.$product->id}} " class="btn btn-primary">
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
                                                <h4 style="padding: 16px" class="text-center p-4">Ảnh của sản phẩm: <b>{{$product->name}} </b></span></h4>
                                                <div class="row d-flex" style="margin-bottom: 12px;">
                                                    @if (count($product->galleries)==0)
                                                        <p style="margin-left: 30px;">Không có ảnh nào đâu!</p>
                                                    @else
                                                        @foreach ($product->galleries as $gallery)
                                                            <div class="col-md-4" style="padding: 12px; max-height: 360px; overflow: hidden; postion: relative">
                                                                {{-- <img src="{{$gallery->img_url}}" width="100%" style="border: 2px solid #ccc; border-radius: 4px"> --}}
                                                                <img style="border: 2px solid #ccc; border-radius: 4px" src=" @php if (strlen(strstr($gallery->img_url, 'https')) > 0) {echo $gallery->img_url;} 
                                                                else {echo './public/images/products/'.$gallery->img_url;} @endphp " width="100%">
                                                                <a id="delete" href=" {{ BASE_URL.'del-gallery?prd_id='.$product->id.'&gallery_id='.$gallery->id}}">x</a>
                                                            </div>
                                                        @endforeach
                                                    @endif
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
@endsection