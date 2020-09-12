<?php


namespace app\Helper;

use Valitron\Validator;

abstract class AuthHelper
{
    public static $errors = [];

    public static function validate($data, $rules){
        Validator::langDir(WWW . '/lang');
        Validator::lang('ru');
        $valid = new Validator($data);
        $valid->rules($rules);
        if ($valid->validate()) {
            return true;
        }
        self::$errors = $valid->errors();
        return false;
    }

    public static function checkLoginEmail($login, $email, $user){
        if ($user){
            if ($user['user_login'] == $login){
                self::$errors['unique'][] = 'Этот логин уже занят';
            }
            if ($user['user_email'] == $email){
                self::$errors['unique'][] = 'Этот email уже занят';
            }
            return false;
        }
        return true;
    }


    public static function passwordValidate($password, $userPassword){
        if (password_verify($password, $userPassword)){
            return true;
        }
        return false;
    }

    public static function getErrors(){
        $errors = '<ul>';
        foreach(self::$errors as $error){
            foreach($error as $item){
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

}