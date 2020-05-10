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

// Landing page
Route::get('/', function () { return view('landing.landing'); });
Route::get('/saberMas', function () { return view('landing.saber_mas'); });
Route::post('/saveLandingFeedback', 'LandingController@saveLandingFeedback');
Route::get('/bienvenido', function () { return view('landing.bienvenido'); });
Route::get('/lucas', function () { return view('landing.lucas'); });
Route::get('/registrar', function () { return view('landing.registrar'); });
Route::get('/registered', function () { return view('landing.registered'); });
Route::get('/cilindro', 'LandingController@getCilindro');
Route::post('/checkUniqueEmail', 'LandingController@checkUniqueEmail');

// WIP
Route::get('/invitar', function () { return view('landing.invitar'); });
// WIP

// Home
Route::get('/home', 'HomeController@index');
Route::get('/getPublished/{beon}', 'HomeController@getPublished');

// News
Route::get('/news', 'NewsController@index');
Route::get('/news/{entry}', 'NewsController@getEntry');

// Help
Route::get('/help', 'HelpController@index');

// Profile
Route::get('/profile', 'UserProfileController@index');
Route::post('/updateAvatar', 'UserProfileController@updateAvatar');
Route::post('/updatePassword', 'UserProfileController@updatePassword');
Route::post('/updateEmail', 'UserProfileController@updateEmail');
Route::post('/updateName', 'UserProfileController@updateName');

// Admin
Route::get('/admin', 'Admin\AdminController@index');
Route::post('/toggleAdmin', 'Admin\AdminController@toggleAdmin');
Route::get('/getAllUsers', 'Admin\AdminController@getAllUsers');

// Lab
Route::get('/admin/lab', 'Admin\LabController@index');
Route::get('/refreshAudio', 'Admin\LabController@refreshAudio');
Route::get('/refreshBeons', 'Admin\LabController@refreshBeons');
Route::post('/loadBeon', 'Admin\LabController@loadBeon');
Route::post('/saveBeon', 'Admin\LabController@saveBeon');
Route::post('/deleteBeon', 'Admin\LabController@deleteBeon');
Route::post('/uploadAudio', 'Admin\LabController@uploadAudio');
Route::post('/deleteAudio', 'Admin\LabController@deleteAudio');
Route::post('/admin/testBeon', 'Admin\BeonHandlerController@testBeon');
Route::post('/admin/publishBeon', 'Admin\BeonHandlerController@publishBeon');

// Email
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

// Demo
Route::get('/demo', function () { return view('demo'); });

// Blog
Route::get('/admin/blog', function () { return view('admin.blog'); });
Route::post('/saveEntry', 'Admin\BlogController@saveEntry');

// Auth
Auth::routes();

// Examples
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/', function () { return view('landing.landing'); });
// });
// Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
// {
//     Route::get('dashboard', function() {} );
// });

Route::get('/prueba', 'PruebaController@index');
Route::get('/prueba/{audioId}', 'PruebaController@downloadAudio');
