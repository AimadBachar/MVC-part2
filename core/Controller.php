<?php

namespace App\Core;

use App\Core\Application;

/**
 * Class Controller
 * to create a controller
 * @package App\Core
 */
class Controller 
{   
    /**
     * function for rendering a view dynamically
     * @param string $view
     * @param array $data
     */
    public static function renderShowView(string $view,array $data = [])
    {
        return Application::$app->router->renderView($view, $data);
    }
}