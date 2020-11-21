@extends('admin.layouts.master')
@section('content')
    @foreach($tests as $test)
        <a href="{{route('test.show', $test->id)}}">{{$test->name}}</a>
        <br>
    @endforeach
@endsection
