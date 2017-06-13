<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 5/31/2017
 * Time: 10:19 PM
 */

namespace App\Http\Controllers;


use App\Service;
use App\ServiceTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdminServicesController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.pages.banner.index');
    }
    public function save_edit(Request $request){


        $rules = array(
            'media_ids' => 'required',
            'id' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Service need id and media']);
        } else {

            $service = Service::find($request['id']);
            if($service== null){
                return response()->json(['success' => false, 'message' => 'Can not find this service']);
            }
            $service->media_ids = $request['media_ids'];
            $service->save();
            $service_vi = ServiceTranslations::where('lang_code','vi')->where('service_id',$service->id)->first();
            $service_en = ServiceTranslations::where('lang_code','en')->where('service_id',$service->id)->first();
            $service_vi->name = $request['name_vi'];
            $service_vi->content = $request['content_vi'];
            $service_vi->save();

            $service_en->name = $request['name_en'];
            $service_en->content = $request['content_en'];
            $service_en->save();

            return response()->json(['success' => true, 'message' => 'Edit successful']);
        }


    }
    public  function get_service($id){

        $service = Service::find($id);

        if($service== null) return view('error.404');
        $media = $service->medias($service->media_ids);

        $service_vi = ServiceTranslations::where('lang_code', 'vi')->where('service_id', $id)->first();
        $service_en = ServiceTranslations::where('lang_code', 'en')->where('service_id', $id)->first();
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
        return view('backend.pages.services.edit',['service'=>$service,
            'media_info'=>$info,
            'service_vi'=>$service_vi,
            'service_en'=>$service_en,
        ]);
    } 
}