<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientpr extends Model
{
    //
    protected $table = 'ingredientpr';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'ingredient',
        'value',
        'unit',
        'ingredient_name',
        'ingredient_div'
    ];
}
