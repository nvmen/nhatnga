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
class Visa extends Model
{ protected $table = 'visa';
    protected $fillable = [
        'id', 'slug_url','media_ids','visa_cate_id','updated_at','is_popular'

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\VisaTranslations')->where('lang_code', '=', $language);
    }
    
    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }
    public function visa_cate()
    {
        return $this->belongsTo('App\VisaCategory','visa_cate_id');
    }

}