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

    function get_media($id,$resize=null)
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
        if($resize){
            $sizes = explode("x", $resize);
            return Image::make($storagePath)->resize($sizes[0], $sizes[1])->response();
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