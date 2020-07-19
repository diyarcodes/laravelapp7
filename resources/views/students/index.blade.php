@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <ul class="list-group">
                @foreach($students as $s)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $s->nama }}
                    <a href="/students/{{ $s->id }}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection