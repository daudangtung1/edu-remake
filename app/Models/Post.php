<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
    ];

    protected $hidden = [
        'id',
        'category_blog_id',
    ];

    public function categoryBlog(){
        return $this->belongsTo('App\Models\CategoryBlog', 'category_blog_id');
    }
}
