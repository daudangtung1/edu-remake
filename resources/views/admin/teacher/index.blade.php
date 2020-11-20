@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <h2 class="header-title">Data Table</h2>
            <div class="header-sub-title">
                <nav class="breadcrumb breadcrumb-dash">
                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                    <a class="breadcrumb-item" href="#">Tables</a>
                    <span class="breadcrumb-item active">Data Table</span>
                </nav>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-overflow">
                    <table id="dt-opt" class="table table-hover table-xl">
                        <thead>
                        <tr>
                            <th>
                                <div class="checkbox p-0">
                                    <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                    <label for="selectable1"></label>
                                </div>
                            </th>
                            <th>Name</th>
                            <th>Status</th>
                            <th style="text-align: center"><a href="{{route('teacher.create')}}">Create</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>
                                    <div class="checkbox">
                                        <input id="selectable2" type="checkbox">
                                        <label for="selectable2"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="list-media">
                                        <div class="list-item">
                                            <div class="media-img">
                                                <img src="{{url('/images/'.$teacher->image)}}" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">{{$teacher->name}}</span>
                                                <span class="sub-title"></span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                <td class="text-center font-size-18">
                                    <form action="{{route("teacher.destroy", $teacher->id)}}" method="post">
                                        {{ csrf_field() }}
                                        @method('delete')
                                        <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                        <button class="text-gray btn-none" type="submit"
                                                onclick="return confirm('delete?')"><i class="ti-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
