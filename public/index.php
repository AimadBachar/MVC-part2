<?php

use App\Core\Application;
use App\Controller\SiteController;
use App\Controller\AuthController;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();




$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'welcome']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

// Auth routes
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
