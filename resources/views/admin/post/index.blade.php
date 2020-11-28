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
        <div>
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
                                <th>Content</th>
                                <th>Status</th>
                                <th>
                                    <button type="button" data-toggle="modal" data-target="#myModal" id="btnCreate">
                                        Create
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
                                                <div class="info">
                                                    {{$post->title}}
                                                    <span class="title">
                                                        <a href="{{route('post.show', $post->id)}}"></a> </span>
                                                    <span class="sub-title"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$post->content}}</td>
                                    <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                    <td>
                                        <button class="btn btn-info open-modal" value="{{$post->id}}">Edit
                                        </button>
                                        <button class="btn btn-danger delete-link" value="{{$post->id}}">Delete
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
    @include('admin.post.partials.create')
    @include('admin.post.partials.show')
@endsection

@section('ajax')
    <script>
        $(document).ready(function () {
            $("#btnAdd").click(function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: "{{route('post.index')}}",
                    data: {
                        title: $('#title').val(),
                        content: $('#content').val(),
                    },
                    datatype: 'json',
                    success: function (data) {
                        $('#createPostForm').trigger("reset");
                        $('.modal-header .close').click();
                        $('#dt-opt').load(location.href + (' #dt-opt'));
                        console.log('done!');
                    },
                    error: function () {
                        console.log('fail!');
                    }
                });
            });

            $(".delete-link").click(function (e) {
                if(!confirm("Delete?")){
                    return false;
                }
                e.preventDefault();
                var post_id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url: "post/" + post_id,
                    success: function (data) {
                        console.log('delete success!'+data);
                        $("#post" + post_id).remove();
                    },
                    error: function () {
                        console.log('error!');
                    }
                });
            });
        });
    </script>
@endsection
