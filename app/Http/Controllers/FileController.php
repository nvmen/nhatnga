<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/1/2017
 * Time: 10:38 PM
 */

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use App\Helper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class FileController extends Controller
{
    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);
        if ($validator->passes()) {
            $temp_name = Str::slug($request->file->getClientOriginalName());
            $server_file_name = '65-nhat-nga' . '-'.$temp_name.'-'. time() .rand(). '.' . $request->file->getClientOriginalExtension();
            $input['hashname'] = $server_file_name;
            $album = Helper::album_media();
            $uuid_name = $server_file_name;
            $media = new Media();
            $media->name = $request->file->getClientOriginalName();
            $media->album = $album;
            $media->uuid_name = $uuid_name;
            $media->size = $request->file->getClientSize();
            $media->save();
            $request->file->move(public_path('uploads/media'), $input['hashname']);
            return response()->json(['success' => true, 'message' => 'Upload media ok', 'data' => $media], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Data not match required'], 200);
        }

    }


}