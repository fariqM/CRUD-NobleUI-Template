<?php

// app/Helpers/helper_functions.php

function active_class(array $expectedRoute)
{
    $currentRoute = \Route::current()->uri();
    return in_array($currentRoute, $expectedRoute) ? 'active' : '';
}

function is_active_route(array $expectedRoute)
{
    foreach ($expectedRoute as $route) {
        if (Str::startsWith(request()->route()->getPrefix(), $route)) {
            return true;
        }
    }
    return false;
}

function show_class(array $expectedRoute)
{
    $routes = explode("/", $expectedRoute[0]);
    $prefixParam = $routes[0];
    return strpos(request()->route()->getPrefix(), $prefixParam) ? 'show' : '';
}