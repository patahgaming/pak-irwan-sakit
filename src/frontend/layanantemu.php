<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dokterkita</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }
        .content {
            padding: 2rem;
        }
        .service-container {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .service {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .service img {
            height: 50px;
            margin-right: 10px;
        }
        .service:hover {
            color: #007bff;
        }
        .description ul {
            list-style: none; /* Menghilangkan bullet list */
            padding-left: 20px;
        }
        .description ul li {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        .description ul li i {
            color: #4a4a4a;
            margin-right: 10px;
        }
        .phone-image {
            text-align: center;
            display: flex;
            align-items: center; /* Membuat gambar HP sejajar vertikal */
            justify-content: center; /* Membuat gambar HP sejajar horizontal */
        }
        .phone-image img {
            max-width: 100%; /* Sesuaikan ukuran gambar */
            height: auto;
        }
        .info-box {
            background-color: #ffffff;
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 1rem;
            height: 100%; /* Memastikan chat box memiliki tinggi yang sama */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Membuat konten di dalam chat box sejajar */
        }
        h1 {
            margin-bottom: 30px; /* Tambah jarak vertikal */
        }
        .service-container {
            margin-top: 20px; /* Geser ikon layanan ke bawah */
        }
        .align-items-center {
            display: flex;
            align-items: center; /* Memastikan elemen sejajar vertikal */
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="content container">
        <h1>🌟 Layanan Kesehatan Terlengkap</h1>
        <div class="service-container">
            <a href="layananchat" class="service">
                <img src="http://localhost/fedokterkita/img/cht.png" alt="Chat Dengan Dokter"/>
                <span>Chat Dengan Dokter</span>
            </a>
            <a href="layanantemu" class="service">
                <img src="http://localhost/fedokterkita/img/lynn.png" alt="Buat Janji Temu"/>
                <span>Buat Janji Temu</span>
            </a>
        </div>
        <hr/>
        <div class="row align-items-center"> <!-- Tambahkan class align-items-center -->
            <div class="col-md-6">
                <h2>Buat Janji Temu</h2>
                <p>Reservasi slot di Rumah Sakit terdekat untuk konsultasi dokter umum atau dokter spesialis, tes lab, vaksinasi, dan layanan medis lainnya.</p>
                <ul class="description" style="list-style: none; padding-left: 0.5px;">
                    <li><i class="fas fa-check"></i> Mitra kesehatan tepercaya</li>
                    <li><i class="fas fa-check"></i> Katalog lengkap & informatif</li>
                    <li><i class="fas fa-check"></i> pesan & bayar dengan mudah</li>
                    <li><i class="fas fa-check"></i> Registrasi kilat</li>
                </ul>
            </div>
            <div class="col-md-3 phone-image">
                <img src="http://localhost/fedokterkita/img/hp2.png" alt="Phone showing chat with doctor app"/>
            </div>
            <div class="col-md-3">
                <div class="info-box">
                    <h3>Mitra kesehatan tepercaya</h3>
                    <p>Buat janji dengan dokter umum, dokter spesialis, dan mitra RS tersertifikasi. Bebas antre, langsung di aplikasi.</p>
                    <button class="btn btn-dark">Buat janji temu</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>