<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/hello',function(){
    return "Hello Laravel 9";

});

// route::get('/user/{userid}',function($userid){
//     return "user id is: ".$userid;

// });
route::get('/user/{id?}/{name?}',function($userid=null,$username=null){
    return 'User id is: '.$userid. 'Username is: '.$username;

});

