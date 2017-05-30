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

class VISAController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function europe(Request $request)
    {
        return view('frontend.pages.visa.europe');
    }

    public function asia(Request $request)
    {
        return view('frontend.pages.visa.asia');
    }

    public function america(Request $request)
    {
        return view('frontend.pages.visa.america');
    }

    public function africa(Request $request)
    {
        return view('frontend.pages.visa.africa');
    }

    public function australia(Request $request)
    {
        return view('frontend.pages.visa.australia');
    }
    public function vietnam(Request $request)
    {
        return view('frontend.pages.visa.vietnam');
    }
    public function detail($visa_url)
    {
        return view('frontend.pages.visa.detail');
    }
    
}