<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Toko Pupuk Ginting</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
body {
    background: url('https://images.unsplash.com/photo-1585079549811-4c5d6b946a4b?auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
    background-size: cover;
    min-height:100vh;
    font-family: Arial, sans-serif;
}
.overlay {
    background-color: rgba(255,255,255,0.95);
    min-height:100vh;
}
.navbar-gradient {
    background: linear-gradient(90deg,#28a745,#198754);
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
}
.sidebar {
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(8px);
    min-height:100vh;
    border-right:2px solid rgba(0,0,0,0.05);
}
.sidebar .nav-link {
    color:#198754;
    font-weight:500;
    border-radius:8px;
    transition:0.2s;
    display:flex;
    align-items:center;
    justify-content:space-between;
}
.sidebar .nav-link:hover { background:#28a745; color:#fff; transform: translateX(5px);}
.sidebar .bi { transition: transform 0.3s;}
.sidebar .nav-link:hover .bi { transform: rotate(20deg) scale(1.2);}
.content-area { padding:40px;}
.footer-mini { font-size:0.85rem; color:#fff; text-align:center; padding:10px 0; background:rgba(0,0,0,0.4);}
.contact { color:#198754; font-weight:600; font-size:0.95rem; margin-top:10px;}
</style>
</head>
<body>
<div class="overlay">

<!-- Navbar -->
<nav class="navbar navbar-gradient navbar-dark shadow-sm">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><i class="bi bi-shop me-2"></i>Toko Pupuk Ginting</span>
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-sm">Logout <i class="bi bi-box-arrow-right"></i></a>
    </div>
</nav>

<div class="container-fluid">
<div class="row">

<!-- Sidebar -->
<div class="col-md-2 sidebar p-3">
    <div class="text-center mb-4">
        <i class="bi bi-shop fs-1 text-success"></i>
        <h6 class="mt-2 fw-bold">Toko Pupuk<br>Ginting</h6>
        <hr>
    </div>
    <ul class="nav flex-column gap-2">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <span><i class="bi bi-speedometer2 me-2"></i> Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/kategori" class="nav-link">
                <span><i class="bi bi-tags me-2"></i> Kategori</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="/produk" class="nav-link">
                <span><i class="bi bi-box-seam me-2"></i> Produk</span>
            </a>
        </li>
        <li class="nav-item mt-3">
            <span class="contact"><i class="bi bi-telephone-fill me-2"></i> 0812-6091-0961</span>
        </li>
    </ul>
</div>

<!-- Konten -->
<div class="col-md-10 content-area">
    @yield('content')
</div>

</div>
</div>

<div class="footer-mini">&copy; 2026 Toko Pupuk Ginting. All rights reserved.</div>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>