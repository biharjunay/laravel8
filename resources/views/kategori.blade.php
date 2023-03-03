@extends('layouts.app-setting')
@section('content')

    <div class="container">
        <section class="destinasi mt-4">
            <h4>
                Kategori : <strong>{{$kategori->nama}}</strong>
            </h4>
            <div class="row mt-4">
                @foreach ($wisata as $w)
                    <div class="col-md-4 col-xs-6 col-sm-6 col-6 mb-3">
                        <a href="/detail/{{$w->id}}" class="btn btn-outline">
                            <div class="card menuku">
                                <img src="img/1.png" class="card-img-top" alt="">
                                <div class="card-body text-center">
                                    <h5>{{$w->nama}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection