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
    return redirect('/index');
});


// Inicio
Route::get('/index', function () {
    return view('main_sections.index');
});

// Registro
Route::get('sign_up/{step?}', 'MainController@sign_up_get')->name('main.sign_up_get');

Route::post('sign_up/{step?}', 'MainController@sign_up_post')->name('main.sign_up_post');

// Iniciar sesión
Route::get('sign_in', 'MainController@sign_in')->name('main.sign_in');

// Vivienda
Route::get('dwelling', 'MainController@dwelling')->name('main.dwelling');

// Servicios
Route::get('services', 'MainController@services')->name('main.services');

// Empleo
Route::get('employment', 'MainController@employment')->name('main.employment');

// Ayuda
Route::get('help', 'MainController@help')->name('main.help');

// Contáctenos
Route::get('contact_us', 'MainController@contact_us')->name('main.contact_us');

// Conócenos más
Route::get('about_us', 'MainController@about_us')->name('main.about_us');

// Idioma
Route::get('languages', 'MainController@languages')->name('main.languages');