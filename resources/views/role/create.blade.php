@extends('layouts.app')

@section('content')

<!-- Content area -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">{{$pageTitle}}</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('role.store')}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nama Role</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control"
                                    placeholder="input nama role disini">
                            </div>
                        </div>

                        <div class="text-right">
                            <a href="{{route('role.index')}}" class="btn btn-sm btn-outline-dark">Kembali</a>
                            <button type="submit" class="btn btn-sm btn-outline-dark">Simpan <i
                                    class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->

@endsection
