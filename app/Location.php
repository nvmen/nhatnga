<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/13/2017
 * Time: 9:33 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;



class Location extends Model
{
    protected $table = 'province';
    protected $fillable = [
        'id', 'slug_url','media_ids','country','is_domestic'

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\LocationTranslations','province_id')->where('lang_code', '=', $language);
    }
    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }

}