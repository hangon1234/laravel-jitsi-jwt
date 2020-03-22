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
Route::get("/", "HomeController@index")->name("home");
Route::get("/room/create", "RoomController@showCreateForm");
Route::post("/room/create", "RoomController@create");
Route::get("/room/{room}", "RoomController@redirectToRoom");
Route::get("/room/delete/{room}", "RoomController@delete");
Route::get("/account", "HomeController@showAccountForm");
Route::post("account", "HomeController@updateAccount");
