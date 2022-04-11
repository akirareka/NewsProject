@extends('layouts.app')

@section('css')
.card, .artikel {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
}

.card:hover, .artikel:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
@endsection

@section('content')

@foreach($artikel as $a)
    <div class="col-12 text-center mb-5">
        <p class="h1">{{$a->judul}}</p>
    </div>
    <div class="col-12 text-center mb-5">
        <img class="artikel" src="/storage/article/img/{{ $a->foto }}" width="100%" alt="{{$a->judul}}">
    </div>
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-body text-justify">
                {{ $a->isi_artikel }} 
            </div>
        </div>
    </div>
@endforeach

@endsection

@section('content')

@foreach($artikel as $a)
    <div class="col-12 text-center mb-5">
        <p class="h1">{{$a->judul}}</p>
    </div>
    <div class="col-12 text-center mb-5">
        <img class="artikel" src="/storage/article/img/{{ $a->foto }}" width="100%" alt="{{$a->judul}}">
    </div>
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-body text-justify">
                {{ $a->isi_artikel }} 
            </div>
        </div>
    </div>
@endforeach

@endsection