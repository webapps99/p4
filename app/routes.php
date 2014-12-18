<?php

/**
 * Index
 */
    Route::get('/', 'IndexController@getIndex');

/**
 * Code for Sign up and Login*/
    Route::get('/signup','UserController@getSignup' );

    Route::post('/signup', 'UserController@postSignup' );

    Route::get('/login', 'UserController@getLogin' );

    Route::post('/login', 'UserController@postLogin' );

    Route::get('/logout', 'UserController@getLogout' );

/**
 * Code for viewing services*/
    Route::get('/services', 'ServiceController@getIndex');

/**
 * Code for adding new services*/
    Route::get('/services_add', 'ServiceController@getService');

    Route::post('/services_add', 'ServiceController@postService');

/**
 * Code for customer adding requests*/
    Route::get('/requests_add', 'ServiceController@getRequest');

    Route::post('/requests_add', 'ServiceController@postRequest');


/**
 * Code for edit/delete requests*/
    Route::get('/requests','ServiceController@getEdit');

    Route::get('/requests_edit/{id}','ServiceController@getRequestEdit');

    Route::post('/requests_edit','ServiceController@postEdit');

    Route::post('/requests/delete','ServiceController@postDelete');









