<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'name',
        'images'
    ];
    protected $hidden = [
        'id',
        'teacher_id'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
}
