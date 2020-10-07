<?php


namespace app\Controllers;


use app\Models\Category;
use core\Controller;

class CategoryController extends Controller
{
    private $category;

    public function __constructor()
    {
        $this->category = new Category();
    }

    public function index()
    {

    }

}