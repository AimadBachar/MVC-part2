<?php

namespace App\Core;

use App\Core\Application;


class Controller 
{   
    /**
     * Ret
     */
    public static function renderShowView(string $view,array $data = [])
    {
        return Application::$app->router->renderView($view, $data);
    }
}