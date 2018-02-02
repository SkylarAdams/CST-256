<?php

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

use Illuminate\Support\Facades\Route;

//in class activity 1 and/or 2
Route::get('/', function () 
{
    return view('welcome');
});

Route::get('/hello', function () 
{
    return "Hello World";
});

Route::get('/helloworld', function ()
{
    return view('helloworld');
});

Route::get('/test', 'TestController@test');

Route::get('/test2', 'TestController@test2');



//In class activity 4
Route::get('/askme', function ()
{
    return view('whoami');
});

Route::get('/whoami','WhatsMyNameController@index');

Route::get('/login', function ()
{   
    return view ('login'); 
});

Route::post('/login','LoginController@index');

Route::post('/loginPassed','LoginController@index');

Route::post('/loginFailed','LoginController@index');

Route::get('/login2', function ()
{
    return view('login2');
});




