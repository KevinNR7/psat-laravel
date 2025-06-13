<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    {{-- Logo --}}
    <a class="navbar-brand d-flex align-items-center gap-2" href="/">
      <i class="bi bi-geo-alt-fill text-primary fs-4"></i>
      <span class="fw-bold">ALAMANDA</span>
    </a>

    {{-- Toggle button --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Navigation --}}
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link text-gray">Beranda</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('destinasi') }}" class="nav-link text-gray">Destinasi</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('contact') }}" class="nav-link text-gray">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
