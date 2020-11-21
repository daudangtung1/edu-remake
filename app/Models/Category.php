<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'id'
    ];

    public function test()
    {
        return $this->hasMany('App\Models\Test');
    }
}
