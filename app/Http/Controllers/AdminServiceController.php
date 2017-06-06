<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/6/2017
 * Time: 10:54 PM
 */
namespace App\Http\Controllers;


use App\Banner;
use App\BannerTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdminServiceController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

}