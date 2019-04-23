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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cine', 'Lab03Contoller@ejercicio1');
Route::post('/cine', 'Lab03Contoller@procesar1');
Route::get('/gaseosa', 'Lab03Contoller@ejercicio2');
Route::post('/gaseosa', 'Lab03Contoller@procesar2');
Route::get('/reserva_hotel', 'Lab03Contoller@ejercicio3');
Route::post('/reserva_hotel', 'Lab03Contoller@procesar3');


Route::get('/web', 'Lab04Controller@web');
Route::get('/calculadora', 'Lab04Controller@ejer1');
Route::post('/calculadora', 'Lab04Controller@res1');
Route::get('/edades', 'Lab04Controller@ejer2');
Route::post('/edades', 'Lab04Controller@res2');

Route::get('/log', 'SeguridadContoller@login');;
Route::post('/welcome', 'SeguridadContoller@reg');

Route::get('/test', function () {
    Log::info('Info log test');
});

Route::get('/email', 'SeguridadContoller@email');


Route::get('/login', array('uses' => 'SeguridadContoller@showLogin'));
Route::post('/login', array('uses' => 'SeguridadContoller@doLogin'));

Route::post('/codigo', 'SeguridadContoller@codigo');
Route::post('/codigo', array('uses' => 'SeguridadContoller@codigover'));

Route::get('logout', 'SeguridadContoller@logOut');


// Nos mostrará el formulario de login.
Route::get('/login2', 'SeguridadContoller@showLogin2');

// Validamos los datos de inicio de sesión.
Route::post('/login2', 'SeguridadContoller@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('seguridad.hello');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'SeguridadContoller@logOut');
});


Route::get('/social/redirect/{provider}', 'Auth\SocialController@getSocialRedirect')->name('redirectSocialLite');
Route::get('/social/handle/{provider}', 'Auth\SocialController@getSocialHandle')->name('handleSocialLite');