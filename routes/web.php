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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Auth::routes(["verify" => true]);

// Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/dashboard', 'DashboardController@index')->middleware('auth')->name('dashboard');
Route::get('/pricing', 'PricingController@index')->name('pricing');
Route::get('/docs', 'DocumentationController@index')->middleware('auth')->name('docs');
Route::get('/demo', 'DemoController@index')->name('demo')->middleware('auth');
Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/store', 'StoreController@index')->name('store'); // demo

Route::get('/blog', 'BlogController@index')->name('blog'); // blogs
// Route::get('ReferralsController')->name('referral')->middleware(['auth']);
