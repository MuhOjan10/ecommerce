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
            <a href="{{route('product.create')}}" class="btn btn-sm btn-outline-dark"><i class="icon-add"></i></a>
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
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Kategori Produk</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $key => $value)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->categoryDetail->name}}</td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <a href="{{route('product.view', $value->id)}}"
                                            class="btn btn-xs btn-outline-dark">View</a>
                                        <a href="{{route('product.edit', $value->id)}}"
                                            class="btn btn-sm btn-outline-dark">Edit</a>
                                        <a href="{{route('product.delete', $value->id)}}"
                                            class="btn btn-sm btn-outline-dark">Hapus</a>
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

<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
            data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
        <span class="navbar-text">
            © 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov"
                target="_blank">Eugene Kopyov</a>
        </span>

        <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link">Text link</a>
            </li>

            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-lifebuoy"></i>
                </a>
            </li>

            <li class="nav-item">
                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                    class="navbar-nav-link font-weight-semibold">
                    <span class="text-pink-400">
                        <i class="icon-cart2 mr-2"></i>
                        Purchase
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /footer -->

@endsection
