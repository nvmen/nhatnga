<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/8/2017
 * Time: 6:54 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use App;
class VisaCategoryTranslations extends Model
{
    protected $table = 'visa_category_translation';
    protected $fillable = [
        'id',
        'visa_category_id',
        'lang_code',
        'name',       


    ];
    public function service()
    {
        return $this->belongsTo('App\VisaCategory');
    }
}