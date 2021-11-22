<?php

namespace App\Controller;


use App\Core\Controller;
use App\Core\Request;
use App\models\RegisterModel;

class AuthController extends Controller
{
    public static function login(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $body = $request->getBody();
            echo '<pre>';
            print_r($body);
            echo '</pre>';
            exit;
        }
        return Controller::renderShowView("login", $data = []);
    }

    /**
     * show page
     * @return void
     */
    public static function register(Request $request)
    {
        $registerModel = new RegisterModel();
        if ($request->getMethod() == 'post') {

            $registerModel->loadData($request->getBody());

            if ($registerModel->isValid() && $registerModel->register()) {
                return 'Success';
            }

            return Controller::renderShowView("register", [
                'model' => $registerModel
            ]);

        }
        return Controller::renderShowView("register", [
            'model' => $registerModel
        ]);

    }
}
