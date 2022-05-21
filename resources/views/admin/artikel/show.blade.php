@extends('layouts.app')
@section('content')
<div style="padding:50px; padding-top:0;pdding-bottom:0;">
<div class="pull-right addnew">
    <a class="add" href="/admin/artikel/insert"> <button> Add New Artikel</button></a>
</div>
<div class="col">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Foto</th>
            <th>Tanggal</th>
            <th >Action</th>
        </tr>
        @foreach ($artikel as $artikels)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $artikels->judul }}</td>
            <td>{{ $artikels->author }}</td>
            <td><img src="{{url("/images/{$artikels->foto}")}}" width="100px" alt="Images">
        </td>
            <td>{{ $artikels->created_at->format('d-m-Y H:i')}}</td>
            <td>
                <form action="/admin/artikel/delete/{{$artikels->id}}" method="POST">
                    <a class="btn btn-info btn-sm" href="/admin/artikel/edit/{{$artikels->id}}" style="width: 100px ;"> Update</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm " style="width: 100px ; margin-top: 5px;"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
