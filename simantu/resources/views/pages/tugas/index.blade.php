@extends('layouts.dashboard')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-5">
    <h2 class="text-dark fw-semibold mb-0">Tugas</h2>
    <a href="{{ route('tugas.create')  }}" class="btn btn-primary">
        <i class="bx bx-plus"></i> Tambah Tugas
    </a>
</div>
<div class="card border-0">
    <div class="card-body p-5">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tugas</th>
                        <th>Mata Kuliah</th>
                        <th>Waktu Tenggat</th>
                        <th>Deskripsi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tugas as $item)    
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="project.html">{{ $item->nama_tugas}}</a></td>
                            <td>
                                <span class="badge bg-primary fs-8 text-uppercase">{{$item->mata_kuliah}}</span>
                            </td>
                            <td>{{ $item->waktu_tenggat }}</td>
                            <td>{{ $item->deskripsi}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-light rounded-circle p-2" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="width: 34px; height: 34px">
                                        <i class='bx bx-dots-horizontal-rounded'></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" style="z-index: 100;">
                                        <li><a class="dropdown-item" href="{{ route('tugas.edit', $item->id)}}">Edit</a></li>
                                        <li>
                                            <form action="{{ route('tugas.destroy', $item->id)}}" method="post">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="dropdown-item">Hapus</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection