<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietjp extends Model
{
    //
    protected $table = 'dietjp';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image_url',
        'video',
        'kcal',
        'time',
        'material',
        'division'
    ];
}
