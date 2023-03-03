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
                    <div class="card-header">Data Kategori</div>
                    <div class="card-body">
                        <a href="/admin/kategori/create" class="btn btn-md btn-success mb-3">Tambah</a>

                        <table class="table table-responsive table-bordered table-hover mt-2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kategori as $k)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->keterangan }}</td>
                                        <td>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="/admin/kategori/{{ $k->id }}" method="POST">
                                                <a href="/admin/kategori/{{ $k->id }}/edit"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
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
    </div>
@endsection
