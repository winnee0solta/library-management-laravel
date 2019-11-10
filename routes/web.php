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
    Route::get('/contact-us', 'SiteController@contactusView');
    Route::post('/contact-us', 'SiteController@contactus');
    Route::get('/about-us', 'SiteController@aboutusView');
    Route::get('/faq', 'SiteController@faqView');
    Route::get('/terms-and-condition', 'SiteController@termsView');
    Route::get('/search', 'SiteController@searchBook');

    Route::get('/category/{id}/{name}', 'SiteController@singlecatView');
    Route::get('/single-book/{id}/{name}', 'SiteController@singlebookView');
    Route::get('/reserve-book/{id}/{name}', 'SiteController@reserveBook');
    Route::get('/cancel-reserve-book/{id}/{name}', 'SiteController@cancelreserveBook');


    Route::get('/view-books', 'SiteController@booksView');
    Route::get('/view-book/{id}', 'SiteController@viewSingleBook');
    /************ADMIN Dashboard*********************************************************/
    Route::get('/dashboard/manage-users', 'DashboardController@manageusersView');
    Route::get('/dashboard/add-new-admin-user', 'DashboardController@addnewadminview');
    Route::post('/dashboard/add-new-admin-user', 'DashboardController@addnewadmin');
    Route::get('/dashboard/remove-user/{id}', 'DashboardController@removeuser');

    Route::get('/dashboard/manage-category', 'DashboardController@manageCategoryView');
    Route::get('/dashboard/add-new-category', 'DashboardController@addNewCategoryView');
    Route::post('/dashboard/add-new-category', 'DashboardController@addNewcategory');
    Route::get('/dashboard/remove-category/{id}', 'DashboardController@removeCategory');


    Route::get('/dashboard/add-new-book', 'DashboardController@addNewBookView');
    Route::post('/dashboard/add-new-book', 'DashboardController@addNewBook');

    Route::get('/dashboard/edit-book/{id}', 'DashboardController@editBookView');
    Route::post('/dashboard/edit-book/{id}', 'DashboardController@editBook');

    Route::get('/dashboard/remove-book/{id}', 'DashboardController@removeBook');



    Route::get('/dashboard/show-reservations-data/{id}', 'DashboardController@showreservationView');
    Route::get('/dashboard/remove-reservation/{id}', 'DashboardController@removereservation');
    Route::get('/dashboard/mark-reservation-taken/{id}', 'DashboardController@markreservationtaken');

    Route::get('/dashboard/show-taken-data/{id}', 'DashboardController@showtakenView');
    Route::get('/dashboard/mark-as-returned/{id}', 'DashboardController@markasreturned');
});

