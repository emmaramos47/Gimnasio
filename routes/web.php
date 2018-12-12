<?php

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return 'Logout de usuario';
});

Route::get('docs', function () {
    return view('docs.docs');
});


