<?php

require_once __DIR__ . '/../src/Core/Database.php';
require_once __DIR__ . '/../src/Core/Router.php';
require_once __DIR__ . '/../src/Core/Controller.php';
require_once __DIR__ . '/../src/Core/View.php';

// Spl Autoloader (Simple fallback for local development without composer)
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../src/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

session_start();

use App\Core\Router;

$router = new Router();

// Define Routes
$router->add('GET', '/', 'HomeController@index');
$router->add('GET', '/login', 'AuthController@loginView');
$router->add('POST', '/login', 'AuthController@login');
$router->add('GET', '/register', 'AuthController@registerView');
$router->add('POST', '/register', 'AuthController@register');
$router->add('GET', '/logout', 'AuthController@logout');

$router->add('GET', '/dashboard', 'DashboardController@index');

$router->add('GET', '/profile', 'ProfileController@index');
$router->add('POST', '/profile', 'ProfileController@update');

$router->add('GET', '/plots/create', 'PlotController@createView');
$router->add('POST', '/plots/create', 'PlotController@create');

$router->add('GET', '/analysis/plan', 'AIController@planView');
$router->add('POST', '/analysis/plan', 'AIController@generatePlan');

$router->add('GET', '/analysis/plant', 'AIController@plantView');
$router->add('POST', '/analysis/plant', 'AIController@analyzePlant');

$router->add('GET', '/analysis/animal', 'AIController@animalView');
$router->add('POST', '/analysis/animal', 'AIController@analyzeAnimal');

// Dispatch
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
