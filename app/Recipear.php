<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipear extends Model
{
    //
    protected $table = 'recipear';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
