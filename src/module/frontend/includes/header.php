<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DokterKita</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
  <!-- Style Tambahan (Opsional) -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .navbar-brand img {
      max-height: 50px; /* Atur tinggi logo sesuai kebutuhan */
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
  <!-- Header / Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand me-3" href="#">
        <img src="http://localhost:3001/gambar/logo.png" alt="DokterKita">
      </a>
      
      <!-- Toggler (Mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDokterKita" aria-controls="navbarDokterKita" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navbarDokterKita">
        <ul class="navbar-nav">
          <li class="nav-item me-3">
            <a class="nav-link" href="home">Beranda</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="chat">Chat</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="layananchat">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Riwayat</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Header -->
