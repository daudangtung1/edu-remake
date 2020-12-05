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
        <div class="row">
            <div class="col-md-5">
                <div class="card" id="postForm">
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
                                    <th>
                                        <button type="button" data-toggle="modal" data-target="#createCategoryForm"
                                                id="btnCreateCategory">
                                            Create
                                        </button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr id="post{{$category->id}}">
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable2" type="checkbox">
                                                <label for="selectable2"></label>
                                            </div>
                                        </td>
                                        <td>
                                            {{$category->name}}
                                        </td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>
                                            <button class="btn btn-info open-modal" value="{{$category->id}}">Edit</button>
                                            <a href="{{route('ShowPostFormCat', $category->id)}}" class="postCat">Post</a>
                                            <button class="btn btn-danger delete-link" value="{{$category->id}}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card" id="postCategory">
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>
                                        <button type="button" data-toggle="modal" data-target="#createPostForm"
                                                id="btnCreatePost">
                                            Create Post
                                        </button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr id="post{{$post->id}}">
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
                                                        <img src="{{url('/images/'.$post->image)}}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">{{$post->name}}</span>
                                                        <span class="sub-title"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$category->slug}}</td>
                                        <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                        <td>
                                            <button class="btn btn-info open-modal" value="{{$post->id}}">Edit
                                            </button>
                                            <button class="btn btn-danger delete-link" value="{{$post->id}}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.blog.category-blog.partials.create')
    @include('admin.blog.post.partials.create')
@endsection

