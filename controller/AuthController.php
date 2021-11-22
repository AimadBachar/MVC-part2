<?php

namespace App\Controller;


use App\Core\Controller;
use App\Core\Request;
use App\models\RegisterModel;
use App\models\LoginModel;


class AuthController extends Controller
{
    public static function login(Request $request)
    {
        $loginModel = new LoginModel();
        if ($request->getMethod() == 'post') {

            $loginModel->loadData($request->getBody());

            if ($loginModel->isValid() && $loginModel->login()) {
                return 'Success';
            }

            return Controller::renderShowView("login", [
                'model' => $loginModel
            ]);

        }
        return Controller::renderShowView("login", [
            'model' => $loginModel
        ]);
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
