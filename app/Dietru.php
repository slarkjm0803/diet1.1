<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietru extends Model
{
    //
    protected $table = 'dietru';
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
