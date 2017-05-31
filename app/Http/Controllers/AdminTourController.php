<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/31/2017
 * Time: 10:24 PM
 */

namespace App\Http\Controllers;


class AdminTourController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.pages.tours.index');
    }
}