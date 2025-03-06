

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat Dengan Dokter - DokterKita</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- Google Fonts: Poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
    }
    .navbar-brand img {
      height: 40px;
    }
    .section-title {
      font-size: 1.5rem;
      font-weight: 600;
    }
    .section-subtitle {
      color: #6c757d;
    }
    .doctor-illustration {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 20px 0;
    }
    .kemenkes-badge {
      max-height: 40px;
      width: 525px;
    }
    .card-doctor {
      border: 1px solid #e6e6e6;
      border-radius: 8px;
    }
    .card-doctor img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 50%;
    }
    .btn-primary-custom {
      background-color: #0F6463;
      border: none;
    }
    .btn-primary-custom:hover {
      background-color: #094C4B;
    }
    ul {
        list-style: none; /* Menghapus bullet default */
        padding-left: 0; /* Menghilangkan padding bawaan */
    }

    ul li {
        display: flex;
        align-items: center;
        gap: 10px; /* Jarak horizontal antara ikon dan teks */
        margin-bottom: 15px; /* Jarak vertikal antar list item */
    }

    .icon-list {
        width: 40px;
        height: 40px;
    }
    .btn-chat {
    background-color: #373D70 !important; /* Warna sesuai dengan tombol di gambar */
    color: #f9f9f9 !important;
    border-radius: 8px;
    padding: 8px 20px;
    text-decoration: none;
    font-weight: 600;
    text-align: center;
    }

    .btn-chat:hover {
        background-color: #2b305a !important; /* Warna hover lebih gelap */
    }


  </style>
</head>
<body>
<?php
include('includes/header.php');
?>

<!-- Konten Chat Dengan Dokter -->
<div class="container my-5">
  <div class="row">
    <!-- Kolom Kiri: Info Chat Dokter -->
    <div class="col-lg-7">
      <h2 class="section-title mb-3">Chat Dokter Di DokterKita</h2>
      <p class="section-subtitle">Layanan telemedicine yang siap siaga untuk bantu kamu hidup lebih sehat</p>
      
      <!-- Gambar tambahan -->
      <img src="http://localhost:3001/gambar/perawat.png" alt="Telemedicine Illustration" class="doctor-illustration">
      
      <p class="mt-4">
        Pilih dari ratusan dokter berpengalaman dan chat online sekarang.
        <br> Dapatkan konsultasi praktis di mana saja, kapan saja!
      </p>
      <h5 class="mt-4">Mengapa Chat Dengan Dokter Kita</h5>
      <ul style="padding-left: 0px;">
        <li><img src="http://localhost:3001/gambar/img.png" class="icon-list"> Satu aplikasi untuk berbagai kebutuhan – periksa dokter, tes lab hingga penebusan obat.</li>
        <li><img src="http://localhost:3001/gambar/img2.png" class="icon-list"> Dapatkan rujukan ke pemeriksaan offline di RS atau pemeriksaan diagnostik jika diperlukan.</li>
        <li><img src="http://localhost:3001/gambar/img3.png" class="icon-list"> Dapat diintegrasikan dengan asuransimu agar kebutuhan kesehatan online terjamin asuransi.</li>
        
      </ul>
    </div>

    <!-- Kolom Kanan: Badge Kemenkes & Rekomendasi Dokter -->
    <div class="col-lg-5">
      <div class="text-end mb-3">
        <!-- Ganti path badge Kemenkes sesuai kebutuhan -->
        <img src="http://localhost:3001/gambar/kemen.png" alt="Dibina oleh Kemenkes" class="kemenkes-badge">
      </div>
      
      <!-- Search Box -->
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Cari dokter..."></input>
      </div>
      
      <div class="card p-3 card-doctor">
        <h5 class="fw-bold mb-3">Rekomendasi Dokter</h5>
        <div class="d-flex align-items-center mb-3">
          <!-- Ganti path foto dokter sesuai kebutuhan -->
          <img src="http://localhost:3001/gambar/dr-winny.jpg" alt="Dr. Winny Budiharto" class="me-3">
          <div>
            <h6 class="mb-0">Dr. Winny Budiharto</h6>
            <span class="text-muted">Dokter Umum</span>
          </div>
        </div>
        <p class="mb-2 text-muted">Konsultasi online dengan dokter siaga kami</p>
        <p class="fw-bold mb-3">Rp 49.000</p>
        <div class="d-flex justify-content-end">
        <a href="chat" class="btn btn-chat">Chat</a>
       </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
