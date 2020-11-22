<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestQuestion;

class TestQuestionController extends Controller
{
    public function show($id)
    {
        $question = TestQuestion::find($id);
        return view('admin.question.show', compact('question'));
    }
}
