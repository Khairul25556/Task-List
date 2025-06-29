<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'Khairul'
    ]);
});

Route::get('/xxx', function() {
    return 'Hello';
}) ->name('hello'); //to implement route name

//redirect URL
Route::get('/hallo', function(){
    return redirect() -> route('hello'); //it is using the route name. So if we change the get hello url , it wont afttect the redirect because it will follow the nanme
});

Route::get('/greet/{name}', function($name){
    return 'Hello ' . $name . ' !';
});

Route::get('/fan/{fanname}', function($fanName){
    return 'This ' . $fanName . ' is so powerful.';
});

//if no other route is matched we can use fallback route
Route::fallback(function() {
    return 'Still got somewhere!';
});

