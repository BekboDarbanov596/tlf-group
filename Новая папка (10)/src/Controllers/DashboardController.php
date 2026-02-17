<?php

namespace App\Controllers;

use App\Core\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('/login');
        }
    }

    public function index()
    {
        $plots = \App\Models\Plot::all($_SESSION['user_id']);
        return $this->view('dashboard', [
            'user_name' => $_SESSION['user_name'],
            'plots' => $plots
        ]);
    }
}
