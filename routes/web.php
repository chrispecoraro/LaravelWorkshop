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

Route::get('/', function () {
    return view('index');
});



Route::get('/report', function () {
    return \App\Question::with(['answers.users'=>function($query){
        $query->where('users.id',3);
    }])->get();

});


Route::post('/', 'HealthTestController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
