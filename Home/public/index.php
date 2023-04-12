<?php
    session_start();
    $debug = false;

    require_once __DIR__.'/../../vendor/autoload.php';


    use Phpcourse\Myproject\Classes\Controllers\HomeController;

    use Phpcourse\Myproject\Classes\Interfaces\ControllerMethodName;

    use Phpcourse\Myproject\Classes\Router\Router;

    use Phpcourse\Myproject\Classes\StartApplication;

    $router = new Router();

    $router->addRoute('/', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/home', HomeController::class, ControllerMethodName::METHOD_NAME);
    $router->addRoute('/home_page', HomeController::class, ControllerMethodName::METHOD_NAME);

    $app = new StartApplication($router, $_SERVER['REQUEST_URI'] ?? '/');

    $app->run();

