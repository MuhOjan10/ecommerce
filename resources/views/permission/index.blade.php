@extends('layouts.app')

@section('content')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">{{$pageTitle}}</span> - Daftar</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <a href="{{route('permission.create')}}" class="btn btn-sm btn-outline-dark"><i class="icon-add"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-xs">
                        <thead>
                            <tr>
                                <th style="width: 40px;">#</th>
                                <th>Nama Permission</th>
                                <th>Guard Name</th>
                                <th>Role</th>
                                <th style="width: 40px; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($permission as $key => $value)
                            <tr>
                                <td></td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->guard_name}}</td>
                                <td></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <a href="{{route('permission.view', $value->id)}}"
                                            class="btn btn-xs btn-outline-dark">View</a>
                                        <a href="{{route('permission.edit', $value->id)}}"
                                            class="btn btn-sm btn-outline-dark">Edit</a>
                                        <a href="{{route('permission.delete', $value->id)}}"
                                            class="btn btn-sm btn-outline-dark"
                                            onclick="return confirm('are you sure?')">Hapus</a>
                                    </div>
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
<!-- /content area -->


@endsection
