@extends('layouts.app')

@section('css')
.topik img {
  width: 600px;
  height: 300px;
  object-fit: cover;
  object-position: center;
  border-radius: 10px;
  margin: 5px 50px 5px 50px;
}

.slick-slide img {
  display: inherit;
}

.card img {
  height: 150px;
  object-fit: cover;
  object-position: center;
}
@endsection

@section('content')
<div class="row">
  @if($artikel->isEmpty())
  <h3 class="text-center">Tidak ada artikel untuk dibaca</h3>

  @else
  <!-- Caousel Start -->
  <div class="col-12 text-center mb-5">
    <p class="h1">TOPIK TERKINI</p>
    <div class="gerak">
      @foreach($artikel as $a)
      <div class="topik">
        <a href="/artikel/read/{{$a->id}}">
          <img src="/storage/article/img/{{ $a->foto }}">
          <p class="h5">{{$a->top_news}}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  <!-- Caousel End -->

  <script type="text/javascript">
    $(document).ready(function(){
      $('.gerak').slick();
    });
  </script>

  @foreach($artikel as $a)
  <!-- Card -->
  <div class="col-4">
    <div class="card">
      <img src="/storage/article/img/{{ $a->foto }}" class="card-img-top" alt="{{$a->judul}}">
      <div class="card-body">
        <p class="h5 card-title" style="text-align: center">{{$a->judul}}</p>
        <center><a href="/artikel/read/{{$a->id}}" class="btn btn-primary light">Lihat Detail</a><center>
      </div>
      <div class="card-footer">
        <small class="text-muted">{{$a->created_at}}</small>
      </div>
    </div>
  </div>
  <!-- End Card -->
  @endforeach
  
  @endif
</div>
@endsection

@section('content')
<div class="row">
  @if($artikel->isEmpty())
  <h1>Tidak ada artikel untuk dibaca</h1>

  @else
  <!-- Caousel Start -->
  <div class="col-12 text-center mb-5">
    <p class="h1">TOPIK TERKINI</p>
    <div class="gerak">
      @foreach($artikel as $a)
      <div class="topik">
        <a href="/artikel/read/{{$a->id}}">
          <img src="/storage/article/img/{{ $a->foto }}">
          <p class="h5">{{$a->top_news}}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  <!-- Caousel End -->

  <script type="text/javascript">
    $(document).ready(function(){
      $('.gerak').slick();
    });
  </script>

  @foreach($artikel as $a)
  <!-- Card -->
  <div class="col-4">
    <div class="card">
      <img src="/storage/article/img/{{ $a->foto }}" class="card-img-top" alt="{{$a->judul}}">
      <div class="card-body">
        <p class="h5 card-title" style="text-align: center">{{$a->judul}}</p>
        <center><a href="/artikel/read/{{$a->id}}" class="btn btn-primary light">Lihat Detail</a><center>
      </div>
      <div class="card-footer">
        <small class="text-muted">{{$a->created_at}}</small>
      </div>
    </div>
  </div>
  <!-- End Card -->
  @endforeach
  
  @endif
</div>
@endsection