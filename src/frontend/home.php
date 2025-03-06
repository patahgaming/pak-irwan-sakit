<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DokterKita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        .hero {
            background-color: #EAF3FF;
            padding: 50px 0;
            text-align: center;
        }
        .feature {
            text-align: center;
            padding: 30px;
        }
        .feature img {
            width: 50px;
        }
        .footer {
            background-color: #004F53;
            color: white;
            padding: 30px 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .footer .social-icons a {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .footer .social-icons i {
            font-size: 1.5rem;
        }
        .custom-img {
            margin-left: 50px; /* Atur sesuai kebutuhan */
        }

    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
    <section class="hero">
    <div class="container d-flex align-items-center">
        <div class="row w-100 align-items-center">
            <!-- Teks di sebelah kiri -->
            <div class="col-md-6 text-md-start text-center">
                <h1>Solusi Kesehatan Terbaik Di Dua Belas</h1>
                <p>Chat dokter, kunjungi rumah sakit, beli obat, dan update informasi seputar kesehatan, semua bisa di DokterKita!</p>
                <div class="d-flex justify-content-md-start justify-content-center gap-3">
                        <a href="chtdgndokter" class="btn btn-primary">Chat Dengan Dokter</a>
                        <a href="janji_temu" class="btn btn-outline-primary">Buat Janji Temu</a>
                </div>
            </div>

            <!-- Gambar di sebelah kanan -->
            <div class="col-md-6 text-center">
                <img src="img/home.png" alt="Dokter Online" class="img-fluid" style="max-width: 100%;">
            </div>
          </div>
        </div>
    </section>


    <section class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Semua Kebutuhan Kesehatanmu dalam Satu Aplikasi</h2>
                <p>Mulai dari konsultasi dengan dokter umum & spesialis, beli obat & vitamin online, medical check-up, hingga janji rumah sakit.</p>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/home2.png" alt="Obat" class="img-fluid rounded custom-img">
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>