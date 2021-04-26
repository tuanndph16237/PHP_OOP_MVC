<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    {{-- <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form> --}}
    <div style=" padding: 6px; margin-top: 8px; border-bottom: 1px solid #f1f1f1">
        Hihi...Xin chào!😄😄
    </div>
    <ul class="nav menu">
        <li class="@if ($_REQUEST['url']==null)
        active
    @endif">
            <a href="{{BASE_URL}}">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="@if ($_REQUEST['url']=='category' || $_REQUEST['url']=='add-cate' || $_REQUEST['url']=='edit-cate')
            active
        @endif">
            <a href="{{BASE_URL.'category'}}">
                <svg class="glyph stroked open folder">
                    <use xlink:href="#stroked-open-folder" />
                </svg>
                Quản lý danh mục
            </a>
        </li>
        <li class="@if ($_REQUEST['url']=='product' || $_REQUEST['url']=='add-product' || 
        $_REQUEST['url']=='edit-product' || $_REQUEST['url']=='gallery' || $_REQUEST['url']=='add-gallery' 
        || $_REQUEST['url']=='edit-gallery')
            active
        @endif">
            <a href="{{BASE_URL.'product'}}">
                <svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg>
                Quản lý sản phẩm
            </a>
        </li>
        <li class="@if ($_REQUEST['url']=='user' || $_REQUEST['url']=='add-user' || $_REQUEST['url']=='edit-user')
            active
        @endif">
            <a href="{{BASE_URL.'user'}}">
                <svg class="glyph stroked male user ">
                    <use xlink:href="#stroked-male-user" />
                </svg>
                Quản lý tài khoản
            </a>
        </li>
        {{-- <li>
            <a href="comment.html">
                <svg class="glyph stroked two messages">
                    <use xlink:href="#stroked-two-messages" />
                </svg>
                Quản lý bình luận
            </a>
        </li> --}}
        {{-- <li>
            <a href=" {{BASE_URL.'gallery'}} ">
                <svg class="glyph stroked chain">
                    <use xlink:href="#stroked-chain" />
                </svg>
                Thư viện ảnh sản phẩm
            </a>
        </li> --}}
        {{-- <li>
            <a href="setting.html">
                <svg class="glyph stroked gear">
                    <use xlink:href="#stroked-gear" />
                </svg>
                Cấu hình
            </a>
        </li> --}}
    </ul>
</div>

