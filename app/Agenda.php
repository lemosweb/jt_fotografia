<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [

        'name',
        'description',
        'local',
        'date',
        'time'

    ];
}
