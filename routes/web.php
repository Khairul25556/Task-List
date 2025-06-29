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

//test
// Route::get('/fdfdfd', function(){
//     return 'Hello!';
// }) ->name('basic');

// Route::get('/class/{studentName}', function($studentName){
//     return $studentName . ' is a very good student';
// });

// Route::get('pc/{pcName}', function($pcName){
//     return 'This ' . $pcName . ' is very powerful that you ever seen.';
// }) ->name('computer');


// Route::get('/home', function(){
//     return redirect() -> route('basic');
// });



// Route::get('/blade', function () {
//     return view('index', [
//         'name' => 'Khairul'
//     ]);
// });

// Route::get('/song', function(){
//     return view('index', [
//         'websiteName' => 'My fav song'
//     ]);
// });


