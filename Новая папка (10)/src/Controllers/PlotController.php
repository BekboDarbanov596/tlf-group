<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Plot;
use App\Models\CropHistory;
use App\Core\Logger;

class PlotController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('/login');
        }
    }

    public function createView()
    {
        return $this->view('plots/create');
    }

    public function create()
    {
        $plotId = Plot::create($_SESSION['user_id'], $_POST);

        // Add 3 years of history if provided
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($_POST["year_$i"])) {
                CropHistory::add($plotId, $_POST["year_$i"], $_POST["culture_$i"], $_POST["notes_$i"]);
            }
        }

        Logger::log('create_plot', "Plot ID: $plotId");
        $this->redirect('/dashboard');
    }

    public function list()
    {
        $plots = Plot::all($_SESSION['user_id']);
        return $this->json($plots);
    }
}
