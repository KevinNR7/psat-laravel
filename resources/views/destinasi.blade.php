@extends('template.layout')

@section('title', 'Destinasi Wisata')


@section('content')

<!-- ===== HERO SECTION ===== -->
<section class="bg-dark text-white text-center position-relative overflow-hidden" style="height: 60vh;">
  <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5); z-index: 1;"></div>
  <img src="{{ asset('images/image.jpg') }}" alt="Rafting Hero" class="w-100 h-100 object-fit-cover position-absolute top-0 start-0" style="object-fit: cover; z-index: 0;" loading="lazy">
  
  <div class="container position-relative z-2 h-100 d-flex flex-column justify-content-center align-items-center">
    <h1 class="display-4 fw-bold animate-fade-up">Destinasi Seru di Alamanda</h1>
    <p class="lead animate-fade-up" style="animation-delay: 0.3s;">Nikmati pengalaman rafting, outbound, dan spot seru lainnya yang bikin healing makin berkesan.</p>
    <a href="#daftar-destinasi" class="btn btn-warning btn-lg mt-3 animate-fade-up" style="animation-delay: 0.6s;">Lihat Destinasi</a>
  </div>
</section>

<!-- ===== SECTION DAFTAR DESTINASI ===== -->
<section id="daftar-destinasi" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">Daftar Destinasi Alamanda</h2>
    <p class="text-center text-muted mb-5">Explore semua area seru yang bisa kamu coba di Alamanda – dari aktivitas menantang sampai tempat santai bareng keluarga!</p>

    <div class="row g-4">
      <!-- Rafting -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 animate-hover">
          <img src="{{ asset('images/raft.jpeg') }}" class="card-img-top" alt="Rafting Cisadane">
          <div class="card-body">
            <h5 class="card-title fw-bold">Rafting Cisadane</h5>
            <p class="card-text">Serunya melawan jeram sungai bareng tim berpengalaman. Aman, menantang, dan cocok buat semua umur!</p>
          </div>
        </div>
      </div>

      <!-- Outbound -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 animate-hover">
          <img src="{{ asset('images/out.jpg') }}" class="card-img-top" alt="Outbound Seru">
          <div class="card-body">
            <h5 class="card-title fw-bold">Outbound & Team Building</h5>
            <p class="card-text">Fun games, flying fox, tali keseimbangan dan banyak lagi buat kekompakan & ketawa bareng!</p>
          </div>
        </div>
      </div>

      <!-- Paintball -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 animate-hover">
          <img src="{{ asset('images/point.jpg') }}" class="card-img-top" alt="Paintball Arena">
          <div class="card-body">
            <h5 class="card-title fw-bold">Paintball Arena</h5>
            <p class="card-text">Main bareng geng lo dengan perlengkapan lengkap dan area yang aman. Rasain serunya perang-perangan!</p>
          </div>
        </div>
      </div>

      <!-- Spot Foto -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 animate-hover">
          <img src="{{ asset('images/alam.jpg') }}" class="card-img-top" alt="Spot Foto Alam">
          <div class="card-body">
            <h5 class="card-title fw-bold">Spot Foto Alam</h5>
            <p class="card-text">Banyak spot kece dengan latar alam buat bikin feed IG lo makin aesthetic!</p>
          </div>
        </div>
      </div>

      <!-- Saung -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0 animate-hover">
          <img src="{{ asset('images/saung.jpg') }}" class="card-img-top" alt="Saung Istirahat">
          <div class="card-body">
            <h5 class="card-title fw-bold">Saung & Area Santai</h5>
            <p class="card-text">Tempat buat rebahan, ngopi, ngobrol bareng keluarga atau nunggu giliran rafting 😄</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ===== STYLE ANIMASI ===== -->
<style>
  .animate-fade-up {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeUp 1s forwards;
  }
  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-hover {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .animate-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
  }

  .z-2 {
    z-index: 2;
  }
</style>

@endsection
