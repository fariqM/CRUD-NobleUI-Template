<?php
require __DIR__.'/auth.php';
require __DIR__.'/template.php';


Route::get('/', function () {
    // dd(Route::current()->uri());
    return view('dashboard');
});