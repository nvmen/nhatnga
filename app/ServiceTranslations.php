<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/7/2017
 * Time: 7:15 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class ServiceTranslations extends Model
{
    protected $table = 'service_translation';
    protected $fillable = [
        'id',
        'service_translation',
        'lang_code',
        'name',
        'content',

    ];
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}