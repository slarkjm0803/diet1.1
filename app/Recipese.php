<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipese extends Model
{
    //
    protected $table = 'recipese';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
