@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded-4 p-4" style="border-top:4px solid #28a745;">
        <h4 class="mb-4 text-success fw-bold">Tambah Produk</h4>

        <form action="/produk" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Kategori</label>
                <select name="kategori_id" class="form-select border-success" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control border-success" placeholder="Masukkan nama produk" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Harga</label>
                <input type="number" name="harga" class="form-control border-success" placeholder="Masukkan harga" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Stok</label>
                <input type="number" name="stok" class="form-control border-success" placeholder="Masukkan stok" required>
            </div>

            <div class="d-flex gap-2 mt-3">
                <button type="submit" class="btn btn-success fw-bold px-4">Simpan</button>
                <a href="/produk" class="btn btn-secondary fw-bold px-4">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
