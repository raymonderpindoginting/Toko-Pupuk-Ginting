@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded-3 p-4" style="border-top:4px solid #28a745;">
        <h4 class="mb-4 text-success fw-bold">Tambah Kategori</h4>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/kategori" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control border-success" placeholder="Masukkan nama kategori" required>
            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-success fw-bold px-4">Simpan</button>
                <a href="/kategori" class="btn btn-secondary fw-bold px-4">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
