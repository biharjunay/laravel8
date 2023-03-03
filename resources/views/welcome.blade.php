@extends('layouts.app-setting')
@section('content')
    <div class="container">
        <div class="banner mb-5">
            <img src="img/1.jpg" width="500px" alt="">
        </div>
    </div>
    <div class="container">
        <section class="pilih-kategori mt-4">
            <h4><strong>Pilih Kategori</strong></h4>
            <div class="row mt-4">
                @foreach ($kategori as $k)
                <div class="col col-md-3 col-sm-6">
                    <a href="/kategori/{{$k->id}}" class="btn btn-block">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                {{$k->nama}}
                            </div>
                        </div>
                    </a>
                </div>    
                @endforeach
            </div>
        </section>
    </div>

    <div class="container">
        <section class="destinasi mt-4">
            <h4><strong>Destinasi terbaru</strong></h4>
            <div class="row mt-4">
                @foreach ($wisata as $w)
                    <div class="col-md-4 col-xs-6 col-sm-6 col-6 mb-3">
                        <a href="/detail/{{$w->id}}" class="btn btn-outline">
                            <div class="card menuku">
                                <img class="card-img-top" src="img/Untitled-1.png" alt="">
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