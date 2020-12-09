<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = DB::table('category_blogs')->take(3)->get();
        $teacherCount=DB::table('teachers')->count('name');
        return view('home.index', compact('categories', 'teacherCount'));
    }
}
