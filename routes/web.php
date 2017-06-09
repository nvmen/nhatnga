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
            Route::get('/detail/{slug}', ['uses' => 'VISAController@detail', 'as' => 'frontend.visa.detail']);
        });

        Route::group(['prefix' => 'services'], function () {
            Route::get('/translation', ['uses' => 'ServiceController@translation', 'as' => 'frontend.services.translation']);
            Route::get('/apeccard', ['uses' => 'ServiceController@apeccard', 'as' => 'frontend.services.apeccard']);
            Route::get('/workpermit', ['uses' => 'ServiceController@workpermit', 'as' => 'frontend.services.workpermit']);
            Route::get('/airlineticket', ['uses' => 'ServiceController@airlineticket', 'as' => 'frontend.services.airlineticket']);
            Route::get('/visa-viet-nam', ['uses' => 'ServiceController@visavietnam', 'as' => 'frontend.services.visavietnam']);
            Route::get('/others', ['uses' => 'ServiceController@other', 'as' => 'frontend.services.others']);

        });

        Route::group(['prefix' => 'admin'], function () {

            Route::get('/', ['uses' => 'AdminController@index', 'as' => 'backend.home.index']);

            Route::group(['prefix' => 'media'], function () {
                Route::post('/upload', ['uses' => 'FileController@upload', 'as' => 'backend.media.upload']);
            });
            Route::group(['prefix' => 'banner'], function () {
                Route::get('/', ['uses' => 'AdminBannerController@index', 'as' => 'backend.banner.index']);
                Route::post('/add', ['uses' => 'AdminBannerController@add', 'as' => 'backend.banner.add']);
                Route::post('/delete', ['uses' => 'AdminBannerController@delete', 'as' => 'backend.banner.delete']);
                Route::get('/edit/{id}', ['uses' => 'AdminBannerController@edit_banner', 'as' => 'backend.banner.edit']);
                Route::post('/save-edit', ['uses' => 'AdminBannerController@save_edit', 'as' => 'backend.banner.save.edit']);
            });

            Route::group(['prefix' => 'services'], function () {
                Route::get('/', ['uses' => 'AdminServicesController@index', 'as' => 'backend.services.index']);
                Route::get('/{id}', ['uses' => 'AdminServicesController@get_service', 'as' => 'backend.services.get']);
                Route::post('/save-edit', ['uses' => 'AdminServicesController@save_edit', 'as' => 'backend.services.save']);
            });

            Route::group(['prefix' => 'visa'], function () {
                Route::get('/', ['uses' => 'AdminVisaController@index', 'as' => 'backend.visa.index']);
                Route::post('/add', ['uses' => 'AdminVisaController@add', 'as' => 'backend.visa.add']);
                Route::post('/delete', ['uses' => 'AdminVisaController@delete', 'as' => 'backend.visa.delete']);
                Route::get('/{id}', ['uses' => 'AdminVisaController@get_edit', 'as' => 'backend.visa.get']);
                Route::post('/save', ['uses' => 'AdminVisaController@save_edit', 'as' => 'backend.visa.save']);
            });

            Route::group(['prefix' => 'tours'], function () {
                Route::get('/', ['uses' => 'AdminTourController@index', 'as' => 'backend.tours.index']);
            });

            Route::group(['prefix' => 'news'], function () {
                Route::get('/', ['uses' => 'AdminNewsController@index', 'as' => 'backend.news.index']);
            });
            Route::group(['prefix' => 'booking'], function () {
                Route::get('/', ['uses' => 'AdminBookingController@index', 'as' => 'backend.booking.index']);
            });




        });



            // list all lfm routes here...
            Route::get('/laravel-filemanager', ['uses' =>'\Unisharp\Laravelfilemanager\controllers\LfmController@show', 'as' => 'backend.show.media']);
            Route::post('/laravel-filemanager/upload',  ['uses' =>'\Unisharp\Laravelfilemanager\controllers\UploadController@upload', 'as' => 'backend.upload.media']);

        Route::get('/get-media/{id}/{resize?}', ['uses' =>'MediaController@get_media', 'as' => 'media.get']);
        Route::get('/media-info/{id}', ['uses' =>'MediaController@get_media_info', 'as' => 'media.get.info']);
        Route::get('test', function () {
            return View::make('test');
        });
    });

