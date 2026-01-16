<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Toko Pupuk Ginting</title>

    <!-- BOOTSTRAP CSS (CDN - WAJIB) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOOTSTRAP ICON -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR ATAS -->
<nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">
            <i class="bi bi-shop me-2"></i>Toko Pupuk Ginting
        </span>
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">
            Logout
        </a>
    </div>
</nav>

<!-- BODY -->
<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 bg-white border-end min-vh-100 p-3">

            <ul class="nav nav-pills flex-column gap-2">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                       class="nav-link {{ request()->routeIs('dashboard') ? 'active bg-success text-white' : 'text-success' }}">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/kategori"
                       class="nav-link {{ request()->is('kategori*') ? 'active bg-success text-white' : 'text-success' }}">
                        <i class="bi bi-tags me-2"></i>
                        Kategori
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/produk"
                       class="nav-link {{ request()->is('produk*') ? 'active bg-success text-white' : 'text-success' }}">
                        <i class="bi bi-box-seam me-2"></i>
                        Produk
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/transaksi"
                       class="nav-link {{ request()->is('transaksi*') ? 'active bg-success text-white' : 'text-success' }}">
                        <i class="bi bi-cash-coin me-2"></i>
                        Transaksi
                    </a>
                </li>

                <li class="nav-item mt-4 text-success fw-semibold">
                    <i class="bi bi-telephone-fill me-2"></i>
                    0812-6091-0961
                </li>

            </ul>
        </div>

        <!-- KONTEN -->
        <div class="col-md-10 p-4">
            @yield('content')
        </div>

    </div>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
