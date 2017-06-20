<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/27/2017
 * Time: 9:12 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tour;

class TourController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //return view('frontend.pages.tour.index');
        return view('frontend.pages.tour.index');
    }

    public function international(Request $request)
    {
        return view('frontend.pages.tour.index');
    }

    public function domestic(Request $request)
    {
        return view('frontend.pages.tour.index');
    }

    public function foodtour(Request $request)
    {
        return view('frontend.pages.tour.detail');
    }

    public function detail($slug)
    {
        $tour =Tour::where('slug_url',$slug)->first();
        //dd($tour->translation()->first()->name);
       // dd($tour);
        if($tour==null)
            return redirect()->route('frontend.error.index');

        return view('frontend.pages.tour.details',['tour'=>$tour]);
    }
    public function longtour(Request $request)
    {
        return view('frontend.pages.tour.longtour');
    }
    public function shorttour(Request $request)
    {
        return view('frontend.pages.tour.shorttour');
    }


}