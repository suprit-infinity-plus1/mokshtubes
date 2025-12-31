<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datasheet extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'page_path',
        'file_path',
        'active',
    ];
}
