<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipepr extends Model
{
    //
    protected $table = 'recipepr';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
