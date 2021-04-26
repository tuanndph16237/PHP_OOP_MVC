<?php
namespace App\Controllers;
use App\Models\User;

class LoginController extends BaseController{
    public function index(){
        $this->view('login.index');
        
        
    }

    public function login(){
        if(!empty($_POST)){
            $users = User::all();
        // echo "<pre>";
        // var_dump($users);die();
            
            foreach ($users as $key => $user) {
                $matched = password_verify( $_POST['password'], $user['password']);
                if($user['email'] == $_POST['email'] && $matched){
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                }else{
                    $_SESSION['error_login'] = "Tài khoản hoặc mật khẩu không đúng";
                }
            }
            header('location: '.BASE_URL);
        }
        
    }
    
}

?>