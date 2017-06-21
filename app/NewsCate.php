<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/21/2017
 * Time: 12:46 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model
{
    protected $table = 'media';
    protected $fillable = [
        'id', 'slug_url',

    ];

}