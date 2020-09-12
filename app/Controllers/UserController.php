<?php


namespace app\Controllers;


use app\Helper\AuthHelper;
use app\Models\User;
use core\Controller;
use core\View;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function login()
    {
        $data = removeHtml($_POST);
        $user = $this->user->getUser($data['user_email']);
        if (!empty($user)) {
            if (AuthHelper::passwordValidate($data['user_password'], $user['user_password'])) {
                $_SESSION['success'] = 'Вы успешно авторизованы!';
                unset($user['user_password']);
                $_SESSION['user'] = $user;
                /*if ($user['is_admin']){
                    redirect(ADMIN);
                }*/
                redirect(PATH);
            } else {
                $_SESSION['error'] = 'Email/пароль введены не верно';
                redirect();
            }
        } else {
            $_SESSION['error'] = 'Email/пароль введены не верно';
        }
    }

    public function signup()
    {
        View::render('user/signup');
    }

    public function register()
    {
        $data_user = removeHtml($_POST);
        if (!AuthHelper::validate($data_user, $this->user->rules)) {
            AuthHelper::getErrors();
            redirect();
        } else {
            $data_user['user_password'] = password_hash($data_user['user_password'], PASSWORD_DEFAULT);
            $user = $this->user->checkUnique($data_user['user_login'], $data_user['user_email']);
            if (!AuthHelper::checkLoginEmail($data_user['user_login'], $data_user['user_email'], $user)) {
                AuthHelper::getErrors();
                redirect();
            } else {
                $this->user->store($data_user, 'users');
                $_SESSION['success'] = 'Вы успешно зарегистрировались!';
                redirect(PATH);
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        redirect();
    }

}