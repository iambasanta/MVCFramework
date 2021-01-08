<?php

namespace app\controllers;

use basanta\phpmvc\Application;
use basanta\phpmvc\Controller;
use basanta\phpmvc\middlewares\AuthMiddleware;
use basanta\phpmvc\Request;
use basanta\phpmvc\Response;
use app\models\User;
use app\models\UserLogin;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {
        $userLogin = new UserLogin();
        if ($request->isPost()) {
            $userLogin->loadData($request->getBody());
            if ($userLogin->validate() && $userLogin->login()) {
                $response->redirect('/');
                return;
            }
        }

        $this->setLayout('auth');
        return $this->render(
            'login',
            ['model' => $userLogin]
        );
    }

    public function register(Request $request)
    {
        $user = new User();


        if ($request->isPost()) {
            $user->loadData($request->getBody());
            if ($user->validate() && $user->register()) {
                Application::$app->session->setFlash('success', 'Registered sucessfully!');
                Application::$app->response->redirect('/');
            }
            return $this->render('register', [
                'model' => $user,
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $user,
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile');
    }
}
