<?php

namespace App\Controller;


use App\Core\Controller;
use App\Core\Request;

class AuthController extends Controller
{
    public static function login(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        print_r($body);
        echo '</pre>';
    }

    /**
     * show page
     * @return void
     */
    public static function handleLogin()
    {
        return Controller::renderShowView("login", $data = []);
    }


    public static function handleRegister(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        print_r($body);
        echo '</pre>';
    }

    /**
     * show page
     * @return void
     */
    public static function register()
    {
        return Controller::renderShowView("register", $data = []);
    }
}
