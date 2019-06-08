<?php

Route::group(['middleware' => ['web']], function () {
	// Authentication Routes
	Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

	// Registration Routes
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	// Password Reset Routes
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');

	// Categories
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);
	Route::resource('tags', 'TagController', ['except' => ['create']]);
	
	// Comments
	Route::post('comments/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);

    //Like
    Route::post('likepost/{post_id}',['uses' => 'LikePostController@like', 'as' => 'like']);

    //Search Post
    Route::post('searchpost',['uses' => 'BlogController@getPostSearch', 'as' => 'searchpost']);

	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    Route::get('contact', 'PagesController@getContact');
    Route::post('contact', 'PagesController@postContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
	Route::get('pagenotfound',['as' => 'notfound', 'uses' => 'PagesController@pageNotFound']);

    Route::get('category/{category}', ['uses' => 'BlogController@getCategory', 'as' => 'getcategory']);

    //product
    Route::get('product',['uses' => 'ProductControllers@getIndex', 'as' => 'product']);
    Route::get('productsingle',['uses' => 'ProductControllers@productSingle', 'as' => 'productsingle']);
});
