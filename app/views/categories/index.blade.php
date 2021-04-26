@extends('layouts.main')
@section('title', 'Quản lý danh mục')

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
                                        <a href=" {{BASE_URL.'add-cate'}} " class="btn btn-success">
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
                                @if (isset($_POST['keyword']))
                                    <p style="font-size: 16px">Tìm thấy {{count($categories)}} danh mục</p>
                                @endif
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
                                            @foreach ($categories as $category)
                                                <tr data-index="0">
                                                    <td style=""> {{$category->id}} </td>
                                                    <td style="">{{$category->cate_name}}</td>
                                                    <td style="">{{count($category->products)}}</td>
                                                    <td style="">
                                                        @if ($category->show_menu == 1)
                                                            <span class="label label-success">
                                                                có
                                                            </span>
                                                        @else
                                                            <span class="label label-danger">
                                                                không
                                                            </span>
                                                        @endif
                                                        
                                                    </td>
                                                    <td class="form-group" style="">
                                                        <a href=" {{BASE_URL.'edit-cate&id='.$category->id}} " class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                                        <a onclick="return del( '{{$category->cate_name}}' );" href="{{BASE_URL.'del-cate&id='.$category->id}}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fixed-table-pagination"></div>
                            </div>
                            @if (isset($_POST['keyword']))
                                <a style="display: inline-block; margin-top: 12px" class="btn btn-primary" href="{{BASE_URL.'category'}} ">Tất cả danh mục</a>
                                
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    @if (!isset($_POST['keyword']))
                        <div class="panel-footer">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="{{BASE_URL.'category?page='.$pagePrev}}">«</a></li>

                                    <li class="page-item @if ($_GET['page'] == 1 || !isset($_GET['page']))
                                    active
                                    @endif"><a class="page-link" href="{{BASE_URL.'category?page=1'}}">1</a></li>
                                    @for ($i = 2; $i <= $totalPage; $i++)
                                        <li class="page-item @if ($_GET['page']==$i)
                                            active
                                        @endif"><a class="page-link" href="{{BASE_URL.'category?page='.$i}} ">{{$i}} </a></li>
                                    @endfor
                                    
                                    <li class="page-item"><a class="page-link" href="{{BASE_URL.'category?page='.$pageNext}}">»</a></li>
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
