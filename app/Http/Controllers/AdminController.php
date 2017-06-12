<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 5/30/2017
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;
use DateTime;
use App\Helper;
use Illuminate\Support\Str;
class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $text ='Phát biểu tại        Nhật sáng nay, người đứng đầu Chính phủ Việt Nam khẳng định tiếp tục thúc đẩy các hiệp định thương mại tự do, trong đó có TPP.';

        $result =Str::slug($text);
       // $result = Helper::slug($text);
       // dd($result);
        
        return view('backend.pages.home.test');
    }
}