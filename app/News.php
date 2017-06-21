<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/21/2017
 * Time: 12:52 PM
 */

namespace App;


namespace App;
use Illuminate\Database\Eloquent\Model;
use App;
class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'id', 'slug_url','media_ids','updated_at'

    ];
    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany('App\NewsTranslations','new_id')->where('lang_code', '=', $language);
    }
    public function medias($media_ids){
        $ids = explode(",", $media_ids);
        return Media::whereIn('id', $ids)
            ->get();
    }

}