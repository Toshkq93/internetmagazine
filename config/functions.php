<?php

function debug($arr, $die = false)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
    if ($die) die;
}

function redirect($http = '')
{
    if ($http) {
        $redirect = $http;
    } else {
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    die;
}

function removeHtml($arr)
{
    $result = [];
    foreach ($arr as $key => $value) {
        $result[$key] = trim(htmlspecialchars(strip_tags($value)));
    }
    return $result;
}

function removeHtmlStr($str)
{
    return trim(htmlspecialchars(strip_tags($str)));
}