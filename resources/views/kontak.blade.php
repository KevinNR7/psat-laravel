@extends('template.layout')

@section('title', 'Kontak Kami')

@section('content')
<div class="container mt-5">
  <h1 class="mb-4 text-primary"><i class="bi bi-telephone-fill"></i> Hubungi Kami</h1>

  <div class="row g-5">
    <!-- Form Kontak -->
    <div class="col-md-7">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h4 class="card-title mb-3">Form Pemesanan / Pertanyaan</h4>

          <form action="" method="POST">
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" required>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="mb-3">
              <label for="telepon" class="form-label">No. Telepon</label>
              <input type="text" name="telepon" class="form-control" id="telepon">
            </div>

            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan / Permintaan</label>
              <textarea name="pesan" class="form-control" id="pesan" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
              <i class="bi bi-send-fill"></i> Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Info Kontak -->
    <div class="col-md-5">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <h4 class="card-title mb-3">Informasi Kontak</h4>

          <p><i class="bi bi-geo-alt-fill text-danger"></i> Jl. Raya Caringin No.12, Bogor, Jawa Barat</p>
          <p><i class="bi bi-telephone-fill text-success"></i> 0812-3456-7890</p>
          <p><i class="bi bi-envelope-fill text-warning"></i> info@raftingcisadane.com</p>

          <h5 class="mt-4">Media Sosial</h5>
          <a href="https://www.facebook.com" class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-facebook"></i> Facebook</a>
          <a href="https://www.instagram.com" class="btn btn-outline-danger btn-sm me-2"><i class="bi bi-instagram"></i> Instagram</a>
          <a href="https://www.WhattApp.com" class="btn btn-outline-success btn-sm"><i class="bi bi-whatsapp"></i> WhatsApp</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
