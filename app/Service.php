<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/7/2017
 * Time: 7:15 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $fillable = [
        'id', 'slug_url','media_ids'

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\ServiceTranslations')->where('lang_code', '=', $language);
    }
    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }
}