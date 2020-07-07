@extends('layouts.app')

@section('content')

<!-- Content area -->
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Tambah Kategori Produk</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('product.store')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Kategori Produk</label>
                            <div class="col-lg-9">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" selected disabled>Pilih Kategori Produk</option>
                                    @foreach($categories as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Nama Produk</label>
                            <div class="col-lg-9">
                                <input type="text" name="name" class="form-control"
                                    placeholder="input nama kategori disini">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Harga</label>
                            <div class="col-lg-9">
                                <input type="number" name="price" class="form-control text-right" placeholder="0">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Unit</label>
                            <div class="col-lg-9">
                                <select name="unit" id="" class="form-control">
                                    <option value="" selected disabled>Pilih Unit</option>
                                    @foreach($units as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="text-right">
                            <a href="{{route('product.index')}}" class="btn btn-sm btn-outline-dark">Kembali</a>
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
