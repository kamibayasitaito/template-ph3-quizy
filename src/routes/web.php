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

Route::get('/quiz/1', function () {
    return view('tokyo');
});
Route::get('/quiz/2', function () {
    return view('hiroshima');
});
