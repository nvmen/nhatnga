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

class ServiceController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function translation(Request $request)
    {
       
        // $this->middleware('auth');
        return view('frontend.pages.services.translation');
    }

    public function apeccard(Request $request)
    {
        // $this->middleware('auth');
        return view('frontend.pages.services.apeccard');
    }

    public function workpermit(Request $request)
    {
        // $this->middleware('auth');
        return view('frontend.pages.services.workpermit');
    }

    public function airlineticket(Request $request)
    {
        // $this->middleware('auth');
        return view('frontend.pages.services.airlineticket');
    }

    public function other(Request $request)
    {
        // $this->middleware('auth');
        return view('frontend.pages.services.other');
    }

}