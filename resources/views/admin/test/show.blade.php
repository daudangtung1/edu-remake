@extends('admin.layouts.master')
@section('content')
    <p>{{$test->name}}</p>
    <br>
    <br>
    <br>
    @foreach($testQuestions as $question)
        <a href="{{route('questionShow', $question->id)}}">{{$question->question}}</a>
        <br>
    @endforeach
@endsection
