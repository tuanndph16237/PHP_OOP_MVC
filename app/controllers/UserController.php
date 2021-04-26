<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends BaseController{
    public function index(){
        $users = User::all();
        $this->view('users.index',compact('users'));
    }

    public function create(){
        $this->view('users.add');
    }

    public function store(){
        $users = User::all();
        $user = new User();
        $file_name = $_FILES['avatar']['name'];

        //kiểm tra email tồn tại
        foreach ($users as $key => $value) {
            if($value['email']==$_POST['email']){
                $error = "Email đã tồn tại!";
                $_SESSION['error'] = $error;
                // $this->view('users.add', compact('error'));
                header('location: '.BASE_URL.'add-user');
                die();
            }
        }

        //mã hóa mật khẩu
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $hashed_password;
        $user->avatar = $file_name;

        $file = $_FILES['avatar']['tmp_name'];
        $path ="./public/images/users/".$file_name;
        move_uploaded_file($file, $path);
        $user->save();
        header('location: '.BASE_URL.'user');
    }

    public function edit(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $user = User::find($id);
        if(!$user){
            header('location: '.BASE_URL.'user');
            die();
        }
        $this->view('users.edit',compact('user'));
    }

    public function update(){
        $id = $_POST['id'];
    
        $users = User::whereNotIn('id', [$id])->get();
        // echo "<pre>";
        // var_dump($users); die();
        foreach ($users as $key => $user) {
            if($user['email']==$_POST['email']){
                $error_email = "Email đã tồn tại!";
                $_SESSION['error_email'] = $error_email;
                header('location: '.BASE_URL.'edit-user&id='.$id);
                die();
            }
        }
        $user = User::find($id);
        $avatar = $user->avatar;
        if($user){
            if(!empty($_POST['password'])){
                $password = $_POST['password'];
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $user->password = $hashed_password;
            }
            
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            if(isset($_FILES['avatar']['name'])){
                $user->avatar =  $_FILES['avatar']['name'];
                $file = $_FILES['avatar']['tmp_name'];
                $path ="./public/images/users/".$_FILES['avatar']['name'];
                move_uploaded_file($file, $path);
            }
            if(empty($_FILES['avatar']['name'])){
                $user->avatar = $avatar;
            }
            $user->save();
        }
        header('location: '.BASE_URL.'user');
    }

    public function destroy(){
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        header('location: '.BASE_URL.'user');
    }



}
?>