<?php

namespace App\Controller;


use App\Core\Controller;
class AuthController extends Controller
{
    public static function handleLogin()
    {
      var_dump($_POST);
    }

    /**
     * show page
     * @return void
     */
    public static function login(){
        return Controller::renderShowView("login", $data = []);
    }


    public static function handleRegister()
    {
      var_dump($_POST);
    }

    /**
     * show page
     * @return void
     */
    public static function register(){
        return Controller::renderShowView("register", $data = []);
    }

    /**
     * show page
     * @return void
     */
    public static function welcome(){
      $params = [
        'username' => 'toto',
        'email' => "allll@daada.fr"
      ];
    
      return Controller::renderShowView("welcome", $params);
      
    }
   
}