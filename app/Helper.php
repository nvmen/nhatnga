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
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use App\Media;
use App\Tour;
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

    public static function get_format_money($money, $num = 0)
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

    public static function get_random_tours()
    {
        $related_tours = Tour::inRandomOrder()->take(3)->get();
        return $related_tours;
    }

    public static function get_guid()
    {
        return strtolower(sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535)));
    }
    public  static function stripVN($str) {
      
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);

        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        return $str;
    }
    public  static function activeMenu($menu){
        switch ($menu){
            case 'home':{
                if(Request::route()->getName()=='frontend.home.index'){
                    return (' current-menu-parent current-menu-ancestor');
                }
                break;
            }
            case 'about':{
                if(Request::route()->getName()=='frontend.home.about'){
                    return (' current-menu-parent current-menu-ancestor');
                }
                break;
            }
            case 'news':{
                if(Request::route()->getName()=='frontend.news.index'||Request::route()->getName()=='frontend.news.detail'){
                    return (' current-menu-parent current-menu-ancestor');
                }
                break;
            }
            case 'contact':{
                if(Request::route()->getName()=='frontend.home.contact'){
                    return (' current-menu-parent current-menu-ancestor');
                }
                break;
            }
            case 'tour':{
                if(Request::route()->getName()=='frontend.tour.index'||
                   Request::route()->getName()=='frontend.tour.international'||
                   Request::route()->getName()=='frontend.tour.domestic'||
                   Request::route()->getName()=='frontend.tour.domestic.longtour'||
                   Request::route()->getName()=='frontend.tour.domestic.shorttour'||
                   Request::route()->getName()=='frontend.tour.domestic.foodtour'||
                   Request::route()->getName()=='frontend.tour.detail'

                ){
                    return (' current-menu-parent current-menu-ancestor');
                }
                break;
            }
            case 'service':{
                if(Request::route()->getName()=='frontend.services.translation'||
                   Request::route()->getName()=='frontend.services.apeccard'||
                   Request::route()->getName()=='frontend.services.workpermit'||
                   Request::route()->getName()=='frontend.services.airlineticket'||
                   Request::route()->getName()=='frontend.services.visavietnam'||
                   Request::route()->getName()=='frontend.services.others'||
                   Request::route()->getName()=='frontend.services.visa'||
                   Request::route()->getName()=='frontend.visa.europe'||
                   Request::route()->getName()=='frontend.visa.asia'||
                   Request::route()->getName()=='frontend.visa.america'||
                   Request::route()->getName()=='frontend.visa.africa'||
                   Request::route()->getName()=='frontend.visa.australia'||
                   Request::route()->getName()=='frontend.visa.vietnam'||
                   Request::route()->getName()=='frontend.visa.detail'

                ){
                    return (' current-menu-parent current-menu-ancestor');
                }
                break;
            }
        }

    }
}