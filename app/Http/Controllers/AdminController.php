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
use App\Tour;
use App\News;
use App\Visa;
use App\Booking;
use DB;
class AdminController extends Controller
{
    public function __construct()
    {
         $this->middleware('admin');
    }

    public function index()
    {

       $visa_count = Visa::all()->count();
        $tour_count = Tour::all()->count();
        $news_count = News::all()->count();
        $tours= Tour::orderBy('updated_at')->get();
        $visa = Visa::all();
        $book = Booking::all();
        $today_book = DB::table('booking')->select(DB::raw('*'))
            ->whereRaw('Date(created_at) = CURDATE()')->get()->count();
        $thisweek_book = DB::table('booking')->select(DB::raw('*'))
            ->whereRaw('YEARWEEK(created_at) = YEARWEEK(NOW())')->get()->count();

        $thismonth_book = DB::table('booking')->select(DB::raw('*'))
            ->whereRaw('MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(created_at)')->get()->count();
        return view('backend.pages.home.index',['visa_count'=>$visa_count
            ,'tour_count'=>$tour_count,
             'news_count'=>$news_count,
             'tours'=>$tours,
              'visa'=>$visa,
              'book'=>$book,'today_book'=>$today_book,'thisweek_book'=>$thisweek_book,'thismonth_book'=>$thismonth_book]);
    }
}