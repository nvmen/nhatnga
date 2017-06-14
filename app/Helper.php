<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/5/2017
 * Time: 1:24 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use DateTime;
use Illuminate\Support\Str;
use App\Media;

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

    public static function get_media_info($media_id, $resize = null)
    {
        $media = Media::find($media_id);
        if ($resize == null) {
            $resize = '120x120';
        }
        if ($media) {
            $info = [
                'name' => $media->uuid_name,
                'link' => route('media.get', ['id' => $media->id, 'resize' => $resize]),
                'size' => $media->size,
            ];
        } else {
            $info = [
                'name' => 'men nguyen',
                'link' => 'www.google.com',
                'size' => '0',
            ];
        }
        return $info;
    }
    public static function get_template_name($name){
        $template = Template::where('name',$name)->first();
        return $template->data;
    }

}