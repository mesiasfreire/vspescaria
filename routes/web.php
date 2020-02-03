<?php



Auth::routes(['register'=>false]);


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function (){

    Route::get('/', 'AdminController@index')->name('admin');

    Route::prefix('posts')->name('posts.')->group(function (){
        Route::get('/','PostController@index')->name('index');
        Route::get('/create','PostController@create')->name('create');
        Route::post('/create','PostController@store')->name('store');
        Route::get('/edit/{post}','PostController@edit')->name('edit');
        Route::get('/show/{post}','PostController@show')->name('show');
        Route::put('/edit/{post}','PostController@update')->name('update');
    });

    Route::prefix('pages')->name('pages.')->group(function (){
        Route::get('/','PagesController@index')->name('index');
        Route::get('/create','PagesController@create')->name('create');
        Route::post('/create','PagesController@store')->name('store');
        Route::get('/edit/{page}','PagesController@edit')->name('edit');
        Route::get('/show/{page}','PagesController@show')->name('show');
        Route::put('/edit/{page}','PagesController@update')->name('update');
    });
});

Route::name('site.')->group(function () {
        Route::get('/','SiteController@index')->name('index');
        Route::post('/email','SiteController@sendEmail')->name('email');
        Route::get('{category}/', 'SiteController@page')->name('page');
        Route::get('{category}/{post}', 'SiteController@content')->name('content');
});


