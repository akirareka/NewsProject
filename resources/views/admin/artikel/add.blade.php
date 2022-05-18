@extends('layouts.app')
@section('content')
<div style="padding:50px; padding-top:0;pdding-bottom:0;">
    <div class="row">
        <div class="col-lg-12 margin-tb addadmin">
            <div class="pull-left">
                <h2>Add New Artikel</h2>
            </div>
            <div class="pull-right">
                <a class="backadmin" href="/admin/artikel"><button>Back</button></a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/admin/artikel/add" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category :</strong>
                    <select name="category" id=""
                        style=" margin-top: 10px; width: 100% ;  border-radius:5px;  height: 38px; padding-left:9px; border-color:#C4C4C4; color:#6c757d;">
                        <option value="" selected disabled hidden>Choose here</option>
                        <option value="Edukasi">Edukasi</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Sport">Sport</option>
                        <option value="Teknologi">Teknologi</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Artikel">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Author:</strong>
                    <input type="text" name="author" class="form-control" placeholder="Nama Author">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="isi_artikel"
                        placeholder="Penjelasan Artikel"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Foto:</strong>
                    <input type="file" name="foto" class="form-control" placeholder="foto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Top News:</strong>
                    <input type="text" name="ringkasan" class="form-control" placeholder="Ringkasan News">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center submit">
                <button type="submit">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
