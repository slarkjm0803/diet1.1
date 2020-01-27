<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietar extends Model
{
    //
    protected $table = 'dietar';
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
