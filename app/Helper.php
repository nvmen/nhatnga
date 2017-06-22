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
use App;
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

    public static function get_list_media_info($media_ids, $resize = null)
    {
        $ids = explode(",", $media_ids);
        $arr_media = array();
        foreach ($ids as $id) {
            $media = Media::find($id);
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
            array_push($arr_media, $info);
        }

        return $arr_media;
    }

    public static function get_template_name($name)
    {
        $template = Template::where('name', $name)->first();
        return $template->data;
    }

    public static function get_words($string_input, $words = 50)
    {
        $arr = explode(' ', $string_input);
        $size = count($arr);
        $result = array();
        $index = 0;
        foreach ($arr as $a) {
            if ($index < $words) {
                array_push($result, $a);
            } else {
                break;
            }
            $index = $index + 1;
        }
        $text = join(' ', $result);
        if ($words < $size) {
            $text = $text . '...';
        }
        return $text;
    }

    public static function get_format_money($money,$num =0)
    {

        $text = '';
        if (App::getLocale() == 'en') {
            $text = '$' . number_format($money, $num);

        } else {
            $text = number_format($money, $num) . 'đ';
        }
        return $text;
    }

    public static function first_media_id($media_ids)
    {
        $ids = explode(",", $media_ids);
        return $ids[0];
    }
}