<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/7/2017
 * Time: 7:15 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use App;
class VisaTranslations extends Model
{
    protected $table = 'visa_translation';
    protected $fillable = [
        'id',
        'name',
        'short_description',
        'lang_code',
        'visa_id',
        'content',
        'col_title',
        'col_work',
        'col_travel',
        'col_study',
        'col_note',


    ];
    public function service()
    {
        return $this->belongsTo('App\Visa');
    }
}