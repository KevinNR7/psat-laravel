@extends('template.layout')

@section('content')
@section('title', 'Home')


<!-- Animasi CSS -->
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
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
  }

    .z-1 {
        z-index: 1;
    }
       .animate-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .animate-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }   
</style>

<!-- Hero Section -->
<section class="hero-section position-relative text-white d-flex align-items-center justify-content-center text-center"
    style="height: 90vh; background: url('{{ asset('images/hero.webp') }}') center/cover no-repeat;">
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5);"></div>

    <div class="container position-relative z-1">
        <h1 class="display-4 fw-bold mb-3 animate-fade-up">Rasakan Serunya Petualangan di Sungai Cisadane!</h1>
        <p class="lead animate-fade-up" style="animation-delay: 0.2s;">Bersama Alamanda Rafting, seru-seruan jadi makin
            aman & berkesan.</p>
        <a href="#paket" class="btn btn-warning btn-lg mt-4 animate-fade-up" style="animation-delay: 0.4s;">Lihat
            Paket</a>
    </div>
</section>

{{-- Story Section --}}
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Cerita Kami</h2>
                <p class="mb-3">Semua berawal dari rasa cinta terhadap alam dan keinginan sederhana: bikin orang-orang
                    kota ngerasain serunya petualangan di sungai yang asli, bukan cuma di layar gadget. Dari situ,
                    Alamanda lahir. Kami berdiri di tengah hijaunya Cimande, Caringin – tepat di pinggiran Sungai
                    Cisadane yang arusnya penuh tantangan, tapi tetap bersahabat.</p>
                <p class="mb-3">Dengan tim profesional, peralatan berstandar internasional, dan semangat kekeluargaan,
                    Alamanda jadi tempat bukan cuma buat basah-basahan, tapi juga buat bonding, healing, dan bikin
                    kenangan. Kami percaya: petualangan terbaik selalu dimulai dari keberanian mencoba.
                </p>
                <p>Selamat datang di keluarga Alamanda. Yuk, kita bikin cerita bareng!.</p>
            </div>
            <div class="col-lg-6 position-relative">
                <img src="{{ asset('images/image.jpg') }}" class="img-fluid rounded shadow" alt="Tim Wisata">
            </div>
        </div>
    </div>
</section>

{{-- Values Section --}}
<!-- Section Keunggulan -->
<section class="py-5 bg-light" id="keunggulan">
    <div class="container text-center">
        <h2 class="mb-4 fw-bold">Kenapa Harus Pilih Alamanda?</h2>
        <p class="mb-5 text-muted">Kami nggak cuma jual rafting, tapi pengalaman yang seru dan aman buat semua!</p>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100 animate-hover">
                    <i class="bi bi-person-check display-5 text-primary mb-3"></i>
                    <h5 class="fw-bold">Instruktur Profesional</h5>
                    <p>Tim kami bersertifikat & berpengalaman, siap bikin petualangan lo tetap aman dan menyenangkan.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100 animate-hover">
                    <i class="bi bi-house-heart display-5 text-success mb-3"></i>
                    <h5 class="fw-bold">Fasilitas Lengkap</h5>
                    <p>Dari saung, mushola, toilet, sampai spot foto—semua disiapin buat kenyamanan lo selama di sini.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm h-100 animate-hover">
                    <i class="bi bi-currency-dollar display-5 text-warning mb-3"></i>
                    <h5 class="fw-bold">Harga Terjangkau</h5>
                    <p>Mulai dari Rp195 ribu, lo udah bisa rafting + dapet snack, kelapa muda, dan pengalaman yang gak
                        ada duanya!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Paket Rafting -->
<section id="paket" class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Paket Seru dari Alamanda</h2>
    <p class="text-muted mb-5">Pilih paket sesuai level kehebohan lo – semua udah termasuk fasilitas & snack, tinggal datang dan basah-basahan!</p>

    <div class="row g-4 justify-content-center">
      <!-- Paket 1 -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg animate-hover">
          <div class="card-body">
            <h5 class="card-title fw-bold">🎒 Paket Fun Rafting</h5>
            <p class="card-text">Rute 7 KM cocok buat pemula & anak sekolah. Sudah termasuk instruktur, pelampung, helm, snack, dan kelapa muda.</p>
            <p class="fw-bold text-primary">Rp195.000 / orang</p>
            <a href="{{route('contact') }}" class="btn btn-outline-primary">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Paket 2 -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg animate-hover">
          <div class="card-body">
            <h5 class="card-title fw-bold">🔥 Paket Adventure</h5>
            <p class="card-text">Rute 12 KM dengan jeram lebih menantang. Cocok buat team building atau liburan bareng teman kantor!</p>
            <p class="fw-bold text-success">Rp250.000 / orang</p>
            <a href="{{route('contact') }}" class="btn btn-outline-success">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <!-- Paket 3 -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-lg animate-hover">
          <div class="card-body">
            <h5 class="card-title fw-bold">👨‍👩‍👧‍👦 Paket Keluarga</h5>
            <p class="card-text">Rafting santai 6 KM + area bermain anak. Didesain buat keluarga yang ingin quality time seru di alam!</p>
            <p class="fw-bold text-warning">Rp180.000 / orang</p>
            <a href="{{ route('contact')}}" class="btn btn-outline-warning">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-primary text-white text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Siap Berpetualang Bersama Kami?</h2>
        <p class="fs-5 mb-4">Hubungi tim kami dan mulai rencanakan liburan impian Anda</p>
        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
            <a href="{{ route('contact') }}"
                class="btn btn-success btn-lg d-flex align-items-center justify-content-center gap-2">
                👥 Hubungi Kami
            </a>
            <a href="{{ route('destinasi') }}"
                class="btn btn-outline-light btn-lg d-flex align-items-center justify-content-center gap-2">
                📍 Lihat Destinasi
            </a>
        </div>
    </div>
</section>
@endsection
