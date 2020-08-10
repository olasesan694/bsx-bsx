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

Auth::routes(["verify" => true]); // (email) usable on specific routes using:  ->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/dashboard', 'DashboardController@index')->middleware('auth')->name('dashboard');
Route::get('/pricing', 'PricingController@index')->name('pricing');
Route::get('/docs', 'DocumentationController@index')->middleware('auth')->name('docs');
Route::get('/demo-test', 'DemoController@test')->name('demo-test');
Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/store', 'StoreController@index')->name('store'); // demo
Route::get('/stores', 'StoresController@index')->name('stores');

Route::resource('/blog', 'BlogsController'); // blog
Route::get('/blog/{slug}', ['as' => 'blog.show', 'uses' => 'BlogsController@show'])->where('slug', '[\w\d\-\_]+'); //Named single, processed in getSingle. //url can be words,digits,underscore, or dash.


