<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/5/2017
 * Time: 1:24 PM
 */

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Illuminate\Support\Str;

class Helper extends Model
{

    public static function album_media()
    {
        $now = new DateTime('now');
        $month = $now->format('m');
        $year = $now->format('Y');
        return $month . '-' . $year;
    }

    public static function slug($str)
    {
        return Str::slug($str);

    }

}