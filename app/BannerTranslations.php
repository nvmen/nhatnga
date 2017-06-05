<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerTranslations extends Model
{
    protected $table = 'banner_translation';
    protected $fillable = [
        'id',
        'banner_id',
        'lang_code',
        'title',
        'sub_title',
        'link',
        'text_link'

    ];
    public function banner()
    {
        return $this->belongsTo('App\Banner');
    }
}
