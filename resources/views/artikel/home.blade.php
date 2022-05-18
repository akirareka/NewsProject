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
    </div>
    <!-- Caousel End -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('.gerak').slick();
        });

    </script>
    @endif
 

    <!-- End Card -->
    


</div>
<div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-9" >
                
                <div class="container" >
                    
                    <div class="row row-cols-2" >
                    @foreach($artikel as $a)
                        <div class="col kolomartikel">
                            <div class="row" style="border-style:solid ; margin:5px; border-radius:5px;">
                                
                                <div class="col col-lg-8 news" style=" height:200px ;">
                                    <a href="/artikel/read/{{$a->id}}">
                                        <h2>
                                            {{$a->judul}}
                                        </h2>
                                        <p>{{$a->ringkasan}}</p>
                                    </a>
                                </div>
                                <div class="col-4 news" style="">
                                    <a href="/artikel/read/{{$a->id}}"> <img src="{{url("/images/{$a->foto}")}}" width="100px" alt="Images"></a>
                                </div>
                                <div class="col news" style="">
                                    <t>{{$a->created_at->format('d-m-Y H:i')}}</t>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
@endsection
