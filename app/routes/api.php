<?php
	Route::group(['prefix' => 'api', 'after' => 'allowOrigin'], function() {
 
	    Route::get('/articles', array(
			'as' => 'api-articles',
			'uses' => 'ApiController@getArt'
		));
		 Route::get('/categories', array(
			'as' => 'api-categories',
			'uses' => 'ApiController@getCat'
		));

		
    });


?>