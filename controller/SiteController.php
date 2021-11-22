<?php

namespace App\Controller;


use App\Core\Request;
use App\Core\Controller;
use App\Core\Application;
use App\models\ContactModel;

class SiteController extends Controller
{
    // public static function handleContact()
    // {
    //   var_dump($_POST);
    // }

    public static function contact(Request $request)
    {
      $contactModel = new ContactModel();
      if ($request->getMethod() == 'post') {

          $contactModel->loadData($request->getBody());

          if ($contactModel->isValid() && $contactModel->contact()) {
              return 'Success';
          }

          return Controller::renderShowView("contact", [
              'model' => $contactModel
          ]);

      }
      return Controller::renderShowView("contact", [
          'model' => $contactModel
      ]);
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