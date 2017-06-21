<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/21/2017
 * Time: 12:52 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use App;
class NewsTranslations extends Model
{
    protected $table = 'news_translation';
    protected $fillable = [
        'id',
        'name',
        'lang_code',
        'short_description',
        'content',
        'new_id',


    ];
    public function service()
    {
        return $this->belongsTo('App\News');
    }
}