<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/16/2017
 * Time: 2:03 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use App;
class Tour extends Model
{
    protected $table = 'tour';
    protected $fillable = [
        'id',
        'code',
        'slug_url',
        'media_ids',
        'tour_type',
        'food_location',
        'is_sale',
        'is_outbound',
        'is_publish',
        'is_popular',
        'discount_percent',
        'rating',
        'locations_ids',
        'places_ids',
        'start_time',
        'departure_from',
        'destination',
        'duration_day',
        'duration_night',
        'created_at',
        'updated_at',

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\TourTranslations')->where('lang_code', '=', $language);
    }
    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }
    public function get_destination(){

        $location = Location::find($this->destination);

        return $location;
    }
}