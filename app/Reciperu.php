<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reciperu extends Model
{
    //
    protected $table = 'reciperu';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
