<?php


namespace app\Models;


use core\Model;
use RedBeanPHP\R;

class User extends Model
{
    public $rules = [
        'required' => [
            ['user_name'],
            ['user_login'],
            ['user_password'],
            ['user_email'],
            ['user_address']
        ],
        'email' => [
            ['user_email']
        ],
        'lengthMin' => [
            ['user_password', 6]
        ]
    ];

    public function checkUnique($login, $email)
    {
        return R::getRow("SELECT * FROM users WHERE user_login=? OR user_email=?", [$login, $email]);
    }

    public function getUser($email)
    {
        return R::getRow('SELECT * FROM users WHERE user_email = ?', [$email]);
    }

}