<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipefi extends Model
{
    //
    protected $table = 'recipefi';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
