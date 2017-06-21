<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/21/2017
 * Time: 12:48 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
class NewsCateTranslations extends Model
{
    protected $table = 'news_category_translation';
    protected $fillable = [
        'id',
        'name',
        'lang_code',
        'cate_id',


    ];
    public function service()
    {
        return $this->belongsTo('App\NewsCate');
    }
}