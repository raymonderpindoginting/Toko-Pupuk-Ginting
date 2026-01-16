@extends('layouts.main')

@section('content')
<h3 class="mb-4">Tambah Transaksi</h3>

<a href="{{ route('transaksi.index') }}" class="btn btn-secondary mb-3">
    <i class="bi bi-arrow-left"></i> Kembali
</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Produk</label>
                <select name="produk_id" class="form-select" required>
                    <option value="">-- Pilih Produk --</option>
                    @foreach ($produk as $p)
                        <option value="{{ $p->id }}">
                            {{ $p->nama_produk }} - Rp {{ number_format($p->harga) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number"
                       name="jumlah"
                       class="form-control"
                       min="1"
                       required>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Simpan Transaksi
            </button>
        </form>
    </div>
</div>
@endsection
