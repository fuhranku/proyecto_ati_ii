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
// Publish routes
Route::get('dwelling/publish', 'Dwelling\PublishDwellingController@publish_get')->name('dwelling.publish');
Route::post('dwelling/post_image', 'Dwelling\PublishDwellingController@post_image')->name('dwelling.post_image');
Route::post('dwelling/remove_image', 'Dwelling\PublishDwellingController@remove_image')->name('dwelling.remove_image');
Route::post('dwelling/post_video', 'Dwelling\PublishDwellingController@post_video')->name('dwelling.post_video');
Route::post('dwelling/remove_video', 'Dwelling\PublishDwellingController@remove_video')->name('dwelling.remove_video');
Route::post('dwelling/store_dwelling', 'Dwelling\PublishDwellingController@store_dwelling')->name('dwelling.store_dwelling');
Route::get('dwelling/publication', 'Dwelling\DwellingController@publication')->name('dwelling.publication');
// Search routes
Route::get('dwelling/search', 'Dwelling\SearchDwellingController@search_get')->name('dwelling.search');
Route::post('dwelling/quick_search', 'Dwelling\SearchDwellingController@quick_search')->name('dwelling.quick_search');
Route::post('dwelling/detailed_search', 'Dwelling\SearchDwellingController@detailed_search')->name('dwelling.detailed_search');
// Disable Enable
Route::post('dwelling/disable_dwelling', 'Dwelling\DwellingController@disable_dwelling')->name('dwelling.disable_dwelling');
Route::post('dwelling/enable_dwelling', 'Dwelling\DwellingController@enable_dwelling')->name('dwelling.enable_dwelling');
// Remove Dwelling
Route::post('dwelling/delete_dwelling', 'Dwelling\DwellingController@delete_dwelling')->name('dwelling.delete_dwelling');
// Modify routes
Route::get('dwelling/modify', 'Dwelling\ModifyDwellingController@modify_get')->name('dwelling.modify');
Route::get('dwelling/delete', 'Dwelling\ModifyDwellingController@delete')->name('dwelling.delete');
Route::get('dwelling/enable', 'Dwelling\ModifyDwellingController@enable')->name('dwelling.disable');
Route::get('dwelling/disable', 'Dwelling\ModifyDwellingController@disable')->name('dwelling.disable');


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