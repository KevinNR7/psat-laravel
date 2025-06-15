@extends('template.layout')

@section('title', 'Kontak Kami')

@section('content')
    <style>
        .animate-fade-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 0.8s ease-in-out forwards;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="py-5 text-center bg-success text-white">
        <div class="container">
            <h1 class="display-5 fw-bold animate-fade-up">Hubungi Kami</h1>
            <p class="lead animate-fade-up" style="animation-delay: 0.3s;">Punya pertanyaan atau mau booking paket wisata? Tim
                Alamanda siap bantu lo!</p>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h4 class="mb-4 text-success fw-bold">Form Kontak</h4>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama lo...">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="contoh@email.com">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="tel" class="form-control" placeholder="08xxxxxxxxx">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pesan</label>
                                    <textarea class="form-control" rows="4" placeholder="Tulis pesan atau pertanyaan lo..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Info Kontak -->
    <div class="d-flex container gap-5">
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="text-center fw-bold text-success mb-4">Kontak & Alamat</h4>
                    <p><i class="bi bi-geo-alt-fill text-danger"></i> Jl. Raya Caringin No.12, Bogor, Jawa Barat</p>
                    <p><i class="bi bi-telephone-fill text-success"></i> 0812-3456-7890</p>
                    <p><i class="bi bi-envelope-fill text-warning"></i> info@raftingcisadane.com</p>

                    <h5 class="mt-4">Media Sosial</h5>
                    <a href="https://www.facebook.com" class="btn btn-outline-primary btn-sm me-2"><i
                            class="bi bi-facebook"></i> Facebook</a>
                    <a href="https://www.instagram.com" class="btn btn-outline-danger btn-sm me-2"><i
                            class="bi bi-instagram"></i> Instagram</a>
                    <a href="https://www.WhattApp.com" class="btn btn-outline-success btn-sm"><i class="bi bi-whatsapp"></i>
                        WhatsApp</a>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.0123281848732!2d106.81448347499456!3d-6.701871993293726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cbfe1c3a8901%3A0x975cd308a3489692!2sRafting%20Outbound%20ALAMANDA!5e1!3m2!1sid!2sid!4v1749989134894!5m2!1sid!2sid"
            width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


@endsection
