<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/20/2017
 * Time: 10:31 PM
 */

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App;
use Mail;
class SearchController  extends Controller
{
    public  function index(Request $request){

        return view('frontend.pages.search.index');
    }


}