@extends('template.layout')

@section('content')
    {{-- Hero Section --}}
    <section class="position-relative d-flex align-items-center justify-content-center" style="height: 20rem;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-cover"
            style=" background-image: url('{{ asset('images/header.jpeg') }}');bakground-size: cover; background-size: 600px; opacity: 0.9;">
        </div>
        <div class="position-relative text-white text-center px-4">
            <h1 class="display-4 fw-bold mb-3">Tentang Kami</h1>
            <p class="fs-5">Partner terpercaya untuk petualangan wisata Anda di Indonesia</p>
        </div>
    </section>

    {{-- Story Section --}}
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Cerita Kami</h2>
                    <p class="mb-3">ALAMANDA didirikan pada tahun 2019 dengan misi sederhana: membuat wisata
                        Indonesia lebih mudah diakses dan dinikmati oleh semua orang.</p>
                    <p class="mb-3">Kami percaya bahwa Indonesia memiliki keindahan alam dan budaya yang luar biasa. Dari
                        pantai eksotis di Bali hingga keajaiban bawah laut Raja Ampat, setiap destinasi memiliki cerita unik
                        yang layak untuk dijelajahi.</p>
                    <p>Hingga saat ini, kami telah melayani lebih dari 1000 wisatawan dengan tingkat kepuasan 98%. Komitmen
                        kami adalah memberikan pengalaman wisata yang tak terlupakan dengan harga terjangkau.</p>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="{{ asset('images/image.jpg') }}"
                        class="img-fluid rounded shadow" alt="Tim Wisata">
                </div>
            </div>
        </div>
    </section>

    {{-- Values Section --}}
    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Mengapa Pilih Kami?</h2>
            <p class="mb-5 fs-5">Komitmen kami untuk memberikan pengalaman wisata terbaik</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="bg-white p-4 shadow rounded h-100">
                        <div class="mb-3 text-primary fs-1">
                            ❤️
                        </div>
                        <h5 class="fw-bold">Pelayanan Terbaik</h5>
                        <p>Kami mengutamakan kepuasan dan kenyamanan setiap wisatawan</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="bg-white p-4 shadow rounded h-100">
                        <div class="mb-3 text-primary fs-1">
                            🏆
                        </div>
                        <h5 class="fw-bold">Kualitas Terjamin</h5>
                        <p>Paket wisata berkualitas dengan harga yang terjangkau</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="bg-white p-4 shadow rounded h-100">
                        <div class="mb-3 text-primary fs-1">
                            👥
                        </div>
                        <h5 class="fw-bold">Tim Berpengalaman</h5>
                        <p>Didukung tim profesional yang berpengalaman di bidangnya</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="bg-white p-4 shadow rounded h-100">
                        <div class="mb-3 text-primary fs-1">
                            📍
                        </div>
                        <h5 class="fw-bold">Destinasi Lengkap</h5>
                        <p>Menyediakan berbagai pilihan destinasi di seluruh Indonesia</p>
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
                <a href="https://WhatApp.com"
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
