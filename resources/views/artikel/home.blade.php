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
<div class="col">
    @if($artikel->isEmpty())
    <h3 class="text-center">Tidak ada artikel untuk dibaca</h3>

    @else
    <!-- Caousel Start -->
    <div class="col text-center mb-5">
        <p class="h1">TOPIK TERKINI</p>
        <div class="gerak">
        </div>
    </div>
    <!-- Caousel End -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('.gerak').slick();
        });

    </script>

    @foreach($artikel as $a)

    <!-- End Card -->
    @endforeach

    @endif
</div>
<div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-9">
                <div class="container">
                    <div class="row row-cols-2">
                        <div class="col">
                            <div class="row">
                                <div class="col col-lg-8 news" style="border-style:solid ;">
                                    <a href="">
                                        <h2>
                                            4 Cara Menjaga Kesehatan Mental
                                        </h2>
                                        <p>Kesehatan mental adalah hal penting. Sebab, kondisi mental yang baik juga
                                            berdampak
                                            positif pada seluruh tubuh kita, begitupula sebaliknya.</p>
                                    </a>
                                </div>
                                <div class="col-4 news" style="border-style:solid ;">
                                    <a href=""> <img src="berita1.jpg" alt=""></a>
                                </div>
                                <div class="col news" style="border-style:solid ;">
                                    <a href="">date</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col col-lg-8 news" style="border-style:solid ;">
                                    <a href="">
                                        <h2>
                                            4 Cara Menjaga Kesehatan Mental
                                        </h2>
                                        <p>Kesehatan mental adalah hal penting. Sebab, kondisi mental yang baik juga
                                            berdampak
                                            positif pada seluruh tubuh kita, begitupula sebaliknya.</p>
                                    </a>
                                </div>
                                <div class="col-4 news" style="border-style:solid ;">
                                    <a href=""> <img src="berita1.jpg" alt=""></a>
                                </div>
                                <div class="col news" style="border-style:solid ;">
                                    <a href="">date</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col col-lg-8 news" style="border-style:solid ;">
                                    <a href="">
                                        <h2>
                                            4 Cara Menjaga Kesehatan Mental
                                        </h2>
                                        <p>Kesehatan mental adalah hal penting. Sebab, kondisi mental yang baik juga
                                            berdampak
                                            positif pada seluruh tubuh kita, begitupula sebaliknya.</p>
                                    </a>
                                </div>
                                <div class="col-4 news" style="border-style:solid ;">
                                    <a href=""> <img src="berita1.jpg" alt=""></a>
                                </div>
                                <div class="col news" style="border-style:solid ;">
                                    <a href="">date</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col col-lg-8 news" style="border-style:solid ;">
                                    <a href="">
                                        <h2>
                                            4 Cara Menjaga Kesehatan Mental
                                        </h2>
                                        <p>Kesehatan mental adalah hal penting. Sebab, kondisi mental yang baik juga
                                            berdampak
                                            positif pada seluruh tubuh kita, begitupula sebaliknya.</p>
                                    </a>
                                </div>
                                <div class="col-4 news" style="border-style:solid ;">
                                    <a href=""> <img src="berita1.jpg" alt=""></a>
                                </div>
                                <div class="col news" style="border-style:solid ;">
                                    <a href="">date</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="container">
                    <div class="row table">
                        <p>MOST POPULER NEWS</p>
                        <table class="table populer">
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>kshfsuhfdsuhsifhefh</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row" style="width: 500px;;">
    @if($artikel->isEmpty())
    <h1>Tidak ada artikel untuk dibaca</h1>

    @else
    <!-- Caousel Start -->
    <div class="col text-center mb-5" style="width: 500px;;">
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
        $(document).ready(function () {
            $('.gerak').slick();
        });

    </script>

    @foreach($artikel as $a)
    <!-- Card -->
    <div class="col-4">
        <div class="card">
            <img src="/storage/article/img/{{ $a->foto }}" class="card-img-top" alt="{{$a->judul}}">
            <div class="card-body" style=" widht: 400px; ">
                <p class="h5 card-title" style="text-align: center">{{$a->judul}}</p>
                <center><a href="/artikel/read/{{$a->id}}" class="btn btn-primary light">Lihat Detail</a>
                    <center>
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
