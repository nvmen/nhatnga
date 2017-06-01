<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/1/2017
 * Time: 10:38 PM
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileController  extends Controller
{
    public function upload(Request $request){
            $server_file_name = '65' . '-' . time() . '.' . $request->file->getClientOriginalExtension();
            $input['hashname'] = $server_file_name;
          $request->file->move(public_path('uploads/media'), $input['hashname']);

        return response()->json('ok', 200);
    }

}