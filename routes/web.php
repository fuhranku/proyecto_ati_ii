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
// Route::get('sign_up/{step?}', 'SignUpController@sign_up_get');

Route::get('sign_up', 'SignUpController@sign_up_get');

// Post guardar
Route::post('sign_up','SignUpController@store')->name('sign_up.store');

// Route::post('sign_up/{step?}', 'SignUpController@sign_up_post');

Route::get('sign_up/2/{type}', 'SignUpController@sign_up_get_person_type');

Route::post('getCities','SignUpController@getCities');

// Iniciar sesión
Route::post('sign_in', 'SignInController@login')->name('main.sign_in');
Route::get('sign_in', 'SignInController@getSessionInfo')->name('sign_in.get');
Route::get('sign_in', 'SignInController@logout')->name('sign_in.logout');

// Vivienda
Route::get('dwelling/publish', 'Dwelling\PublishDwellingController@publish')->name('dwelling.publish');
Route::post('dwelling/post_image', 'Dwelling\PublishDwellingController@post_image')->name('dwelling.post_image');
Route::get('dwelling/publication', 'Dwelling\DwellingController@publication')->name('dwelling.publication');
Route::get('dwelling/search', 'Dwelling\SearchDwellingController@search')->name('dwelling.search');
Route::get('dwelling/modify', 'Dwelling\DwellingController@modify')->name('dwelling.modify');
Route::get('dwelling/delete', 'Dwelling\DwellingController@delete')->name('dwelling.delete');
Route::get('dwelling/enable', 'Dwelling\DwellingController@enable')->name('dwelling.disable');
Route::get('dwelling/disable', 'Dwelling\DwellingController@disable')->name('dwelling.disable');


// Servicios
Route::get('services/search', 'ServiceController@search')->name('services.search');
Route::get('services/delete', 'ServiceController@delete')->name('services.delete');
Route::get('services/create', 'ServiceController@create')->name('services.create');
Route::get('services/modify', 'ServiceController@modify')->name('services.modify');
Route::get('services/consult', 'ServiceController@consult')->name('services.consult');



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