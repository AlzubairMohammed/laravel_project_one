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
    return view('welcome');
});

Route::resource('products','ProductsController');

Route::get('/landing', function() {
    return view('index');
});



Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify'=>true]);

Route::group(['prefix'=>'offers'],function(){
    Route::get('/get','CrudController@getOffers');
    Route::post('/create','CrudController@createOffer')->name('offer');
});

Route::get('/offer',function(){

    return view('offers.offer');
});
