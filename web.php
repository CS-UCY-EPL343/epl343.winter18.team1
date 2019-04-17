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

Route::get('/', 'PagesController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});

Route::get('home', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('BuyRent', 'PagesController@getBuyRent');

Route::post('BuyRentStore', 'BuyRentController@store');

Route::get('contact', 'PagesController@getContact');

Route::get('news', 'PagesController@getNews');

Route::get('news', 'ArticlesController@deiksemouto');

Route::get('SellLet', 'PagesController@getSellLet');

Route::get('SellLetUpdate', 'PagesController@getSellLetUpdate');

Route::get('SellLetDestroy', 'PagesController@getSellLetDestroy');

Route::post('SellLetSubmit', 'SellLetController@store');

Route::post('searchresult', 'BuyRentController@search');

Route::post('searchresultimg', 'BuyRentController@searchimg');

Route::post('searchresulthome', 'BuyRentController@searchhome');

Route::post('searchresultimghome', 'BuyRentController@searchimghome');

Route::post('contactsend', 'ContactFormController@store');

Route::get('TermsAndConditions', 'PagesController@getTermsAndConditions');

    Route::get('PrivacyPolicy', 'PagesController@getPrivacyPolicy');

Route::prefix('admin')->group(function() {

    Route::get('home', 'PagesController@getIndex');

    Route::get('about', 'PagesController@getAbout');

    Route::get('BuyRent', 'PagesController@getBuyRent');

    Route::get('contact', 'PagesController@getContact');

    Route::get('news', 'PagesController@getNews');

    Route::get('news', 'ArticlesController@deiksemouto');

    Route::get('SellLet', 'PagesController@getSellLet');

    Route::get('SellLetUpdate', 'PagesController@getSellLetUpdate');

    Route::get('SellLetDestroy', 'PagesController@getSellLetDestroy');

    Route::post('SellLet', 'SellLetController@store');

    Route::post('contactsend', 'ContactFormController@store');

    Route::get('TermsAndConditions', 'PagesController@getTermsAndConditions');

    Route::get('PrivacyPolicy', 'PagesController@getPrivacyPolicy');

    Route::group(['middleware' => 'admin'], function(){                 ///////////////////////////////////////////ADMIN

      Route::post('editcon', 'ContactFormController@update');

      Route::post('delcon', 'ContactFormController@destroy');
      
	    Route::resource('notifications', 'SellLetController');

	    Route::resource('notifications#srtablediv', 'BuyRentController');

	    Route::post('del', 'SellLetController@destroy');

	    Route::post('edit', 'SellLetController@update');

	    Route::post('delbr', 'BuyRentController@destroy');

	    Route::post('editbr', 'BuyRentController@update');

	    Route::get('customers', 'PagesController@getCustomers');

      Route::post('contactsend', 'ContactFormController@store');

	    //Route::get('CustomersUpdate', 'PagesController@getCustomersUpdate');

	   //Route::get('CustomersDestroy', 'PagesController@getCustomersDestroy');

	   // Route::get('CustomersAdd', 'PagesController@getCustomersAdd');

	    Route::get('customers', 'CustomersController@index');

	    Route::get('statistics', 'PagesController@getStatistics');

	    Route::get('employees', 'PagesController@getEmployees');

     // Route::get('EmployeesUpdate', 'PagesController@getEmployeesUpdate');
      
     // Route::get('EmployeesAdd', 'PagesController@getEmployeesAdd');

	    //Route::get('EmployeesDestroy', 'PagesController@getEmployeesDestroy');

      Route::get('employees', 'EmployeesController@index');
      
      Route::get('articles', 'PagesController@getArticles');

     // Route::get('ArticlesUpdate', 'PagesController@getArticlesUpdate');
      
      //Route::get('ArticlesAdd', 'PagesController@getArticlesAdd');

	   // Route::get('ArticlesDestroy', 'PagesController@getArticlesDestroy');

	    Route::get('articles', 'ArticlesController@index');

	    Route::get('collaborators', 'PagesController@getCollaborators');

	   // Route::get('CollaboratorsUpdate', 'PagesController@getCollaboratorsUpdate');

     // Route::get('CollaboratorsDestroy', 'PagesController@getCollaboratorsDestroy');
      
	    // Route::get('CollaboratorsAdd', 'PagesController@getCollaboratorsAdd');

      Route::get('collaborators', 'CollaboratorController@index');
      
      Route::get('PropertyView', 'SearchController@index');

      //Route::get('PropertyUpdate', 'PagesController@getPropertyUpdate');
      
      Route::get('PropertyImage', 'PagesController@getPropertyImage');

	    //Route::get('PropertyDestroy', 'PagesController@getPropertyDestroy');

	    Route::get('property', 'PropertyController@index');

	    Route::get('TermsAndConditions', 'PagesController@getTermsAndConditions');

	    Route::get('PrivacyPolicy', 'PagesController@getPrivacyPolicy');

	    Route::get('AdminController', 'PagesController@getAdminController');

	    Route::get('owa_controller', 'PagesController@getowa_controller');

	    Route::post('customers', 'CustomersController@store');

	    Route::post('CustomersUpdate', 'CustomersController@update');

	    Route::post('CustomersDestroy', 'CustomersController@destroy');

	    Route::post('CustomersAdd', 'CustomersController@store');

	    Route::post('employees', 'EmployeesController@store');

	    Route::post('EmployeesUpdate', 'EmployeesController@update');

      Route::post('EmployeesDestroy', 'EmployeesController@destroy');
      
      Route::post('EmployeesAdd', 'EmployeesController@store');

      Route::post('articles', 'ArticlesController@store');

      Route::post('ArticlesUpdate', 'ArticlesController@update');
      
      Route::post('ArticlesAdd', 'ArticlesController@store');

	    Route::post('ArticlesDestroy', 'ArticlesController@destroy');

	    Route::post('collaborators', 'CollaboratorController@store');

	    Route::post('CollaboratorsUpdate', 'CollaboratorController@update');

      Route::post('CollaboratorsDestroy', 'CollaboratorController@destroy');
      
      Route::post('CollaboratorsAdd', 'CollaboratorController@store');

      Route::post('PropertyUpdate', 'PropertyController@update');
      
      Route::post('PropertyAdd', 'PropertyController@store');

	    Route::post('PropertyDestroy', 'PropertyController@destroy');

	    Route::get('rights', 'RightsController@index');

      Route::post('image-gallerydel', 'ImageGalleryController@destroy');

      Route::post('image-gallery', 'ImageGalleryController@store');

      Route::resource('image-gallery', 'ImageGalleryController');

	    Route::post('rights/changeStatus1', array('as' => 'changeStatus1', 'uses' => 'RightsController@changeStatus1'));
	    Route::post('rights/changeStatus2', array('as' => 'changeStatus2', 'uses' => 'RightsController@changeStatus2'));
	    Route::post('rights/changeStatus3', array('as' => 'changeStatus3', 'uses' => 'RightsController@changeStatus3'));
	    Route::post('rights/changeStatus4', array('as' => 'changeStatus4', 'uses' => 'RightsController@changeStatus4'));
	    Route::post('rights/changeStatus5', array('as' => 'changeStatus5', 'uses' => 'RightsController@changeStatus5'));
	    Route::post('rights/changeStatus6', array('as' => 'changeStatus6', 'uses' => 'RightsController@changeStatus6'));

	});
});                                                                                       ////////////////////////////////////////////////ENDS

Route::prefix('/')->group(function() {

  Route::group(['middleware' => 'auth'], function(){                                      

    Route::resource('/notifications', 'SellLetController');

    Route::resource('/notifications#srtablediv', 'BuyRentController');

    Route::post('contactsend', 'ContactFormController@store');

    // Route::post('/del', 'SellLetController@destroy');

    Route::post('/edit', 'SellLetController@update');

    Route::post('/delbr', 'BuyRentController@destroy');

    Route::post('/editbr', 'BuyRentController@update');

    Route::post('editcon', 'ContactFormController@update');

    Route::post('delcon', 'ContactFormController@destroy');

    Route::resource('notifications', 'SellLetController');

    Route::resource('notifications#srtablediv', 'BuyRentController');

    Route::post('del', 'SellLetController@destroy');

    Route::post('edit', 'SellLetController@update');

    Route::post('delbr', 'BuyRentController@destroy');

    Route::post('editbr', 'BuyRentController@update');
    
    Route::get('customers', 'PagesController@getCustomers');

    //Route::get('CustomersUpdate', 'PagesController@getCustomersUpdate');

   // Route::get('CustomersDestroy', 'PagesController@getCustomersDestroy');

   // Route::get('CustomersAdd', 'PagesController@getCustomersAdd');

    Route::get('customers', 'CustomersController@index');

    Route::get('statistics', 'PagesController@getStatistics');

    Route::get('employees', 'PagesController@getEmployees');

    //Route::get('EmployeesUpdate', 'PagesController@getEmployeesUpdate');

    //Route::get('EmployeesDestroy', 'PagesController@getEmployeesDestroy');

    //Route::get('EmployeesAdd', 'PagesController@getEmployeesAdd');

    Route::get('employees', 'EmployeesController@index');

    Route::get('articles', 'PagesController@getArticles');

   // Route::get('ArticlesUpdate', 'PagesController@getArticlesUpdate');

   // Route::get('ArticlesDestroy', 'PagesController@getArticlesDestroy');

   // Route::get('ArticlesAdd', 'PagesController@getArticlesAdd');

    Route::get('articles', 'ArticlesController@index');

    Route::get('collaborators', 'PagesController@getCollaborators');

 //   Route::get('CollaboratorsUpdate', 'PagesController@getCollaboratorsUpdate');

   // Route::get('CollaboratorsDestroy', 'PagesController@getCollaboratorsDestroy');

    // Route::get('CollaboratorsAdd', 'PagesController@getCollaboratorsAdd');

    Route::get('collaborators', 'CollaboratorController@index');

    Route::get('AdminController', 'PagesController@getAdminController');

    Route::get('owa_controller', 'PagesController@getowa_controller');

    Route::get('property', 'PropertyController@index');

    Route::get('PropertyView', 'SearchController@index');

   // Route::get('PropertyDestroy', 'PagesController@getPropertyDestroy');

   // Route::get('PropertyUpdate', 'PagesController@getPropertyUpdate');

    Route::get('PropertyImage', 'PagesController@getPropertyImage');

    Route::post('customers', 'CustomersController@store');

    Route::post('CustomersUpdate', 'CustomersController@update');

    Route::post('CustomersDestroy', 'CustomersController@destroy');

    Route::post('CustomersAdd', 'CustomersController@store');

    Route::post('employees', 'EmployeesController@store');

    Route::post('EmployeesUpdate', 'EmployeesController@update');

    Route::post('EmployeesDestroy', 'EmployeesController@destroy');

    Route::post('EmployeesAdd', 'EmployeesController@store');

    Route::post('articles', 'ArticlesController@store');

    Route::post('ArticlesUpdate', 'ArticlesController@update');

    Route::post('ArticlesDestroy', 'ArticlesController@destroy');

    Route::post('ArticlesAdd', 'ArticlesController@store');

    Route::post('collaborators', 'CollaboratorController@store');

    Route::post('CollaboratorsUpdate', 'CollaboratorController@update');

    Route::post('CollaboratorsDestroy', 'CollaboratorController@destroy');

    Route::post('CollaboratorsAdd', 'CollaboratorController@store');
    
    Route::post('PropertyUpdate', 'PropertyController@update');

    Route::post('PropertyDestroy', 'PropertyController@destroy');

    Route::post('PropertyAdd', 'PropertyController@store');

    Route::post('image-gallerydel', 'ImageGalleryController@destroy');

    Route::post('image-gallery', 'ImageGalleryController@store');

    Route::resource('image-gallery', 'ImageGalleryController');

  });
});

