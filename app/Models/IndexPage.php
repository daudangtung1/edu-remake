<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndexPage extends Model
{
    protected $fillable = [
        'name',
        'content',
    ];
    protected $hidden = [
        'id',
    ];
}
