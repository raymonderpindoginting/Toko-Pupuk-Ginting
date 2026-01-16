@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="card shadow rounded-4">
        <div class="card-header bg-success text-white fw-bold">
            Data Transaksi
        </div>

        <div class="card-body">

            <a href="/transaksi/create" class="btn btn-success mb-3 fw-bold">
                <i class="bi bi-plus-lg me-1"></i> Tambah Transaksi
            </a>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-success">
                        <tr>
                            <th style="width:50px;">No</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th style="width:180px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($transaksi as $t)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->produk->nama_produk }}</td>
                            <td>{{ $t->jumlah }}</td>
                            <td>Rp {{ number_format($t->total_harga) }}</td>
                            <td>
                                <a href="/transaksi/{{ $t->id }}/edit"
                                   class="btn btn-warning btn-sm me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>

                                <form action="/transaksi/{{ $t->id }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Hapus transaksi ini?')">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Belum ada data transaksi
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
