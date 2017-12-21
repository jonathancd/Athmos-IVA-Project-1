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

Route::get('/documenti', function(){
	return view('documents');
});


Route::get('/privacy-policy', function(){
	return view('policy');
});


Route::group(['prefix' => 'giorni-rimborso'], function() {
	Route::get('/active-snc-ltd', function () {
			$token = bin2hex(openssl_random_pseudo_bytes(16));
		return view('giorni_rimborso.active', ['token' => $token]);
	});
	Route::get('/closeout-snc-ltd', function () {
			$token = bin2hex(openssl_random_pseudo_bytes(16));
		return view('giorni_rimborso.closeout', ['token' => $token]);
	});
	Route::get('/business-consultant-receiver', function () {
			$token = bin2hex(openssl_random_pseudo_bytes(16));
		return view('giorni_rimborso.consultant', ['token' => $token]);
	});

	Route::get('/authorization/confirm/{token}', ['as' => 'confirm', 'uses' => 'HomeController@getAuthorizationConfirm']);
	
	Route::post('/{type}/authorization', 'HomeController@evaluation');
	
	Route::post('/authorization/send-email', 'HomeController@sendEmail');

	Route::get('/evaluation-already-sended', function(){
		return view('giorni_rimborso.already_sended');
	});
});
