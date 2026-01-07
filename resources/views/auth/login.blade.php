<!DOCTYPE html>
<html>
<head>
    <title>Login | Toko Pupuk Ginting</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center bg-success text-white">
                    Login
                </div>
                <div class="card-body">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-success w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
