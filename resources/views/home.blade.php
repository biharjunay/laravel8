@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="list-group">
                <a href="/home" class="list-group-item list-goup-item-action active">Dashboard</a>
                <a href="/admin/kategori" class="list-group-item">Kategori</a>
                <a href="/admin/wisata" class="list-group-item">Wisata</a>
                <a href="/admin/Setup" class="list-group-item">Setup</a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
