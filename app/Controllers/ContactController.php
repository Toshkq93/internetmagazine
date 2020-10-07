<?php


namespace app\Controllers;


use core\View;

class ContactController
{

    public function index(){
        View::render('contact/index');
    }

}