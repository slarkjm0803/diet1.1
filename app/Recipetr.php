<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipetr extends Model
{
    //
    protected $table = 'recipetr';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
