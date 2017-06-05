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
class MediaController  extends Controller
{

    private $image_not_found ='image-not-found.gif';
    function get_media($id){
        $storagePathNotFound = public_path('uploads/default/').$this->image_not_found;
        $media = Media::find($id);
        if($media == null){
            $storagePath = $storagePathNotFound;

        }else{
            $storagePath = public_path('uploads/media/').$media->uuid_name;
        }

        if (!file_exists($storagePath)) {
           return null;
        }
        return Image::make($storagePath)->response();

    }
}