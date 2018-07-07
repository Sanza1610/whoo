<?php

function ifActiveRoute($route, $output = "active", $else = "unactive")
{
    if (Route::currentRouteName() == $route) return $output;
    else return $else;
}

function areActiveRoutes(Array $routes, $output = "active")
{
    foreach ($routes as $route) {
        if (Route::currentRouteName() == $route) return $output;
    }
}