@extends('layouts.main')

@section('content')
<h3>Dashboard</h3>
<p>Selamat datang di Sistem Informasi Toko Pupuk Ginting.</p>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-tags-fill fs-1 text-success me-3"></i>
                <div>
                    <h5>{{ $jumlahKategori }}</h5>
                    <span>Kategori</span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-box-seam fs-1 text-success me-3"></i>
                <div>
                    <h5>{{ $jumlahProduk }}</h5>
                    <span>Produk</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
