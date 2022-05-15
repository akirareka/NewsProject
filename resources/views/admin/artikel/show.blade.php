@extends('layouts.app')
@section('content')
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
            <th>Top News</th>
            <th >Action</th>
        </tr>
        @foreach ($artikel as $artikels)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $artikels->judul }}</td>
            <td>{{ $artikels->author }}</td>
            <td><img src="/storage/article/img/{{$artikels->foto }}" width="100px"></td>
            <td>{{ $artikels->top_news }}</td>
            <td>
                <form action="/admin/artikel/delete/{{$artikels->id}}" method="POST">
                    <a class="btn btn-info btn-sm" href="/admin/artikel/edit/{{$artikels->id}}">Update</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
