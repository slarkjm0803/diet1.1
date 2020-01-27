<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientar extends Model
{
    //
    protected $table = 'ingredientar';
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
