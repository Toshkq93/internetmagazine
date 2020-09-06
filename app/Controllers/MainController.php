<?php


namespace app\Controllers;


use core\Controller;
use core\View;

class MainController extends Controller
{

    public function index(){
        View::render('main/index');
    }

}