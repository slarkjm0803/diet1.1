<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietse extends Model
{
    //
    protected $table = 'dietse';
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
