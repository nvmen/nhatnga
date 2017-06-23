<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/23/2017
 * Time: 6:25 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'id',
        'book_id',
        'full_name',
        'email',
        'phone',
        'tour_code',
        'tour_name',
        'number_adults',
        'number_children',
        'children_price',
        'adult_price',
        'discount_percent',
        'total_money',
        'total_money_text',
        'updated_at',
        'date',

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\BannerTranslations')->where('lang_code', '=', $language);
    }
    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }

}
{

}