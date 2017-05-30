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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'frontend.home.index']);
        Route::get('/contact', ['uses' => 'HomeController@contact', 'as' => 'frontend.home.contact']);
        Route::get('/about', ['uses' => 'HomeController@about', 'as' => 'frontend.home.about']);
        Route::get('/tour/international', ['uses' => 'TourController@international', 'as' => 'frontend.tour.international']);
        Route::get('/tour/domestic', ['uses' => 'TourController@domestic', 'as' => 'frontend.tour.domestic']);
        Route::get('/tour/domestic/longtour', ['uses' => 'TourController@longtour', 'as' => 'frontend.tour.domestic.longtour']);
        Route::get('/tour/domestic/shorttour', ['uses' => 'TourController@shorttour', 'as' => 'frontend.tour.domestic.shorttour']);
        Route::get('/tour/foodtour', ['uses' => 'TourController@foodtour', 'as' => 'frontend.tour.domestic.foodtour']);
        // visa

        Route::group(['prefix' => 'visa'], function () {
            Route::get('/europe', ['uses' => 'VISAController@europe', 'as' => 'frontend.visa.europe']);
            Route::get('/asia', ['uses' => 'VISAController@asia', 'as' => 'frontend.visa.asia']);
            Route::get('/america', ['uses' => 'VISAController@america', 'as' => 'frontend.visa.america']);
            Route::get('/africa', ['uses' => 'VISAController@africa', 'as' => 'frontend.visa.africa']);
            Route::get('/australia', ['uses' => 'VISAController@australia', 'as' => 'frontend.visa.australia']);
            Route::get('/vietnam', ['uses' => 'VISAController@vietnam', 'as' => 'frontend.visa.vietnam']);
            Route::get('/detail/{visa_url}', ['uses' => 'VISAController@detail', 'as' => 'frontend.visa.detail']);
        });

        Route::group(['prefix' => 'services'], function () {
            Route::get('/translation', ['uses' => 'ServiceController@translation', 'as' => 'frontend.services.translation']);
            Route::get('/apeccard', ['uses' => 'ServiceController@apeccard', 'as' => 'frontend.services.apeccard']);
            Route::get('/workpermit', ['uses' => 'ServiceController@workpermit', 'as' => 'frontend.services.workpermit']);
            Route::get('/airlineticket', ['uses' => 'ServiceController@airlineticket', 'as' => 'frontend.services.airlineticket']);
            Route::get('/others', ['uses' => 'ServiceController@other', 'as' => 'frontend.services.others']);

        });

        Route::group(['prefix' => 'admin'], function () {
            Route::get('/', ['uses' => 'AdminController@index', 'as' => 'backend.home.index']);

        });
        Route::get('test', function () {
            return View::make('test');
        });
    });

