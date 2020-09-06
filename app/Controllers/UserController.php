<?php


namespace app\Controllers;


use core\Controller;
use core\View;

class UserController extends Controller
{
    public function login()
    {
        $data = removeHtml($_POST);
        debug($data, 1);
    }

}