<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientjp extends Model
{
    //
    protected $table = 'ingredientjp';
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
