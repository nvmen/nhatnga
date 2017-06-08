<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App;
class VisaCategory extends Model
{ protected $table = 'visa_category';
    protected $fillable = [
        'id', 'slug_url','media_ids'

    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\VisaCategoryTranslations')->where('lang_code', '=', $language);
    }
    public function visa()
    {
        return $this->hasMany('App\Visa', 'visa_cate_id');

    }

    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }

}