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

Route::get("/", "PageController@login")->name('login');
Route::post("/login", "AuthController@ceklogin");
Route::get("/user", "PageController@formedituser");
Route::post("/updateuser", "PageController@updateuser");
Route::get("/logout", "AuthController@ceklogout");
Route::get("/home", "PageController@home");
Route::get("/catalog", "PageController@catalog");
Route::get("/catalog/add-form", "PageController@formaddwatch");
Route::post("/save", "PageController@savewatch");
Route::get("/catalog/edit-form/{id}", "PageController@formeditwatch");
Route::put("/update/{id}", "PageController@updatewatch");
Route::get("/delete/{id}", "PageController@deletewatch");


Route::group(['middleware' => ['guest']], function(){
    Route::get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function(){
    Route::get("/user", "PageController@formedituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/home", "PageController@home");
    Route::get("/catalog", "PageController@catalog");
    Route::get("/catalog/add-form", "PageController@formaddwatch");
    Route::post("/save", "PageController@savewatch");
    Route::get("/catalog/edit-form/{id}", "PageController@formeditwatch");
    Route::put("/update/{id}", "PageController@updatewatch");
    Route::get("/delete/{id}", "PageController@deletewatch");
});