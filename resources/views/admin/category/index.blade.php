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
                            <th>
                                <button type="button" data-toggle="modal" data-target="#myModal" id="btnCreate">
                                    Create
                                </button>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
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
                                            <div class="info">
                                                <span class="title"><a
                                                        href="{{route('category.show', $category->id)}}">{{$category->name}}</a> </span>
                                                <span class="sub-title"></span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-pill badge-gradient-success">Actived</span></td>
                                <td class="text-center font-size-18">
                                    <form action="{{route("category.destroy", $category->id)}}" method="post">
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
    @include('admin.category.create')
@endsection

@section('ajax')
    <script>
        $(document).ready(function () {
            $('#btnAdd').click(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN':
                            $('meta[name="csrf-token"]').attr('content')
                    }
                });

                e.preventDefault();
                var formData={
                    name: $('#catNameCreate').val(),
                };
                $.ajax({
                    type: 'POST',
                    cache: false,
                    data: formData,
                    url: '/category',
                    dataType: 'json',
                    success: function () {
                        $('#createCategory').trigger("reset");
                        $('#myModal').modal('hide');
                        console.log('success');
                    },
                    error: function(data){
                        console.log('error');
                        alert('fail');
                    }
                });
            });
        });
    </script>
@endsection
