<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;
use App\Models\Post;
use App\View\Components\Recusive;

class PostController extends Controller
{
    private $categoryBlog;

    public function __construct(Post $categoryBlog)
    {
        $this->categoryBlog = $categoryBlog;
    }

    public function index($category_blog_id = '')
    {
        $posts = Post::all();
        $categories = CategoryBlog::all();
        $htmlOption = $this->getCategory($category_blog_id);
        return view('admin.blog.post.index', compact('posts', 'categories', 'htmlOption'));
    }

    public function getCategory($category_blog_id)
    {
        $data = $this->categoryBlog->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($category_blog_id);
        return $htmlOption;
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
