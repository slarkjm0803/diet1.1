<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diettr extends Model
{
    //
    protected $table = 'diettr';
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
