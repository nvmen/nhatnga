<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/16/2017
 * Time: 2:04 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Tour;
class TourTranslations extends Model
{
    protected $table = 'tour_translation';
    protected $fillable = [
        'id',
        'tour_id',
        'lang_code',
        'name',
        'short_description',
        'itinerary',
        'description',
        'currency_unit',
        'children_price',
        'adult_price',
        'created_at',
        'updated_at',


    ];
    public function service()
    {
        return $this->belongsTo('App\Tour','tour_id');
    }
}