<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RssFeedController;
use Illuminate\Http\Request;
use App\Http\Controllers\CKFinderController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::any('/ckfinder/connector', [CKFinderController::class, 'connector'])->name('ckfinder_connector');
    Route::get('/ckfinder/browser', [CKFinderController::class, 'browser'])->name('ckfinder_browser');
    Route::get('/ckfinder/upload', [CKFinderController::class, 'upload'])->name('ckfinder_upload');
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/introduction', 'HomeController@introduction')->name('home.introduction');
    Route::get('/regulations', 'HomeController@regulations')->name('home.regulations');
    Route::get('/posts-list', 'PostController@getListByCategory');
    Route::get('/posts/details/{post_id}', 'PostController@getPostDetails');
    Route::get('/categories/get-sub-categories/{categoryId?}', 'CategoriesController@getSubCategory');

    Route::get('rss/posts.rss', [RssFeedController::class, 'index']);
    Route::get('rss/{post_id}/posts-details.rss', [RssFeedController::class, 'detail']);
    Route::get('rss/introduction.rss', [RssFeedController::class, 'introduction']);
    Route::get('rss/regulations.rss', [RssFeedController::class, 'regulations']);

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('/admin', 'AdminController@show');
        Route::post('/upload-image', 'ImageUploadController@upload')->name('upload.image');
        Route::post('/upload_domain', 'ImageUploadController@uploadDomain')->name('upload.domain');
        Route::post('/verify', 'PostController@verify')->name('post.verify');

        Route::resource('users', 'UsersController', ['except' => ['show']]);

        Route::resource('categories', 'CategoriesController', ['except' => ['show']]);

        Route::resource('tools', 'ToolsController', ['except' => ['show']]);

        Route::resource('regulations-admin', 'RegulationsController', ['except' => ['show']]);



        /**
         * Posts
         */

        Route::resource('posts', 'PostController', ['except' => ['show']]);

        // Route::controller(CategoriesController::class)->group(function () {
        //     Route::get('/categories', 'index');
        //     Route::get('/categories/create','create');
        //     Route::post('/categories', 'store');
        //     Route::delete('/categories/{id}', 'destroy');
        //     Route::get('/categories/{id}/edit', 'edit');
        //     Route::put('/categories/{id}', 'update');
        // });
    });
});
