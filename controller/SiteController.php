<?php

namespace App\Controller;


use App\Core\Request;
use App\Core\Controller;
use App\Core\Application;
class SiteController extends Controller
{
    // public static function handleContact()
    // {
    //   var_dump($_POST);
    // }

    public static function handleContact(Request $request)
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