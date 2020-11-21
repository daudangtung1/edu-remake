<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    protected $fillable = [
        'question'
    ];

    protected $hidden = [
        'id',
        'test_id'
    ];

    public function test(){
        return $this->belongsTo('App\Models\Test');
    }
}
