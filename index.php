<?php
    session_start();
    $url = isset($_GET['url']) ? $_GET['url'] : "/";
    require_once './config/helpers.php';
    require_once './vendor/autoload.php';
    require_once './config/Database.php';

    use App\Controllers\CategoryController;
    use App\Controllers\ProductController;
    use App\Controllers\HomeController;
    use App\Controllers\UserController;
    use App\Controllers\GalleryController;
    use App\Controllers\LoginController;
    use App\Controllers\LogoutController;

    if(isset($_SESSION['email']) && isset($_SESSION['password'])){
        switch ($url) {
            case '/':
                $ctr = new HomeController;
                $ctr->index();
            break;
            case 'product':
                // echo "<pre>";
                // var_dump($_REQUEST); die();
                $ctr = new ProductController;
                $ctr->index();
            break;
    
            case 'add-product':
                $ctr = new ProductController;
                $ctr->create();
            break;
    
            case 'save-add-product':
                $ctr = new ProductController;
                $ctr->store();
            break;
    
            case 'edit-product':
                $ctr = new ProductController;
                $ctr->edit();
            break;
    
            case 'update-product':
                $ctr = new ProductController;
                $ctr->update();
            break;
    
            case 'del-product':
                $ctr = new ProductController;
                $ctr->destroy();
            break;

            case 'search-product':
                $ctr = new ProductController;
                $ctr->search();
            break;
    
            // category
            case 'category':
                $ctr = new CategoryController;
                $ctr->index();
            break;
    
            case 'add-cate':
                $ctr = new CategoryController;
                $ctr->create();
            break;
    
            case 'save-add-cate':
                $ctr = new CategoryController;
                $ctr->store();
            break;
    
            case 'edit-cate':
                $ctr = new CategoryController;
                $ctr->edit();
            break;
    
            case 'update-cate':
                $ctr = new CategoryController;
                $ctr->update();
            break;
    
            case 'del-cate':
                $ctr = new CategoryController;
                $ctr->destroy();
            break;
    
            //user
            case 'user':
                $ctr = new UserController;
                $ctr->index();
            break;
    
            case 'add-user':
                $ctr = new UserController;
                $ctr->create();
            break;
    
            case 'save-add-user':
                $ctr = new UserController;
                $ctr->store();
            break;
    
            case 'edit-user':
                $ctr = new UserController;
                $ctr->edit();
            break;
    
            case 'update-user':
                $ctr = new UserController;
                $ctr->update();
            break;
    
            case 'del-user':
                $ctr = new UserController;
                $ctr->destroy();
            break;
    
            //galary
            case 'gallery':
                $ctr = new GalleryController;
                $ctr->index();
            break;
    
            case 'add-gallery':
                $ctr = new GalleryController;
                $ctr->create();
            break;
    
            case 'save-add-gallery':
                $ctr = new GalleryController;
                $ctr->store();
            break;
    
            case 'edit-gallery':
                $ctr = new GalleryController;
                $ctr->edit();
            break; 
            case 'update-gallery':
                $ctr = new GalleryController;
                $ctr->update();
            break; 
    
            case 'del-gallery':
                $ctr = new GalleryController;
                $ctr->destroy();
            break;

            case 'logout':
                $ctr = new LogoutController;
                $ctr->index();
    
            default:
                $ctr = new HomeController;
                $ctr->index();
                break;
        }
    }else{
        $ctr = new LoginController;
        if(empty($_POST)){
            $ctr->index();
        }
        
        $ctr->login();
    }
    
?>