<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/5/2017
 * Time: 6:28 PM
 */

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use App\Helper;
use Illuminate\Support\Facades\Validator;
use Image;

class MediaController extends Controller
{

    private $image_not_found = 'image-not-found.gif';

    function test(Request $request){

        $id = 94;

        $storagePathNotFound = public_path('uploads/default/') . $this->image_not_found;
        $media = Media::find($id);
        if ($media == null) {
            $storagePath = $storagePathNotFound;

        } else {
            $storagePath = public_path('uploads/media/') . $media->uuid_name;
        }

        dd($storagePath);
        if (!file_exists($storagePath)) {
            return null;
        }
        $file = File::get($storagePath);
        $type = File::mimeType($storagePath);
        return Response::make($file, 200)->header("Content-Type", $type);
       // dd($storagePath);
        /*
        $storagePathNotFound = public_path('uploads/default/') . $this->image_not_found;
        $media = Media::find($id);
        if ($media == null) {
            $storagePath = $storagePathNotFound;

        } else {
            $storagePath = public_path('uploads/media/') . $media->uuid_name;
        }
        dd($storagePath);

        return Image::make($storagePath)->response();
        */
    }
    function get_media($id, $resize = null)
    {
        $storagePathNotFound = public_path('uploads/default/') . $this->image_not_found;
        $media = Media::find($id);
        if ($media == null) {
            $storagePath = $storagePathNotFound;

        } else {
            $storagePath = public_path('uploads/media/') . $media->uuid_name;
        }

        if (!file_exists($storagePath)) {
            return null;
        }
        if ($resize) {
            $sizes = explode("x", $resize);
            $width_size = is_numeric($sizes[0]) ? $sizes[0] : 100;
            $height_size = is_numeric($sizes[1]) ? $sizes[1] : 100;

            $save_file_name =public_path('uploads/media/'). $id.'-'.$width_size.'x'.$height_size.'.jpg';

            $img = Image::make($storagePath)->resize($width_size, $height_size)->save($save_file_name);
            return $img->response();
        }
        return Image::make($storagePath)->response();

    }

    function get_media_info($id)
    {

        $storagePathNotFound = public_path('uploads/default/') . $this->image_not_found;
        $media = Media::find($id);
        if ($media == null) {
            $storagePath = $storagePathNotFound;

        } else {
            $storagePath = public_path('uploads/media/') . $media->uuid_name;
        }

        if (!file_exists($storagePath)) {
            return response()->json(['success' => false, 'error' => 'No media']);
        }
        $info = [
            'name' => $media->uuid_name,
            'link' => route('media.get', ['id' => $media->id]),
            'size' => $media->size,
        ];
        return response()->json(['success' => true, 'data' => $info]);

    }
}