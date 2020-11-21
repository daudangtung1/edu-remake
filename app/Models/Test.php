<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'id',
        'category_id'
    ];

    public function testQuestion()
    {
        return $this->hasMany('App\Models\TestQuestion');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
