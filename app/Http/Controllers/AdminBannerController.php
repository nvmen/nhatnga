<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 5/30/2017
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;


class AdminBannerController extends Controller
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