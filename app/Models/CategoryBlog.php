<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    protected $fillable=[
        'name',
        'image',
        'slug',
    ];

    protected $hidden=[
        'id'
    ];

    public function post(){
        return $this->hasOne('App\Models\Post', 'category_blog_id');
    }
}
