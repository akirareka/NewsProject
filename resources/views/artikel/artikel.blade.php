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

<div class="container">
    <div class="row">
        <div class="col-9">
            @foreach($artikel as $a)
            <div class="col text-center mb-5">
                <p class="h1">{{$a->judul}}</p>
            </div>
            <div class="col-12 text-center mb-5 imgartikel">
                <img class="artikel" src="{{url("/images/{$a->foto}")}}" width="100" alt="Foto {{$a->judul}}">
            </div>
            <div class="col-12 mb-5">
                <div class="card">
                    <div class="card-body text-justify">
                        {!! $a->isi_artikel !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
        <div class="container">
                    <div class="row table">
                        <p>MOST POPULER NEWS</p>
                        <table class="table populer">
                        @foreach($artikel as $a)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td><a href="/artikel/read/{{$a->id}}">{{$a->judul}}</a></td>
                                </tr>
                            </tbody>
                        @endforeach
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endforeach
@endsection
