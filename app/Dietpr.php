<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietpr extends Model
{
    //
    protected $table = 'dietpr';
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
