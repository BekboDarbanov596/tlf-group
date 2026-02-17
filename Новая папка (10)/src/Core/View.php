<?php

namespace App\Core;

class View
{
    public static function render($view, $data = [], $layout = 'main')
    {
        extract($data);

        // CSRF Token generation for forms
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        $csrf_token = $_SESSION['csrf_token'];

        ob_start();
        $viewPath = __DIR__ . "/../Views/$view.php";
        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "View $view not found";
        }
        $content = ob_get_clean();

        $layoutPath = __DIR__ . "/../Views/layouts/$layout.php";
        if (file_exists($layoutPath)) {
            require $layoutPath;
        } else {
            echo $content;
        }
    }

    public static function escape($text)
    {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}
