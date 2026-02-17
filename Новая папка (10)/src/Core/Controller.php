<?php

namespace App\Core;

abstract class Controller
{
    protected function view($view, $data = [])
    {
        View::render($view, $data);
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }

    protected function json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
