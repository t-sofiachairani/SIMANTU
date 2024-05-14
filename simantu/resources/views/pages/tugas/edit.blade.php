@extends('layouts.dashboard')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-5">
    <h2 class="text-dark fw-semibold mb-0">Edit Tugas</h2>
    <a href="{{ route('tugas.index')}}" class="btn btn-light">
        <i class="bx bx-arrow-back"></i> Kembali
    </a>
</div>
<div class="card border-0">
    <div class="card-body p-5">
        <form action="{{ route('tugas.update', $tugas->id)}}" method="post">
            @csrf @method('PUT')

            <div class="mb-3">
                <label for="nama_tugas">Nama Tugas</label>
                <input type="text" name="nama_tugas" id="nama_tugas" class="form-control" value="{{ $tugas->nama_tugas}}">
            </div>
            <div class="mb-3">
                <label for="mata_kuliah">Mata Kuliah</label>
                <select name="mata_kuliah" id="mata_kuliah" class="form-select">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="Rekayasa Perangkat Lunak" {{ $tugas->mata_kuliah == 'Rekayasa Perangkat Lunak' ? 'SELECTED' : ''}}>Rekayasa Perangkat Lunak</option>
                    <option value="Multimedia" {{ $tugas->mata_kuliah == 'Multimedia' ? 'SELECTED' : ''}}>Multimedia</option>
                    <option value="Desain dan Analisis Algoritma" {{ $tugas->mata_kuliah == 'Desain dan Analisis Algoritma' ? 'SELECTED' : ''}}>Desain dan Analisis Algoritma</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="waktu_tenggat">Waktu Tenggat</label>
                <input type="date" name="waktu_tenggat" id="waktu_tenggat" class="form-control" value="{{ $tugas->waktu_tenggat}}">
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $tugas->deskripsi}}">
            </div>
            <button class="btn btn-primary" type="submit">Update Tugas</button>
        </form>
    </div>
</div>
@endsection