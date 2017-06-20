<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/20/2017
 * Time: 9:51 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletter';
    protected $fillable = [
        'id', 'email',

    ];

}