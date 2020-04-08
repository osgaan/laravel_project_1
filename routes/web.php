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



Route::get('/inventario', function () {
    return view('contenido');
})->middleware('auth');

Route::get('/pagina2', function () {
    return view('contenido2');
});
Route::get('/login', function () {
    return view('logins.login');
});

Route::get('/inicio', function () {
    return view('inicio');
});

//Auth::routes();

Route::get('/', 'MainController@index');

Route::post('/checklogin', 'MainController@checklogin');

Route::get('main/successlogin', 'MainController@successlogin');


Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::get('/main/logout', 'MainController@logout');

Route::resource('products','ProductController')->middleware('auth');



