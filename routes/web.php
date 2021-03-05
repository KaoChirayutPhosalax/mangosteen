<?php

Route::get('/farmers/sendmangosteen', 'FarmerController@sendmangosteen')->name('sendmangosteen');

Route::get('/farmers/senddetailmangosteen', 'FarmerController@senddetailmangosteen')->name('senddetailmangosteen');

Route::get('/farmers/showfarmer', 'FarmerController@showfarmer')->name('showfarmer');

Route::get('/bidders/bill', 'BidderController@bill')->name('bill');

Route::get('/bidders/receipt', 'BidderController@receipt')->name('receipt');

Route::get('/admins/conqueror', 'AdminController@conqueror')->name('conqueror');

// Route::get('/admins/addconqueror', 'AdminController@addconqueror')->name('addconqueror');


Route::post('/farmers/addstoresend', [
    'as' => 'addstoresend',
    'uses' => 'FarmerController@addstoresend'
]);
Route::resource('addstoresend', 'FarmerController' , ['except' => 'addstoresend']);

Route::post('/admins/conquerordetail', [
    'as' => 'conquerordetail',
    'uses' => 'AdminController@conquerordetail'
]);
Route::resource('conquerordetail', 'AdminController' , ['except' => 'conquerordetail']);

Route::post('/admins/addconqueror', [
    'as' => 'addconqueror',
    'uses' => 'AdminController@addconqueror'
]);
Route::resource('addconqueror', 'AdminController' , ['except' => 'addconqueror']);

Route::post('/farmers/addstoresenddetail', [
    'as' => 'addstoresenddetail',
    'uses' => 'FarmerController@addstoresenddetail'
]);
Route::resource('addstoresenddetail', 'FarmerController' , ['except' => 'addstoresenddetail']);


Route::get('/farmers/edit/{id}','FarmerController@edit');
Route::post('/farmers/edit/update/{id}','FarmerController@update');
Route::post('bidder/edit/update/{id}','BidderController@update');


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

Route::post('/bidders/addstordealer', [
    'as' => 'addstordealer',
    'uses' => 'BidderController@addstordealer'
]);
Route::resource('addstordealer', 'BidderController' , ['except' => 'addstordealer']);

Route::post('/bidders/addstordealer', [
    'as' => 'addstordealer',
    'uses' => 'BidderController@addstordealer'
]);
Route::resource('addstordealer', 'BidderController' , ['except' => 'addstordealer']);

Route::post('/admins/conqueror', [
    'as' => 'conqueror',
    'uses' => 'AdmainController@conqueror'
]);
Route::resource('conqueror', 'AdminController' , ['except' => 'conqueconquerorr']);



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

Route::resource('/farmers','FarmerController')/*->name('index','farmers')*/;

Route::resource('/farmers','ProductFramController');

// Route::get('farmers','ProductFramController@create');

Route::get('farmers', 'FarmerController@index');

Route::get('bidders','BidderController@index');

Route::get('admins','AdminController@index');

Route::get('/bidders/destroy/{id}','BidderController@destroy');

Route::resource('/bidders','BidderController')->name('index','bidders');

Auth::routes();

Route::get('/test', function () {
    return view('test');
});
