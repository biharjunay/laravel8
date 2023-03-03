@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="list-group">
                    <a href="/home" class="list-group-item list-group-item-action">
                        Dashboard
                    </a>
                    <a href="/admin/kategori" class="list-group-item list-group-item-action active">Kategori</a>
                    <a href="/admin/wisata" class="list-group-item list-group-item-action">Wisata</a>
                    <a href="/admin/setup" class="list-group-item list-group-item-action">Setup</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">Form Edit Kategori</div>
                    <div class="card-body">
                        <form action="/admin/kategori/{{ $kategori->id }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{ $kategori->nama ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control"
                                    value="{{ $kategori->keterangan ?? '' }}">
                            </div>
                            <button class="btn btn-success btn-sm mt-2">Perbarui Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
