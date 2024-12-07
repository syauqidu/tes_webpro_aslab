@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Tugas</h1>

        <form action="{{ route('tugass.update', $tugas) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Tugas"
                    value="{{ $tugas->judul }}" required>
            </div>
            <div class="mb-3">
                <label for="subjudul" class="form-label">Subjudul</label>
                <input type="text" class="form-control" id="subjudul" name="subjudul"
                    placeholder="Masukkan Subjudul Tugas" value="{{ $tugas->subjudul }}" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori"
                    placeholder="Masukkan Kategori Tugas (TP/Jurnal)" value="{{ $tugas->kategori }}" required>
            </div>

            <div class="mb-3">
                <label for="deadline" class="form-label">Tanggal Deadline</label>
                <input type="date" class="form-control" id="deadline" name="deadline" placeholder=""
                    value="{{ $tugas->deadline }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Tugas"
                    value="{{ $tugas->deskripsi }}" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
