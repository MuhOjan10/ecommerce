@extends('layouts.app')

@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">{{$pageTitle}}</span> - Detail</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
        <div class="header-elements d-none">
            <a href="{{route('product.index')}}" class="btn btn-sm btn-icon btn-outline-dark"><i
                    class="icon-arrow-up-left2"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-xs">
                        <tbody>
                            <tr>
                                <th>Nama User</th>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$user->email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="form-check col-6">
                        <input name="" class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->
@endsection
