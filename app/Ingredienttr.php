<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredienttr extends Model
{
    //
    protected $table = 'ingredienttr';
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
