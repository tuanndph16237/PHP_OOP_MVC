<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    
    <div style=" padding: 6px; margin-top: 8px; border-bottom: 1px solid #f1f1f1">
        Hihi...Xin chào!😄😄
    </div>
    <ul class="nav menu">
        <li class="<?php if($_REQUEST['url']==null): ?>
        active
    <?php endif; ?>">
            <a href="<?php echo e(BASE_URL); ?>">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="<?php if($_REQUEST['url']=='category' || $_REQUEST['url']=='add-cate' || $_REQUEST['url']=='edit-cate'): ?>
            active
        <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'category'); ?>">
                <svg class="glyph stroked open folder">
                    <use xlink:href="#stroked-open-folder" />
                </svg>
                Quản lý danh mục
            </a>
        </li>
        <li class="<?php if($_REQUEST['url']=='product' || $_REQUEST['url']=='add-product' || 
        $_REQUEST['url']=='edit-product' || $_REQUEST['url']=='gallery' || $_REQUEST['url']=='add-gallery' 
        || $_REQUEST['url']=='edit-gallery'): ?>
            active
        <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'product'); ?>">
                <svg class="glyph stroked bag">
                    <use xlink:href="#stroked-bag"></use>
                </svg>
                Quản lý sản phẩm
            </a>
        </li>
        <li class="<?php if($_REQUEST['url']=='user' || $_REQUEST['url']=='add-user' || $_REQUEST['url']=='edit-user'): ?>
            active
        <?php endif; ?>">
            <a href="<?php echo e(BASE_URL.'user'); ?>">
                <svg class="glyph stroked male user ">
                    <use xlink:href="#stroked-male-user" />
                </svg>
                Quản lý tài khoản
            </a>
        </li>
        
        
        
    </ul>
</div>

<?php /**PATH F:\xampp\htdocs\ass_php2\app\views/layouts/slibar.blade.php ENDPATH**/ ?>