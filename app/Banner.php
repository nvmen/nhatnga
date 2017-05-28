<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //protected $table = 'influencers';
    protected $fillable = [
        'id', 'friendly_url'

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\BannerTranslations')->where('language', '=', $language);
    }
}
