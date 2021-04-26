<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Gallery;

class HomeController extends BaseController{
    public function index(){
        
        $categories = Category::all();
        
        $products = Product::all();
        $users = User::all();
        $galleries = Gallery::all();
        $this->view('home.index', compact('categories','products','users', 'galleries'));
    }
}
?>