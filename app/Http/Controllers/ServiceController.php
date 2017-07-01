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
        return view('frontend.pages.services.translation', ['service' => $service,'active'=>'translation']);
    }

    public function apeccard(Request $request)
    {

        $service = Service::find(2);
        return view('frontend.pages.services.apeccard', ['service' => $service,'active'=>'apeccard']);

    }

    public function workpermit(Request $request)
    {

        $service = Service::find(3);
        return view('frontend.pages.services.workpermit', ['service' => $service,'active'=>'workpermit']);

    }

    public function airlineticket(Request $request)
    {
        $service = Service::find(4);
        return view('frontend.pages.services.airlineticket', ['service' => $service,'active'=>'airlineticket']);

    }

    public function visavietnam(Request $request)
    {
        $service = Service::find(5);
        return view('frontend.pages.services.visavietnam', ['service' => $service,'active'=>'visavietnam']);

    }
    public function other(Request $request)
    {
        $service = Service::find(6);
        return view('frontend.pages.services.other', ['service' => $service,'active'=>'other']);

    }
    public function visa(Request $request)
    {
        $service = Service::find(7);
        return view('frontend.pages.services.visa', ['service' => $service]);

    }

}