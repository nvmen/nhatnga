<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerTranslations extends Model
{
    protected $fillable = [
        'id',
        'banner_id',
        'language',
        'title',
        'subtitle',
        'link',
        'text_link'

    ];
    public function banner()
    {
        return $this->belongsTo('App\Banner');
    }
}
