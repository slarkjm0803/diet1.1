<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipept extends Model
{
    //
    protected $table = 'recipept';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
