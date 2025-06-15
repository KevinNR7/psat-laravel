<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ALAMANDA')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    {{-- Include Navbar --}}
    @include('partials.navbar')

    <div class="mt-1">
        @yield('content')
    </div>
    <footer class="bg- text-light pt-5 pb-3 mt-5">
        <div class="container">
            <div class="row">

                <!-- Logo & Deskripsi -->
                <div class="col-md-4 mb-4">
                    <h4 class="fw-bold text-warning">Alamanda</h4>
                    <p class="text-muted">Tempat wisata alam di Caringin, Bogor yang menghadirkan pengalaman rafting,
                        outbound, dan healing dengan nuansa natural & nyaman.</p>
                </div>

                <!-- Navigasi -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-semibold">Menu Cepat</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}" class="text-decoration-none text-muted">Beranda</a></li>
                        <li><a href="{{ url('/destinasi') }}" class="text-decoration-none text-muted">Destinasi</a></li>
                        <li><a href="{{ url('/kontak') }}" class="text-decoration-none text-muted">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kontak & Sosial -->
                <div class="col-md-4 mb-4">
                    <h5 class="fw-semibold">Hubungi Kami</h5>
                    <p class="text-muted mb-1"><i class="bi bi-geo-alt-fill me-2 text-warning"></i>Jl. Raya Caringin
                        No.88, Bogor</p>
                    <p class="text-muted mb-1"><i class="bi bi-telephone-fill me-2 text-warning"></i>+62 812-3456-7890
                    </p>
                    <p class="text-muted"><i class="bi bi-envelope-fill me-2 text-warning"></i>info@alamandabogor.id</p>

                    <div class="d-flex gap-3 mt-3">
                        <a href="#" class="text-warning fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-warning fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-warning fs-5"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>

            <!-- Garis dan Copyright -->
            <hr class="border-secondary">
            <div class="text-center text-muted small">
                &copy; {{ date('Y') }} Alamanda Bogor. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
