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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Route::get('/login', ['uses' => 'Auth\LoginController@doLogin', 'as' => 'user.login']);
Route::group(['prefix' => 'auth'], function () {
    Route::get('/', ['uses' => 'Auth\LoginController@getLoginView', 'as' => 'user.login']);
    Route::post('/login', ['uses' => 'Auth\LoginController@doLogin', 'as' => 'user.login.post']);
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'user.logout']);
    Route::post('/change-password', ['uses' => 'Auth\LoginController@change_password', 'as' => 'user.change.password']);
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/login', ['uses' => 'Auth\LoginController@doLogin', 'as' => 'user.login']);
        Route::get('/error', ['uses' => 'ErrorController@index', 'as' => 'frontend.error.index']);

        Route::get('/', ['uses' => 'HomeController@index', 'as' => 'frontend.home.index']);
        Route::get('/contact', ['uses' => 'HomeController@contact', 'as' => 'frontend.home.contact']);
        Route::post('/submit_contact', ['uses' => 'HomeController@submit_contact', 'as' => 'frontend.home.contact.submit_contact']);
        Route::get('/about', ['uses' => 'HomeController@about', 'as' => 'frontend.home.about']);
        Route::post('/newsletter', ['uses' => 'HomeController@newsletter', 'as' => 'frontend.home.newsletter']);

        Route::group(['prefix' => 'search'], function () {
            Route::get('/', ['uses' => 'SearchController@index', 'as' => 'frontend.search.index']);


        });
        Route::group(['prefix' => 'tour'], function () {
            Route::get('/', ['uses' => 'TourController@index', 'as' => 'frontend.tour.index']);
            Route::get('/international', ['uses' => 'TourController@international', 'as' => 'frontend.tour.international']);
            Route::get('/domestic', ['uses' => 'TourController@domestic', 'as' => 'frontend.tour.domestic']);
            Route::get('/domestic/longtour', ['uses' => 'TourController@longtour', 'as' => 'frontend.tour.domestic.longtour']);
            Route::get('/domestic/shorttour', ['uses' => 'TourController@shorttour', 'as' => 'frontend.tour.domestic.shorttour']);
            Route::get('/foodtour', ['uses' => 'TourController@foodtour', 'as' => 'frontend.tour.domestic.foodtour']);
            Route::get('/detail/{slug}', ['uses' => 'TourController@detail', 'as' => 'frontend.tour.detail']);
            Route::post('/enquiry', ['uses' => 'TourController@enquiry', 'as' => 'frontend.tour.enquiry']);
            Route::post('/booking', ['uses' => 'TourController@booking', 'as' => 'frontend.tour.booking']);
            Route::get('/location', ['uses' => 'TourController@get_locations_tour_type', 'as' => 'frontend.tour.location']);
            Route::get('/search-home', ['uses' => 'TourController@ajax_search_home', 'as' => 'frontend.tour.ajax_search_home']);
            Route::get('/search-international', ['uses' => 'TourController@ajax_search_international', 'as' => 'frontend.tour.ajax_search_international']);
            Route::get('/search-domestic', ['uses' => 'TourController@ajax_search_domestic', 'as' => 'frontend.tour.ajax_search_domestic']);
            Route::get('/search-domestic-longtour', ['uses' => 'TourController@ajax_search_domestic_longtour', 'as' => 'frontend.tour.ajax_search_domestic_longtour']);
            Route::get('/search-domestic-shorttour', ['uses' => 'TourController@ajax_search_domestic_shorttour', 'as' => 'frontend.tour.ajax_search_domestic_shorttour']);
            Route::get('/search-domestic-foodtour', ['uses' => 'TourController@ajax_search_domestic_foodtour', 'as' => 'frontend.tour.ajax_search_domestic_foodtour']);

        });


        Route::group(['prefix' => 'news'], function () {
            Route::get('/', ['uses' => 'NewsController@index', 'as' => 'frontend.news.index']);
            Route::get('/{slug}', ['uses' => 'NewsController@details', 'as' => 'frontend.news.detail']);
        });
        // visa

        Route::group(['prefix' => 'visa'], function () {
            Route::get('/europe', ['uses' => 'VISAController@europe', 'as' => 'frontend.visa.europe']);
            Route::get('/asia', ['uses' => 'VISAController@asia', 'as' => 'frontend.visa.asia']);
            Route::get('/america', ['uses' => 'VISAController@america', 'as' => 'frontend.visa.america']);
            Route::get('/africa', ['uses' => 'VISAController@africa', 'as' => 'frontend.visa.africa']);
            Route::get('/australia', ['uses' => 'VISAController@australia', 'as' => 'frontend.visa.australia']);
            Route::get('/vietnam', ['uses' => 'VISAController@vietnam', 'as' => 'frontend.visa.vietnam']);
            Route::get('/detail/{slug}', ['uses' => 'VISAController@detail', 'as' => 'frontend.visa.detail']);
            Route::get('/test', ['uses' => 'VISAController@test', 'as' => 'frontend.visa.test']);
        });

        Route::group(['prefix' => 'services'], function () {
            Route::get('/translation', ['uses' => 'ServiceController@translation', 'as' => 'frontend.services.translation']);
            Route::get('/apeccard', ['uses' => 'ServiceController@apeccard', 'as' => 'frontend.services.apeccard']);
            Route::get('/workpermit', ['uses' => 'ServiceController@workpermit', 'as' => 'frontend.services.workpermit']);
            Route::get('/airlineticket', ['uses' => 'ServiceController@airlineticket', 'as' => 'frontend.services.airlineticket']);
            Route::get('/visa-viet-nam', ['uses' => 'ServiceController@visavietnam', 'as' => 'frontend.services.visavietnam']);
            Route::get('/others', ['uses' => 'ServiceController@other', 'as' => 'frontend.services.others']);
            Route::get('/visa', ['uses' => 'ServiceController@visa', 'as' => 'frontend.services.visa']);

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
                Route::post('/', ['uses' => 'AdminTourController@add', 'as' => 'backend.tours.add']);
                Route::post('/delete', ['uses' => 'AdminTourController@delete', 'as' => 'backend.tours.delete']);
                Route::get('/edit/{id}', ['uses' => 'AdminTourController@get_edit', 'as' => 'backend.tours.get']);
                Route::post('/edit', ['uses' => 'AdminTourController@edit', 'as' => 'backend.tours.edit']);
            });

            Route::group(['prefix' => 'news'], function () {
                Route::get('/', ['uses' => 'AdminNewsController@index', 'as' => 'backend.news.index']);
                Route::post('/add', ['uses' => 'AdminNewsController@add', 'as' => 'backend.news.add']);
                Route::post('/delete', ['uses' => 'AdminNewsController@detete', 'as' => 'backend.news.delete']);
                Route::get('/get/{id}', ['uses' => 'AdminNewsController@get', 'as' => 'backend.news.get']);
                Route::post('/edit', ['uses' => 'AdminNewsController@edit', 'as' => 'backend.news.edit']);
            });
            Route::group(['prefix' => 'booking'], function () {
                Route::get('/', ['uses' => 'AdminBookingController@index', 'as' => 'backend.booking.index']);
            });
            Route::group(['prefix' => 'location'], function () {
                Route::get('/', ['uses' => 'AdminLocationController@index', 'as' => 'backend.location.index']);
                Route::post('/add', ['uses' => 'AdminLocationController@add', 'as' => 'backend.location.add']);
                Route::post('/delete', ['uses' => 'AdminLocationController@delete', 'as' => 'backend.location.delete']);
                Route::get('/{id}', ['uses' => 'AdminLocationController@get', 'as' => 'backend.location.get']);
                Route::post('/edit', ['uses' => 'AdminLocationController@edit', 'as' => 'backend.location.edit']);
            });


        });


        // list all lfm routes here...
        Route::get('/laravel-filemanager', ['uses' => '\Unisharp\Laravelfilemanager\controllers\LfmController@show', 'as' => 'backend.show.media']);
        Route::post('/laravel-filemanager/upload', ['uses' => '\Unisharp\Laravelfilemanager\controllers\UploadController@upload', 'as' => 'backend.upload.media']);

        Route::get('/get-media/{id}/{resize?}', ['uses' => 'MediaController@get_media', 'as' => 'media.get']);
        Route::get('/media-info/{id}', ['uses' => 'MediaController@get_media_info', 'as' => 'media.get.info']);
        Route::get('/media-test', ['uses' => 'MediaController@test', 'as' => 'media.get.test']);
        Route::get('test', function () {
            return View::make('test');
        });
    });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
