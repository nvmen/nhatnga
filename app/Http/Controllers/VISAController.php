<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/27/2017
 * Time: 9:12 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use App\VisaCategory;
class VISAController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function europe(Request $request)
    {
        $cate_visa_id = 5;
        $visa_asia = App\Visa::where('visa_cate_id', $cate_visa_id)->get();
        $cate_translation =VisaCategory::find($cate_visa_id)->translation()->first();

        return view('frontend.pages.visa.visa', ['visa_list' => $visa_asia,'cate'=>$cate_translation]);
    }

    public function asia(Request $request)
    {
        $cate_visa_id = 3;
        $visa_asia = App\Visa::where('visa_cate_id', $cate_visa_id)->get();
        $cate_translation =VisaCategory::find($cate_visa_id)->translation()->first();

        return view('frontend.pages.visa.visa', ['visa_list' => $visa_asia,'cate'=>$cate_translation]);
    }

    public function america(Request $request)
    {
        $cate_visa_id = 2;
        $visa_asia = App\Visa::where('visa_cate_id', $cate_visa_id)->get();
        $cate_translation =VisaCategory::find($cate_visa_id)->translation()->first();

        return view('frontend.pages.visa.visa', ['visa_list' => $visa_asia,'cate'=>$cate_translation]);
    }

    public function africa(Request $request)
    {
        $cate_visa_id = 1;
        $visa_asia = App\Visa::where('visa_cate_id', $cate_visa_id)->get();
        $cate_translation =VisaCategory::find($cate_visa_id)->translation()->first();

        return view('frontend.pages.visa.visa', ['visa_list' => $visa_asia,'cate'=>$cate_translation]);
    }

    public function australia(Request $request)
    {
        $cate_visa_id = 4;
        $visa_asia = App\Visa::where('visa_cate_id', $cate_visa_id)->get();
        $cate_translation =VisaCategory::find($cate_visa_id)->translation()->first();

        return view('frontend.pages.visa.visa', ['visa_list' => $visa_asia,'cate'=>$cate_translation]);
    }

    public function vietnam(Request $request)
    {
        $cate_visa_id = 3;
        $visa_asia = App\Visa::where('visa_cate_id', $cate_visa_id)->get();
        $cate_translation =VisaCategory::find($cate_visa_id)->translation()->first();

        return view('frontend.pages.visa.visa', ['visa_list' => $visa_asia,'cate'=>$cate_translation]);
    }

    public function detail($visa_url)
    {
        $visa =App\Visa::where('slug_url',$visa_url)->first();
        $cate_id =$visa->visa_cate_id;
        $url_cate='#';
        /*
         *  Route::get('/europe', ['uses' => 'VISAController@europe', 'as' => 'frontend.visa.europe']);
            Route::get('/asia', ['uses' => 'VISAController@asia', 'as' => 'frontend.visa.asia']);
            Route::get('/america', ['uses' => 'VISAController@america', 'as' => 'frontend.visa.america']);
            Route::get('/africa', ['uses' => 'VISAController@africa', 'as' => 'frontend.visa.africa']);
            Route::get('/australia', ['uses' => 'VISAController@australia', 'as' => 'frontend.visa.australia']);
            Route::get('/vietnam', ['uses' => 'VISAController@vietnam', 'as' => 'frontend.visa.vietnam']);
         */
        switch ($cate_id){
            case 1:{
                $url_cate =route('frontend.visa.africa');
                break;
            }
            case 2:{
                $url_cate =route('frontend.visa.america');
                break;
            }
            case 3:{
                $url_cate =route('frontend.visa.asia');
                break;
            }
            case 4:{
                $url_cate =route('frontend.visa.australia');
                break;
            }
            case 5:{

                $url_cate =route('frontend.visa.europe');
                break;
            }
        }
        $cate_translation = VisaCategory::find($visa->visa_cate_id)->translation()->first();
        return view('frontend.pages.visa.detail',['visa'=>$visa,'cate'=>$cate_translation,'url_cate'=>$url_cate]);
    }
    public function test()
    {

        return view('frontend.pages.visa.template');
    }


}