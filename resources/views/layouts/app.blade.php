
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir BPBD</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background: #eaf6f8;
        font-family: Arial, sans-serif;
        color: #263b46;
        margin: 0;
    }

    /* Navbar */
    .navbar {
        background: linear-gradient(90deg, #087eaf, #16a085);
        padding: 16px 0;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand {
        color: white !important;
        font-size: 22px;
        font-weight: bold;
    }

    .nav-link {
        color: white !important;
        margin-left: 12px;
        font-weight: 500;
        transition: 0.3s;
    }

    .nav-link:hover {
        color: #b9f3d2 !important;
    }

    /* Container */
    .container-content {
        max-width: 850px;
        margin: 45px auto;
        padding: 0 15px;
    }

    /* Card */
    .card {
        background: white;
        border: none;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(8,126,175,0.12);
    }

    .card h2 {
        color: #087eaf;
        font-weight: bold;
        margin-bottom: 25px;
    }

    /* Form */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        color: #087eaf;
        margin-bottom: 8px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #c8e1e5;
        border-radius: 8px;
    }

    .form-control:focus {
        border-color: #16a085;
        box-shadow: 0 0 5px rgba(22,160,133,0.3);
    }

    /* Tombol */
    button[type="submit"] {
        background: linear-gradient(90deg, #087eaf, #16a085);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    button[type="submit"]:hover {
        background: #086b83;
        transform: translateY(-2px);
    }

    .btn-light {
        color: #087eaf !important;
        font-weight: bold;
    }

    /* Footer */
    footer {
        text-align: center;
        padding: 20px;
        color: #63818a;
        margin-top: 40px;
    }

    /* Alert */
    .alert {
        border-radius: 8px;
    }
</style>

    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                LaporBanjir BPBD
            </a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="/form-laporan">
                    Form Pelaporan
                </a>

                @guest
                    <a class="nav-link" href="{{ route('login') }}">
                        Login
                    </a>

                    <a class="nav-link" href="{{ route('register') }}">
                        Register
                    </a>
                @endguest

                @auth
                    <a class="nav-link" href="{{ route('daftar-laporan') }}">
                        Daftar Laporan
                    </a>

                    <a class="nav-link" href="{{ route('profile') }}">
                        Profil Petugas
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-light btn-sm ms-2">
                            Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Isi Halaman -->
    <div class="container-content">
        @yield('content')
    </div>

    <footer>
        &copy; 2026 LaporBanjir BPBD
    </footer>

</body>
</html>
