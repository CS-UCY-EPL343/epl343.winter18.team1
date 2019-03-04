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

Route::get('SellLetUpdate', 'PagesController@getSellLetUpdate');

Route::get('SellLetDestroy', 'PagesController@getSellLetDestroy');

Route::get('customers', 'PagesController@getCustomers');

Route::get('CustomersUpdate', 'PagesController@getCustomersUpdate');

Route::get('CustomersDestroy', 'PagesController@getCustomersDestroy');

Route::get('CustomersAdd', 'PagesController@getCustomersAdd');

Route::get('customers', 'CustomersController@index');

Route::get('statistics', 'PagesController@getStatistics');

Route::get('employees', 'PagesController@getEmployees');

Route::get('EmployeesUpdate', 'PagesController@getEmployeesUpdate');

Route::get('EmployeesDestroy', 'PagesController@getEmployeesDestroy');

Route::get('employees', 'EmployeesController@index');

Route::get('collaborators', 'PagesController@getCollaborators');

Route::get('CollaboratorsUpdate', 'PagesController@getCollaboratorsUpdate');

Route::get('CollaboratorsDestroy', 'PagesController@getCollaboratorsDestroy');

Route::get('collaborators', 'CollaboratorController@index');

Route::post('articles', 'NewsController@store');

Route::post('ArticlesUpdate', 'NewsController@update');

Route::post('ArticlesDestroy', 'NewsController@destroy');

Route::post('ArticlesAdd', 'NewsController@store');

Route::get('articles', 'ArticlesController@index');

Route::get('TermsAndConditions', 'PagesController@getTermsAndConditions');

Route::get('PrivacyPolicy', 'PagesController@getPrivacyPolicy');

Route::get('AdminController', 'PagesController@getAdminController');

Route::get('owa_controller', 'PagesController@getowa_controller');



Route::resource('notifications', 'SellLetController');

Route::resource('notifications#srtablediv', 'BuyRentController');

Route::post('del', 'SellLetController@destroy');

Route::post('edit', 'SellLetController@update');

Route::post('delbr', 'BuyRentController@destroy');

Route::post('editbr', 'BuyRentController@update');



Route::post('SellLet', 'SellLetController@store');

Route::post('BuyRentStore', 'BuyRentController@store');

Route::post('customers', 'CustomersController@store');

Route::post('CustomersUpdate', 'CustomersController@update');

Route::post('CustomersDestroy', 'CustomersController@destroy');

Route::post('CustomersAdd', 'CustomersController@store');

Route::post('employees', 'EmployeesController@store');

Route::post('EmployeesUpdate', 'EmployeesController@update');

Route::post('EmployeesDestroy', 'EmployeesController@destroy');

Route::post('collaborators', 'CollaboratorController@store');

Route::post('CollaboratorsUpdate', 'CollaboratorController@update');

Route::post('CollaboratorsDestroy', 'CollaboratorController@destroy');

Route::post('articles', 'ArticlesController@store');

Route::post('ArticlesUpdate', 'ArticlesController@update');

Route::post('ArticlesDestroy', 'ArticlesController@destroy');

Route::post('ArticlesAdd', 'ArticlesController@store');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/logout', 'PagesController@getIndex')->name('logout');
