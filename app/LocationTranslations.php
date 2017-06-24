<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/13/2017
 * Time: 9:39 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class LocationTranslations extends Model
{
    protected $table = 'province_translation';
    protected $fillable = [
        'id', 'name','short_description','content','province_id','lang_code'

    ];


    public function service()
    {
        return $this->belongsTo('App\Location');
    }
    public function banner()
    {
        return $this->belongsTo('App\Location','province_id');
    }
}