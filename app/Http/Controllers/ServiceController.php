<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/27/2017
 * Time: 9:12 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Service;

class ServiceController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function translation(Request $request)
    {

        $service = Service::find(1);
        return view('frontend.pages.services.translation', ['service' => $service]);
    }

    public function apeccard(Request $request)
    {

        $service = Service::find(2);
        return view('frontend.pages.services.apeccard', ['service' => $service]);

    }

    public function workpermit(Request $request)
    {

        $service = Service::find(3);
        return view('frontend.pages.services.workpermit', ['service' => $service]);

    }

    public function airlineticket(Request $request)
    {
        $service = Service::find(4);
        return view('frontend.pages.services.airlineticket', ['service' => $service]);

    }

    public function visavietnam(Request $request)
    {
        $service = Service::find(5);
        return view('frontend.pages.services.visavietnam', ['service' => $service]);

    }
    public function other(Request $request)
    {
        $service = Service::find(6);
        return view('frontend.pages.services.other', ['service' => $service]);

    }

}