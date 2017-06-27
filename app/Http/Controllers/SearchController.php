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
use App\Service;
use App\Visa;
use App\Tour;
use App\Search;
use App\Helper;
use App\News;
use Illuminate\Pagination\LengthAwarePaginator;
class SearchController  extends Controller
{
    public  function index(Request $request){

       // dd($request['s']);
        $search_text = trim(Helper::stripVN($request['s']));
        $visas = Visa::all();
        $search_result = collect();
        foreach ($visas as $visa) {
            $name = $visa->translation()->first()->name;
            $name = Helper::stripVN($name);

            if($search_text==""){
                $search = new Search();
                // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                $search->link = route('frontend.visa.detail',['slug'=>$visa->slug_url]);
                $search->image_url = route('media.get', ['id'=>$visa->media_ids,'resize'=>'370x260']);
                $search->title =  $visa->translation()->first()->name;
                $search->post_date = $visa->updated_at;
                $search->short_description = Helper::get_words(strip_tags($visa->translation()->first()->content),30);

                $search_result->push($search);
            }else{
                $pos = strpos(strtoupper($name), strtoupper($search_text));
                if ($pos !== false) {
                    $search = new Search();
                    // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                    //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                    $search->link = route('frontend.visa.detail',['slug'=>$visa->slug_url]);
                    $search->image_url = route('media.get', ['id'=>$visa->media_ids,'resize'=>'370x260']);
                    $search->title =  $visa->translation()->first()->name;
                    $search->post_date = $visa->updated_at;
                    $search->short_description = Helper::get_words(preg_replace('/\s\s+/', '', strip_tags($visa->translation()->first()->content)),30);

                    $search_result->push($search);
                }
            }

        }

        $tours = Tour::all();
        foreach ($tours as $tour) {
            $name = $tour->translation()->first()->name;
            $name = Helper::stripVN($name);

            if($search_text==""){
                $search = new Search();
                // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                $search->link = route('frontend.tour.detail',['slug'=>$tour->slug_url]);
                $search->image_url = route('media.get', ['id'=>$tour->media_ids,'resize'=>'370x260']);
                $search->title =  $tour->translation()->first()->name;
                $search->post_date = $tour->updated_at;
                $search->short_description = Helper::get_words(($tour->translation()->first()->short_description),30);

                $search_result->push($search);
            }else{
                $pos = strpos(strtoupper($name), strtoupper($search_text));
                if ($pos !== false) {
                    $search = new Search();
                    // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                    //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                    $search->link = route('frontend.tour.detail',['slug'=>$tour->slug_url]);
                    $search->image_url = route('media.get', ['id'=>$tour->media_ids,'resize'=>'370x260']);
                    $search->title =  $tour->translation()->first()->name;
                    $search->post_date = $tour->updated_at;
                    $search->short_description = Helper::get_words(($tour->translation()->first()->short_description),30);

                    $search_result->push($search);
                }
            }

        }
        // visa
        // tour
        // news
        $news_list = App\News::all();
        foreach ($news_list as $news) {
            $name = $news->translation()->first()->name;
            $name = Helper::stripVN($name);

            if($search_text==""){
                $search = new Search();
                // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                $search->link = route('frontend.news.detail',['slug'=>$news->slug_url]);
                $search->image_url = route('media.get', ['id'=>$news->media_ids,'resize'=>'370x260']);
                $search->title =  $news->translation()->first()->name;
                $search->post_date = $news->updated_at;
                $search->short_description = Helper::get_words(($tour->translation()->first()->short_description),30);

                $search_result->push($search);
            }else{
                $pos = strpos(strtoupper($name), strtoupper($search_text));
                if ($pos !== false) {
                    $search = new Search();
                    // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                    //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                    $search->link = route('frontend.news.detail',['slug'=>$news->slug_url]);
                    $search->image_url = route('media.get', ['id'=>$news->media_ids,'resize'=>'370x260']);
                    $search->title =  $news->translation()->first()->name;
                    $search->post_date = $news->updated_at;
                    $search->short_description = Helper::get_words(($news->translation()->first()->short_description),30);

                    $search_result->push($search);
                }
            }

        }

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 7;
        $temp = $search_result->forPage($currentPage, $perPage);
        $paginatedSearchResults = new LengthAwarePaginator($temp, count($search_result), $perPage);
        $paginatedSearchResults->appends(['s' => $request['s']]);
        $paginatedSearchResults->setPath(route('frontend.search.index'));
        return view('frontend.pages.search.index', ['results' => $paginatedSearchResults]);

    }


}