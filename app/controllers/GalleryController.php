<?php
namespace App\Controllers;
use App\Models\Gallery;
use App\Models\Product;
class GalleryController extends BaseController{
    public function index(){
        $id = $_GET['prd_id'];
        $products = Product::all();
        $product = Product::find($id);
        if(!$product){
            header('location: '.BASE_URL.'product');
            die();
        }
        $this->view('gallery.index', compact('products','product'));
    }

    public function create(){
        $id = $_GET['prd_id'];
        $product = Product::find($id);
        
        $this->view('gallery.add', compact('product'));
    }

    public function store(){
        $gallery = new Gallery();
        $gallery->fill($_POST);
        $img_url = $_FILES['img_url']['name'];
        $img_url_tmp = $_FILES['img_url']['tmp_name'];
        $gallery->img_url = $img_url;
        $path = "./public/images/products/".$img_url;
        move_uploaded_file($img_url_tmp, $path);
        $gallery->save();
        header('location: '.BASE_URL.'gallery?prd_id='.$_POST['product_id']);
    }

    public function destroy(){
        $id = $_GET['gallery_id'];
        if(!isset($id)){
            header('location: '.BASE_URL.'gallery?prd_id='.$_GET['prd_id']);
            die();
        }
        $gallery = Gallery::find($id);
        // echo "<pre>";
        // var_dump($gallery);
        $gallery->delete();
        header('location: '.BASE_URL.'gallery?prd_id='.$_GET['prd_id']);
    
    }
    public function edit(){
        $prd_id = $_GET['prd_id']; 
        $galleries = Gallery::where('product_id', '=', $prd_id)->get();
        $this->view('gallery.edit', compact('galleries'));
    }

    public function update(){
        $img_urls = $_FILES;
        $prd_id = $_POST['prd_id'];
        // echo "<pre>";
        // var_dump($_POST); die();
        $i = 0;
        foreach ($img_urls as $key => $img_url) {
            $id = $_POST['id'];
            $i++;
            $img = Gallery::find($id);
            $img_name = $img->img_url;
            $img->product_id = $_POST['prd_id'];
            // echo "<pre>";
            // echo $_FILES["img_url$i"]['name']; die();
            $img->img_url = $_FILES["img_url$i"]['name'];
            if(isset($_FILES["img_url$i"]['name'])){
                $img->img_url = $_FILES["img_url$i"]['name'];
                $file = $_FILES["img_url$i"]['tmp_name'];
                $path ="./public/images/products/".$_FILES["img_url$i"]['name'];
                move_uploaded_file($file, $path);
            }
            if(empty($_FILES["img_url$i"]['name'])){
                $img->img_url = $img_name;
            }
            $img->save();
        }
        header('location: '.BASE_URL.'gallery?prd_id='.$prd_id);
    }
}

?>