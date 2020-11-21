@extends('admin.layouts.master')
@section('content')
    <p>{{$test->name}}</p>
    <br>
    <br>
    <br>
    @foreach($testQuestions as $question)
        <p>{{$question->question}}</p>
    @endforeach
@endsection
