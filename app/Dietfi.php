<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietfi extends Model
{
    //
    protected $table = 'dietfi';
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
