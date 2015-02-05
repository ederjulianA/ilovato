<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(['before' => 'guest'], function() {




Route::post('login', ['as' => 'login', 'uses' => 'AuthController@postLogin']);

});


//ROUTES PROTECTED BY SESSION
Route::group(['before' => 'auth'], function() {
	
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('adminpanel', ['as' => 'admin', 'uses' => 'AdminController@getIndex']);
	Route::get('adminpanel/create/new', ['as' => 'addArticle', 'uses' => 'ArticleController@getNew']);
	Route::post('create/new', ['as' => 'addArticlePost', 'uses' => 'ArticleController@postNew']);
	Route::post('posteditarticle', ['as' => 'postEditArticle', 'uses' => 'ArticleController@postEditArticle']);
	Route::get('adminpanel/edit/{id}{slug}', ['as' => 'editPost', 'uses' => 'ArticleController@editArticle']);
});


Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@getHome'
	));

Route::get('/article/{id}-{slug}', array(
		'as' => 'article',
		'uses' => 'HomeController@getArticle'
	));

Route::get('/areumissd', array(
		'as' => 'areumissd',
		'uses' => 'HomeController@areumissd'
	));

//*******************************ROUTE SITE MAP"""""""""""""""""""""""""""""""""""""""""""""""""""""""""
Route::get('/sidemap', array(
		'as' => 'sidemap',
		'uses' => 'HomeController@getSitemap'
	));

// ROUTE FOR ADDRESS WITH GOOGLE MAPS
Route::get('/{id}/adress', array(
		'as' => 'addresMap',
		'uses' => 'HomeController@getAddres'
	));

Route::post('/add/address', array(
		'as' => 'addAddress',
		'uses' => 'HomeController@postAddres'
	));

