<?php 

namespace App\Controllers; 

use App\Models\User;
use App\Validation\Validator;
use App\Controllers\Controller;

class UserController extends Controller {

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'email'=>['required', 'mail'],
            'password'=>['required']
        ]);

        if($errors){
            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }

        $user = (new User($this->getDB()))->getByUserEmail($_POST['email']);

        if (password_verify($_POST['password'], $user->password)){

            $_SESSION['auth'] =(int) $user->admin;
            return header('Location: /admin/cars?success=true');
           
        } else {
            return header('Location: /login?success=false');
        }
    }

    public function logout()
    {
        session_destroy();
        return header('Location: /');
    }
}