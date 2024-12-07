@extends('layouts.app')

@section('title', 'Tugas Pendahuluan')

@section('content')
    <div class="row">
        <h1 class="mb-4">Semua Tugas</h1>
        <!-- Notifikasi -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @foreach ($tugass as $tugas)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $tugas->judul }}</h5>
                        <p class="card-text">{{ Str::limit($tugas->subjudul, 100, '...') }}</p>
                        <a href="{{ route('tugass.show', $tugas->id) }}" class="btn btn-primary">Baca Lebih</a>
                        <a href="{{ route('tugass.edit', $tugas) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tugass.destroy', $tugas) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Apakah Yakin untuk menghapus Tugas ini? :P');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $tugass->links() }}
    </div>
@endsection
