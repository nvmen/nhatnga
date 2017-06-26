<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/26/2017
 * Time: 11:02 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;
use App;
class Search extends Model
{

    protected $fillable = [
        'title', 'link','image_url','post_date','short_description'

    ];
}