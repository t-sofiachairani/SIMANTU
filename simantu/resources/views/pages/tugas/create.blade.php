@extends('layouts.dashboard')
@livewireScripts

@section('content')
<div class="d-flex align-items-center justify-content-between mb-5">
    <h2 class="text-dark fw-semibold mb-0">Tambah Tugas</h2>
    <a href="{{ route('tugas.index')}}" class="btn btn-light">
        <i class="bx bx-arrow-back"></i> Kembali
    </a>
</div>
<div class="card border-0">
    <div class="card-body p-5">
        <form action="{{ route('tugas.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_tugas">Nama Tugas</label>
                <input type="text" name="nama_tugas" id="nama_tugas" class="form-control">
            </div>
            <div class="mb-3">
                <label for="mata_kuliah">Mata Kuliah</label>
                <div class="mb-3 d-flex align-item-center">
                    <select name="mata_kuliah" id="mata_kuliah" class="form-select" wire:model="tugas.matakuliah">
                        <option value="">Pilih Mata Kuliah</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Desain dan Analisis Algoritma">Desain dan Analisis Algoritma</option>
                        <option value="Desain dan Analisis Algoritma">Persamaan Diferensial</option>
                        <option value="Desain dan Analisis Algoritma">Komunikasi Data dan Jaringan</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="waktu_tenggat">Waktu Tenggat</label>
                <input type="date" name="waktu_tenggat" id="waktu_tenggat" class="form-control">
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Buat Tugas</button>
        </form>
    </div>
</div>

@endsection