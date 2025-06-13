@extends('template.layout')

@section('title', 'Destinasi Wisata')

@section('content')
<div class="container mt-5">
  <h1 class="mb-4 text-success">
    <i class="bi bi-map-fill"></i> Destinasi Wisata
  </h1>

  {{-- Rafting Sungai Cisadane --}}
  <div class="card mb-5 shadow-sm border-0">
    <div class="row g-0">
      <div class="col-md-5">
        <img src="{{ asset('images/banner.webp') }}" class="img-fluid rounded-start" alt="Rafting Cisadane">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h3 class="card-title">Rafting Sungai Cisadane</h3>
          <p class="card-text">Sungai Cisadane di Bogor adalah destinasi populer untuk olahraga arung jeram. Cocok buat lo yang cari petualangan seru di alam terbuka. Debit airnya stabil, jadi aman buat pemula maupun yang udah jago.</p>

          <h5><i class="bi bi-geo-alt-fill"></i> Lokasi</h5>
          <p>Jl. Raya Caringin – Bogor, Jawa Barat</p>

          <h5><i class="bi bi-cash-stack"></i> Harga Paket</h5>
          <ul>
            <li>Mulai dari Rp150.000 per orang</li>
            <li>Termasuk: peralatan, pemandu, asuransi, dan makan siang</li>
          </ul>

          <h5><i class="bi bi-star-fill"></i> Fasilitas</h5>
          <ul>
            <li>Basecamp nyaman</li>
            <li>Ruang ganti & toilet</li>
            <li>Area parkir luas</li>
            <li>Dokumentasi foto/video</li>
          </ul>

          <a href="https://www.paketraftingcisadane.web.id" target="_blank" class="btn btn-outline-primary mt-3">
            <i class="bi bi-box-arrow-up-right"></i> Kunjungi Website Resmi
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Paintball Cisadane --}}
  <div class="card mb-5 shadow-sm border-0">
    <div class="row g-0 flex-md-row-reverse">
      <div class="col-md-5">
        <img src={{ asset('images/point.jpg') }} class="img-fluid rounded-end" style="height: 70%;" alt="Paintball Cisadane">
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h3 class="card-title">Paintball Adventure</h3>
          <p class="card-text">Selain rafting, lo juga bisa seru-seruan bareng tim dengan paintball! Cocok banget buat team building, gathering, atau ngeratain dendam dengan temen (secara sportif tentunya 😆).</p>

          <h5><i class="bi bi-geo-alt-fill"></i> Lokasi</h5>
          <p>Area basecamp Cisadane Rafting, Bogor</p>

          <h5><i class="bi bi-cash-stack"></i> Harga Paket</h5>
          <ul>
            <li>Mulai dari Rp100.000 per orang</li>
            <li>Sudah termasuk: 40 peluru, senjata, pelindung, dan instruktur</li>
          </ul>

          <h5><i class="bi bi-star-fill"></i> Fasilitas</h5>
          <ul>
            <li>Lapangan paintball alami</li>
            <li>Peralatan lengkap dan aman</li>
            <li>Briefing dan instruktur profesional</li>
          </ul>

          <a href="https://www.paketraftingcisadane.web.id" target="_blank" class="btn btn-outline-success mt-3">
            <i class="bi bi-box-arrow-up-right"></i> Lihat Detail Paket
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
