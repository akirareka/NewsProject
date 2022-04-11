@extends('templates.t_home_admin')
@section('content')
<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('admin.add.artikel') }}"> Add New Artikel</a>
</div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Author</th>
            <th>Details</th>
            <th>Foto</th>
            <th>Top News</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($artikel as $artikels)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $artikels->judul }}</td>
            <td>{{ $artikels->author }}</td>
            <td>{{ $artikels->isi_artikel }}</td>
            <td><img src="/storage/article/img/{{ $artikels->foto }}" width="100px"></td>
            <td>{{ $artikels->top_news }}</td>
            <td>
            <form action="{{ route('admin.artikel.destroy', $artikels->id)}}" method="POST">
            <a class="btn btn-info btn-sm" href="{{ route('admin.artikel.edit',$artikels->id) }}">Update</a>
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection