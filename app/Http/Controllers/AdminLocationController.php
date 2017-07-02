<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 5/30/2017
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;


use App\Helper;
use App\Visa;
use App\VisaCategory;
use App\VisaTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use App\LocationTranslations;
use App\Location;
use App\Media;
class AdminLocationController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $search = $request['search'];
        if (!isset($search)) {
            $search = '';
        }
        $location = Location::all();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        if (isset($request['search'])) {
            $list_id = LocationTranslations::where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('short_description', 'LIKE', '%' . $search . '%')
                    ->orWhere('content', 'LIKE', '%' . $search . '%');
            })->select('province_id')->get();
            $location = Location::whereIn('id', $list_id)->get();
        }
        $collection = new Collection($location);
        $perPage = 20;
        $temp = $collection->forPage($currentPage, $perPage);
        $paginatedSearchResults = new LengthAwarePaginator($temp, count($collection), $perPage);
        $paginatedSearchResults->appends(['search' => $request['search']]);
        $paginatedSearchResults->setPath(route('backend.location.index'));


        return view('backend.pages.location.index',['locations'=>$paginatedSearchResults,'search'=>$search]);

    }

    public function delete(Request $request)
    {

        $rules = array(
            'id' => 'required',
        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Please select location']);
        } else {
            $location = Location::find($request['id']);
            if ($location) {
                $location->delete();
            }
            return response()->json(['success' => true, 'message' => 'Locations is deleted']);
        }

    }
    public function edit(Request $request)
    {
        $rules = array(
            'id' => 'required',
            'media_ids'=> 'required',
            'name_vi' => 'required',
            'name_en' => 'required',
        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Please select media and name']);
        } else {
            DB::transaction(function ()use($request) {
                $location = Location::find($request['id']);
                $slug = Str::slug($request['name_en']);
                if(DB::table('province')->where('slug_url', $slug)->get()!=null){
                    $count = DB::table('province')->where('slug_url', $slug)->count();
                    if ($count >= 1) {
                        $count = $count;
                        $slug = $slug . '-' . $count;
                    }
                }

                $location->media_ids = $request['media_ids'];
                $location->country = $request['country'];
                $location->is_domestic = $request['is_domestic'];
                $location->slug_url = $slug;
                $location->save();

                $vi = LocationTranslations::where('lang_code', 'vi')
                    ->where('province_id', $location->id)->first();
                $vi->name = $request['name_vi'];
                $vi->short_description = $request['short_des_vi'];
                $vi->save();

                $en = LocationTranslations::where('lang_code', 'en')
                    ->where('province_id', $location->id)->first();
                $en->name = $request['name_en'];
                $en->short_description = $request['short_des_en'];
                $en->save();
            });
            return response()->json(['success' => true, 'message' => 'Locations is updated']);
        }
    }


    public function get($id){

        $location = Location::find($id);
      //  dd($location->media_ids);
        $media_info = Helper::get_media_info($location->media_ids);
        return view('backend.pages.location.edit',['location'=>$location,'media_info'=>$media_info]);
    }
    public function add(Request $request)
    {
        $rules = array(
            'media_ids' => 'required',
            'name_vi' => 'required',
            'name_en' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Please input media and name']);
        } else {

            DB::transaction(function ()use($request) {
                $slug = Str::slug($request['name_en']);
                $count = DB::table('province')->where('slug_url', $slug)->count();
                if ($count >= 1) {
                    $count = $count;
                    $slug = $slug . '-' . $count;
                }
                $locate = new Location();
                $locate->media_ids = $request['media_ids'];
                $locate->country = $request['country'];
                $locate->is_domestic = $request['is_domestic'];
                $locate->slug_url = $slug;
                $locate->save();

                $vi = new LocationTranslations();
                $vi->lang_code = 'vi';
                $vi->province_id = $locate->id;
                $vi->name = $request['name_vi'];
                $vi->short_description = $request['short_des_vi'];
                $vi->save();

                $en = new LocationTranslations();
                $en->lang_code = 'en';
                $en->province_id = $locate->id;
                $en->name = $request['name_en'];
                $en->short_description = $request['short_des_en'];
                $en->save();

            });

            return response()->json(['success' => true, 'message' => 'Location is added']);
        }

    }

}