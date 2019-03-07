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

Auth::routes();

Route::get('/','HomeController@index');

Route::prefix('admin')->group(function(){
	Route::get('/','Auth\AdminLoginController@index');
	Route::post('/login','Auth\AdminLoginController@login')->name('login.submit');
	Route::get('/change_profile','AdminController@change_profile')->name('admin.change_profile');
	Route::post('/change_profile','AdminController@update_profile')->name('admin.update_profile');

	

	Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

	Route::get('/dashboard','AdminController@index')->name('admin.dashboard');

	Route::get('/navigation-list/{category}','Admin\NavigationController@index');
	Route::get('/navigation-list/{category}/create','Admin\NavigationController@create');

	//photo gallery
	Route::get('/navigation-list/{category}/{id}/showList','Admin\NavigationController@showMediaList');
	
	Route::get('/navigation-list/{category}/{id}/showList/create','Admin\NavigationController@addMedia');
	Route::post('/navigation-list/{category}/{id}/addAlbum','Admin\NavigationController@storeAlbum');
	Route::get('/navigation-list/media/{id}/delete','Admin\NavigationController@deleteMedia');
	Route::post('/navigation-list/media/{id}/update','Admin\NavigationController@updateMedia');
	
	//video gallery
	Route::get('/navigation-list/{category}/{id}/vlink','Admin\VideoController@showVideoList');
	Route::get('/navigation-list/{category}/{id}/vlink/create','Admin\VideoController@addVideo');
	Route::post('/navigation-list/{category}/{id}/addVideoAlbum','Admin\VideoController@storeVideoAlbum');
	Route::post('/navigation-list/vlink/{id}/update','Admin\VideoController@updateLinks');

	Route::get('/navigation-list/vlink/{id}/delete','Admin\VideoController@deleteLink');


	Route::post('/navigation-list/{category}/{id?}','Admin\NavigationController@store');
	Route::get('/navigation-edit/{category}/{id}/edit','Admin\NavigationController@edit');
	Route::put('/navigation-edit/{category}/{id}','Admin\NavigationController@update');

	Route::get('/navigation-edit/{category}/{id}','Admin\NavigationController@deleteIconImage');
	
	Route::get('/navigation-list/{category}/{id}/delete','Admin\NavigationController@destroy');
	Route::get('/navigation-list/{category}/{id}','Admin\NavigationController@childNavigation')->where(['id'=>'[0-9]+']);
	Route::get('/navigation-list/{category}/{id}/create','Admin\NavigationController@create')->where(['id'=>'[0-9]+']);

	Route::get('/global-setting','Admin\GlobalSettingController@global_setting');
	// Route::post('/global-setting','Admin\GlobalSettingController@create')->name('create.global-setting');

	Route::post('/global_setting','Admin\GlobalSettingController@updateSettings')->name('update.global_setting');

	Route::get('/subscribers-list','Admin\SubscriberController@index');
	Route::get('/subscribers-list/{id}','Admin\SubscriberController@destroy');

	Route::put('/navigation-list/{id}', 'Admin\NavigationController@update_status')->name('update_status');
});


Route::post('/enquiries','ContactController@send')->name('enquiries.send');

Route::post('/subscriber','Admin\SubscriberController@store')->name('subscriber');
Route::get('/sample-document','HomeController@sample_form');



Route::get('details/{alias}', 'HomeController@single');
Route::get('gallery/{alias}','GalleryController@gallery');
// Route::post('/page-search','HomeController@search')->name('page_search');

Route::get('/findIntake','HomeController@find_intake');
Route::post('/student-register','StudentRegisterController@register');
Route::post('/sample-document-form','StudentRegisterController@sample_document_form');

Route::any('{alias}', 'HomeController@front_pages');



