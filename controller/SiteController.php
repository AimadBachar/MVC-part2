<?php

namespace App\Controller;


use App\Core\Request;
use App\Core\Controller;
use App\Core\Application;
use App\models\ContactModel;

/**
 * Class ContactController
 * @package App\Controller
 */
class SiteController extends Controller
{
    /**
     * show page contact and controll if registration is valid
     * @param Request $request
     * @return view
     */
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
     * show page welcome
     * @return view
     */
    public static function welcome(){
      $params = [
        'username' => 'toto',
        'email' => "allll@daada.fr"
      ];
    
      return Controller::renderShowView("welcome", $params);
      
    }
   
}