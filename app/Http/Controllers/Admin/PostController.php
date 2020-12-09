<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = CategoryBlog::all();
        return view('admin.blog.post.index', compact('posts', 'categories'));
    }

    public function store(Request $request)
    {
        $create = new Post();
        $create->title = $request->get('title');
        $create->content = $request->get('content');
        $create->slug = $request->get('slug');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->getClientOriginalExtension();
            $name = time() . "." . $path;
            $image->move('images', $name);
            $create->image = $name;
        }
        $create->category_blog_id = $request->get('category_blog_id');
        $create->save();
        return response()->json(array('html' => $create), 200);
    }

    public function show($id)
    {
//        $show = Post::find($id);
//        return response()->json(array('show' => $show), 200);
    }

    public function update()
    {
    }

    public function destroy($id)
    {
        $post = Post::destroy($id);
        return response()->json(array('post' => $post), 200);
    }
}
