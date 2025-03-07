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
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 0;
        }
        .hero-text {
            max-width: 45%;
        }
        .hero-text h1 {
            font-weight: bold;
            color: #1d1d1d;
        }
        .hero-text p {
            color: #666;
        }
        .btn-custom {
            background-color: #004F53;
            color: white;
            border-radius: 50px;
            padding: 10px 20px;
        }
        .btn-custom:hover {
            background-color: #004F53;
        }
        .hero-image {
            text-align: right;
            flex-grow: 1;
        }
        .hero-image img {
            max-width: 100%;
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
    </style>
</head>
<body>
    <nav class="navbar navbar-light px-5">
        <a class="navbar-brand mt-3 ms-4" href="#">
            <img src="http://localhost:3001/gambar/logo.png" alt="DokterKita" height="40">
        </a>
    </nav>

    <div class="container hero-section">
        <div class="row align-items-center">
            <div class="col-md-5 hero-text">
                <small class="text-success">Selamat Datang Di Website DokterKita</small>
                <h1 class="mt-3">Tidak ada yang lebih penting dari tubuhmu</h1>
                <p class="mt-3">Kami akan memberikan Anda layanan perawatan medis yang tepat dengan biaya yang wajar melalui dokter spesialis.</p>
                <a href="login1" class="btn btn-custom mt-3">Buat Akun / Login <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-md-7 hero-image">
                <img src="http://localhost:3001/gambar/landing-page.png" alt="DokterKita" class="img-fluid">
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center">
                    <img src="http://localhost:3001/gambar/logo-white.png" alt="DokterKita" height="50">
                </div>
                <div class="col-md-3 d-flex flex-column mt-5">
                    <strong>Site Map</strong>
                    <ul class="list-unstyled">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3 d-flex flex-column" style="margin-top: 70px;">
                    <strong>Karir</strong>
                    <ul class="list-unstyled">
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <strong>Beranda</strong>
                    <p>Kontak <br>Tentang Kami</p>
                    <hr>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#"><i class="fab fa-threads"></i> Threads</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>