<?php
/**
 * Created by PhpStorm.
 * User: MenNguyen
 * Date: 6/5/2017
 * Time: 1:19 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media  extends Model
{
    protected $table = 'media';
    protected $fillable = [
        'id', '	name','uuid_name','thumbnail','album'

    ];

}
