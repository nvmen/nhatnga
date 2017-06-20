<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/20/2017
 * Time: 12:52 PM
 */

namespace App\Http\Controllers;


class ErrorController extends Controller
{

    public  function index(){
        return view('error.frontend.404');
    }
}