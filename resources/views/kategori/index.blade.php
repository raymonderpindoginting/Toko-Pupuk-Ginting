@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded-4">
        <div class="card-header bg-success text-white fw-bold">
            Data Kategori
        </div>
        <div class="card-body">
            <a href="/kategori/create" class="btn btn-success mb-3 fw-bold">
                <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
            </a>

            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-success">
                        <tr>
                            <th style="width:50px;">No</th>
                            <th>Nama Kategori</th>
                            <th style="width:180px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $k->nama_kategori }}</td>
                            <td>
                                <a href="/kategori/{{ $k->id }}/edit" class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="/kategori/{{ $k->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Hapus data?')">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($kategori->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center text-muted">Data kategori masih kosong</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
