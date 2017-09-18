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

// Leaving for now a default basic route.
// @TODO: Create a welcome page.
Route::get('/', 'AppController@index');

// We could use ::resource to create
// an entire REST architecture. Keeping it
// simple for this example.
Route::post('/read', 'SeferReader@handleSubmit');
