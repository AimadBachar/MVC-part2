<?php

namespace App\Core;

use App\Core\Router;
use App\Core\Response;
use App\Core\Request;
use App\Core\Database;

class Application
{
    public static string $ROOT_DIR;
    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $db;

    /**
     * Application constructor.
     * @param string $rootDir
     * @return void
     */
    public function __construct(string $rootPath, array $config)
    {   
        self::$app = $this;
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
    }

    /**
     * resolve the application routes
     * @return void
     */
    public function run()
    {
        echo $this->router->resolve();
    }
}
