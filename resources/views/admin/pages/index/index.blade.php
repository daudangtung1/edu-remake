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
                            <th>Content</th>
                            <th style="text-align: center"><a href="{{route('indexCreate')}}">Create</a></th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
