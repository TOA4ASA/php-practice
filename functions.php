<?php

use Core\Response;

function pre($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
function pr($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("view/errors/{$code}.php");

    die();
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('view/' . $path);
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}


function check($method, $val1, $val2)
{
    if (empty($val1) ?? empty($val2))
        $result = 'please make sure u filled in every field';
    else {
        switch ($method) {
            case $method === '/':
                if ($val2 === 0) {
                    $result =  'can\'t divide trough 0';
                } else {
                    $result = $val1 / $val2;
                }
                break;
            case $method === '+':
                $result = $val1 + $val2;
                break;
            case $method === '-':
                $result = $val1 - $val2;
                break;
            case $method === '*':
                $result = $val1 * $val2;
                break;
            default:
                $result = 'Invalid method';
                break;
        }}
    return $result;
}
function selected($method)
{
    if (isset($_GET['method']) && $_GET['method'] == $method) echo 'selected="selected"';
}
