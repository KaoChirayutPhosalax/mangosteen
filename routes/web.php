<?php

Route::get('/farmers/sendmangosteen', 'FarmerController@sendmangosteen')->name('sendmangosteen');

Route::get('/farmers/senddetailmangosteen', 'FarmerController@senddetailmangosteen')->name('senddetailmangosteen');

Route::get('/farmers/showfarmer', 'FarmerController@showfarmer')->name('showfarmer');

Route::post('/farmers/addstoresend', [
    'as' => 'addstoresend',
    'uses' => 'FarmerController@addstoresend'
]);
Route::resource('addstoresend', 'FarmerController' , ['except' => 'addstoresend']);


Route::post('/farmers/addstoresenddetail', [
    'as' => 'addstoresenddetail',
    'uses' => 'FarmerController@addstoresenddetail'
]);
Route::resource('addstoresenddetail', 'FarmerController' , ['except' => 'addstoresenddetail']);



Route::post('/farmers/register', [
    'as' => 'register',
    'uses' => 'FarmerController@register'
]);
Route::resource('register', 'FarmerController' , ['except' => 'register']);

Route::post('/bidders/auction', [
    'as' => 'auction',
    'uses' => 'BidderController@auction'
]);
Route::resource('auction', 'BidderController' , ['except' => 'auction']);

// Route::post('/bidders/mangosteenprice', [
//     'as' => 'mangosteenprice',
//     'uses' => 'BidderController@mangosteenprice'
// ]);
// Route::resource('mangosteenprice', 'BidderController' , ['except' => 'mangosteenprice']);



Route::get('bidders/mangosteenprice', 'BidderController@mangosteenprice')->name('mangosteenprice');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/farmers/destroy/{id}','FarmerController@destroy');

Route::resource('/farmers','FarmerController')->name('index','farmers');

Route::get('farmers', 'FarmerController@index');

Route::get('bidders','BidderController@index');

Route::get('/bidders/destroy/{id}','BidderController@destroy');

Route::resource('/bidders','BidderController')->name('index','bidders');

Auth::routes();

Route::get('/test', function () {
    return view('test');
});
