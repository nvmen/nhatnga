<?php
/**
 * Created by PhpStorm.
 * User: tma
 * Date: 6/14/2017
 * Time: 9:13 PM
 */


namespace App;

use Illuminate\Database\Eloquent\Model;





class Template extends Model
{
    protected $table = 'template';
    protected $fillable = [
        'id', 'name','data'

    ];

}