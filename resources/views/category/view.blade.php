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
            <a href="{{route('category.index')}}" class="btn btn-sm btn-icon btn-outline-dark"><i
                    class="icon-arrow-up-left2"></i></a>
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
                        <tbody>
                            <tr>
                                <th>Kode Kategori</th>
                                <td>{{$category->code}}</td>
                            </tr>
                            <tr>
                                <th>Nama Kategori</th>
                                <td>{{$category->name}}</td>
                            </tr>
                            <tr>
                                <th>Katerangan Kategori</th>
                                <td>{{$category->description}}</td>
                            </tr>
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
