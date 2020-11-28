<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $create = new Post();
        $create->title = $request->get('title');
        $create->content = $request->get('content');
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
        $post=Post::destroy($id);
        return response()->json(array('post'=>$post),200);
    }
}
