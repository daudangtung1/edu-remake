@extends('admin.layouts.master')
@section('content')
    <p>{{$category->name}}</p>
    @foreach($tests as $test)
        <p>{{$test->name}}</p>
    @endforeach
@endsection
