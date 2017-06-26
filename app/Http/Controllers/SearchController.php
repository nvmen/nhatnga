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
class SearchController  extends Controller
{
    public  function index(Request $request){

       // dd($request['s']);
        $search = trim(Helper::stripVN($request['s']));


        $visas = Visa::all();
       // dd($visas);
        $search_result = collect();
        $count =1;
        foreach ($visas as $visa) {
            $name = $visa->translation()->first()->name;
            $name = Helper::stripVN($name);


            $pos = strpos(strtoupper($name), strtoupper($search));
            if ($pos !== false) {
                $search = new Search();
                // route('media.get', ['id'=>$visa->media_ids,'resize'=>'430x305'])
                //route('frontend.visa.detail',['slug'=>$visa->slug_url])
                $search->link = route('frontend.visa.detail',['slug'=>$visa->slug_url]);
                $search->image_url = route('media.get', ['id'=>$visa->media_ids,'resize'=>'370x260']);
                $search->title =  $visa->translation()->first()->name;
                $search->post_date = $visa->updated_at;
                $search->short_description = Helper::get_words(strip_tags($visa->translation()->first()->content),30);
                $count =$count +1;
                $search_result->push($search);
            }
        }
        dd($search_result,$count);
        // services
        // visa
        // tour
        // news

        return view('frontend.pages.search.index');
    }


}