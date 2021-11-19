<?php

namespace App\Controller;

use App\Core\Application;
use App\Core\Controller;
class SiteController extends Controller
{
    public static function handleContact()
    {
      var_dump($_POST);
    }

    /**
     * show page
     * @return void
     */
    public static function contact(){
        return Controller::renderShowView("contact", $data = []);
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