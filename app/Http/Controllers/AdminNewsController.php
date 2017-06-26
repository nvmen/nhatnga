<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/31/2017
 * Time: 10:28 PM
 */

namespace App\Http\Controllers;
use App\BannerTranslations;
use App\News;
use App\NewsTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
class AdminNewsController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $list_news = News::orderBy('updated_at','DESC')->get();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $collection = new Collection($list_news);
        $perPage = 20;
        $temp = $collection->forPage($currentPage, $perPage);
        $paginatedSearchResults = new LengthAwarePaginator($temp, count($collection), $perPage);
        $paginatedSearchResults->appends(['search' => $request['search']]);
      //  dd($paginatedSearchResults);
        return view('backend.pages.news.index',['search'=>'','list_news'=>$paginatedSearchResults]);
    }
    public function add(Request $request)
    {
        $rules = array(
            'media_ids' => 'required',
            'name_en' => 'required',
            'name_vi' => 'required',
        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Visa need a image and name not empty']);
        } else {
            DB::transaction(function ()use($request) {
                $slug = Str::slug($request['name_en']);
                $count = DB::table('news')->where('slug_url', $slug)->count();

                if ($count >= 1) {
                    $count = $count;
                    $slug = $slug . '-' . $count;
                }
                $obj = new News();
                $obj->media_ids = $request['media_ids'];
                $obj->slug_url = $slug;
                $obj->new_cate_id = $request['cate_news'];// will update cate later
                $obj->save();

                $obj_vi = new NewsTranslations();
                $obj_vi->lang_code = 'vi';
                $obj_vi->new_id = $obj->id;

                $obj_vi->name = $request['name_vi'];
                $obj_vi->short_description = $request['short_des_vi'];
                $obj_vi->content = $request['content_vi'];
                $obj_vi->save();

                $obj_en = new NewsTranslations();
                $obj_en->lang_code = 'en';
                $obj_en->new_id = $obj->id;

                $obj_en->name = $request['name_en'];
                $obj_en->short_description = $request['short_des_en'];
                $obj_en->content = $request['content_en'];
                $obj_en->save();

            });
            return response()->json(['success' => true, 'message' => 'Add sucessfull']);
        }
    }
    public function get($id)
    {

        $news = News::find($id);
        $news_vi = $news->translation('vi')->first();
        $news_en = $news->translation('en')->first();
        $media = $news->medias($news->media_ids);
        if ($media) {
            $info = [
                'name' => $media[0]->uuid_name,
                'link' => route('media.get', ['id' => $media[0]->id, 'resize' => '120x120']),
                'size' => $media[0]->size,
            ];
        } else {
            $info = [
                'name' => '',
                'link' => 'www.google.com',
                'size' => '0',
            ];
        }
        return view('backend.pages.news.edit', ['news' => $news,
            'media_info' => $info,
            'news_vi' => $news_vi,
            'news_en' => $news_en

        ]);
    }
    public function detete(Request $request)
    {
        $rules = array(
            'id' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {           
            return response()->json(['success' => false, 'message' => 'Please select news for delete']);
        } else {
            $news = News::find($request['id']);
            if ($news) {
                $news->delete();
            }
            return response()->json(['success' => true, 'message' => 'News is deleted']);
        }
       
    }
    public  function  edit(Request $request){
        $rules = array(
            'media_ids' => 'required',
            'name_en' => 'required',
            'name_vi' => 'required',
            'id'=>'required'
        );
        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Visa need a image and name not empty']);
        } else {
            DB::transaction(function ()use($request) {
                $slug = Str::slug($request['name_en']);
                $count = DB::table('news')->where('slug_url', $slug)->count();

                if ($count >= 1) {
                    $count = $count;
                    $slug = $slug . '-' . $count;
                }
                $id = $request['id'];
                $obj = News::find($id);
                $obj->media_ids = $request['media_ids'];
                $obj->slug_url = $slug;
                $obj->new_cate_id = $request['cate_news'];// will update cate later
                $obj->save();

                $obj_vi = NewsTranslations::where('lang_code', 'vi')
                    ->where('new_id', $id)->first();

                $obj_vi->name = $request['name_vi'];
                $obj_vi->short_description = $request['short_des_vi'];
                $obj_vi->content = $request['content_vi'];
                $obj_vi->save();

                $obj_en = NewsTranslations::where('lang_code', 'en')
                    ->where('new_id', $id)->first();
                $obj_en->name = $request['name_en'];
                $obj_en->short_description = $request['short_des_en'];
                $obj_en->content = $request['content_en'];
                $obj_en->save();
            });

            return response()->json(['success' => true, 'message' => 'Add sucessfull']);
        }
    }
}