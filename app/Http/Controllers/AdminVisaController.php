<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/31/2017
 * Time: 10:21 PM
 */

namespace App\Http\Controllers;


use App\Template;
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

class AdminVisaController extends Controller
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
        $visa_cate = VisaCategory::all();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $visas = Visa::all();
        if (isset($request['search'])) {

            $search = $request['search'];

            $list_visa_id = VisaTranslations::where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhere('short_description', 'LIKE', '%' . $search . '%')
                    ->orWhere('content', 'LIKE', '%' . $search . '%');
            })->select('visa_id')->get();

            $visas = Visa::whereIn('id', $list_visa_id)->get();
        }
        $collection = new Collection($visas);
        $perPage = 20;
        $temp = $collection->forPage($currentPage, $perPage);
        $paginatedSearchResults = new LengthAwarePaginator($temp, count($collection), $perPage);
        $paginatedSearchResults->appends(['search' => $request['search']]);
        $paginatedSearchResults->setPath(route('backend.visa.index'));
        $template =Template::where('name','template-visa')->first();
        $template_data ='';
        if($template !=null){
            $template_data = $template->data;
        }
       // dd($template_data);
        $tempate_en = "<p>Discount 10% of service fee for a group of 3 customers and over</p>";
        return view('backend.pages.visa.index', ['cates' => $visa_cate, 
            'visas' => $paginatedSearchResults, 
            'search' => $search,
            'template'=>$template_data,
            'template_en'=>$tempate_en
        ]);
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

            try{
                DB::transaction(function ()use($request) {
                    $slug = Str::slug($request['name_en']);

                    $temp = DB::table('visa')->where('slug_url', $slug)->first();
                    if($temp!=null){
                        if($temp->id!= $request['id'] ){
                            $count = DB::table('visa')->where('slug_url', $slug)->count();
                            if ($count >= 1) {
                                $count = $count;
                                $slug = $slug . '-' . $count;
                            }
                        }
                    }

                    /*
                 col_work_vi: col_work_vi,
                col_work_en: col_work_en,

                col_travel_en: col_travel_en,
                col_travel_vi: col_travel_vi,

                col_study_en: col_study_en,
                col_study_vi: col_study_vi,
                col_note_vi: col_note_vi,
                col_note_en: col_note_en,
                     */

                    $obj = new Visa();
                    $obj->media_ids = $request['media_ids'];
                    $obj->slug_url = $slug;
                    $obj->is_popular = $request['is_popular'];
                    $obj->visa_cate_id = $request['location'];
                    $obj->save();


                    $obj_vi = new VisaTranslations();
                    $obj_vi->lang_code = 'vi';
                    $obj_vi->visa_id = $obj->id;

                    $obj_vi->name = $request['name_vi'];
                    $obj_vi->short_description = $request['short_des_vi'];
                    $obj_vi->content = $request['content_vi'];
                    $obj_vi->col_work = $request['col_work_vi'];
                    $obj_vi->col_travel = $request['col_travel_vi'];
                    $obj_vi->col_study = $request['col_study_vi'];
                    $obj_vi->col_note = $request['col_note_vi'];
                    $obj_vi->save();

                    $obj_en = new VisaTranslations();
                    $obj_en->lang_code = 'en';
                    $obj_en->visa_id = $obj->id;

                    $obj_en->name = $request['name_en'];
                    $obj_en->short_description = $request['short_des_en'];
                    $obj_en->content = $request['content_en'];
                    $obj_en->col_work = $request['col_work_en'];
                    $obj_en->col_travel = $request['col_travel_en'];
                    $obj_en->col_study = $request['col_study_en'];
                    $obj_en->col_note = $request['col_note_en'];
                    $obj_en->save();
                });
                return response()->json(['success' => true, 'message' => 'Add sucessfull']);

            }catch (\Exception $e){
                dd($e);
                return response()->json(['success' => false, 'message' => 'Add sucessfull']);
            }


        }

    }

    public function delete(Request $request)
    {
        $rules = array(
            'id' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
          
            return response()->json(['success' => false, 'message' => 'Please select visa for delete']);
        } else {
            $visa = Visa::find($request['id']);
            if ($visa) {
                $visa->delete();
            }
            return response()->json(['success' => true, 'message' => 'Visa is deleted']);
        }
    }

    public function get_edit($id)
    {
        $visa_cate = VisaCategory::all();
        $visa = Visa::find($id);
        $visa_vi = $visa->translation('vi')->first();
        $visa_en = $visa->translation('en')->first();
        $media = $visa->medias($visa->media_ids);
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
        return view('backend.pages.visa.edit', ['visa' => $visa,
            'media_info' => $info,
            'visa_vi' => $visa_vi,
            'visa_en' => $visa_en,
            'cates' => $visa_cate,
        ]);
    }
    public function save_edit(Request $request){

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
            $slug = Str::slug($request['name_en']);

                $temp = DB::table('visa')->where('slug_url', $slug)->first();
                if($temp!=null){
                    if($temp->id!= $request['id'] ){
                        $count = DB::table('visa')->where('slug_url', $slug)->count();
                        if ($count >= 1) {
                            $count = $count;
                            $slug = $slug . '-' . $count;
                        }
                    }
                }

            $id = $request['id'];
            $obj = Visa::find($id);
            $obj->media_ids = $request['media_ids'];
            $obj->slug_url = $slug;
            $obj->is_popular = $request['is_popular'];
            $obj->visa_cate_id = $request['location'];
            $obj->save();

            $obj_vi = VisaTranslations::where('lang_code', 'vi')
                ->where('visa_id', $id)->first();

            $obj_vi->name = $request['name_vi'];
            $obj_vi->short_description = $request['short_des_vi'];
            $obj_vi->content = $request['content_vi'];
            $obj_vi->col_work = $request['col_work_vi'];
            $obj_vi->col_travel = $request['col_travel_vi'];
            $obj_vi->col_study = $request['col_study_vi'];
            $obj_vi->col_note = $request['col_note_vi'];
            $obj_vi->save();


            $obj_en = VisaTranslations::where('lang_code', 'en')
                ->where('visa_id', $id)->first();
            $obj_en->name = $request['name_en'];
            $obj_en->short_description = $request['short_des_en'];
            $obj_en->content = $request['content_en'];
            $obj_en->col_work = $request['col_work_en'];
            $obj_en->col_travel = $request['col_travel_en'];
            $obj_en->col_study = $request['col_study_en'];
            $obj_en->col_note = $request['col_note_en'];
            $obj_en->save();


            return response()->json(['success' => true, 'message' => 'Add sucessfull']);
        }
    }

}