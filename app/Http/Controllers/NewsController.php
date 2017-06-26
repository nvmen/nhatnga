<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/21/2017
 * Time: 6:27 PM
 */

namespace App\Http\Controllers;


use App\Banner;
use App\BannerTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\News;
use App\Location;
use App\Template;
use App\TourTranslations;
use Illuminate\Support\Str;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class NewsController extends Controller
{

    public function index(Request $request)
    {

        $list = News::orderBy('updated_at', 'desc')->get();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $collection = new Collection($list);
        $perPage = 5;
     //   dd($collection->count());
        $temp = $collection->forPage($currentPage, $perPage);
        $paginatedSearchResults = new LengthAwarePaginator($temp, count($collection), $perPage);
        $paginatedSearchResults->setPath(route('frontend.news.index'));
        $paginatedSearchResults->appends(['search' => $request['search']]);
        return view('frontend.pages.news.index', ['list_news' => $paginatedSearchResults]);

    }

    public function details($slug)
    {
        $news = News::where('slug_url', $slug)->first();
        if ($news == null) {
            return view('error.frontend.404');
        }
        
        return view('frontend.pages.news.detail', ['news' => $news]);
    }
}