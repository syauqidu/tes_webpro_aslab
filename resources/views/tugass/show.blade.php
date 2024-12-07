@extends('layouts.app')

@section('title', $tugas->judul)

@section('content')
    <div class="card">
        {{-- <img src="{{ $post->image_url ?? 'https://via.placeholder.com/800x400' }}" class="card-img-top"
            alt="{{ $post->title }}"> --}}
        <div class="card-body">
            <h1 class="card-title">{{ $tugas->judul }}</h1>
            <p class="card-text">{{ $tugas->subjudul }}</p>
            <p class="card-text">{{ $tugas->deskripsi }}</p>
            <a href="{{ route('tugass.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
