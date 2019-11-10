<?php

//temp register for admin
Route::get('/register-admin/{name}/{phone}/{email}/{password}', 'AuthenticationController@registerAdmin');

Route::get('/login', 'AuthenticationController@loginView')->name('login');
Route::post('/login', 'AuthenticationController@loginuser');
Route::get('/register', 'AuthenticationController@registerView');
Route::post('/register', 'AuthenticationController@registeruser');

//Only Authenticated user can access these routes
Route::middleware(['auth'])->group(function () {

    Route::get('/logout', 'AuthenticationController@logout');
    Route::get('/', 'SiteController@index');
    /************Site*********************************************************/
    Route::get('/view-books', 'SiteController@booksView');
    Route::get('/view-book/{id}', 'SiteController@viewSingleBook');
    /************ADMIN Dashboard*********************************************************/
    Route::get('/dashboard/manage-category', 'DashboardController@manageCategoryView');
    Route::get('/dashboard/add-new-category', 'DashboardController@addNewCategoryView');
    Route::post('/dashboard/add-new-category', 'DashboardController@addNewcategory');
    Route::get('/dashboard/remove-category/{id}', 'DashboardController@removeCategory');


    Route::get('/dashboard/add-new-book', 'DashboardController@addNewBookView');
    Route::post('/dashboard/add-new-book', 'DashboardController@addNewBook');

    Route::get('/dashboard/edit-book/{id}', 'DashboardController@editBookView');
    Route::post('/dashboard/edit-book/{id}', 'DashboardController@editBook');

    Route::get('/dashboard/remove-book/{id}', 'DashboardController@removeBook');
});
