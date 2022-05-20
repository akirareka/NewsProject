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
<div class="container">
<div class="row" >
        <div class="col-8"  style="border-style: solid ;border-radius:10px; padding: 15px; margin-left:4%; margin-bottom:20px;">
        <h1 style="font-size: 30px ;">Kritik dan Saran</h1>
            <div class="row" style="margin:10px">
                <div class="col-6 col-md-2"> <img class="massage" style=" margin-top:70px ;width: 40px; height: 40px;"
                        src="/img/mail.png" alt=""></div>
                <div class="col">Massage<input style=" margin-top: 10px; width: 90%; height:150px;" name="massage"
                        type="massage" class="form-control @error('massege') is-invalid @enderror" id="massege"
                        placeholder="Massage">
                </div>
            </div>
            <div class="" style="margin-left:19.5%; margin-bottom: 10px; ">
                <button type="submit" style="width: 500px; height: 47px; background: black; color:white; border-radius: 10px ;">send</button>
            </div>
        </div>
</div>
@endforeach
@endsection
