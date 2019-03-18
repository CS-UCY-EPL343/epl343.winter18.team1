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

Route::get('welcome', function () {
    return view('welcome');
});



Route::get('home', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('BuyRent', 'PagesController@getBuyRent');

Route::get('contact', 'PagesController@getContact');

Route::get('news', 'PagesController@getNews');

Route::get('SellLet', 'PagesController@getSellLet');

Route::get('notifications', 'PagesController@getNotifications');

Route::get('SellLetUpdate', 'PagesController@getSellLetUpdate');

Route::get('SellLetDestroy', 'PagesController@getSellLetDestroy');

Route::get('notifications', 'SellLetController@index');

Route::get('news', 'PagesController@getNews');

Route::get('news', 'ArticlesController@deiksemouto');

Route::get('articles', 'PagesController@getArticles');

Route::get('ArticlesUpdate', 'PagesController@getArticlesUpdate');

Route::get('ArticlesDestroy', 'PagesController@getArticlesDestroy');

Route::get('ArticlesAdd', 'PagesController@getArticlesAdd');

Route::get('articles', 'ArticlesController@index');



Route::post('SellLet', 'SellLetController@store');

Route::post('SellLetUpdate', 'SellLetController@update');

Route::post('SellLetDestroy', 'SellLetController@destroy');

Route::post('BuyRentUpdate', 'BuyRentController@update');

Route::post('BuyRentStore', 'BuyRentController@store');

Route::post('BuyRentDestroy', 'BuyRentController@destroy');

Route::post('articles', 'ArticlesController@store');

Route::post('ArticlesUpdate', 'ArticlesController@update');

Route::post('ArticlesDestroy', 'ArticlesController@destroy');

Route::post('ArticlesAdd', 'ArticlesController@store');


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/logout', 'PagesController@getIndex')->name('logout');
