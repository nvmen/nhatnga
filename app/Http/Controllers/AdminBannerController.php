<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 5/30/2017
 * Time: 7:29 PM
 */

namespace App\Http\Controllers;


use App\Banner;
use App\BannerTranslations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminBannerController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index()
    {
        $banners = Banner::all();

        foreach ($banners as &$banner) {
            //  dd($banner->medias($banner->media_ids));
            $list = $banner->medias($banner->media_ids);
            $banner->media_id = $list->first()->id;
            // dd($banner->translation('vi')->first()->title);
        }
        return view('backend.pages.banner.index', ['banners' => $banners]);
    }

    public function add(Request $request)
    {
        $rules = array(
            'media_ids' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Banner need a image']);
        } else {

            $banner = new Banner();
            $banner->media_ids = $request['media_ids'];
            $banner->slug_url = $request['media_ids'];
            $banner->save();
            $banner_vi = new BannerTranslations();
            $banner_vi->lang_code = 'vi';
            $banner_vi->banner_id = $banner->id;

            $banner_vi->title = $request['title_vi'];
            $banner_vi->sub_title = $request['sub_title_vi'];
            $banner_vi->link = $request['link_vi'];
            $banner_vi->link_text = $request['link_text_vi'];
            $banner_vi->save();

            $banner_en = new BannerTranslations();
            $banner_en->lang_code = 'en';
            $banner_en->banner_id = $banner->id;

            $banner_en->title = $request['title_en'];
            $banner_en->sub_title = $request['sub_title_en'];
            $banner_en->link = $request['link_en'];
            $banner_en->link_text = $request['link_text_en'];
            $banner_en->save();


            return response()->json(['success' => true, 'message' => 'Add sucessfull']);
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
            return response()->json(['success' => false, 'message' => 'Please input banner']);
        } else {
            $banner = Banner::find($request['id']);
            if ($banner) {
                $banner->delete();
            }
            return response()->json(['success' => true, 'message' => 'Banner is deleted']);
        }
    }

    public function edit_banner($id)
    {

        if ($id == '') {
            return response()->json(['success' => false, 'message' => 'Banner need a image']);
        } else {
            $banner = Banner::find($id);
            if ($banner) {
                $banner_vi = BannerTranslations::where('lang_code', 'vi')->where('banner_id', $id)->first();
                $banner_en = BannerTranslations::where('lang_code', 'en')->where('banner_id', $id)->first();
                $media = $banner->medias($banner->media_ids);
            } else {
               return view('error.404');
            }
            //  dd($media[0]->uuid_name);
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
            // dd($info);
            return view('backend.pages.banner.edit', ['banner' => $banner, 'media_info' => $info]);
            /*
             return response()->json(['success' => true, 'data' => $banner,
                 'data_vi' => $banner_vi,
                 'data_en' => $banner_en,
                 'media' => $media
             ]);
            */
        }
    }

    public function save_edit(Request $request)
    {
        $rules = array(
            'media_ids' => 'required',
            'id' => 'required',

        );
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Banner need a image']);
        } else {

            $banner = Banner::find($request['id']);
            if ($banner == null) return response()->json(['success' => false, 'message' => 'Banner does not exist']);
            $banner->media_ids = $request['media_ids'];
            $banner->slug_url = $request['media_ids'];
            $banner->save();
            $banner_vi = BannerTranslations::where('lang_code','vi')->where('banner_id',$banner->id)->first();
            $banner_vi->lang_code = 'vi';
            $banner_vi->banner_id = $banner->id;

            $banner_vi->title = $request['title_vi'];
            $banner_vi->sub_title = $request['sub_title_vi'];
            $banner_vi->link = $request['link_vi'];
            $banner_vi->link_text = $request['link_text_vi'];
            $banner_vi->save();

            $banner_en = BannerTranslations::where('lang_code','en')->where('banner_id',$banner->id)->first();
            $banner_en->lang_code = 'en';
            $banner_en->banner_id = $banner->id;

            $banner_en->title = $request['title_en'];
            $banner_en->sub_title = $request['sub_title_en'];
            $banner_en->link = $request['link_en'];
            $banner_en->link_text = $request['link_text_en'];
            $banner_en->save();


            return response()->json(['success' => true, 'message' => 'Edit sucessfull']);
        }

    }
}