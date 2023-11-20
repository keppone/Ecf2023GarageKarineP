<?php 

namespace App\Controllers; 

use App\Models\User;
use App\Controllers\Controller;

class UserController extends Controller {

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByUserEmail($_POST['email']);

        if (password_verify($_POST['password'], $user->password)){

            $_SESSION['auth'] =(int) $user->admin;
            return header('Location: /Ecf2023GarageKarineP/admin/cars?success=true');
           
        } else {
            return header('Location: /Ecf2023GarageKarineP/login');
        }
    }

    public function logout()
    {
        session_destroy();
        return header('Location: /Ecf2023GarageKarineP/');
    }
}