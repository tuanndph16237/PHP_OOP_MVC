<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController{
    public function index(){
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $rowsPerPage = 5;
        $start = ($page-1)*$rowsPerPage;
        $end = $page * $rowsPerPage;

        $totalPage = ceil((count(Category::all())/$rowsPerPage));

        if($page<=1){
            $pagePrev = 1;
        }else{
            $pagePrev = $page - 1;
        }

        if($page >= $totalPage){
            $pageNext = $totalPage;
        }else{
            $pageNext = $page + 1;
        }
        if(isset($_POST['keyword'])){
            $keyword = $_POST['keyword'];
            $categories = Category::where('cate_name', 'like', "%$keyword%")->get();
            $this->view('categories.index', compact('categories','totalPage','pagePrev','pageNext'));
        }else{
            $categories = Category::limit($rowsPerPage)->skip($start)->get();
            $this->view('categories.index', compact('categories','totalPage','pagePrev','pageNext'));
        }
    }
    public function create(){
        $this->view('categories.add');
    }

    public function store(){
        $categories = Category::all();
        foreach ($categories as $key => $category) {
            if($category->cate_name == $_POST['cate_name']){
                $_SESSION['error_category_name'] = 'Đã tồn tại danh mục';
                header('location: '.BASE_URL.'add-cate');
                die();
            }
        }
        $data = $_POST;
        $model = new Category();
        $model->fill($data);

        $model->save();
        header('location: '.BASE_URL.'category?page=1');
    }

    public function edit(){
        $id = $_GET['id'];
        $model = Category::find($id);
        if(!isset($model)){
            header('location: '.BASE_URL.'category');
            die();
        }

        $this->view('categories.edit', compact('model'));
    }

    public function update(){
        $id = $_POST['id'];
        // echo $id; die();    
        $model = Category::find($id);
        if($model){
            $model->fill($_POST);
            $model->save();
        }
        header('location: '.BASE_URL.'category?page=1');
    }

    public function destroy(){
        //kiểm tra xem có danh mục với id trên đường dẫn hay không
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        // echo "<pre>";
        // var_dump($model); die();
        //nếu có thì thực hiện xóa toàn bộ sản phẩm thuộc về danh mục đó
        if($model){
            Product::where('cate_id', $id)->delete();
            //thực hiện xóa danh mục
            $model->delete();
        }
        header('location: '.BASE_URL.'category?page=1');
    }

}
?>