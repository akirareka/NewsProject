@extends('layouts.app')
@section('content')
<div class="container" style="margin-bottom: 150px ;">
    <div class="row justify-content-center buttonadmin">
        <a href="/admin/artikel">
            <button>Artikel</button></a>
    </div>

    <div class="row justify-content-center buttonadmin">
        <a href="/admin/kritik-saran">
            <button>Kritik dan Saran</button></a>
    </div>

    <div class="row justify-content-center buttonadmin">
        <a href="/admin/register">
            <button>Daftarkan admin</button></a>
    </div>
</div>
@endsection
