<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientru extends Model
{
    //
    protected $table = 'ingredientru';
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
