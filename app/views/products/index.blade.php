@extends('layouts.main')
@section('title', 'Danh sách sản phẩm')

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
                <li class="active">Danh sách sản phẩm</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách sản phẩm</h1>
            </div>
            
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="bars pull-left" style="display: flex;">
                                    <div class="btn-group" style="margin-right: 74px">
                                        <a href=" {{BASE_URL.'add-product'}} " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
                                        </a>
                                    </div>
                                    <form method="post" action="" class="form-inline">
                                        <input class="form-control" type="search" placeholder="Nhập tên sản phẩm" name="keyword">
                                        <button name="btn" class="btn btn-warning" type="submit">Tìm</button>
                                    </form> 
                                </div>
                            </div>
                            <div style="clear: both; margin: 10px 0;" class="text-success">
                                @if (isset($_POST['keyword']))
                                    <p style="font-size: 16px">Tìm thấy {{count($products)}} sản phẩm</p>
                                @endif
                            </div>
                            
                            <div class="fixed-table-container">
                                
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                    <table data-toolbar="#toolbar"  class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="">
                                                    <div class="th-inner sortable">ID</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner sortable">Tên sản phẩm</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner sortable">Giá</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Ảnh sản phẩm</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Xem tất cả ảnh</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Danh mục</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Xếp hạng sao</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Lượt xem</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Hành động</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr data-index="0">
                                                    <td style=""> {{$product->id}}</td>
                                                    <td style="">{{$product->name}}</td>
                                                    <td style="">{{number_format($product->price)}} vnd</td>
                                                    <td>
                                                        <img src=" @php if (strlen(strstr($product->image, 'https')) > 0) {echo $product->image;} 
                                                        else {echo './public/images/products/'.$product->image;} @endphp " width="160">
                                                    </td>
                                                    <td style="">
                                                        <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#gallery-{{$product->id}}">
                                                            {{count($product->galleries)}} ảnh
                                                        </button>
                                                    </td>
                                                    <td style="">{{$product->category->cate_name}}</td>
                                                    <td style="">
                                                        {{$product->star}}
                                                        {{-- <i class="fas fa-star"></i> --}}
                                                    </td>
                                                    <td style="">{{$product->views}}</td>
                                                    <td class="form-group" style="">
                                                        <a href=" {{BASE_URL.'edit-product&id='.$product->id}} " class="btn btn-primary">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a onclick="return del( '{{$product->name}}' )" href="{{BASE_URL.'del-product&id='.$product->id}}" class="btn btn-danger">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    @foreach ($products as $product)
                                    <!-- Modal -->
                                        <div class="modal fade" id="gallery-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ảnh của sản phẩm: <b>{{$product->name}}</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                    @if (count($product->galleries)==0)
                                                        Không có ảnh nào đâu!
                                                    @else
                                                        @foreach ($product->galleries as $gallery)
                                                            <div class="col-md-4" style="margin-bottom: 4px; max-height: 180px; overflow: hidden;">
                                                                {{-- <img src="{{$gallery->img_url}}" width="100%"> --}}
                                                                <img style="border: 1px solid #ccc; border-radius: 4px" src=" @php if (strlen(strstr($gallery->img_url, 'https')) > 0) {echo $gallery->img_url;} 
                                                                else {echo './public/images/products/'.$gallery->img_url;} @endphp " width="100%">
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href={{BASE_URL . 'gallery?prd_id=' . $product->id}} class="btn btn-primary">Chi tiết</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="search-product" value="{{BASE_URL . 'api/search-product'}}"/>
                                    @endforeach
                                </div>
                                <div class="fixed-table-pagination"></div>
                            </div>
                            @if (isset($_POST['keyword']))
                                <a style="display: inline-block; margin-top: 12px" class="btn btn-primary" href="{{BASE_URL.'product'}} ">Tất cả sản phẩm</a>
                                
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @if (!isset($_POST['keyword']))
                        <div class="panel-footer">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="{{BASE_URL.'product?page='.$pagePrev}}">«</a></li>

                                    <li class="page-item @if ($_GET['page'] == 1 || !isset($_GET['page']))
                                    active
                                    @endif"><a class="page-link" href="{{BASE_URL.'product?page=1'}}">1</a></li>
                                    @for ($i = 2; $i <= $totalPage; $i++)
                                        <li class="page-item @if ($_GET['page']==$i)
                                            active
                                        @endif"><a class="page-link" href="{{BASE_URL.'product?page='.$i}} ">{{$i}} </a></li>
                                    @endfor
                                    
                                    <li class="page-item"><a class="page-link" href="{{BASE_URL.'product?page='.$pageNext}}">»</a></li>
                                </ul>
                            </nav>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
@endsection
