<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function loginView()
    {
        return $this->view('auth/login');
    }

    public function registerView()
    {
        return $this->view('auth/register');
    }

    public function register()
    {
        // Simple validation
        if ($_POST['password'] !== $_POST['password_confirm']) {
            return $this->view('auth/register', ['error' => 'Пароли не совпадают']);
        }

        if (User::findByEmail($_POST['email'])) {
            return $this->view('auth/register', ['error' => 'Email уже занят']);
        }

        User::create($_POST);
        $this->redirect('/login');
    }

    public function login()
    {
        $user = User::findByEmail($_POST['email']);
        if ($user && password_verify($_POST['password'], $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            $this->redirect('/dashboard');
        }
        return $this->view('auth/login', ['error' => 'Неверный email или пароль']);
    }

    public function logout()
    {
        session_destroy();
        $this->redirect('/');
    }
}
