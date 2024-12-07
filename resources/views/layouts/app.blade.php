<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tugas Pendahuluan')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-header-image {
            width: 100%;
            /* Lebar gambar 100% layar */
            height: 250px;
            /* Tinggi gambar tetap 150px */
            object-fit: cover;
            /* Memotong gambar agar proporsinya tetap */
            object-position: top;
            /* Menampilkan bagian bawah gambar */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Informatic Laboratorium</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('tugass.index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tugass.create') }}">Upload Tugas</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <img src="{{ asset('images/telkom.jpg') }}" alt="Deskripsi Gambar" class="img-fluid custom-header-image">

    <!-- Main Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>© 2024 Laboratorium Informatika.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>


</html>
