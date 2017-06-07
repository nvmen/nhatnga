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