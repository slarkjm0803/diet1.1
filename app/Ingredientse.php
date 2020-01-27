<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientse extends Model
{
    //
    protected $table = 'ingredientse';
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
