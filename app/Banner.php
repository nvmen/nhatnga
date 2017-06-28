<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
class Banner extends Model
{
    protected $table = 'banner';
    protected $fillable = [
        'id', 'slug_url','media_ids'

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
