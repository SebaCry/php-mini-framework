<?php

if (!function_exists('view')) {
    function view($view)
    {
        return new App\Http\Response($view);
    }
}

if (!function_exists('viewPath')) {
    function viewPath($viewPath)
    {
        return __DIR__ . "/../views/$viewPath.php";
    }
}