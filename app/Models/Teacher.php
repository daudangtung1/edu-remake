<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'image'
    ];
    protected $hidden = [
        'id'
    ];

    public function classroom()
    {
        return $this->hasMany('App\Models\Classroom');
    }
}
