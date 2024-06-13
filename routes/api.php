<?php

use Illuminate\Http\Request;

Route::get('/catalog/v1/search', 'APIController@searchwatch');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});