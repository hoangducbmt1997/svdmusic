<?php

use Illuminate\Support\Facades\Auth;
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



/*
|--------------------------------------------------------------------------
| Route Group Users
|--------------------------------------------------------------------------
*/

Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => [
    ],
], function () {
    Route::group([
        'prefix' => ''
    ], function () {
        Route::get('/', [
            'as' => 'home.index',
            'uses' => 'HomeController@index',
        ]);
        Route::get('top100/{id}', [
            'as' => 'view.top100',
            'uses' => 'HomeController@viewTop100',
        ]);
        Route::get('category/{id}', [
            'as' => 'view.category',
            'uses' => 'HomeController@viewCategory',
        ]);
        Route::get('{id}.html', [
            'as' => 'view.song',
            'uses' => 'HomeController@viewSong',
        ]);
        Route::get('/{id}/{slug}.html', [
            'as' => 'home.view',
            'uses' => 'HomeController@view',
        ]);
        Route::get('mv/{id}', [
            'as' => 'view.mv',
            'uses' => 'HomeController@viewMv',
        ]);
        Route::get('/user', [
            'as' => 'customer.profile',
            'uses' => 'CustomerController@profile',
        ]);
        Route::get('/bxh', [
            'as' => 'home.bxh',
            'uses' => 'HomeController@bxh',
        ]);
        Route::get('/newsong', [
            'as' => 'home.newsong',
            'uses' => 'HomeController@newSong',
        ]);
        Route::get('/artist', [
            'as' => 'home.artist',
            'uses' => 'HomeController@artist',
        ]);
        Route::get('/top100', [
            'as' => 'home.top100',
            'uses' => 'HomeController@top100',
        ]);
        Route::get('/theme', [
            'as' => 'home.theme',
            'uses' => 'HomeController@theme',
        ]);
        Route::get('/404',[
            'as'=>'home.error404',
            'uses'=>'HomeController@error404'
        ]);
        Route::get('/500',[
            'as'=>'home.error500',
            'uses'=>'HomeController@error500'
        ]);
        Route::get('/login',[
            'as'=>'customer.login',
            'uses'=>'CustomerController@login'
        ]);
        Route::post('/login',[
            'uses'=>'CustomerController@postLogin'
        ]);
        Route::get('/logout',[
            'as'=>'customer.logout',
            'uses'=>'CustomerController@logout'
        ]);
        Route::get('/register',[
            'as'=>'customer.register',
            'uses'=>'CustomerController@register'
        ]);
        Route::post('/register',[
            'uses'=>'CustomerController@postRegister'
        ]);
        Route::get('cart/add/{id}', [
            'as' => 'home.addSong',
            'uses' => 'CartController@add',
        ]);
        Route::get('cart/remove/{id}', [
            'as' => 'home.removeSong',
            'uses' => 'CartController@remove',
        ]);

        Route::get('artist/registered/{id_user}/{id_artist}',[
            'as' => 'home.artist.registered',
            'uses' =>'ArtistRegisteredController@registered'
        ]);
        Route::get('artist/unregistered/{id_user}/{id_artist}',[
            'as' => 'home.artist.unregistered',
            'uses' =>'ArtistRegisteredController@unRegistered'
        ]);
        Route::get('top100/registered/{id_user}/{id_top100}',[
            'as' => 'home.top100.registered',
            'uses' =>'Top100RegisteredController@registered'
        ]);
        Route::get('top100/unregistered/{id_user}/{id_top100}',[
            'as' => 'home.top100.unregistered',
            'uses' =>'Top100RegisteredController@unregistered'
        ]);
        Route::get('category/registered/{id_user}/{id_category}',[
            'as' => 'home.category.registered',
            'uses' =>'CategoryRegisteredController@registered'
        ]);
        Route::get('category/unregistered/{id_user}/{id_category}',[
            'as' => 'home.category.unregistered',
            'uses' =>'CategoryRegisteredController@unregistered'
        ]);
    });
});

/*
|--------------------------------------------------------------------------
| Route Login Admin
|--------------------------------------------------------------------------
*/
Route::prefix('admin/login')->group( function (){
    Route::get('/',[App\Http\Controllers\Admin\LoginController::class,'login'])->name('login');
    Route::post('/',[App\Http\Controllers\Admin\LoginController::class,'postLogin']);
});
/*
|--------------------------------------------------------------------------
| Route Group Admin
|--------------------------------------------------------------------------
*/

Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => '/',

], function () {
    // Route pre-fix admin
    Route::group([
        'prefix' => 'admin',
        'middleware' => [
            'auth',
        ]
    ], function () {
        Route::get('/', [
            'as' => 'admin.LoginController.dashboard',
            'uses' => 'LoginController@dashboard',
        ]);
        Route::get('/logout', [
            'as' => 'admin.LoginController.logout',
            'uses' => 'LoginController@logout',
        ]);
        /*---------------------
        | Route Admin Category |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/category',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.category.index',
                'uses' => 'CategoryController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.category.create',
                'uses' => 'CategoryController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.category.store',
                'uses' => 'CategoryController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.category.edit',
                'uses' => 'CategoryController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.category.update',
                'uses' => 'CategoryController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.category.destroy',
                'uses' => 'CategoryController@destroy'
            ]);
        });
        /*---------------------
        | Route Admin Song |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/song',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.song.index',
                'uses' => 'SongController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.song.create',
                'uses' => 'SongController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.song.store',
                'uses' => 'SongController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.song.edit',
                'uses' => 'SongController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.song.update',
                'uses' => 'SongController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.song.destroy',
                'uses' => 'SongController@destroy'
            ]);
        });


        /*---------------------
        | Route Admin Playlist |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/playlist',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.playlist.index',
                'uses' => 'PlaylistController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.playlist.create',
                'uses' => 'PlaylistController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.playlist.store',
                'uses' => 'PlaylistController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.playlist.edit',
                'uses' => 'PlaylistController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.playlist.update',
                'uses' => 'PlaylistController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.playlist.destroy',
                'uses' => 'PlaylistController@destroy'
            ]);
        });


        /*---------------------
        | Route Admin Top 100 |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/top100',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.top100.index',
                'uses' => 'Top100Controller@index'
            ]);
            Route::get('create', [
                'as' => 'admin.top100.create',
                'uses' => 'Top100Controller@create'
            ]);
            Route::post('store', [
                'as' => 'admin.top100.store',
                'uses' => 'Top100Controller@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.top100.edit',
                'uses' => 'Top100Controller@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.top100.update',
                'uses' => 'Top100Controller@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.top100.destroy',
                'uses' => 'Top100Controller@destroy'
            ]);
        });

        /*---------------------
        | Route Admin Artist |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/artist',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.artist.index',
                'uses' => 'ArtistController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.artist.create',
                'uses' => 'ArtistController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.artist.store',
                'uses' => 'ArtistController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.artist.edit',
                'uses' => 'ArtistController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.artist.update',
                'uses' => 'ArtistController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.artist.destroy',
                'uses' => 'ArtistController@destroy'
            ]);
        });

        /*---------------------
        | Route Admin Area |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/area',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.area.index',
                'uses' => 'AreaController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.area.create',
                'uses' => 'AreaController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.area.store',
                'uses' => 'AreaController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.area.edit',
                'uses' => 'AreaController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.area.update',
                'uses' => 'AreaController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.area.destroy',
                'uses' => 'AreaController@destroy'
            ]);
        });

        /*---------------------
        | Route Admin MV |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/mv',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.mv.index',
                'uses' => 'MvController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.mv.create',
                'uses' => 'MvController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.mv.store',
                'uses' => 'MvController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.mv.edit',
                'uses' => 'MvController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.mv.update',
                'uses' => 'MvController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.mv.destroy',
                'uses' => 'MvController@destroy'
            ]);
        });
        /*---------------------
        | Route Admin Banner |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/banner',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.banner.index',
                'uses' => 'BannerController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.banner.create',
                'uses' => 'BannerController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.banner.store',
                'uses' => 'BannerController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.banner.edit',
                'uses' => 'BannerController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.banner.update',
                'uses' => 'BannerController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.banner.destroy',
                'uses' => 'BannerController@destroy'
            ]);
        });

        /*---------------------
        | Route Admin User |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/user',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.user.index',
                'uses' => 'UserController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.user.create',
                'uses' => 'UserController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.user.store',
                'uses' => 'UserController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.user.edit',
                'uses' => 'UserController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.user.update',
                'uses' => 'UserController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.user.destroy',
                'uses' => 'UserController@destroy'
            ]);
        });

        /*---------------------
        | Route Admin Theme |
        ----------------------*/
        Route::group([
            'prefix' => 'admin/theme',
            ['middleware' => [
            // registered middleware here
            ]]
        ], function () {
            // Crud routes
            Route::get('/', [
                'as' => 'admin.theme.index',
                'uses' => 'ThemeController@index'
            ]);
            Route::get('create', [
                'as' => 'admin.theme.create',
                'uses' => 'ThemeController@create'
            ]);
            Route::post('store', [
                'as' => 'admin.theme.store',
                'uses' => 'ThemeController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'admin.theme.edit',
                'uses' => 'ThemeController@edit'
            ]);
            Route::put('update/{id}', [
                'as' => 'admin.theme.update',
                'uses' => 'ThemeController@update'
            ]);
            Route::delete('destroy/{id}', [
                'as' => 'admin.theme.destroy',
                'uses' => 'ThemeController@destroy'
            ]);
        });

    });
});


