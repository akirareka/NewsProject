@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   
                </div>
                
               
                <div class="card-body">
                <form action="/artikel/store" method="post">
		            {{ csrf_field() }}
                    Judul <input type="text" name="judul" required="required"> <br/>
                    isi <textarea name="isi" required="required"></textarea><br/>
                    <input type="submit" value="Simpanan">
                </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
