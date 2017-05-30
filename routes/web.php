<?php

use Illuminate\Support\Facades\App;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'frontend.home.index']);
        Route::get('/contact', ['uses' => 'HomeController@contact', 'as' => 'frontend.home.contact']);
        Route::get('/about', ['uses' => 'HomeController@about', 'as' => 'frontend.home.about']);
        Route::get('/tour/international', ['uses' => 'TourController@international', 'as' => 'frontend.tour.international']);
        Route::get('/tour/domestic', ['uses' => 'TourController@domestic', 'as' => 'frontend.tour.domestic']);
        Route::get('/tour/domestic/longtour', ['uses' => 'TourController@longtour', 'as' => 'frontend.tour.domestic.longtour']);
        Route::get('/tour/domestic/shorttour', ['uses' => 'TourController@shorttour', 'as' => 'frontend.tour.domestic.shorttour']);
        Route::get('/tour/foodtour', ['uses' => 'TourController@foodtour', 'as' => 'frontend.tour.domestic.foodtour']);
        Route::get('test',function(){
            return View::make('test');
        });
    });