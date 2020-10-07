<?php


namespace core;


abstract class View
{
    public static $layout = 'layout';

    //сформирование content
    public static function render($view, $data = [])
    {
        $viewFile = APP . "/Views/{$view}.php";
        if (is_file($viewFile)) {
            extract($data);
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("This view not found {$view}", 500);
        }

        $fileLayout = APP . "/Views/Layouts/" . self::$layout . ".php";
        if (is_file($fileLayout)) {
            require_once $fileLayout;
        }
    }

    public static function loadView($view, $data = [])
    {
        extract($data);
        require_once APP . "/Views/{$view}.php";
        die();
    }
}