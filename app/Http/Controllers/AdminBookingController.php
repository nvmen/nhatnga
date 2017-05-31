<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/31/2017
 * Time: 10:34 PM
 */

namespace App\Http\Controllers;



class AdminBookingController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.pages.banner.index');
    }
}