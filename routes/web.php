<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     //echo 'adasd';
//     //return view('welcome');
// });

//Route::get('mat', 'Admin\MaterialController@index')->name('admin.mater');


Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function() {

    Route::get('/', 'IndexController@index')->name('index');
    Route::resource('/datasrc', 'DataSourceController');
    Route::resource('material', 'MaterialController');
    Route::resource('users', 'UserController');
    //Route::get('mater', 'MaterialController@index')->name('mater');

    Route::resource('/{user}/thread', 'ThreadController');
    Route::resource('/{user}/products', 'ProductController');
    Route::resource('{user}/contract', 'ContractController');
    Route::resource('{user}/customer', 'CustomerController');
    Route::resource('{user}/business', 'BusinessController');

    Route::resource('/{type}/datasource', 'DataSourceController')->middleware('settype');

    Route::resource('/system/aboutus', 'AboutController');
    Route::resource('/system/feedbacks', 'FeedbackController');

    Route::post('/{feedback}/reply', 'FeedbackReplyController@store')->name('feedbackreply.store');

    Route::resource('/anounce', 'AnounceController');
    
});

