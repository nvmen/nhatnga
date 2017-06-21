<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/31/2017
 * Time: 10:24 PM
 */

namespace App\Http\Controllers;


use App\Helper;
use App\Location;
use App\Template;
use App\TourTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Tour;

class AdminTourController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //  $arr = Helper::get_list_media_info('11,12,13');
        //  dd($arr);

        $search = $request['search'];
        if (!isset($search)) {
            $search = '';
        }
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        if (isset($request['search'])) {

            $search = $request['search'];

        }
        //$location = Location::find(4);
        //  dd($location);
        //  $temp = Tour::find(7);
        //  $check =$temp->get_destination();
        //  dd($check);
        $list = Tour::all();
        $collection = new Collection($list);
        $perPage = 20;
        $temp = $collection->forPage($currentPage, $perPage);
        $paginatedSearchResults = new LengthAwarePaginator($temp, count($collection), $perPage);
        $paginatedSearchResults->appends(['search' => $request['search']]);
        $locations = Location::all();
        $template_tour_des = Template::where('name', 'tour-description')->first();
        $template_tour_des_data = '';
        if ($template_tour_des) {
            $template_tour_des_data = $template_tour_des->data;
        }
        $template_tour_itinerary = Template::where('name', 'tour-itinerary')->first();
        $template_tour_itinerary_data = '';
        if ($template_tour_itinerary) {
            $template_tour_itinerary_data = $template_tour_itinerary->data;
        }


        return view('backend.pages.tours.index', ['locations' => $locations,
            'list_tours' => $paginatedSearchResults,
            'tempate_tour_des' => $template_tour_des_data,
            'tempate_tour_itinerary' => $template_tour_itinerary_data,
        ]);
    }

    public function edit(Request $request)
    {
        $rules = array(
            'id' => 'required',
            'media_ids' => 'required',
            'name_vi' => 'required',
            'name_en' => 'required',
            'code' => 'required',

        );
        $data = $request->all();

        //  dd($data);
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {

            return response()->json(['success' => false, 'message' => 'Tour need a image and name, id']);
        } else {
            $slug = Str::slug($request['name_en']);
            $count = DB::table('tour')->where('slug_url', $slug)->count();
            if ($count >= 1) {
                $count = $count;
                $slug = $slug . '-' . $count;
            }
            $template_des = 'content';
            $template_itinerary = 'content';
            $template_tour_description = Template::where('name', 'tour-description')->first();
            $template_tour_itinerary = Template::where('name', 'tour-itinerary')->first();
            if ($template_tour_itinerary) {
                $template_itinerary = $template_tour_itinerary->data;
            }
            if ($template_tour_description) {
                $template_des = $template_tour_description->data;
            }
            $start_time = Carbon::now();



            $tour = Tour::find($request['id']);
            if ($tour == null) return response()->json(['success' => false, 'message' => 'Tour not exist']);
            $tour->code = $request['code'];
            $tour->slug_url = $slug;
            $tour->media_ids = $request['media_ids'];


            $tour->is_outbound = $request['is_outbound'];
            $tour->is_publish = $request['is_publish'];
            $tour->is_popular = $request['is_publish'];
            $tour->discount_percent = $request['discount_percent'];
            $tour->tour_type = $request['tour_type'];
            $tour->rating = $request['rating'];
            $discount = (float)$tour->discount_percent;
            $tour->is_sale = $discount > 0 ? true : false;
            if ($request['is_outbound'] == 0) {

                if ($request['tour_type'] == 3) {// food tour

                    $tour->food_location = $request['food_location'];
                    $tour->food_type = $request['food_type'];
                }
            }
            //  $tour->start_time = $start_time;
            $tour->departure_from = $request['departure_from'];
            $tour->destination = $request['destination'];
            $tour->duration_day = $request['duration_day'];
            $tour->duration_night = $request['duration_night'];
            $tour->save();

            /*
             *  tour_des_vi: tour_des_vi,
                tour_des_en: tour_des_en,
                tour_itinerary_vi: tour_itinerary_vi,
                tour_itinerary_en: tour_itinerary_en,
             */
            $vi = TourTranslations::where('tour_id',$tour->id)->where('lang_code','vi')->first();
            if ($vi == null) {
                $vi = new TourTranslations();
            }

            $vi->tour_id = $tour->id;
            $vi->lang_code = "vi";
            $vi->name = $request['name_vi'];
            $vi->short_description = $request['des_vi'];
            $vi->itinerary = $template_itinerary;
            $vi->description = $template_des;
            $vi->currency_unit = 'đ';
            $vi->children_price = $request['children_price_vi'];
            $vi->adult_price = $request['adults_price_vi'];
            $vi->itinerary = $request['tour_itinerary_vi'];
            $vi->description = $request['tour_des_vi'];

            $vi->save();
            $en = TourTranslations::where('tour_id',$tour->id)->where('lang_code','en')->first();
            if ($en == null) {
                $en = new TourTranslations();
            }

            $en->tour_id = $tour->id;
            $en->lang_code = "en";
            $en->name = $request['name_en'];
            $en->short_description = $request['des_en'];
            $en->itinerary = $template_itinerary;
            $en->description = $template_des;
            $en->currency_unit = '$';
            $en->children_price = $request['children_price_en'];
            $en->adult_price = $request['adults_price_en'];
            $en->itinerary = $request['tour_itinerary_en'];
            $en->description = $request['tour_des_en'];
            $en->save();


        }
        return response()->json(['success' => true, 'message' => 'Update tour ok']);
    }

    public function add(Request $request)
    {
        $rules = array(
            'media_ids' => 'required',
            'name_vi' => 'required',
            'name_en' => 'required',
            'code' => 'required|unique:tour',

        );
        $data = $request->all();

        //  dd($data);
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Tour need a image and name']);
        } else {

            DB::transaction(function ()use($request) {
                $slug = Str::slug($request['name_en']);
                $count = DB::table('tour')->where('slug_url', $slug)->count();
                if ($count >= 1) {
                    $count = $count;
                    $slug = $slug . '-' . $count;
                }
                $template_des = 'content';
                $template_itinerary = 'content';
                $template_tour_description = Template::where('name', 'tour-description')->first();
                $template_tour_itinerary = Template::where('name', 'tour-itinerary')->first();
                if ($template_tour_itinerary) {
                    $template_itinerary = $template_tour_itinerary->data;
                }
                if ($template_tour_description) {
                    $template_des = $template_tour_description->data;
                }
                $start_time = Carbon::now();
                $tour = new Tour();
                $tour->code = $request['code'];
                $tour->slug_url = $slug;
                $tour->media_ids = $request['media_ids'];


                $tour->is_outbound = $request['is_outbound'];
                $tour->is_publish = $request['is_publish'];
                $tour->is_popular = $request['is_publish'];
                $tour->discount_percent = $request['discount_percent'];
                $tour->tour_type = $request['tour_type'];
                $tour->rating = $request['rating'];
                $discount = (float)$tour->discount_percent;
                $tour->is_sale = $discount > 0 ? true : false;
                if ($request['is_outbound'] == 0) {
                    $tour->food_type = $request['food_type'];
                    if ($tour->food_type == 3) {// food tour
                        $tour->food_location = $request['food_location'];
                        $tour->food_type = $request['food_type'];
                    }
                }
                //  $tour->start_time = $start_time;
                $tour->departure_from = $request['departure_from'];
                $tour->destination = $request['destination'];
                $tour->duration_day = $request['duration_day'];
                $tour->duration_night = $request['duration_night'];
                $tour->save();

                /*
                 *  tour_des_vi: tour_des_vi,
                    tour_des_en: tour_des_en,
                    tour_itinerary_vi: tour_itinerary_vi,
                    tour_itinerary_en: tour_itinerary_en,
                 */

                $vi = new TourTranslations();
                $vi->tour_id = $tour->id;
                $vi->lang_code = "vi";
                $vi->name = $request['name_vi'];
                $vi->short_description = $request['des_vi'];
                $vi->itinerary = $template_itinerary;
                $vi->description = $template_des;
                $vi->currency_unit = 'đ';
                $vi->children_price = $request['children_price_vi'];
                $vi->adult_price = $request['adults_price_vi'];
                $vi->itinerary = $request['tour_itinerary_vi'];
                $vi->description = $request['tour_des_vi'];

                $vi->save();

                $en = new TourTranslations();
                $en->tour_id = $tour->id;
                $en->lang_code = "en";
                $en->name = $request['name_en'];
                $en->short_description = $request['des_en'];
                $en->itinerary = $template_itinerary;
                $en->description = $template_des;
                $en->currency_unit = '$';
                $en->children_price = $request['children_price_en'];
                $en->adult_price = $request['adults_price_en'];
                $vi->itinerary = $request['tour_itinerary_en'];
                $vi->description = $request['tour_des_en'];
                $en->save();

            });




        }
        return response()->json(['success' => true, 'message' => 'Tour need a image and name']);
    }

    public function delete(Request $request)
    {
        $rules = array(
            'id' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Please select tour for delete']);
        } else {
            $tour = Tour::find($request['id']);
            if ($tour) {
                $tour->delete();
            }
            return response()->json(['success' => true, 'message' => 'Tour is deleted']);
        }
    }

    public function get_edit($id)
    {
        $tour = Tour::find($id);
        if (!$tour) {
            return view('error.404');
        }
        //dd($tour->translation('vi')->first());
        $locations = Location::all();
        $list_media_info = Helper::get_list_media_info($tour->media_ids);
        return view('backend.pages.tours.edit', ['tour' => $tour,
            'locations' => $locations,
            'list_media_info' => $list_media_info]);

    }

}