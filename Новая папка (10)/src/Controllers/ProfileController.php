<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;
use App\Core\Logger;
use App\Core\Database;

class ProfileController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('/login');
        }
    }

    public function index()
    {
        $user = User::findById($_SESSION['user_id']);
        return $this->view('profile', ['user' => $user]);
    }

    public function update()
    {
        $db = Database::getInstance();
        $sql = "UPDATE users SET full_name = ?, region = ?, activity_type = ?, phone = ?, show_phone = ? WHERE id = ?";

        $db->query($sql, [
            $_POST['full_name'],
            $_POST['region'],
            $_POST['activity_type'],
            $_POST['phone'],
            isset($_POST['show_phone']) ? 1 : 0,
            $_SESSION['user_id']
        ]);

        $_SESSION['user_name'] = $_POST['full_name'];
        Logger::log('update_profile');
        $this->redirect('/profile');
    }
}
