@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   
                </div>
                
               
                <div class="card-body">
                @foreach($artikel as $a)
                <form action="/artikel/update" method="post">
		            {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $a->id }}"> <br/>
                    Judul <input type="text" name="judul" required="required" value="{{ $a->judul }}"> <br/>
                    isi <textarea name="isi" required="required">{{ $a->isi_artikel }}</textarea><br/>
                    <input type="submit" value="Simpanan">
                </form>
                @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
